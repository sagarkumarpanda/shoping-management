<?php
include "header.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>brand report</title>
	<link rel="stylesheet" href="css/report.css">
	<script type="text/javascript" src="js/.js"></script>
</head>
<body>
<div>
<form action="" method="post">
<label ><input type="text" name="text1" placeholder="Search here" class="input1" />
<input type="submit" value="search" name="search" class="search1" />
</label>
</form>
<div>
<?php
if(isset($_POST['delete']))
{
	$del=$_POST['idd'];
	$d="DELETE FROM `brand` WHERE id='$del'";
	$msg=mysqli_query($con,$d);
	if($msg)
		echo ("<h2 align='center'>DELETED SUCESSFULLY</h2>");
	else
		echo("<h2 align='center'>DELITION FAILED</h2>");
	}
?>
</div>
</div>
<table border=2 class="t1" cellspacing="5px" cellpadding="5px">
<tr>
<td>S/N</td>
<td>BRAND</td>
<td>DESCRIPTION</td>
<td>ACTION</td>
</tr>
<?php
if(isset($_POST['search']))
{
	$item=$_POST['text1'];
	$y="select * from brand where brand='$item'";
	$yy=mysqli_query($con,$y);
	for($i=1;$i<100;$i++){
while($row=mysqli_fetch_row($yy))
{
	echo("<form action='' method='post'>");
echo("<tr>");
echo("<td>".$i."</td>");
echo("<td>".$row[1]."</td>");
echo("<td>".$row[2]."</td>");
echo("<input type='hidden' name='idd' value='$row[0]'>");
echo("<td><input type='submit' value='Delete' name='delete' class='delete'>");
echo("</tr>");
echo("</form>");
$i++;
}
}
}
else
{
$x="select * from brand";
$xx=mysqli_query($con,$x);
for($i=1;$i<100;$i++){
while($row=mysqli_fetch_row($xx))
{
echo("<form action='' method='post'>");
echo("<tr>");
echo("<td>".$i."</td>");
echo("<td>".$row[1]."</td>");
echo("<td>".$row[2]."</td>");
echo("<input type='hidden' name='idd' value='$row[0]'>");
echo("<td><input type='submit' value='Delete' name='delete' class='delete'>");
echo("</tr>");
echo("</form>");
$i++;
}
}
}
?>
</table>
</form>
</body>
</html>
