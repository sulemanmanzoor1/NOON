<?php

 @include('../connection.php');

$add_equipment = $quantity = $purchase = $add_status = $date = ""; 

if(isset($_POST['submit'])){
   $add_equipment = $_POST['add_equipment'];
   $quantity      = $_POST['quantity'];
   $purchase      = $_POST['purchase'];
   $add_status    = $_POST['add_status'];
   $date          = $_POST['date'];

   $query = mysqli_query($con,"INSERT INTO `equipment`(`add_equipment`, `quantity`, `purchase`, `add_status`, `date`) 
            VALUES ('$add_equipment','$quantity', '$purchase', '$add_status', '$date')");
   
   if($query){

      header('location: ..\..\status_equipment.php');
      // echo "</br>Data submit";
        
   }else{
    echo "<br>wrong query";

   }

}

?>