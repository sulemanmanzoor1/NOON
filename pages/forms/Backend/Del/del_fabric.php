<?php
@include('../connection.php');


$id = $_GET['id'];

$del=mysqli_query($con,"DELETE FROM `fabric` WHERE id=".$id);
header("location:../../record_fabric.php");

?>