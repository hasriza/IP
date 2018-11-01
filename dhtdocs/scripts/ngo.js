/*Start a campaign modal*/
var ngobt=document.getElementById("ngobt");
var ncontainer=document.getElementById("ngo_cont");
var close=document.getElementById("close_btn");

ngobt.addEventListener('click', ngoOpen);
close.addEventListener('click', ngoClose)
window.addEventListener('click', outside)

function ngoOpen(){
	ncontainer.style.display="block";
}

function ngoClose(){
	ncontainer.style.display="none";
}

function outside(e){
	if(e.target == ncontainer){
		ncontainer.style.display = 'none';
	}
}
