
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
4. Run the migration
    ``` 
    php artisan migrate
    ```
5. Run the project
    ```
    php artisan serve
    ```
6. Access ```http://localhost:8000``` in web browser

## To-do⌛
- Authentication boilerplate 
- CRUD Boilerplate
- User management and access control

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Adminator is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the final products. But you always need to state that Colorlib is the original author of this template.