#!/usr/bin/env bash

php artisan down

git add .
git reset HEAD --hard
git remote prune origin
git fetch
git pull

composer install

php artisan migrate

composer dump-autoload
php artisan cache:clear
php artisan config:clear
php artisan view:clear

#php artisan log:clear
php artisan up