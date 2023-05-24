<?php

// Include the connection file
include_once 'connection.php';

// Get the form data
$resident = $_POST['resident'];


$names = explode(" ", $resident);

// Check if the resident exists
$sql = "SELECT * FROM residents WHERE firstname= '$names[0]' AND lastname ='$names[1]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

  // The resident exists, so get the ID
  $row = mysqli_fetch_assoc($result);
  $id = $row['id'];

  // Redirect to success.php
  header("Location: ../success.php?id=$id&results=Confirmed Resident");

} else {

  header("Location: ../success.php?id=$id&results=Not Resident");

}

?>