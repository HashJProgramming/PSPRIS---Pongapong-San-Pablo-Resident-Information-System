<?php

// Get the product ID from the form
$resident_id = $_POST['resident_id'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
$status = "TRANSFERED";

$sql = "UPDATE residents SET
  status = '$status'
WHERE id = '$resident_id'";

$stmt = $db->prepare($sql);
$stmt->execute();

 // Check if the resident was deleted successfully
 if ($stmt->rowCount() > 0) {
    header('Location: ../residents.php#success');
} else {
    header('Location: ../residents.php#error');
}

?>