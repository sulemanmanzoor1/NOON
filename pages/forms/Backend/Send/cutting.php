<?php

@include('../connection.php');

$date =$fabric = $cut_fab=$cate_fab ="";

if(isset($_POST['submit'])){
   if(empty($_POST['date'])) {
    echo "<script> alert(Pleade fill all field) </script>";
   }else{
    $date=$_POST['date'];
   }
    
   if(empty($_POST['fabric'])) {
      echo "<script> alert(Pleade fill all field) </script>";
     }else{
      $fabric=$_POST['fabric'];  
     }

   if(empty($_POST['cate_fab'])) {
   echo "<script> alert(Pleade fill all field) </script>";
   }else{
   $cate_fab=$_POST['cate_fab'];  
   }

   if(empty($_POST['cut_fab'])) {
   echo "<script> alert(Pleade fill all field) </script>";
   }else{
   $cut_fab=$_POST['cut_fab'];  
   }

   $remain_fab = $fabric-$cut_fab;





   $query = mysqli_query($con,"INSERT INTO `cutt_febric`( `date`, `fabric`, `cut_fab`, `cate_fab`, `remain_fab`) VALUES ('$date','$fabric','$cut_fab','$cate_fab','$remain_fab') ");
   if($query){
      
    header("location:../../record_cutting.php");
        
   }else{
    echo "wrong query";

   }
}


?>