<?php
include 'connection.php';
session_start();
$funID = $_GET['id'];

$connect->update("UPDATE examone SET id='$funID' ");

if(isset($_POST['submit'])){
    $gold = $_POST['gold'];
    $shari = $_POST['shari'];
    
    $connect->fundata($gold,$shari);
    header('location:index.php');
}

?>




<html>

<head>
    <title>Editing Data</title>
</head>

<body>
    <form action="" method="POST">
        <input name="gold" type="text">
        <input name="shari" type="text">
        <input name="submit" type="submit" value="Submit">
    </form>
</body>

</html>
