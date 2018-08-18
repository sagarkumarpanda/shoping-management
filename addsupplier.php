<?php
include "header.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add supplier</title>
	 <link rel="stylesheet" type="text/css" href="css/addsupplier.css">
      <script type="text/javascript" src="js/addsupplier.js"></script>
      <script src="jQuery\jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="form">
    		<form action="" method="post" id="addsupplierform">
    			<h1 class="h1">ADD SUPPLIER</h1>
    					<p>SUPPLIER NAME</p>
    					    <input type="text" name="pname" placeholder="ENTER SUPPLIER NAME" class="r1" id="sname1"/>
    				    <p>MOBILE NO</p>
    					   <input type="text" name="mobno" placeholder="ENTER THE MOBILE NO" class="r1" id="m1" />
						<p>EMAIL</p>
    					   <input type="email" name="email1" placeholder="ENTER THE EMAIL" class="r1" id="e1"/>
						<p>ADDRESS1</p>
    					   <input type="text" name="addr1" placeholder="ENTER THE CURRENT ADDRESS" class="r1" id="ad1"/>
						<p>ADDRESS2</p>
    					   <input type="text" name="addr2" placeholder="ENTER THE PERMANECT ADDRESS" class="r1" id="ad2"/>
						<p>CATEGORY</P>
						<?php
						$ca2="SELECT * FROM `category`";
						$cata2=mysqli_query($con,$ca2);
						while($row=mysqli_fetch_row($cata2))
                        {
							echo("<input type='radio' name='c1'id='category3' value='$row[1]'>$row[1]");
						}
				   ?>
						<p>BRAND</p>
						<?php
						$br2="SELECT * FROM `brand`";
						$bra2=mysqli_query($con,$br2);
						while($row=mysqli_fetch_row($bra2))
                        {
							echo("<input type='radio' name='b1' id='brand2' value='$row[1]'>$row[1]");
						}
				   ?>
						<p>PRODUCT UNIT</p>
    					   <input type="text" name="ino" placeholder="ENTER NO OF ITEM" class="r1" id="ino1"/>
						<p>PRICE PER UNIT</p>
    					   <input type="text" name="price" placeholder="ENTER ITEM PRICE IN RUPPES" class="r1" id="price1"/>
    					<p>DESCRIPTION</p>
						  <textarea name="message" rows="3" cols="25" class="text1" id="des"></textarea>
					    <p><input type="submit" name="add" value="ADD" />
					     	<input type="reset" value="RESET" /></p>
<?php
if(isset($_POST['add']))
{
$pname1=strtoupper($_POST['pname']);
$mob1=$_POST['mobno'];
$email2=$_POST['email1'];
$address1=$_POST['addr1'];
$address2=$_POST['addr2'];
$category1=$_POST['c1'];
$brand1=$_POST['b1'];
$ino1=$_POST['ino'];
$price1=$_POST['price'];
$msg=$_POST['message'];
$s="INSERT INTO `supplier`(`name`, `mobile`, `email`, `address1`, `address2`, `category`, `brand`, `productunit`, `price`, `description`) VALUES ('$pname1','$mob1','$email2','$address1','$address2','$category1','$brand1','$ino1','$price1','$msg')";
if(mysqli_query($con,$s))
{
   echo "<h3 align='center'>SUPPLIER ADDED SUCCESSFULLY<h3>";
}
else
	echo "<h3 align='center'>SUPPLIER ADDING UNSUCCESSFUL<h3>";
}
?>		
					</form>
    	      </div>
      <script type="text/javascript" src="js/addsupplier2.js">	  
  </script>
</body>
</html>