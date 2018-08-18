function chkcreateaccountform(){
	var fname=document.getElementById("fname1");
	var mname=document.getElementById("mname1");
	var lname=document.getElementById("lname1");
	var mno=document.getElementById("mno1");
	var init=document.getElementById("pwrd1");
	var sec=document.getElementById("pwrd2");
	
	if(fname.value==""){
		alert("Enter the first name");
		fname.focus();
		return false;
	}
	if(mname.value==""){
		alert("Enter the middle name");
		mname.focus();
		return false;
	}
	if(lname.value==""){
		alert("Enter the last name");
		lname.focus();
		return false;
	}
	if(mno.value==""){
		alert("Enter the mobile no");
		mno.focus();
		return false;
	}
	if(init.value==""){
		alert("Enter the password \n");
		init.focus();
		return false;
	}
	if(init.value != sec.value){
		alert("Two password you entered are not same\n"+"please renter both now");
		init.focus();
		return false;
	}
	else
		return true;
}