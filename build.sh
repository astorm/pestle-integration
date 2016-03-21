#!/bin/bash
sed 's/\("require": {\)/\1"pulsestorm\/pestle":"dev-master",/' magento2/composer.json > magento2/composer.json