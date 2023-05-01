<?php

// start session
session_start();

// check if the login form has been submitted
if (isset($_POST['login'])) {

  // get the username and password entered by the user
  $username = $_POST['username'];
  $password = $_POST['password'];

  // connect to the database
  $servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $dbname = "empathyDB";

  $conn = new mysqli($servername, $db_username, $db_password, $dbname);

  // prepare the SQL statement using prepared statements with bound parameters
  $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password);

  // execute the prepared statement
  $stmt->execute();

  // get the result of the query
  $result = $stmt->get_result();

  // check if the username and password match a row in the database
  if ($result->num_rows == 1) {

    // save the user's information in the session
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];

    // redirect the user to the home page
    header("Location: home.php");
    exit();
  } else {

    // if the username and password don't match, display an error message
    echo "Invalid username or password.";
  }

  // close the prepared statement and database connection
  $stmt->close();
  $conn->close();
}

?>
