<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About project

Laravel is a web application framewo).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

# Laravel Inventory Management Application

## Overview

This is a Laravel-based inventory management application that allows users to manage products and categories, and handle user authentication. This application supports user registration, login, product CRUD operations, and category management.

## Features

- User authentication (registration, login, and password management)
- Product management (add, view, update, delete, image upload)
- Category management (add, view, update, delete)
- Pagination for product listing

## Requirements

- PHP >= 7.4
- Composer
- Node.js & npm
- A database (e.g., MySQL)

## Setup Instructions

1. **Clone the Repository**

   ```bash
   git clone <your-repo-url>
   cd <your-repo-name>


## Install PHP Dependencies

Run the following command to install PHP dependencies:composer install

### Configure Environment

- Copy the .env.example file to .env:cp .env.example .env
- Generate an application key:php artisan key:generate
- Update the .env file with your database configuration.
   Example:DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password

### Run Migrations

Create the necessary database tables:php artisan migrate

### Install Frontend Dependencies

Install Node.js dependencies:npm install

## Setting Up Storage Symlink

In Laravel, uploaded files (like product images) are typically stored in the `storage/app/public` directory. To make these files accessible via a web browser, you need to create a symbolic link between the `storage` directory and the `public` directory.

### Run the Storage Link Command

After setting up your environment and running migrations, you should run the following Artisan command:

```bash
php artisan storage:link

### Compile Assets

Compile the assets for development:npm run dev
For production, use:npm run prod

### Serve the Application

Start the Laravel development server:php artisan serve


 ### Usage


 Access the Login Page

Go to http://127.0.0.1:8000/login to log in.

Access the Registration Page

Go to http://127.0.0.1:8000/register to register a new account.

Manage Products

View products: http://127.0.0.1:8000/products
Add new product: http://127.0.0.1:8000/products/create
Edit product: Click "Edit" on the product list
Delete product: Click "Delete" on the product list
Manage Categories

View categories: http://127.0.0.1:8000/categories
Add new category: http://127.0.0.1:8000/categories/create
Edit category: Click "Edit" on the category list
Delete category: Click "Delete" on the category list


    `













