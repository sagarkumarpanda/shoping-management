<?php
include "header.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User report</title>
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
</div>
<table border=2 class="t1" cellspacing="5px" cellpadding="5px">
<tr>
<td>S/N</td>
<td>FNAME</td>
<td>MNAME</td>
<td>LNAME</td>
<td>MOBILE NUMBER</td>
<td>GENDER</td>
<td>DATE OF BIRTH</td>
<td colspan="3">ACTION</td>
</tr>
<?php
if(isset($_POST['search']))
{
	$item=$_POST['text1'];
	$y="select * from createaccount where fname='$item'";
	$yy=mysqli_query($con,$y);
	for($i=1;$i<100;$i++){
while($row=mysqli_fetch_row($yy))
{
echo("<form action='' method='post'>");
echo("<tr>");
echo("<td>".$i."</td>");
echo("<td>".$row[1]."</td>");
echo("<td>".$row[2]."</td>");
echo("<td>".$row[3]."</td>");
echo("<td>".$row[4]."</td>");
echo("<td>".$row[5]."</td>");
echo("<td>".$row[6]."</td>");
echo("<td><input type='hidden' value='$row[0]' name=''>");
echo("<td><input type='submit' value='Delete' name='delete' class='delete'>");
echo("<td><input type='submit' value='Update' name='update' class='update'>");
echo("<td><input type='submit' value='Admin' name='admin' class='admin' id='admin'>");
echo("</tr>");
echo("</form>");
$i++;
}
}
}
else
{
$x="select * from createaccount";
$xx=mysqli_query($con,$x);
for($i=1;$i<100;$i++){
while($row=mysqli_fetch_row($xx))
{
echo("<form action='http://localhost:8080/project/useraction.php' method='post'>");
echo("<tr>");
echo("<td>".$i."</td>");
echo("<td>".$row[1]."</td>");
echo("<td>".$row[2]."</td>");
echo("<td>".$row[3]."</td>");
echo("<td>".$row[4]."</td>");
echo("<td>".$row[5]."</td>");
echo("<td>".$row[6]."</td>");
echo("<input type='hidden' name='idd' value='$row[0]'>");
echo("<td><input type='submit' value='Delete' name='delete' class='delete' >");
echo("<td><input type='submit' value='Update' name='update' class='update'>");
echo("<td><input type='submit' value='Admin' name='admin' class='admin' >");
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
