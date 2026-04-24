# Laravel Task Manager

A simple task management application built with Laravel.

## Features

- Create tasks with title, description, and status
- View all tasks in a list
- Edit existing tasks
- Delete tasks
- Status tracking (Pending/Completed)
- Timestamps for creation and updates

## Requirements

- PHP 8.1 or higher
- Composer
- SQLite (or MySQL)

## Installation

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure your database
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Run `php artisan serve`

## Deployment

This application is configured for deployment on Render with SQLite database.

For production, ensure the following:
- Set `APP_ENV=production`
- Set `APP_KEY` (generated)
- Database file `database/database.sqlite` is writable
- Run migrations on deploy if needed

## Usage

- Visit the home page to view and manage tasks
- Use the form to create new tasks
- Click Edit to modify tasks
- Click Delete to remove tasks

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
