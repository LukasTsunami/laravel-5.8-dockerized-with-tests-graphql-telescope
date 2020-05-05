<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## What is this project?

A Laravel 5.8 application, configured with postgresql,
adminer, using ngnix server with php-fpm-7.3

## Which are the test tools used here?

Khalan Framework and Phony for mocking

## Which graphql server is configured here?

The [lighthouse graphql](https://lighthouse-php.com/) server

## How to configure schema?

Change graphql/schema.graphql file

## How to use?

Copy `.env.example` to `.env` and execute the `docker-compose up -d` command

Execite the following command in order to create a new key `docker-compose exec "php-fpm" php artisan key:generate`

Execute the following command in order to make the database work `docker-compose exec php-fpm php artisan migrate` to run the migrations

## Notes

-   If you want to use pgAdmin, please uncomment it from docker-compose.yml

## I used things from these open source contributors

A special thanks for all of them, 'cause they did an
awesome work (I just organized for my needs)

-   **[Laradock](https://laradock.io/)**
-   [Mahmoud Zalt](mailto:mahmoud@zalt.me)
-   [Patrick Artounian](mailto:partounian@gmail.com)
-   [Shao Yu Lung](mailto:bestlong168@gmail.com)

## Contributing

Thank you for considering contributing to this project.
Just open an issue or send me a pull request.
I'll be happy with your contribuition.

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send-me an email [lucascaponidasilva@gmail.com](mailto:lucascaponidasilva@gmail.com).

## License

This project follows the same license as Laravel Framework: [MIT license](https://opensource.org/licenses/MIT).
