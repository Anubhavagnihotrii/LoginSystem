<?php
$servername = "localhost";
$username = "root";
$password = "anubhav";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("failed to connect" . mysqli_connect_error());
} else {
    // SQL script to create the database if it doesn't exist
    $createDatabaseSql = "CREATE DATABASE IF NOT EXISTS loginsystemdb";

     // Execute the database creation query
    // if (mysqli_query($conn, $createDatabaseSql)) {
    //     echo "Database created successfully!";
    // } else {
    //     echo "Error creating database: " . mysqli_error($conn);
    // }

    // Select the database
    mysqli_select_db($conn, "loginsystemdb");

    // SQL script to create the users table if it doesn't exist
    $createTableSql = "
        CREATE TABLE IF NOT EXISTS `users` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `username` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) NOT NULL,
            `password` VARCHAR(255) NOT NULL,
            `address` VARCHAR(255) NOT NULL,
            `phone` VARCHAR(10) NOT NULL,
            `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
    ";

    // Execute the table creation query
    mysqli_query($conn, $createTableSql);
}
?>
