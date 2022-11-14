<?php
@include('../connection.php');


$id = $_GET['id'];

$del=mysqli_query($con,"DELETE FROM `cutt_febric` WHERE id=".$id);
header("location:../../record_cutting.php");

?>