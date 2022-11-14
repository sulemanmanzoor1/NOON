<?php

@include('../connection.php');

$date = $cut_fab= $sti_fab=$remain_fab="";

if(isset($_POST['submit'])){
   if(empty($_POST['date'])) {
    echo "<script> alert(Pleade fill all field) </script>";
   }else{
    $date=$_POST['date'];
   }
    
   if(empty($_POST['cut_fab'])) {
   echo "<script> alert(Pleade fill all field) </script>";
   }else{
   $cut_fab=$_POST['cut_fab']." KG";  
   }

   if(empty($_POST['sti_fab'])) {
      echo "<script> alert(Pleade fill all field) </script>";
   }else{
      $sti_fab=$_POST['sti_fab']." KG";  
   }

   $remain_fab = $cut_fab-$sti_fab;



   $query = mysqli_query($con,"INSERT INTO `stitch_feb`( `date`, `cut_fab`, `sti_fab`, `remain_fab`) VALUES ('$date','$cut_fab','$sti_fab','$remain_fab KG')");
   if($query){
      
    header("location:../../record_stiching.php");
        
   }else{
    echo "wrong query";

   }
}
?>