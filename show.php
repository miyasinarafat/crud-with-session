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
    <title>Show page</title>
</head>
<body>
<a href="index.php">back to Index page.</a>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>

    <tbody>
        <tr>
            <td><? echo $id; ?></td>
            <td><? echo $fname; ?></td>
            <td><? echo $lname; ?></td>
        </tr>
    </tbody>
</table>


</body>
</html>
