echo "Install -> api.rossedlin.local"

#Path
cd /var/www/.tmp

#Cleanup
rm -R -f api.rossedlin.local

#Git
git clone git@bitbucket.org:rossedlin/api.rossedlin.com.git api.rossedlin.local

if [ -d /var/www/.tmp/api.rossedlin.local ]; then

    #Composer
    cd /var/www/.tmp/api.rossedlin.local
    composer install

    #Environment File
    cp /var/www/api.rossedlin.local/.env /var/www/.tmp/api.rossedlin.local/.env

    #Folders
    cd /var/www/
    rm -R -f api.rossedlin.local
    mv .tmp/api.rossedlin.local api.rossedlin.local

    #Public
#    cd ~/rossedlin.com/laravel-dev
#    cp ./build/dev/robots.txt ./public/robots.txt
#    cp ./build/dev/.htaccess ./public/.htaccess

    #Permissions
    chmod 777 -R /var/www/api.rossedlin.local

fi