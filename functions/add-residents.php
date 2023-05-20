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

// Insert the data into the database
$sql = "INSERT INTO residents (firstname, lastname, birthdate, email, phone, address, sex, age, status) VALUES ('$firstname', '$lastname', '$birthdate', '$email', '$phone', '$address', '$sex', '$age', 'Alive')";

// Execute the query
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>