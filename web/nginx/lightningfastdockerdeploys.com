server {
    listen 80 default_server;

    root /laravel/public;
    index index.html index.htm index.php;

    server_name localhost;

    access_log /var/log/nginx/localhost.laravel-access.log;
    error_log  /var/log/nginx/locahost.laravel-error.log error;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { log_not_found off; access_log off; }
    location = /robots.txt  { log_not_found off; access_log off; }

    error_page 404 /index.php;      

    include hhvm.conf;  # The HHVM Magic Here

    # Deny .htaccess file access
    location ~ /\.ht {
        deny all;
    }
}
