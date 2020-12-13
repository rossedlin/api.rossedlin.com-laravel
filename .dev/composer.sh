#!/usr/bin/env bash

docker run -v $PWD:/var/www -vapi_composer:/root/.composer rossedlin/php-apache:7.3-dev composer $1 $2