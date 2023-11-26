<?php
$articleID = $_GET["articleID"];

$dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `articles`.`id` = $articleID");

$stmt->execute();

$changeMe = $stmt->fetch();
?>

<form action="update_article.php" method="POST">
    <label for="Title">Title:</label><br>
    <input type="text" name="title" value="<?= $changeMe["title"] ?>"><br>

    <label for="Content">Content:</label><br>
     <textarea name="content"><?= $changeMe["content"] ?></textarea><br>

    <label for="Is Featured">Is Featured:</label><br>
    <input type="checkbox" name="is_featured" value="1" <?= $changeMe["is_featured"] ? 'checked' : '' ?>><br>
    
    <input type="submit" value="Update Article">
    <input type="hidden" name="id" value="<?= $changeMe["id"] ?>">
    
</form>