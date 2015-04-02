function preferenceForm() {
	var parent = document.getElementById("main");
	var main = document.getElementById("tenantProfil");
	
	var element = document.createElement("form");
	var input = document.createElement("input");
	input.type = "text";
	
	element.appendChild(input);
	
	parent.replaceChild(element,main);
	
	//Might me implement later on. Not sure what to do with it yet
}