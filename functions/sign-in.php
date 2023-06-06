<?php
include_once 'connection.php';

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are valid
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

  session_start();
  // The username and password are valid, so log the user in
  $_SESSION['logged_in'] = true;
  $_SESSION['username'] = $username;

  // Redirect the user to the dashboard
  header("Location: ../dashboard.php");
  exit;
} else {
  // The username and password are not valid, so show an error message
  header("Location: ../index.php#error");
}

?>