#!/bin/bash

echo "Stalling for DB"
sleep 10
echo "Starting web container"
cd /laravel
php artisan migrate

if [ -z "$DEV" ]; then
  php artisan db:seed
fi
echo "Starting service hhvm"
service hhvm start &
echo "Starting service nginx"
service nginx start
