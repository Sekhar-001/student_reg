Student Registration System
📌 Overview

A full-stack web application to register students using a form, validate input on the frontend, and store data in a MySQL database using PHP. It also fetches and displays student records dynamically.

🚀 Features
📝 Student registration form
✅ JavaScript validation (name, email, DOB, phone)
📥 Store data in MySQL
📤 Fetch student data (JSON API)
📋 Display registered students
🔐 Secure queries using PDO
🛠️ Tech Stack
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL
📂 Structure
project/
│── index.html
│── style.css
│── script.js
│── save_student.php
│── getStudents.php
🗄️ Database
CREATE DATABASE student_reg;

CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  dob DATE,
  department VARCHAR(100),
  phone VARCHAR(15),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
▶️ Run
Start XAMPP/WAMP
Place project in htdocs
Open:
http://localhost/project-folder/
📌 APIs
POST /save_student.php → Add student
GET /getStudents.php → Get students
🔐 Security
PDO prepared statements
Frontend validation
🔮 Future Scope
Update & delete
Search
Admin login
