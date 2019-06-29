<?php
session_start();
$_SESSION['loggedin'];
include 'connection.php';

if(!isset($_SESSION['loggedin'])){
    header('location:login.php');
}


if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $datafile = $connect->update("SELECT*FROM examone WHERE username = '$username' AND password = '$password' ");
    
    header('location:index.php');
}


?>

<html>

<head>
    <title>Login Here</title>

</head>

<body>

    <?php
        foreach($datafile as $df){
            if(count($datafile)){
                $_SESSION['loggedin'] = $df['id'];
            }
        }
    ?>


    <form action="" metho="POST">
        <input name="username" type="username" placeholder="username">
        <input name="password" type="password" placeholder="Password">
        <input name="login" type="submit" value="Login">
    </form>

</body>

</html>
