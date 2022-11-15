<?php
    include('../connection.php');

    $id = $_GET['id'];
    
    $del = "DELETE FROM `monthly` WHERE id=".$id;
    $done = mysqli_query($con, $del);
    
    header('location: ..\..\record_monthly.php');
?>