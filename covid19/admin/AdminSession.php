<?php
    session_start();
    if($_SESSION['type']!='Admin')
    {
        header('location:index.php');
        exit();
    }
    include 'connection.php'
?>
