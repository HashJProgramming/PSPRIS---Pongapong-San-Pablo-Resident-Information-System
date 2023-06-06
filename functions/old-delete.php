<?php

// Get the product ID from the form
$resident_id = $_POST['resident_id'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');

// Check if there is a complaint associated with the resident
$sql = 'SELECT COUNT(*) FROM complaints WHERE resident_id = :resident_id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':resident_id', $resident_id);
$stmt->execute();

$count = $stmt->fetchColumn();

if ($count > 0) {
    // Delete the complaints associated with the resident
    $sql = 'DELETE FROM complaints WHERE resident_id = :resident_id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':resident_id', $resident_id);
    $stmt->execute();
}

// Delete the resident
if ($count == 0) {
    $sql = 'DELETE FROM residents WHERE id = :resident_id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':resident_id', $resident_id);
    $stmt->execute();

    // Check if the resident was deleted successfully
    if ($stmt->rowCount() > 0) {
        header('Location: ../residents.php');
    } else {
        echo 'An error occurred.';
    }
} else {
    echo 'There is a complaint associated with this resident. Please delete the complaint before deleting the resident.';
}

?>

