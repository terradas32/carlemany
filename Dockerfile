# Usa una imagen base de PHP con Apache y MySQL
FROM php:8.0-apache

# Instala extensiones necesarias
RUN docker-php-ext-install mysqli

# Copia el contenido de src/ al directorio del servidor web en el contenedor
COPY src/ /var/www/html/

# Exponer el puerto 80
EXPOSE 80
