# ArtisanAutoSwag

This package scans your laravel project's routes and auto generates a Swagger 3.0 documentation for you. 
If you inject Form Request classes in your controller's actions as request validation, it will also generate the parameters for each request that has them. 
It will take into account wether the request is a GET/HEAD/DELETE or a POST/PUT/PATCH request and make its best guess as to the type of parameter object it should generate. It will also generate the path parameters if you route contains them.

## Installation

Before use this package please install https://github.com/DarkaOnLine/L5-Swagger swagger for laravel :)

The package can easily be installed by running `composer require hovsepyan/lara-autoswag` in your project's root folder.

If you are running a version of Laravel < 5.5 also make sure you add `Hovsepyan\LaravelSwagger\SwaggerServiceProvider::class` to the `providers` array in `config/app.php`.

This will register the artisan command that will be available to you.

You can also override the default config provided by the application by running `php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"` in your projects root and change the configuration in the new `config/laravel-swagger.php` file created.

## Usage

Generating the swagger documentation is easy, simply run `php artisan laravel-swagger:generate` in your project root. Keep in mind the command will simply print out the output in your console. If you want the docs saved in a file you can reroute the output like so: `php artisan laravel-swagger:generate > public/docs/swagger.json`

If you wish to generate docs for a subset of your routes, you can pass a filter using `--filter`, for example: `php artisan laravel-swagger:generate --filter="/api"`
