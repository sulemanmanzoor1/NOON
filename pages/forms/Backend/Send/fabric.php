<?php

@include('../connection.php');

$date = $name = $fabric = $purpose ="";
$dateErr = $nameErr = $fabricErr = $purposeErr ="";


$Error = false;
function Clean_data($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = str_replace('\\','',$data);
   $data = str_replace('/','',$data);
   return $data;
}


if(isset($_POST['submit'])){
   if(empty($_POST['date'])) {
    echo "<script> alert(Pleade fill all field) </script>";
   }else{
    $date=$_POST['date'];
    
   }

   if(empty($_POST['name'])){
      $nameErr = "<br>*Name Is Required";
      $Error=true;
      echo "<script> alert('Name Is Required');  </script>";     
      die();
  }else{
      $name = clean_data($_POST['name']);
      if (!preg_match("/^[A-Za-z- ']*$/",$name)) 
      {
         echo "<script> alert('Name: Only characters and white space allowed');  </script>";     
         die();
      }
  }
    
   if(empty($_POST['fabric'])) {
      echo "<script> alert(Pleade fill all field) </script>";
   }else{
      $fabric=$_POST['fabric'];  
   }

     if(empty($_POST['purpose'])) {
      echo "<script> alert(Pleade fill all field) </script>";
     }else{
      $purpose=$_POST['purpose'];  
     }
   $query = mysqli_query($con,"INSERT INTO `fabric`( `date`,  `name`, `fabric`,`purpose`) VALUES ('$date','$name','$fabric','$purpose') ");
   if($query){
      
      header("location:../../record_fabric.php");
        
   }else{
    echo "wrong query";

   }
}


?>