# Login System Project

## Overview

This project is a simple login system built using PHP, MySQL, HTML, Bootstrap, and XAMPP. It allows users to sign up, log in, and includes basic validation for the registration form. The user data is stored in a MySQL database.

## Tech Stack

- **HTML:** Used for structuring the web pages and creating the user interface.
- **Bootstrap (v5.3.0-alpha1):** Provides a responsive and visually appealing design for the frontend.
- **PHP:** Utilized for server-side scripting, handling form submissions, and interacting with the database.
- **MySQL:** The database management system used to store user data.
- **XAMPP:** A free and open-source cross-platform web server solution stack package, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.

## Prerequisites

Before using this project, ensure you have the following installed:

- **XAMPP:** Install XAMPP to set up the Apache server, MySQL database, and PHP.

## Setup

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Anubhavagnihotrii/LoginSystem.git
   ```

2. **Database Configuration:**
   - Create a MySQL database named `loginsystemdb`.
   - Update the database connection details in `partials/_dbconnect.php` if needed.

3. **Access the Project:**
   - Configure XAMPP to serve the project's files.
   - Access the project via `http://localhost/path-to-project`.

## Usage

1. **Sign Up:**
   - Visit the registration page (`http://localhost/path-to-page`).
   - Fill in the required details (username, email, password, address, phone).
   - Click the "Signup" button.

2. **Login:**
   - After signing up, you can visit the login page (`http://localhost/path-to-page`).
   - Enter your email and password.
   - Click the "Login" button.

3. **Accessing Pages:**
   - Once logged in, you can explore protected pages or customize the project based on your requirements.
4. **Logout:**
    - To log out, click the "Logout" link or button. This will destroy the current session and redirect you to the login page.
