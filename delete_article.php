<?php include("header.php");?>

<?php

$id = $_GET["articleID"];

$dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";


$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("DELETE FROM `articles` WHERE `id` = $id");


    echo "Delete Article ID: $id ";
