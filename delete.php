<?php
session_start();
$id = $_GET['id'];
unset($_SESSION['All-data'][$id]);
header('location:index.php');