<?php
if (!isset($_GET['id'])) {
    header('Location: ../dashboard.php');
    exit;
}

function get_active(){
    $id = $_GET['id'];
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_complaints FROM complaints WHERE status = 'Pending' AND id = '$id'";
    $result = $db->query($sql);
    $row = $result->fetch();
    $total_complaints = $row['total_complaints'];
    echo $total_complaints;
}

function get_total(){
    $id = $_GET['id'];
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_complaints FROM complaints WHERE id = '$id'";
    $result = $db->query($sql);
    $row = $result->fetch();
    $total_complaints = $row['total_complaints'];
    echo $total_complaints;
}


function get_resolve(){
    $id = $_GET['id'];
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_complaints FROM complaints WHERE status='Resolve' AND id = '$id'";
    $result = $db->query($sql);
    $row = $result->fetch();
    $total_complaints = $row['total_complaints'];
    echo $total_complaints;
}

?>