<?php

@include('../connection.php');

$date = $pack_feb = $sti_feb = $remain_feb="";

if(isset($_POST['submit'])){
   if(empty($_POST['date'])) {
    echo "<script> alert(Please fill all field) </script>";
   }else{
    $date=$_POST['date'];
   }
    
   if(empty($_POST['pack_feb'])) {
   echo "<script> alert(Pleade fill all field) </script>";
   }else{
   $pack_feb=$_POST['pack_feb'];  
   }

   if(empty($_POST['sti_feb'])) {
      echo "<script> alert(Pleade fill all field) </script>";
   }else{
      $sti_feb=$_POST['sti_feb'];  
   }

   $remain_feb = $sti_feb-$pack_feb;



   $query = mysqli_query($con,"INSERT INTO `pack_feb`(`date`, `sti_feb`, `pack_feb`, `remain_feb`) VALUES ('$date','$sti_feb','$pack_feb','$remain_feb KG')");
   if($query){
      
    header("location:../../record_packing.php");
        
   }else{
    echo "wrong query";

   }
}
?>