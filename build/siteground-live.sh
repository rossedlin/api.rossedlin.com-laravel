#!/usr/bin/env bash

echo "Install -> api.rossedlin.com"

#Cleanup
cd ~/rossedlin.com/
rm -R -f old-laravel-api
rm -R -f api.rossedlin.com-laravel

#Git
git clone -b master https://rossedlin@bitbucket.org/rossedlin/api.rossedlin.com.git api.rossedlin.com-laravel

if [ -d ~/rossedlin.com/api.rossedlin.com-laravel ]; then

    #Permissions
    chmod 755 -R ~/rossedlin.com/api.rossedlin.com-laravel

    #Composer
    cd ~/rossedlin.com/api.rossedlin.com-laravel
    composer install

    #Environment File
    cd ~/rossedlin.com/
    cp ~/rossedlin.com/laravel-api/.env ~/rossedlin.com/api.rossedlin.com-laravel/.env

    #Folders
    cd ~/rossedlin.com
    mv laravel-api old-laravel-api
    mv api.rossedlin.com-laravel laravel-api

    #Public
    cd ~/rossedlin.com/laravel-api
    cp ./build/live/robots.txt ./public/robots.txt
    cp ./build/live/.htaccess ./public/.htaccess
#
    #Permissions
    cd ~/rossedlin.com
    chmod 755 -R ~/rossedlin.com/laravel-api

fi