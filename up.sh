#!/usr/bin/env bash

docker-compose down
docker pull rossedlin/apache-php:7.2
docker-compose up $1