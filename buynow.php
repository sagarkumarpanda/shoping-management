<?php
include 'connection.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>buy now</title>
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/home.js"></script>
	<script src="jQuery\jquery-3.3.1.min.js"></script>
</head>
<body>
<?php
if(isset($_POST['buy']))
{
$itemid=$_POST['j1'];
$x="select * from item where id='$itemid'";
while($row=mysqli_fetch_row($con,$x))
{
   ?>
 <form action="" method="">
 <table border=1>
 <tr>
 <td></td>
 <td>item name</td>
 <td>quantity</td>
<td>price</td>   
<td>total</td>
<td>action</td> 
</tr>
<tr>
<td></td>
 <td>$row[1]</td>
 <td>$row[]</td>
<td>$row[6]</td>   
<td></td>
<td><input type="submit" value="delete" name="delete"></td> 
</tr>  
   </table>
 </form>  
   <?php
}
}
?>
</body>
</html>