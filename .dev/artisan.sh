#!/usr/bin/env bash

#
# Composer
#
docker exec api_web_1 php artisan $1 $2
