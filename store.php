<?php
session_start();

$_SESSION['All-data'][] = $_POST;
header("location:index.php");

//unset($_SESSION['All-data']);