@echo off
setlocal enabledelayedexpansion

call composer install
call npm install

call npm run build

call cp ./.env.example ./.env
call php artisan key:generate

call echo Create the database before put it in here
call set /p dbName="Database Name: "
call sed -i -e 's/DATABASE=.*/DATABASE=%dbName%/g' .env

call php artisan migrate:fresh --seed
call php artisan laravolt:indonesia:seed

call php artisan shield:super-admin
