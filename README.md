# Laravel Task Manager

## 📌 Project Overview
A Task Manager web application built with **Laravel**, designed to help users create, manage, and track tasks efficiently.  
This project demonstrates core Laravel concepts such as routing, controllers, Eloquent ORM, database migrations, Blade templating, and CRUD operations.

## 🚀 Features
- User authentication (login & registration)
- Create, read, update, and delete (CRUD) tasks
- Task status management (pending, in progress, completed)
- Organize tasks efficiently
- Clean and responsive UI using Blade templates
- Secure backend with Laravel best practices

## 🛠 Technologies Used
- **Backend:** Laravel (PHP)
- **Frontend:** Blade Templates, Bootstrap
- **Database:** MySQL / SQLite
- **Tools:** Composer, Artisan, Git

## 📂 Project Structure
```
laravel-task-manager/
├── app/                    # Controllers, Models
├── database/               # Migrations & seeders
├── resources/views/        # Blade templates
├── routes/                 # Web routes
├── public/                 # Public assets
├── .env.example            # Environment configuration
├── composer.json           # PHP dependencies
└── README.md               # Project documentation
```

## 🚀 Getting Started

### 1. Clone the repository
```bash
git clone https://github.com/Diphiya/Laravel-task-manager.git
cd Laravel-task-manager
```

### 2. Install dependencies
```bash
composer install
```

### 3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database setup
Update your `.env` file with database credentials and run:
```bash
php artisan migrate
```

(Optional)
```bash
php artisan db:seed
```

### 5. Run the application
```bash
php artisan serve
```

Application will be available at:
```
http://localhost:8000
```

## 📈 Usage
- Register or login as a user
- Create and manage tasks
- Update task status
- Delete completed or unnecessary tasks

## 🔮 Future Enhancements
- Task priorities and deadlines
- Role-based access control
- Deployment to cloud hosting

