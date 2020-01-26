# Simple Shapes Application

This is the simple shapes application built with Laravel framework.

## Installation

### 1. Copy environment file

Copy source of .env.example to newly created .env file. Prepare url and database configuration settings.

    cp .env.example .env

### 2. Generate application key

    php artisan key:generate

### 3. Run composer install

    composer install

## Tests

Run PHP unit tests with the following command:

    ./vendor/bin/phpunit

## Usage

These are the list of routes for both triangle and circle for easy to use shapes calculations:

    [GET] /triangle/{a}/{b}/{c}
    [GET] /circle/{radius}
