<?php

 @include('../connection.php');

$name = $sale_name = $totalamount = $receive = $date = ""; 

if(isset($_POST['submit'])){

      $name          = $_POST['name'];
      $sale_name     = $_POST['sale_name'];
      $totalamount   = $_POST['totalamount'];
      $receive       = $_POST['receive'];
      $date          = $_POST['date'];

   $query = mysqli_query($con,"INSERT INTO `daily_usage`(`name`, `sale_name`, `totalamount`, `receive`, `date`) 
   VALUES ('$name','$sale_name','$totalamount','$receive','$date')");
   
   if($query){

      header('location: ..\..\record_usage.php');
      echo "</br>Data submit";
        
   }else{
    echo "<br>wrong query";

   }

}

?>