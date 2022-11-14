<?php

@include('../connection.php');

$name = $services = $price = ""; 

if(isset($_POST['submit'])){

   if(empty($_POST['name'])) {
    echo "<script> alert(Please fill all field) </script>";
   }else{
    $name=$_POST['name'];
   }
   //////////////////////////////////////// 
      // if(empty($_POST['services'])) {
      //    echo "<script> alert(Please fill all field) </script>";
      //   }else{
      //    $services  = $_POST['services']; 
      //    $services = implode(", ",$services);   
      //   }

      //   if(empty($_POST['price'])) {
      //    echo "<script> alert(Please fill all field) </script>";
      //   }else{
      //    $price = $_POST['price'];  
      //    $price = implode(", ",$price); 
      //   }
   ///////////////////////////////////////
     foreach($services = ($_POST['services']) as $ss){
         $value_s[] = $ss;
         $s = implode(",", $value_s);
      }
      foreach($price = ($_POST['price']) as $pr){
         $value_p[] = $pr;
         $p = implode(",", $value_p);
      }

      // echo "<pre>";
      // print_r($_POST);
      // echo "</pre>";
      // die();

   $save = mysqli_query($con,"INSERT INTO `salary` (`name`, `services`, `price`) VALUES ('$name', '$s\n', '$p\n')");

     if($save){
         //  echo "<h1>submit success</h1>";
         header('location: ../../record_month.php');
     }else{
          echo "</br>NO submit record";
     } 
  }

// }


?>