<?php

@include('../connection.php');

$name = $services = $price = ""; 

if(isset($_POST['submit'])){
   $name      = $_POST['name'];
   $services  = $_POST['services'];
   $price     = $_POST['price'];

   $query = mysqli_query($con,"INSERT INTO `salary`(`name`, `services`, `price`) 
            VALUES ('$name','$services', '$price')");
   
   if($query){

      header("location: ../../record_month.php");
    //   echo "Data submit";
        
   }else{
    echo "<br>wrong query";

   }

}

?>