FROM php:8.4-apache

# 1. Install alat pendukung (zip, unzip, git) & ekstensi PHP
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql

# 2. Aktifkan mod_rewrite Apache agar routing URL Laravel dan Web bekerja
RUN a2enmod rewrite

# 3. Ubah document root Apache agar mengarah ke folder public Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 4. Copy Composer resmi ke dalam container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Set working directory & copy seluruh file proyek
WORKDIR /var/www/html
COPY . /var/www/html

# 6. Jalankan composer install untuk membuat folder vendor secara otomatis
RUN composer install --no-dev --optimize-autoloader --no-interaction

# 7. Hak akses folder storage dan cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

COPY start.sh /start.sh
RUN chmod +x /start.sh
CMD ["/start.sh"]

EXPOSE 80