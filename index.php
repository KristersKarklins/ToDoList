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

// Perform a database query to retrieve data
$sql = "SELECT * FROM tasks";
$result = $mysqli->query($sql);

// Generate HTML table rows with the retrieved data
$task = '';
while ($row = $result->fetch_assoc()) {
  $id = $row['id'];
  $taskTitle = $row['task_title'];
  $taskCreatedDate = $row['created_date'];
  $taskDueDate = $row['due_date'];
  $description = $row['description'];
  $stage = $row['stage'];

  $task .= '
    <div id="' . $id . '" class="task '.$stage.'">
      <div id="title">
        <h2>' . $taskTitle . '</h2>
      </div>
      <div id="description">' . $description . '</div>
      <div id="stage"> '.$stage.' </div>
      <div id="dates">
        <div id="creation-date">Created: ' . $taskCreatedDate . '</div>
        <div id="due-date">Due in: ' . $taskDueDate . '</div>
      </div>
      <div id="buttons">
        <button class="edit-button"><i class="fa-solid fa-pen-to-square"></i></button>
        <button onclick="runComplete(this);" class="check-button"><i class="fa-solid fa-check"></i></button>
      </div>
      <button onclick="runDelete(this);" class="delete-button"><i class="fa-solid fa-trash"></i></button>
    </div>
  ';
}
// Close the database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://kit.fontawesome.com/6f61f8d50d.js" crossorigin="anonymous"></script>
  <title>ToDoList</title>
</head>

<body>
  <header>
    <a href="/form.html">Add New Task</a>
    <a href="/index.php">Ongoing Tasks</a>
    <a href="/completed.php">Completed Tasks</a>
    <a href="/expired.php">Expired Tasks</a>
  </header>
  <main>
    <div class="task_container">
      <?php
      echo $task;
      ?>
      <!-- <div id="table_h2_container" class="task docked-at-corner">
          <h2>No data has been added!</h2>
          <a href="form.html">Add New Task</a>
        </div> -->
    </div>
  </main>
  <footer></footer>
  <script src="js/addTask.js"></script>
  <script src="/js/runPHP.js"></script>
  <script src="/js/checkTableRows.js"></script>
  <script src="/js/checkDate.js"></script>
</body>

</html>