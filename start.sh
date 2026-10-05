#!/bin/sh
mkdir -p storage/logs
touch storage/logs/laravel.log
chown -R www-data:www-data storage bootstrap/cache

# tampilkan log Laravel di tab Logs Render
tail -F storage/logs/laravel.log &

apache2-foreground