<?php
@include('../connection.php');


$id = $_GET['id'];

$del=mysqli_query($con,"DELETE FROM `finish` WHERE id=".$id);
header("location:../../record_finishing.php");

?>