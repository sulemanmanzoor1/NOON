<?php

@include('../connection.php');

$emp_name = $emp_desig = $emp_pay = $date = ""; 
$emp_nameErr = $emp_desigErr = $emp_payErr = $dateErr = ""; 

if(isset($_POST['submit'])){

   if(empty($_POST['emp_name'])) {
      echo "<script> alert(Please fill all field) </script>";
   }else{
    if (preg_match("/^[A-Za-z- ']*$/",$emp_name)) 
    {
      $emp_name=$_POST['emp_name'];
    }
   }

   if(empty($_POST['emp_desig'])) {
      echo "<script> alert(Please fill all field) </script>";
   }else{
      $emp_desig=$_POST['emp_desig'];
   }
   
   if(empty($_POST['emp_pay'])) {
      echo "<script> alert(Please fill all field) </script>";
   }else{
      $emp_pay=$_POST['emp_pay'];
   }
   
   if(empty($_POST['date'])) {
      echo "<script> alert(Please fill all field) </script>";
   }else{
      $date=$_POST['date'];
   }

   $save = mysqli_query($con, "INSERT INTO `monthly`(`emp_name`, `emp_desig`, `emp_pay`, `date`) VALUES ('$emp_name','$emp_desig','$emp_pay','$date')");

     if($save){
         //  echo "<h1>submit success</h1>";
         header('location: ../../record_monthly.php');
     }else{
          echo "</br>NO submit record";
     } 
  }

// }


?>