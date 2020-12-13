#!/usr/bin/env bash

#
# Composer
#
docker run -v $PWD:/var/www rossedlin/php-apache:7.3-dev rm -Rf vendor
docker run -v $PWD:/var/www -vapi_demo_composer:/root/.composer rossedlin/php-apache:7.3-dev composer install

#
# NPM
#
#docker run -v $PWD:/var/www rossedlin/php-apache:7.3-dev rm -Rf node_modules
#docker run -v $PWD:/var/www rossedlin/php-apache:7.3-dev npm install
#docker run -v $PWD:/var/www rossedlin/php-apache:7.3-dev npm run prod
