function getValue(id){
	return document.getElementById(id).value ;
	}

function getID(id){
		return document.getElementByID(id);
	}
function checkEmpty(){

	const x = getValue("userName");
	const y = getValue("password");

	if(x=="" && y=="" ){
		alert("Don't leave these field Empty !");
		return false ;
	}
	else{
		return true ;
	}
}