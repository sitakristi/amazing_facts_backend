#!/bin/sh
mkdir -p storage/logs
touch storage/logs/laravel.log
chown -R www-data:www-data storage bootstrap/cache

# Jalankan migrasi (membuat tabel sessions, cache, jobs, dll.)
php artisan migrate --force

# tampilkan log Laravel di tab Logs Render
tail -F storage/logs/laravel.log &

apache2-foreground