<?php
session_start();

$_SESSION['All-data'][$_POST['id']]['fname'] = $_POST['fname'];
$_SESSION['All-data'][$_POST['id']]['lname'] = $_POST['lname'];
header('location:index.php');