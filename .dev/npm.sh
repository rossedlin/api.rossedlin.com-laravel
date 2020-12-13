#!/usr/bin/env bash

#
# NPM
#
docker run -v $PWD:/var/www rossedlin/centos-apache-php:7.3-dev npm $1 $2
