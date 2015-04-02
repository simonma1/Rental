function chkFirstName(){
	var name = document.getElementsByName("name");
	var pos = name[0].value.search(/^([A-Z]|[a-z])+\-?([A-Z]|[a-z])+$/);
	
	if(pos !=0){
		alert("Incorrect Form");
		return false;
	}
	return true;
}

function chkLastName(){
	var name = document.getElementsByName("lastName");
	var pos = name[0].value.search(/^([A-Z]|[a-z])+\-?([A-Z]|[a-z])+$/);
	
	if(pos !=0){
		alert("Incorrect Form");
		return false;
	}
	return true;
}


function chkPhone(){
	var doc = document.getElementsByName("phonenum");
	var pos = doc[0].value.search(/^\(\d{3}\)\d{3}\-\d{4}$/);
	
	if(pos !=0){
		alert("Incorrect Form");
		return false;
	}
	return true;
}

function chkEmail(){
	var doc = document.getElementsByName("email");
	var pos = doc[0].value.search(/^\w+\@\w+\.[a-z]+$/);
	
	if(pos !=0){
		alert("Incorrect Form");
		return false;
	}
	return true;
}

function chkUsr(){
	var doc = document.getElementsByName("usrName");
	var pos = doc[0].value.search(/^(\d|[a-z]|[A-Z]){6,}$/);
	
	if(pos !=0){
		alert("Incorrect Form");
		return false;
	}
	return true;
}

function chkPswd(){
	var doc = document.getElementById("initial");
	var pos = doc.value.search(/^([A-Z,a-z]*[A-Z,a-z]\d([A-Z,a-z]|\d)*)|(\d*\d[A-Z,a-z]([A-Z,a-z]|\d)*)$/);
	
	if(pos !=0){
		alert("Incorrect Form");
		return false;
	}else if(doc.value.length<6){
		alert("Your password must be at least 6 characters");
		return false;
	}
	return true;
}


function confirmPswd(){
	var doc = document.getElementById("second");
	var init = document.getElementById("initial");
	
	if(doc.value == ""){
		alert("You did not confirm your password");
		return false;
	}
	
	if(doc.value != init.value){
		alert("Your passwords do not match");
		return false;
	}
	
	return true;
}

function chkAll(){
	chkFirstName();
	chkLastName();
	chkPhone();
	chkEmail();
	chkUsr();
	chkPswd();
	confirmPswd()
}