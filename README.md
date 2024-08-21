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
## Tools and Libraries Used

This project utilizes a variety of tools and libraries to enhance functionality and design:

- **Laravel**: The PHP framework used for building the web application.
- **Tailwind CSS**: A utility-first CSS framework for designing modern and responsive user interfaces.
- **Alpine.js**: A lightweight JavaScript framework for adding interactivity to HTML.
- **Livewire**: A Laravel library for building dynamic interfaces with minimal JavaScript, used here for datatables.
- **Flowbite**: A Tailwind CSS component library that provides pre-designed components and UI elements. [Visit Flowbite](https://flowbite.com/)
- **Laravel Livewire Tables**: A package for integrating tables into Livewire components. [Check out Laravel Livewire Tables](https://github.com/laravel-livewire/tables)
- **Heroicons**: A collection of free, high-quality SVG icons for use in your projects. [Explore Heroicons](https://heroicons.com/)
- **UnDraw**: A constantly updated collection of beautiful SVG images that you can use in your projects. [Visit UnDraw](https://undraw.co/)
- **Laravel Breeze**: A simple and minimalistic authentication system for Laravel, providing a starting point for building authentication features. [Learn more about Laravel Breeze](https://laravel.com/docs/10.x)

These tools and libraries are integrated into the project to streamline development and enhance the user experience.
