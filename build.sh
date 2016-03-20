#!/bin/bash
git clone git@github.com:magento/magento2.git
cd magento2
sed 's/\("require": {\)/\1"pulsestorm\/pestle":"dev-master",/' composer.json
composer install
curl -LO http://pestle.pulsestorm.net/pestle.phar
