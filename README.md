---
# Tokopakerte Backend (Laravel)

## 📌 Introduction
Tokopakerte API is the backend service for the Tokopakerte e-commerce platform, built using Laravel. It provides a RESTful API for managing products, users, orders, and authentication.

## 🚀 Technologies Used
- **Laravel** - PHP Framework
- **MySQL** - Database
- **JWT Authentication** (or Sanctum if used)
- **Laravel Migrations & Seeders**
- **Postman** (for API testing)

## 🛠️ Setup & Installation
### Prerequisites
- PHP >= 8.2
- Composer
- MySQL / MariaDB
- Laravel 11

### Installation Steps
```sh
# Clone the repository
git clone https://github.com/tamzidan/tokopakerte-backend.git
cd tokopakerte-api

# Install dependencies
composer install

# Copy .env example and configure your database
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
touch database/database.sqlite
php artisan migrate --seed

# Start the server
php artisan serve
```

### API Documentation
(If using Laravel Swagger, Insomnia, or Postman, provide API collection link)

---