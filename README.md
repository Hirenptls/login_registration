**PHP Login and Registration System**

A simple PHP-based login and registration system using XAMPP, MySQL, and PHP for user authentication.

**Features**
1.User registration (username, password, email).
2.Password hashing and verification.
3.User login and session management.
4.Dashboard for logged-in users.
5.Logout functionality.

**Requirements**
XAMPP: Install Apache, MySQL, PHP.
Web Browser: To access the app.

**Setup**
1.Install XAMPP and start Apache and MySQL.
2.Create a database named user_db in phpMyAdmin.
3.Create a table users with fields: id, username, password, email, created_at.
4.Clone or download this repo.
5.Place files in C:\xampp\htdocs\user_system.
6.Access the app:
    i.Registration: http://localhost/user_system/register.php
    ii.Login: http://localhost/user_system/login.php
    iii.Dashboard (after login): http://localhost/user_system/dashboard.php
    iv.Logout: Available on the dashboard.

**File Structure**
user_system/
├── register.php
├── login.php
├── dashboard.php
├── logout.php
└── README.md

**Security**
1.Passwords are securely hashed using PHP’s password_hash.
2.Input validation and SQL injection prevention should be added for production use.
