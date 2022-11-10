<?php

@include('../connection.php');

$add_equipment = $quantity = $purchase = $add_status = $date =""; 
if(isset($_POST['submit'])){
   if(empty($_POST['date'])) {
    echo "<script> alert(Pleade fill all field) </script>";
   }else{
    $date = $_POST['date'];
   }

   if(empty($_POST['quantity'])) {
    echo "<script> alert(Pleade fill all field) </script>";
   }else{
    $add_equipment = $_POST['add_equipment'];  
   }
    
   if(empty($_POST['quantity'])) {
      echo "<script> alert(Pleade fill all field) </script>";
     }else{
      $quantity = $_POST['quantity']."Digits";  
     }

     if(empty($_POST['purchase'])) {
      echo "<script> alert(Pleade fill all field) </script>";
     }else{
      $purchase = $_POST['purchase'];  
     }

     if(empty($_POST['add_status'])) {
        echo "<script> alert(Pleade fill all field) </script>";
       }else{
        $add_status = $_POST['add_status'];  
       }

    print_r($_POST);
    die();
   $query = mysqli_query($con,"INSERT INTO `equipment`(`add_equipment`, `quantity`, `purchase`, `add_status`, `date`) VALUES ('add_equipment','quantity', 'purchase', 'add_status', 'date')");
   if($query){

      header("location:'../status_equipment.php'");
        
   }else{
    echo "<br>wrong query";

   }
}


?>