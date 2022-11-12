<?php

    include('../connection.php');

  $id = $add_equipment = $quantity = $purchase = $add_status = $date = ""; 

if(isset($_POST['submit'])){
    $id = $_GET['id'];
   $add_equipment = $_POST['add_equipment'];
   $quantity      = $_POST['quantity'];
   $purchase      = $_POST['purchase'];
   $add_status    = $_POST['add_status'];
   $date          = $_POST['date'];

   $query = mysqli_query($con,"UPDATE `equipment` SET `add_equipment`='$add_equipment',`quantity`='$quantity',`purchase`='$purchase',
   `add_status`='$add_status',`date`='$date' WHERE id = ".$_GET['id']);
   
   if($query){

    // header('location: ..\..\status_equipment.php');
    echo "Data submit";
        
   }else{
    echo "<br>wrong query";

   }

}

?>