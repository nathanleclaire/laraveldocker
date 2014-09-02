from ubuntu:14.04

# install hhvm
run apt-get update && \
    apt-get install -y wget curl nginx git-core unzip build-essential python-software-properties
run wget -O - http://dl.hhvm.com/conf/hhvm.gpg.key | apt-key add -
run echo deb http://dl.hhvm.com/ubuntu trusty main | tee /etc/apt/sources.list.d/hhvm.list
run apt-get update
run apt-get install -y hhvm

# configure nginx to talk to hhvm
run /usr/share/hhvm/install_fastcgi.sh
run update-rc.d hhvm defaults

# install composer
run curl -sS https://getcomposer.org/installer | php
run mv composer.phar /usr/local/bin/composer

add entrypoint.sh /entrypoint.sh
run chmod +x /entrypoint.sh
add nginx/lightningfastdockerdeploys.com /etc/nginx/sites-available/laravel
run rm /etc/nginx/sites-enabled/default
run ln -s /etc/nginx/sites-available/laravel /etc/nginx/sites-enabled/laravel
run echo "daemon off;" >>/etc/nginx/nginx.conf

add laravel /laravel

expose 80

cmd ["/entrypoint.sh"]
