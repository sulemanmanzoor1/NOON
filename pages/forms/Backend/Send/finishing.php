<?php

@include('../connection.php');

$date = $finish_feb = $sti_feb = $remain_feb=$cat_feb="";

if(isset($_POST['submit'])){
   if(empty($_POST['date'])) {
    echo "<script> alert(Please fill all field) </script>";
   }else{
    $date=$_POST['date'];
   }
    
   if(empty($_POST['finish_feb'])) {
   echo "<script> alert(Pleade fill all field) </script>";
   }else{
   $finish_feb=$_POST['finish_feb'];  
   }

   if(empty($_POST['cat_feb'])) {
      echo "<script> alert(Pleade fill all field) </script>";
      }else{
      $cat_feb=$_POST['cat_feb'];  
      }

   if(empty($_POST['sti_feb'])) {
      echo "<script> alert(Pleade fill all field) </script>";
   }else{
      $sti_feb=$_POST['sti_feb'];  
   }

   $remain_feb = (int)$sti_feb-(int)$finish_feb;



   $query = mysqli_query($con,"INSERT INTO `finish`(`date`, `sti_feb`, `finish_feb`, `remain_feb`, `cat_feb`) VALUES ('$date','$sti_feb','$finish_feb','$remain_feb','$cat_feb')");
   if($query){
      
    header("location:../../record_finishing.php");
        
   }else{
    echo "wrong query";

   }
}
?>