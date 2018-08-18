
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create account</title>
	 <link rel="stylesheet" type="text/css" href="css/createaccount.css">
      <script type="text/javascript" src="js/createaccount.js"></script>
      <script src="jQuery\jquery-3.3.1.min.js"></script>
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
    	<div class="devider"></div>
    	<div class="form">
    		<form action="" method="post" id="createaccountform">
    			<h1 class="h1">CREATE NEW ACCOUNT</h1>
				
<?php
include("connection.php");
if(isset($_POST['signup']))
{
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$sname=$_POST['sname'];
$mno=$_POST['mno'];
$gender=$_POST['r1'];
$date=$_POST['d1'];
$password=$_POST['password'];
$s="insert into createaccount(fname,mname,lname,mobileno,gender,bday,password)values('$fname','$mname','$sname','$mno','$gender','$date','$password')";
if(mysqli_query($con,$s))
{
	echo "<h3 align='center'>ACCOUNT CREATE SUCESSFULLY</h3>";
   header("location:index.php");
   
}
else
	echo "<h3 align='center'>ACCOUNT CAN'T CREATE</h3>";
}
?>
    					<p>FIRST NAME</p>
    					    <input type="text" name="fname"  maxlength="10" placeholder="enter first name" class="r1" id="fname1"/>
    				    <p>MIDDLE NAME</p>
    					   <input type="text" name="mname" maxlength="10" placeholder=" enter middle name" class="r1" id="mname1" />
    					<p>SURE NAME</p>
    					   <input type="text" name="sname" maxlength="10" placeholder=" enter sure name" class="r1" id="lname1"/>
    					 <p>MOBILE NO</p>
    					   <input type="no" name="mno" maxlength="10" pattern="[6-9]+[\d]{9}" placeholder="enter mobile no" class="r1" id="mno1"/>
    					<p>GENDER</p>  
    					<input type="radio" name="r1" value="male" align="center" />MALE
    					<input type="radio" name="r1" value="female" />FEMALE
    					<p>BIRTHDATE</p>
						  <input type="date" name="d1"  class="r1" />
					<p>ENTER  PASSWORD</p>
					<input type="password" id="pwrd1" name="password" minlength="5" placeholder="Enter password" class="r1" />
					<p>CONFORM  PASSWORD</p>
					<input type="password" id="pwrd2" name="password" minlength="5" placeholder="Conform password" class="r1" />
					<p><input type="submit" name="signup" value="SIGNUP" />
						<input type="reset" value="RESET"  /></p>
					<a href="http://localhost:8080/project/index.php" class="a1">ALREADY HAVE AN ACCOUNT ?</a>
					<a href="#" class="a2">HELP</a>		
    		   </form>
    	      </div>
      <script type="text/javascript" src="js/createaccount2.js">	  
  </script>
</body>
</html>
