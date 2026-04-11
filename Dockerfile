#ES
#IMAGEN DOCKER DE MI FINTECH APP


# Fase 1: Construcción (Usamos Composer para instalar dependencias)
FROM composer:2 as builder
WORKDIR /app
COPY . .

# Instalamos sin dependencias de desarrollo para que la imagen sea ligera y segura
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Fase 2: Entorno de ejecución (Apache + PHP 8.3 para Drupal 11)
FROM php:8.3-apache

# Instalar extensiones de PHP necesarias para Drupal y OAuth2
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libzip-dev zip unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip opcache pdo_mysql

# Configurar Apache: Apuntar al directorio /web
ENV APACHE_DOCUMENT_ROOT /var/www/html/web
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN a2enmod rewrite

# Copiar el código desde la fase de construcción
COPY --from=builder /app /var/www/html

# --- BLOQUE DE SEGURIDAD FINTECH ---
# Crear la carpeta private para las llaves OAuth2
RUN mkdir -p /var/www/html/private \
    && chown -R www-data:www-data /var/www/html/private \
    && chmod 700 /var/www/html/private
# -----------------------------------

# Ajustar permisos de archivos de Drupal
RUN chown -R www-data:www-data /var/www/html/web/sites/default/files

USER www-data
