<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hashy";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}