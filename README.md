📝 Task Management System

📌 Project Overview

The Task Management System is a simple Laravel-based web application that allows a user to create, view, update, complete, and delete tasks. This project is designed as a single-user system and focuses on demonstrating core Laravel concepts such as MVC architecture, routing, controllers, Blade templates, and database integration using MySQL.

🎯 Objectives:

Build a basic CRUD application using Laravel
Understand Laravel MVC flow
Work with MySQL database using Eloquent ORM
Implement form validation and clean routing
Create a simple and user-friendly UI
🛠️ Technology Stack

Backend: PHP 8+, Laravel
Frontend: Blade Templates (HTML + CSS)
Database: MySQL
Version Control: Git
IDE: PhpStorm
⚙️ Application Flow:

User accesses the application through /tasks
Routes in web.php map requests to TaskController
Controller handles business logic and validation
Model (Task) interacts with MySQL database
Blade templates display data and forms to the user
🧩 Core Features

View all tasks
Add a new task
Edit an existing task
Mark task as completed (✔ tick shown)
Delete a task
Visual indication for completed tasks
🚀 Setup & Installation 1️⃣ Clone Repository git clone cd task-manager

2️⃣ Install Dependencies

composer install
3️⃣ Configure Environment

** Update .env file: * DB_CONNECTION=mysql, * DB_DATABASE=task_manager, * DB_USERNAME=root, * DB_PASSWORD=

4️⃣ Generate Application Key

php artisan key:generate
5️⃣ Run Migrations

php artisan migrate
6️⃣ Start Application

php artisan serve
** Open browser:

http://127.0.0.1:8000/tasks
🧠 Key Concepts Demonstrated

Laravel MVC architecture
RESTful routing using resource routes
Blade templating
Eloquent ORM
Form handling and validation
Basic frontend styling