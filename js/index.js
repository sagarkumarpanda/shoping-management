function chkform(){
    var mobno=document.getElementById("m1");
    var pwrd=document.getElementById("p1");
     if(mobno.value==""){
		alert("Enter the mobileno no");
		mobno.focus();
		return false;
	}
	if(pwrd.value==""){
		alert("Enter the password");
		pwrd.focus();
		return false;		
	}
	if((pwrd.value).length<5){
		alert("The passowrd should be more than 4 charector");
		pwrd.focus();
		return false;
	}
}
function chkform2(){
	
    var uname=document.getElementById("u1");
    var mobno=document.getElementById("m2");
    var pwrd=document.getElementById("p2");
	if(uname.value==""){
		alert("Enter the user name");
		uname.focus();
		return false;
	}
   if(mobno.value==""){
		alert("Enter the mobileno no");
		mobno.focus();
		return false;
	}
	if(pwrd.value==""){
		alert("Enter the password");
		pwrd.focus();
		return false;
	}
	if((pwrd.value).length<5){
		alert("The passowrd should be more than 4 charector");
		pwrd.focus();
		return false;
	}
}
