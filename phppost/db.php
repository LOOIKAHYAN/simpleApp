<?php
$hostname = "localhost";
$username = "root";
$password = "";

// Connect to MySQL server
$conn = mysqli_connect($hostname, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$dbname = "rating";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if (mysqli_query($conn, $sql)) {
    # echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select the database
mysqli_select_db($conn, $dbname);

// Create table if it doesn't exist
$sql_create_table = "CREATE TABLE IF NOT EXISTS ratings (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    submitdatetime TIMESTAMP,
    fullname TEXT,
    age INT,
    gender TEXT,
    app TEXT, 
    rating INT,
    comments TEXT
)";

if (mysqli_query($conn, $sql_create_table)) {
    # echo "Table 'ratings' created successfully\n";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

?>