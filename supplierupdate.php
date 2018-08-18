<?php
include "connection.php";
if(isset($_POST['update']))
{
$id=$_POST['m'];
$pname1=strtoupper($_POST['pname']);
$mob1=$_POST['mobno'];
$email2=$_POST['email1'];
$address1=$_POST['addr1'];
$address2=$_POST['addr2'];
$ino1=$_POST['ino'];
$price1=$_POST['price'];
$msg=$_POST['message'];
$s="update supplier set name='$pname1',mobile='$mob1',email='$email2',address1='$address1',address2='$address2',productunit='$ino1',price='$price1',description='$msg' where id='$id'";
$l=mysqli_query($con,$s);
if($l)
header("location:supplierreport.php");
else
	echo ("updation failed");
}
?>