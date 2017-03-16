# Laravel 5.3 & SB Admin v2

Schoone gerefactored versie van BIEPonline V1

# Model-View-Controller princiepe

We werken volgens het Model, View en controller principe, de basis van Laravel.

# Team het zinkende schip:

## *Teun *Bart *Jordy *Jasper *Niels *Mike

# Installatie (optioneel, via Xampp werkt het ook)

* `git clone https://github.com/hectordolo/laravel-sbadmin.git 'PROJECT_DIRECTORY'`
* `cd 'PROJECT_DIRECTORY'`
* `composer install`
* `php artisan key:generate`
* copy .env.example to .env
* edit .env
    * set `DB_DATABASE="YOUR DATABASE NAME"`
    * set `DB_USERNAME="YOUR DATABASE USERNAME"`
    * set `DB_PASSWORD="YOUR DATABASE PASSWORD"`
* `php artisan migrate`
* `php artisan key:generate`
* `php artisan config:clear`
* `php artisan serve`

