<?php
include "session.php";
include "connection.php";
$s="DELETE FROM `createaccount` WHERE mobileno='$nm'";
if(mysqli_query($con,$s))
{
header("location:index.php");
} 
?>