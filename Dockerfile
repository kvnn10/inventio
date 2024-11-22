# Usa una imagen base de PHP con servidor web
FROM php:7.1-apache

# Copia los archivos de tu proyecto al directorio raíz del servidor web
COPY . /var/www/html/

# Instala extensiones necesarias, por ejemplo para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql
