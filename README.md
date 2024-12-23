```markdown
# Task Management System

## Installation Guide

Follow these steps to set up the project on your local environment:

### Step 1: Clone the Repository
```bash
git clone https://github.com/mamun77795/task-management-system.git
```

### Step 2: Navigate to the Project Directory
```bash
cd task-management-system
```

### Step 3: Install Dependencies
```bash
composer install
```

### Step 4: Configure Environment
1. Copy `.env.example` to `.env`:
   ```bash
   cp .env.example .env
   ```
2. Open the `.env` file and configure your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

### Step 5: Generate Application Key
```bash
php artisan key:generate
```

### Step 6: Run Migrations
```bash
php artisan migrate
```

### Step 7: Seed the Database
```bash
php artisan db:seed
```

### Step 8: Start the Server
```bash
php artisan serve
```

## Login Credentials
Use the following credentials to log in:

- **Email**: `admin@gmail.com`
- **Password**: `password123`

## API Documentation
1. Import the API collection into Postman from API-Collection folder.
2. You will find all API endpoints available for testing.

Enjoy working with the Task Management System!
```