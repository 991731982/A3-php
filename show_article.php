<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Articles</title>
</head>

<body>
<?php include("header.php");?>

<?php
session_start();

if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true) {
    ?>
        <p>You are NOT logged in. This is secret info</p>
        <a href="login.php">Login here</a>
        <?php
        exit();
}else{
    $dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "";
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $stmt = $pdo->prepare("SELECT * FROM `articles`;");
    $stmt->execute();
    ?>
    <h3>Hello, <?=  $_SESSION["name"] ?></h3>

<?php
    while ($row = $stmt->fetch()) { 
        ?>
        
       
        <div >
             <div>
                    ID: <?= $row["id"] ?> 
                    Title:<?=$row["title"]?>
                    <?php if ($row["is_featured"]) { ?>
                        <span class="featured">(Featured)</span>
                    <?php } ?>
                    Content: <?= $row["content"] ?>
                    brief description: <?= $row["brief_description"] ?>

             </div>


             <div>
                <a href="readArticle.php?articleID=<?= $row["id"] ?>">READ</a>
                <a href="delete_article.php?articleID=<?= $row["id"]?>">DELETE</a>
                <a href="edit_article.php?articleID=<?= $row["id"] ?>">EDIT</a>
                <a href="featured.php?articleID=<?= $row["id"] ?>">SET FEATURED</a>
                <a href="NOfeatured.php?articleID=<?= $row["id"] ?>">NO FEATURED</a>
             </div>

        </div>
        <?php

    }
}
?>
</body>
</html>
