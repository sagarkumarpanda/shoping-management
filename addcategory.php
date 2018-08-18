<?php
include "header.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add category</title>
	 <link rel="stylesheet" type="text/css" href="css/addtype.css">
      <script type="text/javascript" src="js/addtype.js"></script>
      <script src="jQuery\jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="form">
    		<form action="" method="post" id="addcategoryform">
    			<h1 class="h1">ADD CATEGORY</h1>
    					<p>CATEGORY NAME</p>
    					    <input type="text" name="cname" placeholder="ENTER CATEGORY NAME" class="r1" id="cname1"/>
    					<p>DESCRIPTION</p>
						  <textarea name="message" rows="3" cols="20" class="text1"id="des"></textarea>
					    <p><input type="submit" name="add" value="ADD" />
					     	<input type="reset" value="RESET" /></p>
							<?php
if(isset($_POST['add']))
{
$name=strtoupper($_POST['cname']);
$msg=$_POST['message'];
$s="INSERT INTO `category`(`category`,`description`) VALUES ('$name','$msg')";
if(mysqli_query($con,$s))
{
   echo "<h3 align='center'>CATEGORY ADDED SUCCESSFULLY<h3>";
}
else
	echo "<h3 align='center'>CATEGORY ADDING UNSUCCESSFUL<h3>";
}
?>		
					</form>
    	      </div>
      <script type="text/javascript" src="js/addtype2.js">	  
  </script>
</body>
</html>