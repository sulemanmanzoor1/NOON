<?php

@include('../connection.php');

$name = $services = $price =$piece =""; 

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
         $s = implode("&nbsp;&nbsp; ,  &nbsp;&nbsp; ", $value_s);
      }
     }

     if(empty($_POST['price'])) {
      echo "<script> alert(Please fill all field) </script>";
     }else{
      foreach($price = ($_POST['price']) as $pr){
         // $sum += $pr;
         $value_p[] = $pr;
         $sum = implode("&nbsp;&nbsp; ,  &nbsp;&nbsp; ", $value_p);
      }

      if(empty($_POST['piece'])) {
         echo "<script> alert(Please fill all field) </script>";
        }else{
         foreach($piece = ($_POST['piece']) as $piece){
            // $sum += $pr;
            $value_pi[] = $piece;
            $pi = implode("&nbsp;&nbsp; ,  &nbsp;&nbsp; ", $value_pi);
         }
      
     }


   $save = mysqli_query($con,"INSERT INTO `salary` (`s_name`, `services`, `price`, `piece`) VALUES ('$name', '$s\n', '$sum','$pi')");

     if($save){
         //  echo "<h1>submit success</h1>";
         header('location: ../../record_month.php');
     }else{
          echo "</br>NO submit record";
     } 
  }
}
// }


?>