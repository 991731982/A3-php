<!DOCTYPE html>
<!-- css img header-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Information</title>
</head>
<body>
<!-- header -->
<?php include("header.php");?>

<!-- start -->
<?php session_start();

// get information
$email=$_POST["email"];
$phoneNumber=$_POST["phoneNumber"];
$password=$_POST["password"];

// link information from database
$dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

// establish PDO pbject to link to database
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt=$pdo->prepare("SELECT*FROM`users`WHERE`email`='$email'AND`phoneNumber`='$phoneNumber'AND`password`='$password'");
$stmt->execute();

//check information if matched with database,if success,send it
if($row=$stmt->fetch()){
    $_SESSION["name"]=$row['name'];
    $_SESSION["id"]=$row['id'];
    $_SESSION["email"]=$row['email'];
    $_SESSION["phoneNumber"]=$row['phoneNumber'];
    $_SESSION["IfLoggedIn"]=true;

?>
//if match, show targeted user information

<div>
  <h1>Your Name:<?= $_SESSION["name"]?></h1>
  <h2>Your ID:<?= $_SESSION["id"]?></h2>
  <h2>Your Email:<?= $_SESSION["email"]?></h2>
  <h2>Your phoneNumber:<?= $_SESSION["phoneNumber"]?></h2>
  <h2>Your status:<?= $_SESSION["IfLoggedIn"]?></h2>

</div>

<?php
}else{
    
    echo "<div style='color: red; margin-top: 20px;'>
    Login unsuccessful.
    Please <a href='login.php'>click here</a> to attempt logging in again.
    </div>";

}

?>


</body>
</html>