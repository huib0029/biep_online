# Laravel 5.3 & SB Admin v2

Schoone gerefactored versie van BIEPonline V1

# Model-View-Controller princiepe

We werken volgens het Model, View en controller principe, de basis van Laravel.

# Team BIEPonline 2:

## *Teun *Bart *Jordy *Jasper *Niels *Mike

# Installatie (optioneel, via Xampp werkt het ook)

* `git clone https://github.com/hectordolo/laravel-sbadmin.git 'PROJECT_DIRECTORY'`
* `cd 'PROJECT_DIRECTORY'`
* `composer install`
* `php artisan key:generate`
* Kopieer .env.example naar .env (rechtermuisknop, kopieren en plakken of crtl-c crtl-v)
* Wijzig het .env bestand (in de rootfolder, open met kladblok bijvoorbeeld)
    * wijzig `DB_DATABASE="JE DATABASE NAAM"`
    * wijzig `DB_USERNAME="JE DATABASE GEBRUIKERSNAAM"`
    * wijzig `DB_PASSWORD="JE DATABASE WACHTWOORD"`
* `php artisan migrate`
* `php artisan key:generate`
* `php artisan config:clear`
* `php artisan serve`
