<?php

// Get the product ID from the form
$id = $_POST['resident_id'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');

// Delete the complaints associated with the resident
$sql = 'DELETE FROM complaints WHERE id = :id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Check if the resident was deleted successfully
if ($stmt->rowCount() > 0) {
    header('Location: ../residents-complains.php#success');
} else {
    header('Location: ../residents-complains.php#error');
}

?>