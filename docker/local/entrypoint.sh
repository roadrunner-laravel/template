#!/bin/bash

set -e  # Останавливаем скрипт при ошибке

# Устанавливаем зависимости
composer install

# Устанавливаем Roadrunner
if [ ! -f ./rr ]; then
    ./vendor/bin/dload get
fi

if [ ! -f ./.rr.yaml ]; then
    cp .rr.yaml.example .rr.yaml
fi

if [ ! -f ./.env ]; then
    cp .env.example .env
fi


# Генерируем новый ключ приложения
php artisan key:generate

# Запускаем миграции
php artisan migrate

# Запускаем http сервер
#php artisan serve --port=8001 --host=0.0.0.0

# Запускаем grpc Roadrunner
./bin/rr serve -c .rr.yaml

# Сообщение об успешном завершении
echo "Setup completed successfully!"
