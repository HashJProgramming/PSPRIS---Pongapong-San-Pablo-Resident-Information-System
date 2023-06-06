<?php

// Include the connection file
include_once 'connection.php';

// Get the form data
$resident_id = $_POST['resident_id'];
$status = $_POST['status'];
$cause_of_death = $_POST['cause_of_death'];
$date_of_death = $_POST['date_of_death'];
$status = strtoupper($status);
$sex = strtoupper($sex);

if ($status == 'ALIVE') {
  $cause_of_death = '';
  $date_of_death = '';
} 

if ($status == '') {
  $status = 'ALIVE';
  $cause_of_death = '';
  $date_of_death = '';
}

// Update the resident in the database
$sql = "UPDATE residents SET
  status = '$status',
  cause_of_death = '$cause_of_death',
  date_of_death = '$date_of_death'
WHERE id = '$resident_id'";

$result = $conn->query($sql);

if ($result === TRUE) {
  // Resident updated successfully
  header("Location: ../residents-decease.php#success");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>