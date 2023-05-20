<?php
session_start();
// Check if the user is already logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: ./index.php");
    exit;
}
?>
