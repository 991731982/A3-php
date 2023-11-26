<?php
session_start();

//likes
$id = $_SESSION["articleID"];  
$user_id = $_SESSION["id"];  


$dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT*FROM`articles`WHERE`id`=?");
$stmt->execute([$id]);
$targetArticle = $stmt->fetch();

$userchoiceStmt=$pdo->execute("SELECT COUNT(*)FROM `likes` WHERE  `user_id`=?");
$userchoiceStmt->execute([$id,$user_id]);
$amount_of_likes=$userchoiceStmt->fetchColumn()>0;

$article_be_likedStmt=$pdo->execute("SELECT COUNT(*)FROM `likes` WHERE  `article_id`=?");
$article_be_likedStmt->execute([$id,$articleID]);
$amount_of_likes=$article_be_likedStmt->fetchColumn()>0;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read article</title>

</head>
<body>



<?php include("header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read article</title>

</head>
<body>

<?php include("header.php");?>


<h1><?= $targetArticle["title"]?></h1>
<p><?= $targetArticle["content"]?></p>
<p><?= $targetArticle["is_featured"]?></p>
<p><?= $targetArticle["brief_description"]?></p>


</body>
</html>






