#!/bin/bash

echo "Stalling for redis & mysql"
while true; do
    nc -q 1 $REDIS_1_PORT_6379_TCP_ADDR 6379 >/dev/null && break
done
while true; do
    nc -q 1 $DB_1_PORT_3306_TCP_ADDR 3306 >/dev/null && break
done
echo "Starting web container"
cd /laravel
php artisan migrate --force

if env | grep -q ^DEV=; then
  echo "Seeding database..."
  php artisan db:seed
fi
echo "Starting service hhvm"
service hhvm start &
echo "Starting service nginx"
service nginx start
