#!/bin/bash

set -e  # Останавливаем скрипт при ошибке

# Устанавливаем зависимости
composer install

# Устанавливаем Roadrunner
if [ ! -f ./rr ]; then
    ./vendor/bin/rr get-binary
    chmod +x /var/www/html/app/rr
fi

if [ ! -f ./.rr.yaml ]; then
    cp .rr.yaml.example .rr.yaml
fi


# Генерируем новый ключ приложения
php artisan key:generate

# Запускаем миграции
php artisan migrate

# Запускаем http сервер
#php artisan serve --port=8001 --host=0.0.0.0

# Запускаем grpc Roadrunner
./rr serve -c .rr.yaml

# Сообщение об успешном завершении
echo "Setup completed successfully!"
