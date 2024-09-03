# Usa la imagen oficial de WordPress
FROM wordpress:latest

# Configura el directorio de trabajo
WORKDIR /var/www/html

COPY wordpress/ /var/www/html/