# Product Inventory Manager

A full-stack inventory management application built with Laravel and MySQL — developed to get hands-on with Laravel's core framework patterns ahead of a transition into PHP/Laravel development.

---

## What It Does

Manages products and categories with full CRUD functionality — create, view, update, and delete records with relational data between products and their categories.

**Features:**
- Full CRUD for both products and categories
- Products belong to a category — category dropdown populated from the database
- Eager loading to avoid N+1 query issues
- Form validation with per-field error messages
- Route model binding on delete operations
- PHPUnit feature tests covering happy path and validation failure

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel (PHP) |
| Database | MySQL |
| ORM | Eloquent |
| Templating | Blade |
| Architecture | MVC |
| Testing | PHPUnit |

---

## What I Focused On

Built to get grounded in Laravel's core patterns:

- **Migrations** — defining and versioning schema changes with `php artisan migrate`
- **Eloquent relationships** — `hasMany` / `belongsTo` between Category and Product
- **Resource controllers** — full CRUD using `Route::resource()` and the seven standard methods
- **Eager loading** — `Product::with('category')->get()` to avoid N+1 queries
- **Form validation** — `$request->validate()` with rules like `exists:categories,id` on foreign keys
- **Route model binding** — automatic model injection and 404 handling in controller methods
- **PHPUnit testing** — feature tests asserting database state and validation behavior

---

## Running Locally

### Prerequisites
- PHP 8.1+
- Composer
- MySQL

### Setup
```bash
git clone https://github.com/samuelwbrown4/product-inventory-manager
cd product-inventory-manager
composer install
cp .env.example .env
php artisan key:generate
```

Update `.env` with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory_manager
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

```bash
php artisan migrate
php artisan serve
```

App runs at `http://localhost:8000`.

### Running Tests
```bash
php artisan test
```

---

## Data Model

```
categories
├── id
└── name

products
├── id
├── category_id (FK → categories.id)
├── name
├── description
├── price
├── quantity
└── timestamps
```

---

## Author

Samuel Brown — [github.com/samuelwbrown4](https://github.com/samuelwbrown4)