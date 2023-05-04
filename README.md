# Law Firm X Laravel Project Installation Guide

This guide will walk you through the steps to download and install the Law Firm X Laravel project that uses MySQL as the database and Bootstrap as the frontend.

## Cloning the Repository

1. Navigate to the directory where you want to store the project.
2. Run the following command in your terminal or command prompt: `git clone https://github.com/bashyauri/law-firm-x.git`

## Installing dependencies:

1. Navigate to the project directory.
2. Run `composer install` to install the required dependencies for the project.

## Creating the .env File

1. Run the following command in the terminal to create a new .env file from the existing
   .env.example file: `cp .env.example .env.`
2. Update the `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` variables in the .env file to match your MySQL database credentials.

## Generate an application key:

1. Run the following command in the terminal to generate an application key for the Laravel
   project: `php artisan key:generate`.

## Run database migrations:

1. Run the following command in the terminal to run the database migrations for the
   project: `php artisan migrate`.

## Install Laravel UI and Bootstrap:

1. Run the following commands in the terminal to install Laravel UI and Bootstrap:
   `composer require laravel/ui` and `php artisan ui bootstrap --auth`.

## Install npm:

1. Run the following command in the terminal to install npm: `npm install`.

## Compile front-end assets:

1. Run the following command in the terminal to compile the front-end assets: `npm run dev`.

## Start the development server:

1. Run the following command in the terminal to start the Laravel development server: `php artisan serve`.
2. The project will be accessible in your web browser at **http://localhost:8000**.
