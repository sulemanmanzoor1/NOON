<?php

@include('../connection.php');

$date = $name=$fabric = $purpose="";

if(isset($_POST['submit'])){
   if(empty($_POST['date'])) {
    echo "<script> alert(Pleade fill all field) </script>";
   }else{
    $date=$_POST['date'];
   }

   if(empty($_POST['name'])) {
    echo "<script> alert(Pleade fill all field) </script>";
   }else{
    $name=$_POST['name'];  
   }
    
   if(empty($_POST['fabric'])) {
      echo "<script> alert(Pleade fill all field) </script>";
     }else{
      $fabric=$_POST['fabric']."KG";  
     }

     if(empty($_POST['purpose'])) {
      echo "<script> alert(Pleade fill all field) </script>";
     }else{
      $purpose=$_POST['purpose'];  
     }
   $query = mysqli_query($con,"INSERT INTO `fabric`( `date`,  `name`, `fabric`,`purpose`) VALUES ('$date','$name','$fabric','$purpose') ");
   if($query){
      
      header("location:'../fabric.php'");
        
   }else{
    echo "wrong query";

   }
}


?>