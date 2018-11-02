/*Request for products campaign*/
var comp=document.getElementById("compbt");
var newComp=document.getElementById("comp_cont");
var close=document.getElementById("close_btn45");

comp.addEventListener('click', openComp);
close.addEventListener('click', closeComp);
window.addEventListener('click', outside);

function openComp(){
	newComp.style.display="block";
}

function closeComp(){
	newComp.style.display="none";
}

function outside(e){
	if(e.target == newComp){
		newComp.style.display = "none";
	}
}

/*Update products campaign*/
var prod=document.getElementById("prodbt");
var newProd=document.getElementById("prod_cont");
var close1=document.getElementById("close_btn90");

prod.addEventListener('click', openProd);
close1.addEventListener('click', closeProd);
window.addEventListener('click', outside1);

function openProd(){
	newProd.style.display="block";
}

function closeProd(){
	newProd.style.display="none";
}

function outside1(e){
	if(e.target == newProd){
		newProd.style.display = "none";
	}
}
