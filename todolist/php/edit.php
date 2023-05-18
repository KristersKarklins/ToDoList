<?php

$host = 'localhost';
$username = 'u651825268_admin';
$password = 'GNyBZ2;kV4';
$database = 'u651825268_products';

// Create a new MySQLi instance
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Connection successful, perform database operations here

$task_title = $_POST['task-title'];
$task_created_date = $_POST['task-created-date'];
$task_due_date = $_POST['task-due-date'];
$description = $_POST['description'];
$stage = $_POST['stage'];

// Create the SQL query
$sql = "INSERT INTO tasks (task_title, created_date, due_date, description, stage) VALUES ('$task_title', '$task_created_date', '$task_due_date', '$description', '$stage')";

// Execute the query
if ($mysqli->query($sql) === true) {
    echo 'Data inserted successfully';
} else {
    echo 'Error: ' . $mysqli->error;
}
header("Location: /index.php");
exit();

// Close the database connection
$mysqli->close();
