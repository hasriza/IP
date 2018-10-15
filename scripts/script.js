window.onscroll = function() {myFunction()};
var hit=document.getElementById("hit");
hit.onmouseover=function() {dropDown()};
hit.onmouseout=function() {takeBack()};
var dropper=document.getElementById("dropdown");
dropper.onmouseover=function() {dropDown()};
dropper.onmouseout=function() {takeBack()};
var navbar = document.getElementById("mainnav");
var hd = document.getElementById("head");
var bd=document.querySelector("body");
var hdstyle = getComputedStyle(hd);
var bdstyle = getComputedStyle(bd); 
var img=document.getElementById("img1");
img.onclick=function(){clicked()};
var opt=0;
var sticky = navbar.offsetTop;
window.onresize=function(){if(document.getElementById("section")){document.getElementById("section").style.setProperty('margin-left','0px')};
if(window.innerWidth>1530)
{
document.getElementById("contact").style.setProperty('width','100%');
document.getElementById("mainnav").style.setProperty('display','block');}
else{
	if(document.getElementById("section")){
	document.getElementById("section").style.setProperty('top','0');}
	clickclose();
}};

function clicked(){
	if(opt==0){
		clickopen();
	}
	else{
		clickclose();
	}
}

function clickopen(){
	opt=1;
	document.getElementById("contact").style.setProperty('width','60%');
	document.getElementById("contact").style.setProperty('margin-left','280px');
	if(document.getElementById("section")){
	document.getElementById("section").style.setProperty('margin-left','280px');}
	navbar.style.setProperty('display','block');	
}

function clickclose(){
	opt=0;
	document.getElementById("contact").style.setProperty('width','100%');
	if(document.getElementById("section")){
	document.getElementById("section").style.setProperty('margin-left','10px');}
	navbar.style.setProperty('display','none');	
}

function dropDown(){
	dropHeight();
	dropper.style.setProperty('max-height','700px');
}

function dropHeight(){
	var listheight=hit.offsetTop;
	var listleft=hit.offsetLeft;
	if(window.innerWidth>1530)
	{
		dropper.style.setProperty('top',listheight+32+'px');
		dropper.style.setProperty('left',listleft-55+'px');
	}
	else{
		dropper.style.setProperty('top',listheight-11+'px');
		dropper.style.setProperty('left',listleft-54+'px');
	}
}

function takeBack(){
	dropper.style.setProperty('max-height','0px');
}

function myFunction() {
	if(window.innerWidth<1530)
	{
		sticky = img.offsetTop+50;
	}
	if (window.pageYOffset >= sticky) {
	  	navbar.style.setProperty('background-color',bdstyle.backgroundColor);
	    navbar.classList.add("sticky");
	} 
	else {
		navbar.style.setProperty('background-color',hdstyle.backgroundColor);
	    navbar.classList.remove("sticky");
	 }
	}
