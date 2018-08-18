<?php
include "header.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add items</title>
	 <link rel="stylesheet" type="text/css" href="css/add.css">
      <script type="text/javascript" src="js/add.js"></script>
      <script src="jQuery\jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="form">
    		<form action="" method="post" id="additemform">
				<h1 class="h1">ADD ITEM</h1>
				<input  type="file" name="select" class="brwg" id='sel'>
   					   <p>PRODUCT NAME</p>
    					<input type="text" name="pname" placeholder="ENTER PRODUCT NAME" class="r1" id="pname1"/>
    				    <p>CATEGORY <select name="category" class="s1" id="category3">
						<?php
						$ca1="SELECT * FROM `category`";
						$cata1=mysqli_query($con,$ca1);
						while($row=mysqli_fetch_row($cata1))
                        {
							echo("<option value='$row[1]'>$row[1]</option>");
						}
						?>
							 </select></P>
    					<p>BRAND<select name="brand" class="s1" id="brand2">
						<?php
						$br1="SELECT * FROM `brand`";
						$bra1=mysqli_query($con,$br1);
						while($row=mysqli_fetch_row($bra1))
                        {
							echo("<option value='$row[1]'>$row[1]</option>");
						}
						?>
							</select></P>
						<p>PROCUCT UNIT</p>
    					  <input type="text" name="ino" placeholder="ENTER PRODUCT UNIT" class="r1" id="ino1"/>
    					 <p>PRICE PER UNIT</p>
    					   <input type="text" name="price" placeholder="ENTER ITEM PRICE IN RUPPES" class="r1" id="price1"/>
    					<p>DESCRIPTION</p>
						  <textarea name="message" rows="3" cols="20" class="text1" id="des"></textarea>
					    <p><input type="submit" name="add" value="ADD" />
					     	<input type="reset" value="RESET"  /></p>
<?php
if(isset($_POST['add']))
{
$img=$_POST['select'];
$pname1=strtoupper($_POST['pname']);
$category1=$_POST['category'];
$brand1=$_POST['brand'];
$ino1=$_POST['ino'];
$price1=$_POST['price'];
$msg=$_POST['message'];
$s="INSERT INTO `items`(`image`,`pname`, `category`, `brand`, `itemunit`, `itemprice`, `description`) VALUES ('$img','$pname1','$category1','$brand1','$ino1','$price1','$msg')";
if(mysqli_query($con,$s))
{
   echo "<h3 align='center'>PRODUCT ADDED SUCCESSFULLY<h3>";
}
else
	echo "<h3 align='center'>PRODUCT ADDING UNSUCCESSFUL<h3>";
}
?>		
		</form>
    </div>
 <script type="text/javascript" src="js/add2.js">	  
  </script>
</body>
</html>