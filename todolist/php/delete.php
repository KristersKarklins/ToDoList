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

// Check if the row ID to be deleted is provided via a form or URL parameter
$deleteId = $mysqli->real_escape_string($_POST['row_id']);
echo $deleteId;
// Create the SQL query to delete the row
$sql = "DELETE FROM tasks WHERE id = '$deleteId'";

// Execute the query
if ($mysqli->query($sql) === true) {
    echo 'Row deleted successfully';
    
} else {
    echo 'Error deleting row: ' . $mysqli->error;
}
header("Location: /index.php");
    exit();
// Close the database connection
$mysqli->close();
