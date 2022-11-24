<?php

 @include('../connection.php');

$name = $quantity = $price = $date = ""; 

if(isset($_POST['submit'])){

   $name          = $_POST['name'];

   $quantity      = $_POST['quantity'];
   $price         = $_POST['price'];
   $date          = $_POST['date'];

   $query = mysqli_query($con,"INSERT INTO `expense`(`name`, `quantity`, `price`, `date`) 
            VALUES ('$name','$quantity', '$price', '$date')");
   
   if($query){

      header('location: ..\..\record_expense.php');
      // echo "</br>Data submit";
        
   }else{
    echo "<br>wrong query";

   }

}

?>