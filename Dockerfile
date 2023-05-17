# Set the base image to use for containers
FROM php:7.4-fpm

# Install dependencies needed for Symfony and the application
RUN apt-get update && \
    apt-get install -y git unzip libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql && \
    pecl install apcu && \
    docker-php-ext-enable apcu && \
    rm -rf /var/lib/apt/lists/*

# Set the working directory
WORKDIR /var/www/html

# Copy the application files into the container
COPY . .

# Install the Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install --no-dev --no-scripts --optimize-autoloader

# Expose the port the application will be running on
EXPOSE 8000

# Start the application
CMD ["php", "bin/console", "server:run", "0.0.0.0:8000"]
