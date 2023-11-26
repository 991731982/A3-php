<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Contact Submissions</title>
</head>
<body>
<?php include("header.php");?>
  
<?php

$dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `contacts`;");

$stmt->execute();




?>

<?php
?><ul><?php

while($row = $stmt->fetch()) {     
	?>

<div>
    <div>
        ID: <?=$row["id"] ?> | 
        Name: <?=$row["name"] ?>
        Email: <?=$row["email"] ?>
        Message: <?=$row["message"] ?>
        Address: <?=$row["address"] ?>
        </div>
</div>
<?php
}
?>
</body>
</html>