<?php
@include('../connection.php');


$id = $_GET['id'];

$del=mysqli_query($con,"DELETE FROM `pack_feb` WHERE id=".$id);
header("location:../../record_packing.php");

?>