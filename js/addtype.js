function chkaddcategoryform(){
	var category=document.getElementById("cname1");
	var description=document.getElementById("des");
	
	if(category.value==""){
		alert("Enter the category");
		category.focus();
		return false;
	}
	if(description.value==""){
		alert("Enter the description of product \n");
		description.focus();
		return false;
	}
}
function chkaddbrandform(){
	var brand=document.getElementById("bname1");
	var description=document.getElementById("des");
	
	if(brand.value==""){
		alert("Enter the brand name");
		brand.focus();
		return false;
	}
	if(description.value==""){
		alert("Enter the description of product \n");
		description.focus();
		return false;
	}
}
function chkaddemailform(){
	var email=document.getElementById("email1");
	var description=document.getElementById("des");
	
	if(email.value==""){
		alert("Enter the email");
		email.focus();
		return false;
	}
	if(description.value==""){
		alert("Enter the description of product \n");
		description.focus();
		return false;
	}
}
