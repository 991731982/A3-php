<?php include("header.php");?>

<?php
// receive_contact.php
// Receives user-submitted contact form data


$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$address = $_POST["address"];

// Database credentials
$dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

// Connect to the database
$pdo = new PDO($dsn, $dbusername, $dbpassword);

// Prepare
$stmt = "INSERT INTO `contacts` (`id`, `name`, `email`, `message`,`address`) VALUES (NULL, '$name', '$email', '$message','$address')";
$stmt = $pdo->exec($stmt);

// Check for success
if($stmt !== false){?>
     <h1>THANK YOU FOR YOUR SUBMIT</h1>
     <p>name</p>
     <p>email</p>
     <p>message</p>
     <p>address</p>
<?php
}else{
    ?><h1>Error</h1>
    <p>There was a problem submitting your message.</p>
<?php
}
?>
