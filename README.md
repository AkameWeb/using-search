CroundZone - Product Search System
A simple PHP-based web application for searching products in a database with an object-oriented approach and Bootstrap styling.

📋 Project Description
CroundZone is a web application that allows users to search for products in a database. The system displays product names and prices based on user search queries, with proper error handling and responsive design.

🛠 Technologies Used
PHP (Object-Oriented Programming)

MySQL Database

HTML5

CSS3 (Custom styling)

Bootstrap 5.3.8 (Responsive design)

JavaScript (Bootstrap components)

📁 Project Structure
text
OOPHP/
├── block/
│   ├── header.php          # Header template with Bootstrap CSS
│   └── footer.php          # Footer template with Bootstrap JS
├── style/
│   └── styleIndex.css      # Custom styles
└── index.php               # Main application file
⚙️ Installation & Setup
Clone the repository

bash
git clone https://github.com/your-username/croundzone.git
Set up the database

Create a MySQL database named shop

Create a table product with columns:

id (INT, primary key, auto_increment)

names (VARCHAR)

prise (DECIMAL) - Note: Column name appears to be misspelled as "prise" instead of "price"

Configure database connection

Update database credentials in index.php:

php
$mysql = new mysqli("localhost", "root", "", "shop");
Run the application

Place the project in your web server directory (e.g., htdocs for XAMPP)

Access via browser: http://localhost/OOPHP/index.php

🚀 Usage
Open the application in your web browser

Use the search bar in the navigation menu

Enter a product name to search

View results showing product names and prices

The system handles empty search queries with appropriate error messages

🔧 Features
Product Search: Search products by name

Responsive Design: Mobile-friendly Bootstrap layout

Error Handling: Proper validation for empty searches

Object-Oriented PHP: Clean code structure with classes

Modern UI: Clean, professional interface

📝 Code Overview
Main Components
Shopping Class: Handles search validation and error messages

Database Connection: MySQLi connection with error reporting

Search Functionality: SQL query with LIKE operator for product matching

Templating System: Separate header and footer files for code reusability

Key Files
index.php - Main application logic

header.php - HTML head and navigation

footer.php - Footer and Bootstrap JS

styleIndex.css - Custom styling

🔒 Security Notes
⚠️ Important: The current code uses direct variable interpolation in SQL queries which is vulnerable to SQL injection. Consider implementing prepared statements for production use.

php
// Current (vulnerable)
$result = $mysql->query("SELECT * FROM `product` WHERE names LIKE '$name' ");

// Recommended (secure)
$stmt = $mysql->prepare("SELECT * FROM `product` WHERE names LIKE ?");
$searchTerm = "%$name%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
