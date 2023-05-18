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

$stage = "Complete";

// Retrieve the data you want to update
$id = $_POST['row_id'];  // Assuming you receive the ID of the row to update via a form input or another source

// Perform the update query
$sql = "UPDATE tasks SET stage = '$stage' WHERE id = $id";

if ($mysqli->query($sql) === TRUE) {
    echo "Row updated successfully";
} else {
    echo "Error updating row: " . $mysqli->error;
}

// Create the SQL query
$sql = "UPDATE tasks SET (stage) VALUES ('$stage')";

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
