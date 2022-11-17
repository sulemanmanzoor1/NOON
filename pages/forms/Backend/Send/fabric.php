<?php

@include('../connection.php');

$date = $name = $fabric = $purpose ="";

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
      $name = $_POST['name'];
      if (!preg_match("/^[A-Za-z- ']*$/",$name)) 
      {
         echo "<script>
            function validate(){
            var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
            var name = document.getElementById('name').value;
            if(!regName.test(name)){
                  alert('Customer Name is Required.');
                  document.getElementById('name').focus();
                  return false;
            }else{
                  alert('Valid name given.');
                  return true;
            }
            }
         </script>";     
         die();
      }
  }
    
   if(empty($_POST['fabric'])) {
      echo "<script> alert(Please fill all field) </script>";
   }else{
      $fabric=$_POST['fabric'];  
   }

     if(empty($_POST['purpose'])) {
      echo "<script> alert(Pleade fill all field) </script>";
      die();
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