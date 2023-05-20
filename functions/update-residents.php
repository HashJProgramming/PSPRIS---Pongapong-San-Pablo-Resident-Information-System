<?php

// Include the connection file
include_once 'connection.php';

// Get the form data
$resident_id = $_POST['resident_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$status = $_POST['status'];
$cause_of_death = $_POST['cause_of_death'];
$date_of_death = $_POST['date_of_death'];
$status = strtoupper($status);

if ($status == 'ALIVE') {
  $cause_of_death = '';
  $date_of_death = '';
} 

// Update the resident in the database
$sql = "UPDATE residents SET
  firstname = '$firstname',
  lastname = '$lastname',
  birthdate = '$birthdate',
  email = '$email',
  phone = '$phone',
  address = '$address',
  sex = '$sex',
  age = '$age',
  status = '$status',
  cause_of_death = '$cause_of_death',
  date_of_death = '$date_of_death'
WHERE id = '$resident_id'";

$result = $conn->query($sql);

if ($result === TRUE) {
  // Resident updated successfully
  header("Location: ../residents.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>