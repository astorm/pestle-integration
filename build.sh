#!/bin/bash
sed 's/\("require": {\)/\1"pulsestorm\/pestle":"dev-master",/' composer.json
composer install
curl -LO http://pestle.pulsestorm.net/pestle.phar
