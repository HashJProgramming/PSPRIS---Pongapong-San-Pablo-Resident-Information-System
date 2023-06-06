<?php

$id = $_POST['resident_id'];
$status = 'Resolved';

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');

// Update the status of the resident
$sql = 'UPDATE complaints SET status = :status WHERE id = :id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Check if the status was updated successfully
if ($stmt->rowCount() > 0) {
    header('Location: ../residents.php#success');
} else {
    echo 'An error occurred.';
}

?>