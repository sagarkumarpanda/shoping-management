function chkadditemform(){
	var img=document.getElementById("sel");
	var pname=document.getElementById("pname1");
	var category=document.getElementById("category3");
	var brand=document.getElementById("brand2");
	var itemno=document.getElementById("ino1");
	var price=document.getElementById("price1");
	var description=document.getElementById("des");
	
	if(img.value==""){
		alert("select image form file");
		return false;
	}
	if(pname.value==""){
		alert("Enter the product name");
		pname.focus();
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
function chkaddsaleform(){
	var pname=document.getElementById("pname1");
	var category=document.getElementById("category3");
	var brand=document.getElementById("brand2");
	var itemno=document.getElementById("ino1");
	var price=document.getElementById("price1");
	var description=document.getElementById("des");
	
	if(pname.value==""){
		alert("Enter the product name");
		pname.focus();
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