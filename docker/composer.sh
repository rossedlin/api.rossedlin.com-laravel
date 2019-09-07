#!/usr/bin/env bash

docker run -v $PWD:/var/www -vapi_composer:/root/.composer rossedlin/centos-apache-php:7.2 composer $1 $2