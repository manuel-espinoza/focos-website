# Usa la imagen oficial de WordPress
FROM wordpress:latest

# Configura el directorio de trabajo
WORKDIR /var/www/html

COPY wp-config-docker.php /var/www/html/

COPY wp-config.php /var/www/html/

COPY focosdesign/ ./wp-content/themes/focosdesign/