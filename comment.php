<?php
include "header.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>COMMENTS</title>
	<link rel="stylesheet" type="text/css" href="css/report.css">
</head>
<body>
<div>
<form action="" method="post">
<label ><input type="text" name="text1" placeholder="Search here" class="input1" />
<input type="submit" value="search" name="search" class="search1" />
</label>
</form>
</div>
<table border=2 class="t1" cellspacing="5px" cellpadding="5px">
<?php
if(isset($_POST['search']))
{
	$item=$_POST['text1'];
	$y="select * from contact where email='$item'";
	$yy=mysqli_query($con,$y);
while($row=mysqli_fetch_row($yy))
{
echo("<tr>");
echo("<td>".$row[0]."</td>");
echo("<td>".$row[1]."</td>");
echo("</tr>");
echo("<tr>");
echo("<td colspan='2'>".$row[2]."</td>");
echo("</tr>");
}
}
else
{
$x="select * from contact";
$xx=mysqli_query($con,$x);
while($row=mysqli_fetch_row($xx))
{
echo("<tr>");
echo("<td>".$row[0]."</td>");
echo("<td>".$row[1]."</td>");
echo("</tr>");
echo("<tr>");
echo("<td colspan='2'>".$row[2]."</td>");
echo("</tr>");
}
}
?>
</table>
</form>
</body>
</html>
