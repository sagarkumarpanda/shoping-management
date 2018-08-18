<?php
include "header.php";
include "connection.php";
?>
<html>
<head><title>Profile</title>
	 <link rel="stylesheet" type="text/css" href="css/report.css">
	 <script src="jQuery\jquery-3.3.1.min.js"></script>
	 </head>
<body>
<form>
<table border=2 class="t1" cellspacing="5px" cellpadding="5px" id="tb1">
<?php
$w="SELECT * FROM `createaccount` WHERE mobileno='$nm'";
$ww=mysqli_query($con,$w);
if($ww)
{
$row=mysqli_fetch_row($ww);
if($row[4]==$nm)
{
echo("<br/><br/><br/><br/><br/><br/>");
echo("<tr>");
echo("<td colspan='2' align='center' class='pfile'>PROFILE</td>");
echo("</tr>");
echo("<br/><br/><br/>");
echo("<tr>");
echo("<td>ID</td>");
echo("<td>".$row[0]."</td>");
echo("</tr>");
echo("<tr>");
echo("<td>NAME</td>");
echo("<td>".$row[1]." ".$row[2]." ".$row[3]."</td>");
echo("</tr>");
echo("<tr>");
echo("<td>MOBILE NO</td>");
echo("<td>".$row[4]."</td>");
echo("</tr>");
echo("<tr>");
echo("<td>GENDER</td>");
echo("<td>".$row[5]."</td>");
echo("</tr>");
echo("<tr>");
echo("<td>DATE OF BIRTH</td>");
echo("<td>".$row[6]."</td>");
echo("</tr>");
}
}
?>
</table>
</form>
</body>
</html>