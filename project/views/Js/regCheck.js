function checkAscii(input){
    var flag=0;
    var inputArray = input.split('');

    for(var i=0 ; i < input.length ; i++ ){
        if( (input.charCodeAt(i) >= 97 && input.charCodeAt(i) <= 122) || input.charCodeAt(i) == 32 || ( input.charCodeAt(i) >= 65 && input.charCodeAt(i) <=90) ){
            flag++;
        }
    }
    if( flag == input.length && inputArray[0] != "." && inputArray[0] != "-"){
        return true ;
    }
    else{
        return false;
    }
}

function checkNaming(name){
    
    var name = document.getElementById("name").value ;

    if( name.length >=2 && checkAscii(name)){
    document.getElementById("nameError").innerHTML ="";
        return true;
    }else{
        document.getElementById("nameError").innerHTML ="Invalid name";
        return false;
    }
}

function checkEmail(email){
  
  var email =document.getElementById("email").value ;
   var flag=0;
    var inputArray = email.split('');
    var pos = email.indexOf("@");
    var pos2 =  email.indexOf(".");

    if( (inputArray[0] !== "@" || inputArray[0] !== "." || inputArray[pos+1] != "." ) && (pos !=-1  && pos2 !=-1)) {
      document.getElementById("emailError").innerHTML = "";
    return true;
    }	else{
      document.getElementById("emailError").innerHTML = "Invalid Email";
    return false;
    }
}



    
function checkDater(day,month,year){
        if( (day >=0 && day <=31) && (month >=1 && month <=12 ) && (year >=1900 && year <=2018 ) ){
    return true;
            
        }
        else{
    return false;
            
        }
    }

function checkValid(name,email,day,month,year,userId){
    if( checkNaming(name) && checkEmail(email) && checkDater(day,month,year) && checkID(userId) ){

        return true ;
    }
    else{

        return false ;
    }
} 

function getValue(id){
return document.getElementById(id).value ;
}


function checkEmpty(){

const name = getValue("name");
const email = getValue("email");
const userId = getValue("userId");
const password = getValue("password");
const confirmPassword = getValue("confirmPassword");
const day = getValue("day");
const month = getValue("month");
const year = getValue("year");

if( name=="" || email =="" || userId =="" || password =="" || confirmPassword =="" || day=="" || month=="" || year =="" ){

    alert("Dont Leave these fields empty !");
    
    return false ;
}
else{
    if( checkValid(name,email,day,month,year ))
    {
        return true ;
    }
    else{
        alert("Invalid peramiters !");
        return false;
    }
    
}
}