/*Start a campaign modal*/
var vol2=document.getElementById("vol2");
var newcamp=document.getElementById("newcamp");
var close=document.getElementById("close_btn");

vol2.addEventListener('click', openCamp);
close.addEventListener('click', closeCamp)
window.addEventListener('click', outside)

function openCamp(){
	newcamp.style.display="block";
}

function closeCamp(){
	newcamp.style.display="none";
}

function outside(e){
	if(e.target == newcamp){
		newcamp.style.display = 'none';
	}
}
