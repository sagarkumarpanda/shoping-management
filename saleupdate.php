<?php
include "connection.php";
if(isset($_POST['add']))
{
$id=$_POST['x'];
$ino1=$_POST['ino'];
$price1=$_POST['price'];
$msg=$_POST['message'];
$s="UPDATE `sales` SET `saleunit`='$ino1',`itemprice`='$price1',`description`='$msg' WHERE id='$id'";
$l=mysqli_query($con,$s);
if($l)
{
header("location:sellreport.php");
}
else
	echo ("UPDATION FAILED");
}
?>