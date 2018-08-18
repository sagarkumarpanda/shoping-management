<?php
include 'connection.php';
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sale</title>
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/home.js"></script>
	<script src="jQuery\jquery-3.3.1.min.js"></script>
</head>
<body style="padding:0px; margin:0px; font-family:Arial, Verdana;background-color:#fff;">
	<header>
		<nav>
			<div>
		         <img src="images/logo3.png" alt="" class="p1" />
	              <h1>$hopkeeper</h1>
	             <img src="images/logo4.png" alt="" class="p1" />
	             <a href="http://localhost:8080/project/index.php"><img src="images/logoutlogo.png" alt="" class="p2"></a>
	        </div>
	    </nav>
    </header>
	<script>
	$(function(){
		$("#admin").hide();
		$("#admin1").hide();
	});
	</script>
	<?php
$k="SELECT * FROM `admin` WHERE mobno='$nm'";
$kk=mysqli_query($con,$k);
if($kk)
{
$kkk=mysqli_fetch_row($kk);
if($kkk[2]==$nm)
{?>
<script>
$(function(){
		$("#admin").show();
		$("#admin1").show();
	});
</script>
<?php
}
}
?>
    	<div class="devider">
    <ul>
		<li>Home
			<ul>
    			<li><a href="home.php">Home</a></li>
    			<li><a href="sale.php">Sales</a></li>
			</ul>
		</li>	
    		<li id="admin">Administrator
				<ul>
				   <li><a href="http://localhost:8080/project/additem.php">Add item</a></li>
				   <li><a href="http://localhost:8080/project/addsupplier.php">Add supplier</a></li>
				   <li><a href="http://localhost:8080/project/addcategory.php">Add category</a></li>
				   <li><a href="http://localhost:8080/project/addbrand.php">Add brand</a></li>
				</ul>
			</li>
			<li id="admin1">Reports
				   <ul>
				   <li><a href="http://localhost:8080/project/adminreport.php">Admins reports</a></li>
				   <li><a href="http://localhost:8080/project/userreport.php">Users reports</a></li>
                   <li><a href="http://localhost:8080/project/itemreport.php">Item reports</a></li>			  
				  <li><a href="http://localhost:8080/project/sellreport.php">Sell reports</a></li>
				   <li><a href="http://localhost:8080/project/supplierreport.php">Supplier report</a></li>
				   <li><a href="http://localhost:8080/project/brandreport.php">Brand report</a></li>
				   <li><a href="http://localhost:8080/project/categoryreport.php">Category report</a></li>
				</ul>
			</li>
				<li>Category
				   <ul>
				   <form action="" method="post">
				   <?php
						$ca="SELECT * FROM `category`";
						$cata=mysqli_query($con,$ca);
						while($row=mysqli_fetch_row($cata))
                        {
							echo("<li><input type='radio' name='radio1' value='$row[1]'>$row[1]</li>");
						}
				   ?>
				  <li> <ul><input type="submit" value="APPLY" name="apply" class="app"></ul></li>
				   </ul>
				</li>
				<li>Brand
				   <ul>
				   <?php
						$brand1="SELECT * FROM `brand`";
						$brand2=mysqli_query($con,$brand1);
						while($row=mysqli_fetch_row($brand2))
                        {
							echo("<li><input type='radio' name='radio2' value='$row[1]'>$row[1]</li>");
						}
				   ?>
				  <li> <ul><input type="submit" value="APPLY" name="apply" class="app"></ul></li>
				   </form>
				   </ul>
				</li>
				<li>About us
				   <ul>
				    <li><a href="#">Designer details</a></li>
				   <li><a href="http://localhost:8080/project/comment.php">Users comments</a></li>
				   <li><a href="http://localhost:8080/project/mail.php">Contact</a></li>
				   <li><a href="#">Help</a></li>
				</ul>
			</li>
			<a href="#"><img src="images/cart.png" alt="" class="cart" /></a>
    			<li class="ss"><img src="images/admin.png" alt="" class="ss1" />Hii!
				<?php
				$w="SELECT * FROM `createaccount` WHERE mobileno='$nm'";
$ww=mysqli_query($con,$w);
if($ww)
{
$www=mysqli_fetch_row($ww);
if($www[4]==$nm)
{
	echo("$www[1]");
}
}
?>
				   <ul>
				   <li><a href="http://localhost:8080/project/profile.php">Profile</a></li>
				   <li><a href="#">Orders</a></li>
				   <li><a href="http://localhost:8080/project/changepassword.php">Change password</a></li>
				   <li><a href="http://localhost:8080/project/deleteaccout.php" onclick="return confirm('ARE U SURE TO DELETE THE ACCOUNT??')">Delete account</a></li>
				   </ul>
				</li>
			    		</ul>
   </div>
<div class="devider3"></div>
<div class="devider2">
<?php
if(isset($_POST['apply']))
{
$itm=$_POST['radio1'];
$itm2=$_POST['radio2'];
if(($itm!='')&&($itm2!=''))
$x="select * from sales where brand='$itm2' and category='$itm'";
elseif($itm=="" && $itm2!="")
$x="select * from sales where brand='$itm2'";
elseif($itm2=="" && $itm!='')
$x="select * from sales where category='$itm'";
else
$x="select * form sales";
$xx=mysqli_query($con,$x);
while($row=mysqli_fetch_row($xx))
{
echo("
<form action='' method='post' class='form1'>
<table class='t11'>
<tr>
<td class='td1'>$row[4]</td>
<td class='td2'>RS.- $row[7]</td>
</tr>
<tr>
<td colspan='2'><img src='images/$row[2]' alt='no img' class='imgcls'></td>
</tr>
<tr>
<td class='td4'>$row[3]</td>
<td class='td3'>$row[5]</td>
</tr>
<tr>
<td colspan=2><input type='submit' value='ADD TO CART' name='add' class='sbmt'></td>
</tr>
</table>
</form>
");
}
}
else
{
$x="select * from sales";
$xx=mysqli_query($con,$x);
while($row=mysqli_fetch_row($xx))
{
echo("
<form action='' method='post' class='form1'>
<table class='t11'>
<tr>
<td class='td1'>$row[4]</td>
<td class='td2'>RS.- $row[7]</td>
</tr>
<tr>
<td colspan='2'><img src='images/$row[2]' alt='no img' class='imgcls'></td>
</tr>
<tr>
<td class='td4'>$row[3]</td>
<td class='td3'>$row[5]</td>
</tr>
<tr>
<td><input type='submit' value='ADD TO CART' name='add' class='sbmt'></td>
<td><input type='submit' value='BUY NOW' name='add' class='sbmt'></td>
</tr>
</table>
</form>
");
}
}
?>
</div>
</body>
</html>