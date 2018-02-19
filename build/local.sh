echo "Install -> api.rossedlin.local"

#Path
cd /var/www/.tmp

#Cleanup
rm -R -f api.rossedlin.com

#Git
git clone git@bitbucket.org:rossedlin/api.rossedlin.com.git

if [ -d /var/www/.tmp/api.rossedlin.com ]; then

    #Composer
    cd /var/www/.tmp/api.rossedlin.com
    composer install

    #Environment File
    cp /var/www/api.rossedlin.com/.env /var/www/.tmp/api.rossedlin.com/.env

    #Folders
    cd /var/www/
    rm -R -f api.rossedlin.com
    mv .tmp/api.rossedlin.com api.rossedlin.com

    #Public
#    cd ~/rossedlin.com/laravel-dev
#    cp ./build/dev/robots.txt ./public/robots.txt
#    cp ./build/dev/.htaccess ./public/.htaccess

    #Permissions
    chmod 777 -R /var/www/api.rossedlin.com

fi