<?php

include 'connection.php';
session_start();

if(isset($_POST['submit'])){
    $gold = $_POST['gold'];
    $shari = $_POST['shari'];
    
    $datam->fundata($gold,$shari);
    header('location:index.php');
}

?>


<html>

<head>
    <title>MerrieMaking Database</title>

</head>

<body>

    <a href="logout.php">Logout</a>
    <form action="" method="POST">
        <input name="gold" type="text">
        <input name="shari" type="text">
        <input name="submit" type="submit" value="Submit">
    </form>




    <table border="2">

        <?php
        foreach($datam as $dt){
            
       ?>

        <tr>
            <li>
                <?php echo $dt['id'];?>
            </li>
            <li>
                <?php echo $dt['gold'];?>
            </li>
            <li>
                <?php echo $dt['shari'];?>
            </li>

            <a href="edit.php?id=<?php echo $dt['edit'];?>">Edit</a>
            <a href="delete.php?id=<?php echo $dt['delete'];?>">Delete</a>
        </tr>

        <?php
        }
        ?>

    </table>

</body>

</html>
