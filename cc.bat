rmdir /s /q app\cache\dev
rmdir /s /q app\cache\prod
rem php app/console cache:clear
rem php app/console assets:install web --symlink
php app/console assets:install web