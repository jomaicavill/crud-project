#  Student CRUD System (Laravel)

##      Project Overview
This project is a Student CRUD (Create, Read, Update, Delete) web application built using the Laravel Framework (MVC Architecture). It allows users to manage student records with full database functionality and a simple responsive interface.

##      Team Composition
Villarino, Jomaica E. – Lead Developer  
Cabison, Divine Faith – UI/UX Designer  
Alcon, Justine Grace – Database Administrator  
Gonzaga, Genecil – Documentation / Tester  

##      Features
- Create new student records  
- Read/view all student records  
- Update student information  
- Delete student records  
- About Us page with team details  

##     Tech Stack
Laravel 10/11, PHP, MySQL/MariaDB, Bootstrap 5, HTML, CSS  

##     Installation Guide (How to Run Locally)

1. Clone Repository  
git clone https://github.com/your-username/student-crud.git  

2. Go to Project Folder  
cd student-crud  

3. Install Dependencies  
composer install  

4. Copy Environment File  
cp .env.example .env  

5. Generate Application Key  
php artisan key:generate  

6. Configure Database in .env  
DB_DATABASE=student_crud  
DB_USERNAME=root  
DB_PASSWORD=  

Then create the database in phpMyAdmin.

7. Run Migrations  
php artisan migrate  

8. Start Server  
php artisan serve  

9. Open in Browser  
http://127.0.0.1:8000/students  

##  Project Structure
app/Http/Controllers – CRUD logic  
app/Models – Database models  
resources/views – UI (Blade templates)  
routes/web.php – Routes  
database/migrations – Database structure  

##  Functionality Report Requirements
Include screenshots of: Create form, Read table, Update page, Delete action, About Us page.

##  Notes
Ensure XAMPP is running, database is created, and .env file is properly configured before running the project.

