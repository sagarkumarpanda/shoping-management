<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>forget password</title>
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
	<div>
		<p class="c2" id="x">forgetten password</p>
	</div>
	<form action=" " method="post" class="form" id="f1">
		<p class="c1">Registered mobile no</p>
		<input type="text" name="fmno" placeholder="Enter your mobile no" class="r1" id="l1" pattern="[6-9]+[\d]{9}" maxlength="10" />
		<p class="c1">First name</p>
        <input type="text" name="fname" placeholder="Enter your first name" class="r1" id="l2"/>  
		<p class="c1">Date of birth</p>
		<input type="date" name="dob" placeholder="Enter your date of birth" class="r1" id="l3"/>
		<p align="center">
        <input type="submit" name="search" value="SEARCH" id="search">
        <input type="reset" value="RESET"></p>
    </form>
	<script type="text/javascript" src="js/forgetpassword2.js">
	 </script>

	<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
if(isset($_POST['search']))
{
	$fmno=$_POST['fmno'];
	$fname=$_POST['fname'];
	$dbath=$_POST['dob'];
	$m="SELECT * FROM `createaccount` WHERE mobileno='$fmno'";
	$x=mysqli_query($con,$m);
    if($x)
     {
		 $xx=mysqli_fetch_row($x);
	 if($xx[4]==$fmno && $xx[1]==$fname && $xx[6]==$dbath)
		 {
	?>
			 <script>
			 $(function(){
				 $("#f1").hide();
				 $("#x").hide();
			 });
			 </script>
			 
<?php
		 echo ("<div>
		<p class='c2'>Reset password</p>
	</div>
	<form action='http://localhost:8080/project/updatepassword.php' method='post' class='form' id='form'>
		<p class='c1'> Change the password  </p>
		  <input type='hidden' name='mob1' value='$xx[4]'/>
          <input type='password' name='pwrd1' placeholder='Enter the password' class='r3' Minlength='5' id='p1'/>
          <input type='password' name='pwrd2' placeholder='Conform the password' class='r3' Minlength='5' id='p2' />
          <p align='center'>
          <input type='submit' name='update' value='SAVE' id='save'>
          <input type='reset' value='RESET'></p>
    </form>");
	?>
	
      <script type="text/javascript" src="js/forgetpassword3.js">
	 </script>
<?php	 
		 }
	     else
		   echo "<h3>Three data are not matching</h3>";
		 }
}
		 ?>
		 
</body>
</html>