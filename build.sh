#!/bin/bash
sed 's/\("name": "magento\/magento2ce",\)/\1"repositories": {"astorm\/pestle": {"type": "git","url": "git@github.com:astorm\/pestle.git"}},/' magento2/composer.json > magento2/composer.json.notatomic
mv magento2/composer.json.notatomic magento2/composer.json


