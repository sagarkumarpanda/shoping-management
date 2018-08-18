<?php
include "connection.php";
if(isset($_POST['delete']))
{
	$del=$_POST['idd'];
	$d="DELETE FROM `createaccount` WHERE id='$del'";
	$msg=mysqli_query($con,$d);
	if($msg)
		header("location:userreport.php");
	else
		echo("<h1 align='center'>DELITION FAILED</h1>");
}
elseif(isset($_POST['update']))
{
	$itm=$_POST['idd'];
	$d="select * FROM `createaccount` WHERE id='$itm'";
	$msg=mysqli_query($con,$d);
	while($row=mysqli_fetch_row($msg))
	{
		echo("<html>
<head>
	<title>Update account</title>
	 <link rel='stylesheet' type='text/css' href='css/updateaccount.css'>
      <script type='text/javascript' src='js/createaccount.js'></script>
      <script src='jQuery\jquery-3.3.1.min.js'></script>
</head>
<body>
<header>
		<nav>
			<div>
		         <img src='images/logo3.png' alt='' class='p1' />
	              <h1>\$hopkeeper</h1>
	             <img src='images/logo4.png' alt='' class='p1' />
	        </div>
	    </nav>
    </header>
<div class='form'>
<form action='http://localhost:8080/project/userupdate.php' method='post' id='createaccountform'>
<h1 class='h1'>UPDATE ACCOUNT</h1>
<p>FIRST NAME</p>
   <input type='text' name='fname' value='$row[1]' maxlength='10' placeholder='enter first name' class='r1' id='fname1'/>
    <p>MIDDLE NAME</p>
   <input type='text' name='mname' value='$row[2]' maxlength='10' placeholder=' enter middle name' class='r1' id='mname1' />
    <p>SURE NAME</p>
   <input type='text' name='sname' value='$row[3]' maxlength='10' placeholder=' enter sure name' class='r1' id='lname1'/>
   <p>GENDER</p>  
   <input type='radio' name='r1' value='male' align='center' checked='$row[5]' />MALE
   <input type='radio' name='r1' value='female' />FEMALE
   <p>BIRTHDATE</p>
	<input type='date' name='d1'  class='r1' value='$row[6]' />
<input type='hidden' name='m' value='$row[4]'/>	
<p><input type='submit' name='update' value='UPDATE' />
<input type='reset' value='RESET'/></p>				
</form>
   </div>
   <script type='text/javascript' src='js/createaccount2.js'>	  
  </script>
</body>
</html>
");
}
}
elseif(isset($_POST['admin']))
{
	$admn=$_POST['idd'];
	$d="select * FROM `createaccount` WHERE id='$admn'";
	$msg=mysqli_query($con,$d);
	while($row=mysqli_fetch_row($msg))
	{
	$s="INSERT INTO `admin`( `uname`, `mobno`) VALUES ('$row[1]','$row[4]')";
if(mysqli_query($con,$s))	
	header("location:home.php");
else
	echo "<h1 align='center'>ADMIN ADDING UNSUCCESSFUL<h1>";
}
}
?>
