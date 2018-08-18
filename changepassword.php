<?php
include "session.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>change password</title>
	<link rel="stylesheet" type="text/css" href="css/forgetpassword.css">
      <script type="text/javascript" src="js/forgetpassword.js"></script>
	  <script  src="jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<header>
		<nav>
			<div>
		         <img src="images/logo3.png" alt="" class="p1" />
	              <h1>$hopkeeper</h1>
	             <img src="images/logo4.png" alt="" class="p1" />
	        </div>
	    </nav>
    </header>
		<div class="c3">
<a href="home.php" class="c3">BACK TO HOME</a>
</div>	
	<form action='' method='post' class='form' id='form'>
		<p class='c1'> Change the password  </p>
		<?php
if(isset($_POST['update']))
{
	$p=$_POST['pwrd1'];
	$c=$_POST['pwrd2'];
	if($p==$c)
	{
		$m="UPDATE `createaccount` SET password='$p' where mobileno='$nm'" ;
		$u=mysqli_query($con,$m);
		if($u)
		{
	    header("location:index.php");
		}
	else
		echo ("<h2 align='center'>UPDATE UNSUCESSFULL</h2>");
    }	
else
	echo("<h2 align='center'>ENTERED PASSWORD DONT MATCH</h2>");
}
?>
		<input type='password' name='pwrd1' placeholder='Enter the password' class='r3' Minlength='5' id='p1'/>
          <input type='password' name='pwrd2' placeholder='Conform the password' class='r3' Minlength='5' id='p2' />
          <p align='center'>
          <input type='submit' name='update' value='SAVE' id='save'>
          <input type='reset' value='RESET'></p>
    </form>
      <script type="text/javascript" src="js/forgetpassword3.js">
	 </script> 
</body>
</html>