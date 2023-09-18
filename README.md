# Laravel Livewire Base

This is a base Laravel application with Livewire, Bootstrap, and Webpack already configured. 
It is intended to be used as a starting point for new Laravel applications.

## Installation

Please check the official Laravel installation guide for server requirements before you start.  [Official Documentation](https://laravel.com/docs/10.x/installation)

#### Clone the Repository

    git clone https://github.com/samharvey44/livewire-base.git

#### Switch to the Repo Folder

    cd livewire-base

#### Install Dependencies with Composer

    composer install

#### Copy the .env.example File to .env and Populate With Your Values

    cp .env.example .env

#### Generate the Application Key

    php artisan key:generate

#### Run Database Migrations

    php artisan migrate

#### Start a Local Development Server

    php artisan serve

After following these steps, you should now have the application running at http://localhost:8000.

## Database Seeding

You can quickly populate your database with test / fake values by running:

    php artisan db:seed

If you wish to wipe your database and start again, run:

    php artisan migrate:fresh

## Testing

To run the application's PHPUnit tests, you can simply run:

    php artisan test
