# Utiliza a imagem base do PHP com Apache
FROM php:8.1-apache

# Argumentos definidos no docker-compose.yml
ARG user
ARG uid

# Instala as dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    libzip-dev \
    zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instala as extensões do PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configura o DocumentRoot para a pasta 'public' do Laravel
RUN sed -i -e 's,/var/www/html,/var/www/html/public,g' /etc/apache2/sites-available/000-default.conf

# Ativa o módulo rewrite do Apache
RUN a2enmod rewrite

# Copia os arquivos do aplicativo para o container
COPY . /var/www/html

# Define as permissões corretas
RUN chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html

# Define o diretório de trabalho
WORKDIR /var/www/html

# Muda para o usuário criado
USER $user
