<?php
@include('../connection.php');


$id = $_GET['id'];

$del=mysqli_query($con,"DELETE FROM `stitch_feb` WHERE id=".$id);
header("location:../../record_stiching.php");

?>