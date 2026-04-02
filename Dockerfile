FROM php:8.2-apache

# ext-intl is required by codeigniter4/framework (Composer + runtime). Use
# mlocati/install-php-extensions for a single, well-tested intl install path.
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions \
    && IPE_PROCESSOR_COUNT=1 install-php-extensions intl zip

RUN a2enmod rewrite

# Quiet "Could not reliably determine the server's fully qualified domain name"
RUN printf '\nServerName localhost\n' >> /etc/apache2/apache2.conf

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --optimize-autoloader --no-scripts

COPY . .
RUN composer dump-autoload --optimize --no-dev

# CodeIgniter front controller lives in public/
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
# Only rewrite site vhosts; avoid global /var/www/ replaces (breaks /var/www/html → …/public).
RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf

RUN printf '%s\n' \
    '<Directory /var/www/html/public>' \
    '    Options FollowSymLinks' \
    '    AllowOverride All' \
    '    Require all granted' \
    '</Directory>' \
    > /etc/apache2/conf-available/ci4-public.conf \
    && a2enconf ci4-public

RUN chown -R www-data:www-data /var/www/html/writable

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
