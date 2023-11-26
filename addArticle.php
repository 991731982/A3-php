<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add article</title>
    
</head>
<body>
<?php include("header.php");?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    $brief_description = $_POST['brief_description'];
    $content = $_POST['content'];


    $dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    $stmt = $pdo->prepare("INSERT INTO articles (title,brief_description,content) VALUES(?,?,?)");
    
    if($stmt->execute([$title,$brief_description,$content])){
        echo"<p>you successfully add the article</p>";
    }else{
        echo"<p>Fail to add the article</p>";
    }
    $pdo = null;
}
?>



<form action="addArticle.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="brief_description">Brief Description:</label>
        <textarea id="brief_description" name="brief_description" required></textarea>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>

        <input type="submit" value="Add Article">
</form>


</body>
</html>
