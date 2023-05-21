<?php
include_once 'connection.php';

// Get the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sex = $_POST['sex'];
$age = $_POST['age'];

$sex = strtoupper($sex);
// Check if resident already exists
$sql = "SELECT * FROM residents WHERE firstname = '$email' AND lastname = '$lastname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Resident already exists
  header("Location: ../residents.php");
} else {
  // Resident does not exist
  // Insert the data into the database
  $sql = "INSERT INTO residents (firstname, lastname, birthdate, email, phone, address, sex, age, status) VALUES ('$firstname', '$lastname', '$birthdate', '$email', '$phone', '$address', '$sex', '$age', 'ALIVE')";

  // Execute the query
  if ($conn->query($sql) === TRUE) {
    header("Location: ../residents.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the connection
$conn->close();

?>