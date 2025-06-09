<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🏘️ Zoopla Scraper + Laravel Importer

This project integrates a Node.js scraper with a Laravel backend. The Node.js script scrapes property data from Zoopla and stores it in a JSON file. The Laravel app reads this file and imports the data into a MySQL database.

---

## 📦 Project Structure

zoopla-importer/
├── node-hello/             ← Node.js scraper folder
│   ├── index.js
│   ├── package.json
├── zoopla-data.json       ← JSON file created by Node
├── app/                    ← Laravel app folder
├── database/
├── .env
└── README.md



## ⚙️ Installation Guide

### 📁 1. Node.js Scraper Setup

1. Navigate to the Node.js folder:

   ```bash
   cd node-hello
2. Install dependencies:
   npm install

3. Run the scraper script:
   node index.js
   This will generate a file:
   zoopla-importer/zoopla-data1.json
   containing the scraped property data.


## Laravel Backend Setup
1. Navigate to Laravel project:
   cd zoopla-importer
2. Install PHP dependencies: composer install
3. Set up your .env: cp .env.example .env
4. Update the following DB configuration in .env:
        DB_DATABASE=your_database
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
5. Generate the application key:php artisan key:generate
6. Run migrations to create the properties table: php artisan migrate


## Import Zoopla Data into MySQL
Option A: Using Artisan Command
1. Create a custom Artisan command (php artisan make:command ImportZooplaData).
2. Run the command:
      php artisan import:zoopla-data