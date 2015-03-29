#!/bin/bash
cd /app
composer install --prefer-dist --no-interaction
mkdir -p build/behat
mkdir -p build/phpspec
mkdir -p build/logs
./bin/phpspec run -n
./bin/behat -o build/behat/behat.txt -f pretty -n
./bin/phploc --exclude ./spec --log-csv build/logs/phploc.csv src