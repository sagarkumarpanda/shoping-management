<?php
include "header.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact</title>
	 <link rel="stylesheet" type="text/css" href="css/addtype.css">
      <script type="text/javascript" src="js/addtype.js"></script>
      <script src="jQuery\jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="form">
    		<form action="" method="post" id="addemailform">
    			<h1 class="h1">CONTACT</h1>
    					<p>EMAIL</p>
    					    <input type="email" name="email1" placeholder="ENTER YOUR EMAIL" class="r1" id="email1"/>
    					<p>DESCRIPTION</p>
						  <textarea name="message" rows="3" cols="20" class="text1" id="des"></textarea>
					    <p><input type="submit" name="add" value="SEND" />
					     	<input type="reset" value="RESET" /></p>
<?php
if(isset($_POST['add']))
{
$eml=strtoupper($_POST['email1']);
$msg=$_POST['message'];
$s="INSERT INTO `contact`(`email`,`description`) VALUES ('$eml','$msg')";
if(mysqli_query($con,$s))
{
   echo "<h3 align='center'>SEND SUCCESSFULLY<h3>";
}
else
	echo "<h3 align='center'>SENDING UNSUCCESSFUL<h3>";
}
?>		
					</form>
    	      </div>
      <script type="text/javascript" src="js/addtype4.js">	  
  </script>
</body>
</html>