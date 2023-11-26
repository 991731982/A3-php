<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add About page</title>
</head>
<body>
    
<?php include("header.php");?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];


    $dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    $stmt = $pdo->prepare("INSERT INTO `about_page` (title, content, author) VALUES (?, ?, ?)");
    if ($stmt->execute([$title, $content, $author])) {
        echo "<p>add about page successfully.</p>";
  
}
}
?>


<form action="" method="post">


    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br>

    <label for="content">Content:</label><br>
    <textarea id="content" name="content" required></textarea><br>

    <label for="author">Author:</label><br>
    <input type="text" id="author" name="author" required><br>

    <input type="submit" value="Add ">
</form>

</body>
</html>
