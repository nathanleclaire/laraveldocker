#!/bin/bash

cd /laravel
php artisan migrate

if [ -z "$DEV" ]; then
  php artisan db:seed
fi
echo "Starting service hhvm"
service hhvm start &
echo "Starting service nginx"
service nginx start
