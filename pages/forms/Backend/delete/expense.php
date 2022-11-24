<?php
    include('../connection.php');

    $id = $_GET['id'];
    
    $del = "DELETE FROM `expense` WHERE id=".$id;
    $done = mysqli_query($con, $del);

    // if($done){
    //     echo "yes delete";
    // }else{
    //     echo "No delete";
    // }
    
    header('location: ..\..\record_expense.php');
?>