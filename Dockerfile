# Build
#   docker build -f Dockerfile --build-arg BUILD_DATE=$(date -u +'%Y-%m-%dT%H:%M:%SZ') -t luri/php-apache .
# Build multi-arch Docker image
#   docker buildx build --platform linux/amd64,linux/arm64 -t luri/php-apache:multiarch .

FROM php:8.2-fpm

# install requirement file
RUN apt-get update && apt-get install -y nginx nano git curl binutils wget zip unzip && \
    apt-get install -y build-essential libmagickwand-dev && \
    pecl install imagick && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd &&  \
    docker-php-ext-install pdo pdo_mysql mysqli && \
    docker-php-ext-enable pdo_mysql && \
    docker-php-ext-enable imagick

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer --version

# Cleanup
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

COPY files/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY files/index.php /var/www/html/
COPY files/index.php /app/
COPY files/info.php /app/

# Set working directory
WORKDIR /app

# Expose port (opsional di Dockerfile, port binding akan diatur di compose)
EXPOSE 8080

# Start PHP-FPM dan Nginx
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
