#!/usr/bin/env bash

docker-compose down
docker-compose up -d

docker exec api_web_1 php artisan route:clear
docker exec api_web_1 php artisan config:clear
docker exec api_web_1 php artisan cache:clear
