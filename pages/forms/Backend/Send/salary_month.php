<?php

@include('../connection.php');

$name = $services = $price = ""; 

if(isset($_POST['submit'])){

   if(empty($_POST['s_name'])) {
    echo "<script> alert(Please fill all field) </script>";
   }else{
    $name=$_POST['s_name'];
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
   if(empty($_POST['services'])) {
      echo "<script> alert(Please fill all field) </script>";
     }else{
      foreach($services = ($_POST['services']) as $ss){
         $value_s[] = $ss;
         $s = implode(",", $value_s);
      }
     }

     if(empty($_POST['price'])) {
      echo "<script> alert(Please fill all field) </script>";
     }else{
      foreach($price = ($_POST['price']) as $pr){
         // $sum += $pr;
         $value_p[] = $pr;
         $sum = implode(",", $value_p);
      }
      
     }


   $save = mysqli_query($con,"INSERT INTO `salary` (`s_name`, `services`, `price`) VALUES ('$name', '$s\n', '$sum')");

     if($save){
         //  echo "<h1>submit success</h1>";
         header('location: ../../record_month.php');
     }else{
          echo "</br>NO submit record";
     } 
  }

// }


?>