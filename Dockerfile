FROM php:8.2-apache

# Enable mod_rewrite for CakePHP
RUN a2enmod rewrite

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    zip \
    libicu-dev \
    libonig-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy everything
COPY . .

# Set permissions (optional, adjust if needed)
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Set document root to CakePHP's webroot
ENV APACHE_DOCUMENT_ROOT /var/www/html/webroot

# Update Apache config
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
    sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

EXPOSE 80
