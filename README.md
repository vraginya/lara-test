# Laravel + MySQL + Docker

Clean Laravel project configured to run with Docker and MySQL.

## Stack

- Laravel 13
- PHP 8.4 (CLI container)
- MySQL 8.4

## Quick Start

```bash
cd /home/valery/PhpstormProjects/lara-test
docker compose build
docker compose up -d
docker compose run --rm app composer install
docker compose run --rm app php artisan key:generate
docker compose run --rm app php artisan migrate
```

Open the app at `http://localhost:8000`.

## Services

- App: `http://localhost:8000`
- MySQL: `localhost:3307`
  - Database: `laravel`
  - User: `laravel`
  - Password: `secret`
  - Root password: `root`

## Useful Commands

```bash
docker compose ps
docker compose logs -f app
docker compose logs -f mysql
docker compose run --rm app php artisan test
docker compose down
```

To remove database data as well:

```bash
docker compose down -v
```
