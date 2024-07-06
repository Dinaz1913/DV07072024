# ArticlesWebsite

## Overview

**ArticlesWebsite** is a simple CRUD application built with PHP that allows users to manage articles. This project demonstrates the use of modern PHP practices, including dependency injection, PSR-4 autoloading, and templating with Twig. TailwindCSS is used for styling the frontend, providing a clean and responsive user interface. The project also implements logging with Monolog for efficient debugging and monitoring.

## Features

- **Create, Read, Update, Delete (CRUD)** operations for articles.
- Clean and responsive UI built with **TailwindCSS**.
- Template rendering using **Twig**.
- Dependency Injection with **PHP-DI**.
- Logging with **Monolog**.
- Environment configuration using **Dotenv**.
- Routing and request handling with **Slim Framework**.

## Dependencies

This project utilizes the following dependencies:

### PHP Dependencies

- **[slim/slim](https://packagist.org/packages/slim/slim)**: Slim Framework for routing and request handling.
- **[slim/psr7](https://packagist.org/packages/slim/psr7)**: PSR-7 implementation for HTTP messages.
- **[twig/twig](https://packagist.org/packages/twig/twig)**: Templating engine for rendering views.
- **[slim/twig-view](https://packagist.org/packages/slim/twig-view)**: Integration of Twig with Slim.
- **[monolog/monolog](https://packagist.org/packages/monolog/monolog)**: Logging library.
- **[php-di/php-di](https://packagist.org/packages/php-di/php-di)**: Dependency Injection container.
- **[vlucas/phpdotenv](https://packagist.org/packages/vlucas/phpdotenv)**: Library for loading environment variables from a `.env` file.
- **[symfony/dotenv](https://packagist.org/packages/symfony/dotenv)**: Another library for managing environment variables.

### Node.js Dependencies

- **[tailwindcss](https://www.npmjs.com/package/tailwindcss)**: A utility-first CSS framework for styling the frontend.

## Prerequisites

- **PHP 8.0 or higher**
- **Composer**
- **Node.js and npm**

## Installation

1. **Clone the repository:**

    ```sh
    git clone https://github.com/Dinaz1913/DV07072024.git
    cd ArticlesWebsite
    ```

2. **Install PHP dependencies:**

    ```sh
    composer install
    ```

3. **Install Node.js dependencies:**

    ```sh
    npm install
    ```

4. **Build TailwindCSS:**

    ```sh
    npm run build
    ```

5. **Set up the environment file:**

    Copy `.env.example` to `.env` and configure your environment variables.

    ```sh
    cp .env.example .env
    ```

6. **Create the SQLite database:**

    ```sh
    touch database.sqlite
    ```

7. **Initialize the database:**

    Run the following SQL commands to set up the database schema:

    ```sql
    DROP TABLE IF EXISTS articles;

    CREATE TABLE articles (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        content TEXT NOT NULL,
        created_at DATETIME NOT NULL,
        updated_at DATETIME NOT NULL
    );

    INSERT INTO articles (title, content, created_at, updated_at) VALUES
    ('First Article', 'Content of the first article', datetime('now'), datetime('now')),
    ('Second Article', 'Content of the second article', datetime('now'), datetime('now')),
    ('Third Article', 'Content of the third article', datetime('now'), datetime('now'));
    ```

## Usage

1. **Start the PHP built-in server:**

    ```sh
    php -S localhost:8000 -t public
    ```

2. **Open your browser and visit:**

    ```
    http://localhost:8000
    ```



