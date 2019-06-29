<?php
include 'connection.php';
session_start();
$funID = $_GET['id'];

$connect->update("DELETE*FROM examone WHERE id='$funID'");
header('location:index.php');

?>
