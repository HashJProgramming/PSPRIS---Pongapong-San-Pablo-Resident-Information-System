<?php

// Include the connection file
include_once 'connection.php';

// Get the form data
$resident_id = $_POST['resident_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sex = $_POST['sex'];
$complain = $_POST['complain'];
$status = "Pending";


// Insert the complaint into the database
$sql = "INSERT INTO complaints (resident_id, firstname, lastname, email, phone, address, sex, complain, status) VALUES ('$resident_id', '$firstname', '$lastname', '$email', '$phone', '$address', '$sex', '$complain', '$status')";

$result = $conn->query($sql);

if ($result === TRUE) {
  // Complaint added successfully
  header('Location: ../residents-profile.php?id='.$resident_id.'&success=1');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>