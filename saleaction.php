<?php
include "connection.php";
if(isset($_POST['delete']))
{
	$del=$_POST['idd'];
	$d="DELETE FROM `sales` WHERE id='$del'";
	$msg=mysqli_query($con,$d);
	if($msg)
		header("location:sellreport.php");
	else
		echo("<h2 align='center'>DELITION FAILED</h2>");
}
elseif(isset($_POST['update']))
{
	$itm=$_POST['idd'];
	$d="select * FROM `sales` WHERE id='$itm'";
	$msg=mysqli_query($con,$d);
	while($row=mysqli_fetch_row($msg))
	{
		echo("<html>
<head>
	<title>UPDATE SALES</title>
	 <link rel='stylesheet' type='text/css' href='css/updateaccount.css'>
      <script type='text/javascript' src='js/add.js'></script>
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
    		<form action='http://localhost:8080/project/saleupdate.php' method='post' id='additemform'>
				<h1 class='h1'>UPDATE SALE</h1>
					    <p>PROCUCT UNIT</p>
    					  <input type='text' name='ino' value='$row[6]' placeholder='ENTER PRODUCT UNIT' class='r1' id='ino1'/>
    					 <p>PRICE PER UNIT</p>
    					   <input type='text' value='$row[7]' name='price' placeholder='ENTER ITEM PRICE IN RUPPES' class='r1' id='price1'/>
    					<p>DESCRIPTION</p>
						  <textarea name='message' rows='3' cols='20' value='$row[8]' class='text1' id='des'></textarea>					    
						<input type='hidden' name='x' value='$row[0]'>
						<p><input type='submit' name='add' value='UPDATE' />
					     	<input type='reset' value='RESET'  /></p>
		</form>
    </div>
 <script type='text/javascript' src='js/add2.js'>	  
  </script>
</body>
</html>");
}
}