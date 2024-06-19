# Use a imagem base php:8.1-fpm
FROM php:8.2-apache

# Atualize o sistema e instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Instale o Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Crie um diretório para o seu aplicativo Laravel e defina-o como o diretório de trabalho
WORKDIR /var/www/html/