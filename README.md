# Sterna Backend

This project is a Laravel API backend for the Sterna location management app.

## Features

- User authentication with Laravel Sanctum
- Login endpoint for admin access
- Location listing API for authenticated users
- Database seeding for default admin account and location records

## Project structure

- `app/` - application logic and controllers
- `database/migrations/` - database schema migrations
- `database/seeders/` - seed data for initial app setup
- `routes/api.php` - API routes
- `setup.sh` - bootstrap script to create and configure the Laravel app

## Prerequisites

- PHP 8+
- Composer
- MySQL or another supported database
- Laravel dependencies installed via Composer

## Setup

1. Open the project directory:

   ```bash
   cd backend
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Configure your environment file:

   - Copy `.env.example` to `.env` if needed
   - Set your database connection and credentials

4. Run the bootstrap script:

   ```bash
   bash setup.sh
   ```

   This creates the Laravel app if needed, installs the API package, copies the project files, runs migrations, seeds the database, and starts the dev server.

## Default login

- Email: `admin@sterna.com`
- Password: `Sterna@124`

## API endpoints

### Login

```http
POST /api/login
```

Request body:

```json
{
  "email": "admin@sterna.com",
  "password": "Sterna@124"
}
```

### Get locations

```http
GET /api/locations
```

Requires authentication via Sanctum bearer token.

### Logout

```http
POST /api/logout
```

Requires authentication via Sanctum bearer token.

## Notes

- The app expects a MySQL database named `sterna` unless your `.env` is configured otherwise.
- If the database does not exist, create it before running migrations.
- For local development, the app is served on `http://localhost:8000` by default.
