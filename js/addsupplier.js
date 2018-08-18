function chkaddsupplierform(){
	var sname=document.getElementById("sname1");
	var mob=document.getElementById("m1");
	var email=document.getElementById("e1");
	var addr1=document.getElementById("ad1");
	var addr2=document.getElementById("ad2");
	var category=document.getElementById("category3");
	var brand=document.getElementById("brand2");
	var itemno=document.getElementById("ino1");
	var price=document.getElementById("price1");
	var description=document.getElementById("des");
	
	if(sname.value==""){
		alert("Enter the supplier name");
		sname.focus();
		return false;
	}
	if(mob.value==""){
		alert("Enter the mobile no");
		mob.focus();
		return false;
	}
	if(email.value==""){
		alert("Enter the email");
		email.focus();
		return false;
	}
	if(addr1.value==""){
		alert("Enter the address");
		addr1.focus();
		return false;
	}
	if(addr2.value==""){
		alert("Enter the permanent address");
		addr2.focus();
		return false;
	}
	
	if(category.value==""){
		alert("Enter the category");
		category.focus();
		return false;
	}
	if(brand.value==""){
		alert("Enter the brand");
		brand.focus();
		return false;
	}
	if(itemno.value==""){
		alert("Enter the no of item");
		itemno.focus();
		return false;
	}
	if(price.value==""){
		alert("Enter the price of product \n");
		price.focus();
		return false;
	}
	if(description.value==""){
		alert("Enter the description of product \n");
		description.focus();
		return false;
	}
}