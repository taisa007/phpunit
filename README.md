# phpunit

sudo curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin

composer.phar install

./vendor/bin/phpunit --bootstrap bootstrap.php test/Sample.php
