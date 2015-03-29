#!/bin/bash
cd /app
composer install --prefer-dist --no-interaction
mkdir -p build/behat
mkdir -p build/phpspec
mkdir -p build/logs
mkdir -p build/pdepend
./bin/phpspec run -n
./bin/behat -o build/behat/behat.txt -f pretty -n
./bin/phploc --exclude ./spec,./features --log-csv build/logs/phploc.csv src
./bin/pdepend --ignore=./spec,$./docs,./features --jdepend-xml=./build/logs/jdepend.xml --jdepend-chart=./build/pdepend/dependencies.svg --overview-pyramid=./build/pdepend/overview-pyramid.svg src
./bin/phpmd src xml codesize --reportfile ./build/logs/pmd.xml --exclude ./spec,./features
./bin/phpcb --log ./build/logs --ignore=./spec --ignore=./features --source src  --output ./build/code-browser

