
# Laravel + Adminator Boilerplate

[![Laravel](https://img.shields.io/badge/Laravel-11.x-green?logo=Laravel&style=flat-square)](https://laravel.com/)

This is a starter laravel 11 project that utilize [Adminator admin template](https://github.com/puikinsh/Adminator-admin-dashboard) by [Colorlib](https://colorlib.com).

**This project is still a work-in-progress (read to-do below).**

## Getting Started
### Prerequisites
- Git
- PHP >= 8.2
- Composer
- Databases (MySQL/MariaDB or PostgreSQL)

### Installation
1. Clone repostiory 
    ```
    git clone https://github.com/gemul/laravel-adminator-starter
    ```
2. Install composer dependencies
    ```
    cd laravel-adminator-starter
    composer install
    ```
3. Configure the ```.env``` file
4. Run the migration and seeding
    ``` 
    php artisan migrate --seed
    ```
5. Link the storage to public folder (for user avatar)
    ```
    php artisan storage:link
    ```
6. Run the project
    ```
    php artisan serve
    ```
7. Access ```http://localhost:8000``` in web browser

## Features
### Ready-to-use adminator template
I’ve set up the Adminator template and divided it into different parts such as the top section, bottom section, and main content area, so there’s no need for you to do it.
### Authentication scaffolding
In this starter kit, user authentication features are already set up, including registration, login, logout, password reset, password change, user avatars, and email verification.
### ULID based primary key for future-proofing
For this starter project, it’s it is advised (not enforced) to use ULID as the main identifier. One of the reason is to help ensure that the client-side apps work well with the API in the future because it doesn't rely on incremental integer, so that the client side app can safely generate an ID without any conflict with server-generated ID. I've already set up the basic tables in the migrations to use ulid. See [ULID](https://github.com/ulid/spec).
### JS XHR / Ajax form submission
We recommend using XHR/Ajax instead of regular HTTP form submission. This allows for better control of requests, such as displaying loading animations or handling server responses like showing errors or validation messages. We've provided an example for the login page using vanilla JavaScript XHR, but you can also use XHR libraries like jQuery or axios if you prefer.

## To-do⌛
- Authentication boilerplate 
- CRUD Boilerplate
- User management and access control

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Adminator is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the final products. But you always need to state that Colorlib is the original author of this template.