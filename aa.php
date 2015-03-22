<?php
$aid = $_GET['aid'];
session_start();
$_SESSION['aid'] = $aid;
header("location:fullnew.php");

?>