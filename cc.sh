#!/bin/bash
php app/console cache:clear
#rm -rf app/cache/dev
#rm -rf app/cache/prod
php app/console assets:install web --symlink