#pongo que imagen voy a usar
FROM php:8.2-fpm-alpine

#se instala todo lo necesario para php
RUN docker-php-ext-install pdo pdo_mysql mysqli

#instalamos el Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#decimos donde vamso a trabajar
WORKDIR /var/www/html

#copio todo el codigo generado
COPY src/ /var/www/html/

#cambio los permisos
RUN chown -R www-data:www-data /var/www/html

#expongo el puerto de PHP-FPM
EXPOSE 9000

#comando para iniciar PHP-FPM
CMD ["php-fpm"]
