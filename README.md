# Law Firm X Laravel Project Installation Guide

This guide will walk you through the steps to download and install the Law Firm X Laravel project that uses MySQL as the database and Bootstrap as the frontend.

## Cloning the repository from GitHub:

1. Navigate to the directory where you want to store the project.
2. Run the following command in your terminal or command prompt: `git clone https://github.com/bashyauri/law-firm-x.git`

## Install dependencies:

Navigate to the project directory and run composer install to install the required dependencies for the project.

## Create a .env file:

Run the following command in the terminal to create a new .env file from the existing .env.example file: cp .env.example .env. Then, update the DB_DATABASE, DB_USERNAME, and DB_PASSWORD variables in the .env file to match your MySQL database credentials. [3]

## Generate an application key:

Run the following command in the terminal to generate an application key for the Laravel project: php artisan key:generate.

## Run database migrations:

Run the following command in the terminal to run the database migrations for the project: php artisan migrate.

## Install Laravel UI and Bootstrap:

Run the following commands in the terminal to install Laravel UI and Bootstrap: composer require laravel/ui and php artisan ui bootstrap --auth.

## Install npm:

Run the following command in the terminal to install npm: npm install.

## Compile front-end assets:

Run the following command in the terminal to compile the front-end assets: npm run dev.

## Start the development server:

Run the following command in the terminal to start the Laravel development server: php artisan serve. The project will be accessible in your web browser at http://localhost:8000.
