<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravue Setup

Laravue was created by Laravel Framework, Vue JS, and Tymon JWT Auth package for handling API Token.

- First, clone this project from (https://github.com/anantasw/laravue.git).
- On your root project directory, run commands "composer install" and "npm install".
- Setup the .env file, make sure you set up the MySQL DATABASE credentials correctly with your local environment.
- Run these commands "php artisan migrate --seed" to migrate and seed database tables, "php artisan key:generate" if there's no APP_KEY on your .env file.
- Run this command "php artisan jwt:secret" to generate a JWT key.
- After that, you have to run "php artisan serve" to make the project live on your local.
- You can login with these credentials, Email : "abhisena@gmail.com", Password : "abhisena@gmail.com", or you can copy it from your local users table database.
- Voila, then you have logged in, and you can refresh the quotes and logout from the dashboard.


## Laravue Directory

- All Vue JS components located at resources/js.
- All API Controllers located at app/Http/Controllers/Api.
- All test features located at test/Feature.


## Laravue API Testing

In windows, you can run ".\vendor\bin\phpunit.bat" command from you root project directory.

