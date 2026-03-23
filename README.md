# 🎓 Student Registration System

## 📌 Project Overview

The **Student Registration System** is a full-stack web application that allows users to enter student details through a form, validates the data using JavaScript, and stores it in a MySQL database using PHP. The system also retrieves and displays student records dynamically.

---

## 🚀 Features

* 📝 Student registration form
* ✅ Client-side validation (JavaScript)
* 📥 Store student data in MySQL
* 📤 Fetch data using PHP API (JSON)
* 📋 Display registered students
* 🔐 Secure database operations using PDO

---

## 🛠️ Tech Stack

| Layer    | Technology            |
| -------- | --------------------- |
| Frontend | HTML, CSS, JavaScript |
| Backend  | PHP                   |
| Database | MySQL                 |
| Server   | XAMPP / WAMP / MAMP   |

---

## 📂 Project Structure

```bash
student-registration-system/
│── index.html
│── style.css
│── script.js
│── save_student.php
│── getStudents.php
│── database/
│   └── student_reg.sql
```

---

## 🗄️ Database Schema

```sql
CREATE DATABASE student_reg;

USE student_reg;

CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  dob DATE NOT NULL,
  department VARCHAR(100) NOT NULL,
  phone VARCHAR(15) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## ⚙️ Setup Instructions

1. Install and start **XAMPP/WAMP**
2. Place project in `htdocs`
3. Create database using the SQL above
4. Update DB credentials in PHP files
5. Run project in browser:

```
http://localhost/student-registration-system/
```

---

## 📌 API Endpoints

| Method | Endpoint          | Description        |
| ------ | ----------------- | ------------------ |
| POST   | /save_student.php | Add new student    |
| GET    | /getStudents.php  | Fetch all students |

---

## 🔐 Validation Rules

* Name → Minimum 2 characters
* Email → Valid format
* DOB → Age 16–100
* Phone → 10 digits

---

## 🔮 Future Enhancements

* Update & delete functionality
* Search students
* Admin login system
* Dashboard

---

## 👨‍💻 Author

Sekhar
