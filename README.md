Clone the project from git repository
git clone ...

Install dependencies
composer install

Copy ".env.example" to ".env" file
cp .env.example .env

Create a database named DB_DATABASE in ".env" file
create database laravel

Generate new application security token
php artisan key:generate

Run database migrations
php artisan migrate

Seed the database
php artisan db:seed
