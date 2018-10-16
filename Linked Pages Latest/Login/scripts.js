//Register Modal 
//Get close button
var close=document.getElementById("close_btn");
//Get login button
var login=document.getElementById("login_btn");
//Get container of form 
var container=document.getElementById("f_cont");

//Listen for click on register, page opens
login.addEventListener('click', open_page);

function open_page(){
	container.style.display = 'block';
}

//Listen for click on close, page closes
close.addEventListener('click', close_page);

function close_page(){
	container.style.display = 'none';
}

//Listen for Outside Click
window.addEventListener('click', outside);

function outside(e){
	if(e.target == f_cont){
		container.style.display = 'none';
	}
}

//Registration Form Validation
function validation(form){
	var fname= document.getElementsByName("fname")[0].value;
	var numb= document.getElementsByName("numb")[0].value;
	var add= document.getElementsByName("add")[0].value;
	var email1= document.getElementsByName("uemail")[0].value;
	var uname= document.getElementsByName("uname")[0].value;
	var pass= document.getElementsByName("pass")[0].value;
	var cpass= document.getElementsByName("cpass")[0].value;

	error='';
	error+=	checkName(fname);
	error+=	checkNumb(numb);
	error+=	checkAddress(add);
	error+=	checkEmail(email1);
	error+= checkUsername(uname);
	error+= checkPassword(pass);
	error+= confirmPassword(cpass,pass);

	if(error=='')
		alert("Registered successfully!");

	if(error=='')
		return true;
	else
		alert(error);
		return false;

function checkName(x){
	if(x=="")
		return "Name not entered! \n";
	else if(x.match(/[A-Za-z]+$/))
		return "";
	else
		return "Name can only contain alphabets! \n";
}
function checkNumb(x){
	if(x=="")
		return "Contact Number not entered! \n";
	else if(x.match(/[0-9]+$/))
		return "";
	else
		return "Number can only contain digits! \n";
}
function checkAddress(x){
	if(x=="")
		return "Address not entered! \n";
	else
		return "";
}
function checkEmail(x){
	var atcount=0;
	var dotcount=0;
	for(var i=0;i<x.length;i++){
		if(x.charAt(i)=='@')
			atcount++;
		if(x.charAt(i)=='.')
			dotcount++;
	}		

	if(x=="")
		return "Email not entered! \n";
	else if(/[^a-zA-Z0-9_.@]/.test(x))
		return "Invalid Characters! \n";
	else if(atcount!=1 || dotcount!=1 || atcount>1 )	
	 	return "Invalid Email! \n";
	else if(!x.match(/^[a-zA-Z0-9]/))
	 	return "Cannot begin with characters specified! \n";
	else
		return "";
}

function checkUsername(x){
	if(x=="")
		return "Username not entered! \n";
	else if (x.length<7)
		return "Username too short! \n";
	else if(!x.match(/[0-9]+$/))
	 	return "Username must contain a number!\n";
	else
		return "";
}

function checkPassword(x){
	if(x=="")
		return "Password not entered! \n";
	else if (x.length<7)
		return "Password too short! \n";
	else if(!x.match(/[0-9]+$/))
		return "Password must contain a number!\n";
	else
		return "";
}

function confirmPassword(x,y){
	if(x=="")
		return "You need to confirm your Password! \n";
	else if(x!=y)
		return "Passwords do not match! \n";
	else
		return "";
}

}

