<?php
include "connection.php";
if(isset($_POST['add']))
{
$id=$_POST['x'];
$pname1=strtoupper($_POST['pname']);
$ino1=$_POST['ino'];
$price1=$_POST['price'];
$msg=$_POST['message'];
$s="UPDATE `items` SET `pname`='$pname1',`itemunit`='$ino1',`itemprice`='$price1',`description`='$msg' WHERE id='$id'";
$l=mysqli_query($con,$s);
if($l)
{
header("location:itemreport.php");
}
else
	echo ("UPDATION FAILED");
}
?>