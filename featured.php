<?php include("header.php");?>

<?php

$articleID = $_GET["articleID"];

$dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("UPDATE `articles` SET `is_featured` = 1 WHERE `id` = $articleID");



if ($stmt->execute()) {
    echo "<p>Set Article ID: $articleID As Featured</p>";
} else {
    echo "<p>Fail to Set Article ID: $articleID as featured</p>";
}
?>
