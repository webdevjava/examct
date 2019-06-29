<?php
include 'connection.php';
session_start();

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
$this->connect->fundata($username,$password);
header('location:index.php');
}
?>





<html>


<head>
    <title>Register User</title>

</head>

<body>
    <form action="" method="POST">
        <input name="username" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">
        <input name="register" type="submit" value="Submit">
    </form>

</body>

</html>
