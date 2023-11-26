<!DOCTYPE html>
<!-- css img header-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in to the system</title>
</head>
<body>
<!-- header -->
<?php include("header.php");?>

<!-- establish input form -->
<form action="InformationPage.php" method="post">
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" value="" required><br>

    <label for="phoneNumber">phoneNumber:</label><br>
    <input type="tel" name="phoneNumber" id="phoneNumber" value="" required><br>

    <label for="password">PassWord</label><br>
    <input type="password" name="password" id="password" value="" required><br>

    <input type="submit" value="Login"><br>

</form>


    <p> Please log in to the system</p>



</body>
</html>