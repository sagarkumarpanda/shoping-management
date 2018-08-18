function chkform(){
	var mbn=document.getElementById("l1");
    var fname=document.getElementById("l2");
    var dob=document.getElementById("l3");
if(mbn.value==""){
		alert("Enter the mobileno no");
		mbn.focus();
		return false;
	}
	if(fname.value==""){
		alert("Enter the first name");
		fname.focus();
		return false;
	}
	if(dob.value==""){
		alert("Enter the date of birth");
		dob.focus();
		return false;
	}
	
}
function chkform2(){
    var s1=document.getElementById("p1");
    var s2=document.getElementById("p2");
if(s1.value==""){
		alert("Enter the passowrd");
		s1.focus();
		return false;
	}
	if((s1.value).length<5){
		alert("The passowrd should be more than 4 charector");
		s1.focus();
		return false;
	}
	if(s2.value==""){
		alert("Enter the conform password");
		s2.focus();
		return false;
	}
	
	if((s2.value).length<5){
		alert("The passowrd should be more than 4 charector");
		s2.focus();
		return false;
	}
}
