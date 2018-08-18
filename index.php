<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>index</title>
      <link rel="stylesheet" type="text/css" href="css/index.css">
	  <script type="text/javascript" src="js/index.js"></script>
      <script  src="jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
	<header>
		<nav>
			<div>
		         <img src="images/logo.png" alt="" class="a" />
	              <h1>$hopkeeper</h1>
	             <img src="images/logo2.png" alt="" class="a" />
	        </div>
	    	<div class="a1">	    		
	    		<ul>
	    			<li ><a href="https://www.facebook.com/"><img src="images/fbi.png" alt=" " class="ficon" id="fb"></a></li>
	    			<li ><a href="https://www.instagram.com/accounts/login/?next=/accounts/edit/"><img src="images/ii.png" alt=" " class="iicon" id="in"></a></li>
	    			<li ><a href="https://twitter.com/"><img src="images/ti.png" alt=" " class="ticon" id="tw"></a></li>
	    	    </ul>
	    	</div>
	    </nav>
    </header>
     <div class="devider"></div>
     <div>
   	       <a href="http://localhost:8080/project/createaccount.php" class="a3" id="caa">CREATE AN ACCOUNT</a>
     </div>
     <div class="loginbox" id="logbox1">
     	<img src="images/userlogo3.png" alt=" " class="userlogo3">
         <h1 class="a2">LOGIN HERE</h1>
		 <?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
if(isset($_POST['login']))
{
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$m="SELECT * FROM `createaccount` WHERE mobileno='$mobile'";
$x=mysqli_query($con,$m);
session_start();
if($x)
{
$xx=mysqli_fetch_row($x);
$_SESSION['mob']=$xx[4];
if($xx[4]==$mobile && $xx[7]==$password)
{
	header("location:home.php");
}
else if($xx[4]==$mobile && $xx[7]!=$password)
{
	echo("<h3 align='center'>PASSWORD IS INCORRECT</h3>");
}
else
{
	echo "<h3 align='center'>ACCOUNT NOT AVAILABEL</h3>";
}
}
}
?>
         <form action="" method="post" id="iform">
         	<p>Mobile no</p>
         	<input type="text" id="m1" name="mobile" pattern="[6-9]+[\d]{9}" maxlength="10" placeholder="mobile no" />
         	<p>Password</p>
         	<input type="Password" name="password" placeholder="Password" id="p1" />
         	<input type="submit" name="login" value="Login" class="i1"/>
         	<a href="fpassword.html">Forgotten password</a><br/><br/>
         	<a href="#" class="b1">HELP</a>
         	<a href="http://localhost:8080/project/createaccount.php">Don't have an account</a>
         </form>
		<script type="text/javascript" src="js/index2.js">
	 </script>
     </div>
</body>
</html> 