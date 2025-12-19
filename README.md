📝 Task Management System
📌 Project Overview

The Task Management System is a simple Laravel-based web application that allows a user to create, view, update, complete, and delete tasks.
This project is designed as a single-user system and focuses on demonstrating core Laravel concepts such as MVC architecture, routing, controllers, Blade templates, and database integration using MySQL.

🎯 Objectives:
* Build a basic CRUD application using Laravel
* Understand Laravel MVC flow
* Work with MySQL database using Eloquent ORM
* Implement form validation and clean routing
* Create a simple and user-friendly UI
=======
🛠️ Technology Stack
* Backend: PHP 8+, Laravel
* Frontend: Blade Templates (HTML + CSS)
* Database: MySQL
* Version Control: Git
* IDE: PhpStorm

⚙️ Application Flow:

* User accesses the application through /tasks
* Routes in web.php map requests to TaskController
* Controller handles business logic and validation
* Model (Task) interacts with MySQL database
* Blade templates display data and forms to the user

🧩 Core Features

* View all tasks
* Add a new task
* Edit an existing task
* Mark task as completed (✔ tick shown)
* Delete a task
* Visual indication for completed tasks
generate

🚀 Setup & Installation (BEGINNER FRIENDLY)

Follow these steps in order.

✅ Step 1: Install Required Software
🔹 1. Install PHP (Required)

**Download PHP from:**
https://www.php.net/downloads

**OR install XAMPP :**
https://www.apachefriends.org/

After installation, verify PHP using command :
 * php -v

🔹 2. Install Composer (VERY IMPORTANT)

Composer is the dependency manager for PHP
(similar to Maven/Gradle in Java).

🔸 Download Composer:

👉 https://getcomposer.org/download/

* Download Composer-Setup.exe
* Install it
* During installation, select your PHP path (XAMPP PHP path)

**Verify installation:**
    composer -V

🔹 3. Install MySQL
* If you installed XAMPP, MySQL is already included.
* Start MySQL from:
* XAMPP Control Panel → Start MySQL

✅ Step 2: Clone the Repository
* git clone https://github.com/Phanishh/laravel-task-manager.git
* cd laravel-task-manager

✅ Step 3: Install Project Dependencies

* Run this command inside the project folder:

* composer install
* This will  Download Laravel dependencies
* Create the vendor/ folder

✅ Step 4: Environment Configuration
🔹 Create .env file
* cp .env.example .env
* 🔹 Configure Database in .env

Open .env file and update:

* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=task_manager
* DB_USERNAME=root
* DB_PASSWORD=
👉 Make sure the database task_manager exists in MySQL.

✅ Step 5: Generate Application Key
* php artisan key:generate
* This is mandatory for Laravel to run.

✅ Step 6: Run Database Migrations
* php artisan migrate
* This will create the tasks table automatically.

✅ Step 7: Start the Application
* php artisan serve
  * Open browser and visit:

      http://127.0.0.1:8000/tasks


🎉 Your application is now running!

