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
    $sql = "SELECT COUNT(*) AS total_complaints FROM complaints WHERE status='Resolved'";
    $result = $db->query($sql);
    $row = $result->fetch();
    $total_complaints = $row['total_complaints'];
    echo $total_complaints;
}


function get_male(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_male FROM residents WHERE sex='MALE' AND status='ALIVE'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_male'];
}


function get_female(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_female FROM residents WHERE sex='FEMALE' AND status='ALIVE'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_female'];
}


function get_deceased(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_deceased FROM residents WHERE status='DECEASED'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_deceased'];
}

function get_deceased_female(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_deceased FROM residents WHERE sex='FEMALE' AND status='DECEASED'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_deceased'];
}

function get_deceased_male(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_deceased FROM residents WHERE sex='MALE' AND status='DECEASED'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_deceased'];
}

function get_young(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_young FROM residents WHERE age BETWEEN 0 AND 17 AND status='ALIVE'";
    $result = $db->query($sql);
    $row = $result->fetch();
    echo $row['total_young'];
}


function get_old(){
    $db = new PDO('mysql:host=localhost;dbname=db_hashy', 'root', '');
    $sql = "SELECT COUNT(*) AS total_old FROM residents WHERE age BETWEEN 18 AND 99 AND status='ALIVE'";
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