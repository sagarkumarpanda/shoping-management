<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
if(isset($_POST['update']))
{
	$m=$_POST['mob1'];
	$p=$_POST['pwrd1'];
	$c=$_POST['pwrd2'];
	if($p==$c)
	{
		$m="UPDATE `createaccount` SET password='$p' where mobileno='$m'" ;
		$u=mysqli_query($con,$m);
		if($u)
		{
	    header("location:index.php");
		}
	else
		echo ("<h1>UPDATE UNSUCESSFULL</h1>");
    }	
else
	echo("<h1>ENTERED PASSWORD DONT MATCH</h1>");
}
?>