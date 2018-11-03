//Register Modal 
//Get close button
var close=document.getElementById("close_btn");
//Get login button
var register=document.getElementById("register_btn");
//Get container of form 
var container=document.getElementById("f_cont");
var container1=document.getElementById("l_cont");
var container=document.getElementById("l_cont");

//Listen for click on register, page opens
register.addEventListener('click', open_page);

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
		return false;

function checkName(x){
	if(x=="")
		document.getElementById('nameerr').innerHTML = "Name not entered! \n";
		//return "Name not entered! \n";
	else if(x.match(/[A-Za-z ]+$/))
		return "";
	else
		document.getElementById('nameerr').innerHTML = "Name can only contain alphabets! \n";
		//return "Name can only contain alphabets! \n";
}
function checkNumb(x){
	if(x=="")
		document.getElementById('contacterr').innerHTML = "Contact Number not entered! \n";
		//return "Contact Number not entered! \n";
	else if(x.match(/[0-9]+$/))
		return "";
	else
		document.getElementById('contacterr').innerHTML = "Number can only contain digits! \n";
		//return "Number can only contain digits! \n";
}
function checkAddress(x){
	if(x=="")
		document.getElementById('adderr').innerHTML = "Address not entered! \n";
		//return "Address not entered! \n";
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
		document.getElementById('mailerr').innerHTML = "Email not entered! \n";
		//return "Email not entered! \n";
	else if(/[^a-zA-Z0-9_.@]/.test(x))
		document.getElementById('mailerr').innerHTML = "Invalid Characters! \n";
		//return "Invalid Characters! \n";
	else if(atcount!=1 && dotcount<=1 )	
		document.getElementById('mailerr').innerHTML = "Invalid Email! \n";
	 	//return "Invalid Email! \n";
	else if(!x.match(/^[a-zA-Z0-9]/))
		document.getElementById('mailerr').innerHTML = "Cannot begin with characters specified! \n";
	 	//return "Cannot begin with characters specified! \n";
	else
		return "";
}

function checkUsername(x){
	if(x=="")
		document.getElementById('usererr').innerHTML = "Username not entered! \n";
		//return "Username not entered! \n";
	else if (x.length<7)
		document.getElementById('usererr').innerHTML = "Username too short! \n";
		//return "Username too short! \n";
	else if(!x.match(/[0-9]+$/))
		document.getElementById('usererr').innerHTML = "Username must contain a number!\n";
	 	//return "Username must contain a number!\n";
	else
		return "";
}

function checkPassword(x){
	if(x=="")
		document.getElementById('passerr').innerHTML = "Password not entered! \n";
		//return "Password not entered! \n";
	else if (x.length<7)
		document.getElementById('passerr').innerHTML = "Password too short! \n";
		//return "Password too short! \n";
	else if(!x.match(/[0-9]+$/))
		document.getElementById('passerr').innerHTML = "Password must contain a number!\n";
		//return "Password must contain a number!\n";
	else
		return "";
}

function confirmPassword(x,y){
	if(x=="")
		document.getElementById('conpasserr').innerHTML = "You need to confirm your Password! \n";
		//return "You need to confirm your Password! \n";
	else if(x!=y)
		document.getElementById('conpasserr').innerHTML = "Passwords do not match! \n";
		//return "Passwords do not match! \n";
	else
		return "";
}

}

//Login Modal
//Get the login and container elements
var login=document.getElementById('login_btn');
var close1=document.getElementById('close_btn1');
var lcontainer=document.getElementById('l_cont');

login.addEventListener('click', open_login);

function open_login(){
	lcontainer.style.display='block';
}

//Listen for click on close, page closes
close1.addEventListener('click', close_login);

function close_login(){
	lcontainer.style.display = 'none';
}

//Listen for Outside Click
window.addEventListener('click', outsideLogin);

function outsideLogin(e){
	if(e.target == l_cont){
		lcontainer.style.display = 'none';
	}
}