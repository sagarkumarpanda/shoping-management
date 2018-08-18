<?php
include "connection.php";
if(isset($_POST['delete']))
{
	$del=$_POST['idd'];
	$d="DELETE FROM `supplier` WHERE id='$del'";
	$msg=mysqli_query($con,$d);
	if($msg)
		header("location:supplierreport.php");
	else
		echo("<h2 align='center'>DELITION FAILED</h2>");
}
elseif(isset($_POST['update']))
{
	$itm=$_POST['idd'];
	$d="select * FROM `supplier` WHERE id='$itm'";
	$msg=mysqli_query($con,$d);
	while($row=mysqli_fetch_row($msg))
	{
		echo("<html>
<head>
	<title>Update supplier</title>
	 <link rel='stylesheet' type='text/css' href='css/updatesupplier.css'>
      <script type='text/javascript' src='js/addsupplier.js'></script>
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
    		<form action='http://localhost:8080/project/supplierupdate.php' method='post' id='addsupplierform'>
    			<h1 class='h1'>UPDATE SUPPLIER</h1>
    					<p>SUPPLIER NAME</p>
    					    <input type='text' name='pname' value='$row[1]' placeholder='ENTER SUPPLIER NAME' class='r1' id='sname1'/>
    				    <p>MOBILE NO</p>
    					   <input type='text' name='mobno' value='$row[2]' placeholder='ENTER THE MOBILE NO' class='r1' id='m1' />
						<p>EMAIL</p>
    					   <input type='email' name='email1' value='$row[3]' placeholder='ENTER THE EMAIL' class='r1' id='e1'/>
						<p>ADDRESS1</p>
    					   <input type='text' name='addr1' value='$row[4]' placeholder='ENTER THE CURRENT ADDRESS' class='r1' id='ad1'/>
						<p>ADDRESS2</p>
    					   <input type='text' name='addr2' value='$row[5]' placeholder='ENTER THE PERMANECT ADDRESS' class='r1' id='ad2'/>
						<p>PRODUCT UNIT</p>
    					   <input type='text' name='ino' value='$row[8]' placeholder='ENTER NO OF ITEM' class='r1' id='ino1'/>
						<p>PRICE PER UNIT</p>
    					   <input type='text' name='price' value='$row[9]' placeholder='ENTER ITEM PRICE IN RUPPES' class='r1' id='price1'/>
    					<p>DESCRIPTION</p>
						  <textarea name='message' rows='3' cols='25' value='$row[10]' class='text1' id='des'></textarea>
						  <input type='hidden' name='m' value='$row[0]'/>	
					   <p><input type='submit' name='update' value='Update' />
					     	<input type='reset' value='RESET' /></p>");
	}
}
?>