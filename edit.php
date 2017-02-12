<?php
session_start();
$id = $_GET['id'];
$fname = $_SESSION['All-data'][$id]['fname'];
$lname = $_SESSION['All-data'][$id]['lname'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD with session</title>
</head>
<body>
<a href="index.php">Back to index page.</a>
<form action="update.php" method="post">
    <input type="text" name="fname" value="<? echo $fname; ?>"><br><br>
    <input type="text" name="lname" value="<? echo $lname; ?>"><br><br>
    <input type="hidden" name="id" value="<? echo $id; ?>">
    <input type="submit" value="Update">
</form>
</body>
</html>