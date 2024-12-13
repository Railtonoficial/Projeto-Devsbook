FROM php:8.0-apache

# Instalar a extensão GD e outras dependências necessárias
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Instalar o driver PDO para MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Habilitar o mod_rewrite do Apache
RUN a2enmod rewrite

# Copiar o código fonte para o diretório do Apache
COPY . /var/www/html/

# Definir o diretório de trabalho
WORKDIR /var/www/html/

# Configurar permissões
RUN chown -R www-data:www-data /var/www/html/
