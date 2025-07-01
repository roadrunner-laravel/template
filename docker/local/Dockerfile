FROM ubuntu:24.04

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV UID=1001
ENV GID=1001
ENV WORKDIR=/var/www/html/app
ENV PHP_VERSION="8.4"

RUN apt update && apt-get install -y \
    libonig-dev  \
    libbz2-dev  \
    libmcrypt-dev  \
    zlib1g-dev  \
    libpng-dev  \
    libxml2-dev  \
    libjpeg-dev \
    libicu-dev \
    libfreetype6-dev \
    libcurl4-openssl-dev \
    libpq-dev \
    libzip-dev \
    unzip \
    p7zip-full \
    postgresql-client \
    software-properties-common


RUN add-apt-repository ppa:ondrej/php && \
    apt update && \
    apt-get install -y php${PHP_VERSION}-cli \
    php${PHP_VERSION}-mbstring \
    php${PHP_VERSION}-bcmath \
    php${PHP_VERSION}-bz2 \
    php${PHP_VERSION}-calendar \
    php${PHP_VERSION}-exif \
    php${PHP_VERSION}-gd \
    php${PHP_VERSION}-ctype \
    php${PHP_VERSION}-curl \
    php${PHP_VERSION}-dom \
    php${PHP_VERSION}-fileinfo \
    php${PHP_VERSION}-pdo \
    php${PHP_VERSION}-xml \
    php${PHP_VERSION}-sockets \
    php${PHP_VERSION}-pgsql \
    php${PHP_VERSION}-mysql \
    php${PHP_VERSION}-zip \
    php${PHP_VERSION}-intl \
    php${PHP_VERSION}-soap \
    php${PHP_VERSION}-grpc \
    php${PHP_VERSION}-protobuf \
    php${PHP_VERSION}-redis \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html/app

ENTRYPOINT ["/opt/one2work/entrypoint.sh"]