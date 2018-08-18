<?php
include "connection.php";
if(isset($_POST['update']))
{
	$mob=$_POST['m'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$sname=$_POST['sname'];
$gender=$_POST['r1'];
$date=$_POST['d1'];
$s="update createaccount set fname='$fname',mname='$mname',lname='$sname',gender='$gender',bday='$date' where mobileno='$mob'";
$l=mysqli_query($con,$s);
if($l)
{
header("location:userreport.php");
}
else
	echo ("updation failed");
}

?>