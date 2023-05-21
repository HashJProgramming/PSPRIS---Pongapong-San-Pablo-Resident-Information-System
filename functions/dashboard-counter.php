<?php

function get_active(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_complaints FROM complaints WHERE status = 'Pending'";
    $result = $db->query($sql);
    $row = $result->fetch();
    $total_complaints = $row['total_complaints'];
    echo $total_complaints;
}

function get_total(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_complaints FROM complaints";
    $result = $db->query($sql);
    $row = $result->fetch();
    $total_complaints = $row['total_complaints'];
    echo $total_complaints;
}


function get_resolve(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_complaints FROM complaints WHERE status='Resolve'";
    $result = $db->query($sql);
    $row = $result->fetch();
    $total_complaints = $row['total_complaints'];
    echo $total_complaints;
}


function get_male(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_male FROM residents WHERE sex='Male'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_male'];
}


function get_female(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_female FROM residents WHERE sex='Female'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_female'];
}


function get_deceased(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_deceased FROM residents WHERE status='Deceased'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_deceased'];
}


function get_young(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_young FROM residents WHERE age BETWEEN 0 AND 17";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_young'];
}


function get_old(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_old FROM residents WHERE age BETWEEN 18 AND 99";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_old'];
}

function get_residents(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_residents FROM residents WHERE status LIKE 'alive'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_residents'];
}

?>