# Project Setup Instructions

Follow these steps to set up and run the Laravel project on your local machine.

## Clone the Repository

Clone the repository using Git:

```bash
git clone https://github.com/larainfo1050/education-portal.git
```
### Install PHP dependencies
```bash
composer install
```
### Generate the application key
```bash
php artisan key:generate
```

#### .Configure Environment Settings
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
### Run Migrations
```bash
php artisan migrate
```
### Seed the Database
```bash
php artisan db:seed
```
##### or use
```bash
 php artisan migrate:fresh --seed
```