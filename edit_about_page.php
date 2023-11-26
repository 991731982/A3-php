<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit about page</title>
    
</head>
<body>
    
<?php include("header.php");?>

<?php
$dsn = "mysql:host=localhost;dbname=immnews;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $updateStmt = $pdo->prepare("UPDATE about_page SET title = ?, content = ? WHERE id = 3");
    $updateStmt->execute([$title, $content]);

    echo "<p>About page updated successfully.</p>";
}

$stmt = $pdo->prepare("SELECT * FROM about_page WHERE id = 3");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form action="edit_about_page.php" method="POST">

<label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="<?= htmlspecialchars($row["title"]) ?>"><br>

    <label for="content">Content:</label><br>
    <textarea id="content" name="content"><?= htmlspecialchars($row["content"]) ?></textarea><br>


    <input type="submit" value="Submit">
    </form>

</body>
</html>