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
	var email= document.getElementsByName("uemail")[0].value;
	var uname= document.getElementsByName("uname")[0].value;
	var pass= document.getElementsByName("pass")[0].value;
	var cpass= document.getElementsByName("cpass")[0].value;

	error='';
	error+=	checkName(fname);
	error+=	checkNumb(numb);
	error+=	checkEmail(email);

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
}

/*function checkEmail(x){
	var atcount=0;
	var dotcount=0;

	for(i=0;i<x.length;i++)
		if(x.charAt(i)=="@")
			atcount++;
		if(x.charAt(i)==".")
			dotcount++;

	if(x=="")
		return "Email not entered! \n";
	else if(!x.match(/^[a-zA-Z0-9]/))
		console.log('2113');
		return "Email must start with an alphabet or number!";
	else if(atcount!=1)	
		console.log('2113');
		return "Invalid Email!";
	else if(dotcount<1)
		console.log('2113');
		return "Invalid Email";
	else if(!x.match(/[a-zA-Z0-9_]/))
		console.log('2113');
		return "Invalid Characters!";
	else
		return "";
}*/
