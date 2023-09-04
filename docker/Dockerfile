# Dockerfile.php-fpm
FROM php:8.0-fpm

# Instale as extensões PHP necessárias e outras dependências
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql gd zip

# Copie o código PHP para o contêiner
COPY . /var/www/html/
