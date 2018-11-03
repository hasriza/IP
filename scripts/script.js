window.onscroll = function() {myFunction()};
var hit=document.getElementById("hit");
hit.onmouseover=function() {dropDown()};
hit.onmouseout=function() {takeBack()};
var hit2=document.getElementById("hit2");
hit2.onmouseover=function() {dropDown1()};
hit2.onmouseout=function() {takeBack1()};
var hit3=document.getElementById("notif");
hit3.onmouseover=function() {dropDown2()};
hit3.onmouseout=function() {takeBack2()};
var dropper=document.getElementById("dropdown");
var taskdrop=document.getElementById("taskdrop1");
var notdrop=document.getElementById("notifdrop");
dropper.onmouseover=function() {dropDown()};
dropper.onmouseout=function() {takeBack()};
notdrop.onmouseover=function() {dropDown2()};
notdrop.onmouseout=function() {takeBack2()};
taskdrop.onmouseover=function() {dropDown1()};
taskdrop.onmouseout=function() {takeBack1()};
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
document.getElementById("contact").style.setProperty('padding-left','20px');
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
	document.getElementById("contact").style.setProperty('width','100%');
	document.getElementById("contact").style.setProperty('padding-left','280px');
	if(document.getElementById("section")){
	document.getElementById("section").style.setProperty('margin-left','280px');}
	navbar.style.setProperty('display','block');	
}

function clickclose(){
	opt=0;
	document.getElementById("contact").style.setProperty('padding-left','20px');
	document.getElementById("contact").style.setProperty('width','100%');
	if(document.getElementById("section")){
	document.getElementById("section").style.setProperty('margin-left','10px');}
	navbar.style.setProperty('display','none');	
}

function dropDown(){
	dropHeight();
	dropper.style.setProperty('max-height','700px');
}

function dropDown1(){
	dropHeight1();
	taskdrop.style.setProperty('max-height','700px');
}

function dropDown2(){
	dropHeight2();
	hit3.style.setProperty('left','92%');
	hit3.style.setProperty('padding','7px 40px');
	notdrop.style.setProperty('max-height','600px');
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

function dropHeight1(){
	var listheight=hit2.offsetTop;
	var listleft=hit2.offsetLeft;
	if(window.innerWidth>1530)
	{
		taskdrop.style.setProperty('top',listheight+32+'px');
		taskdrop.style.setProperty('left',listleft-55+'px');
	}
	else{
		taskdrop.style.setProperty('top',listheight-11+'px');
		taskdrop.style.setProperty('left',listleft-54+'px');
	}
}

function dropHeight2(){
	var listheight=hit3.offsetTop;
	var listleft=hit3.offsetLeft;
	notdrop.style.setProperty('top',listheight+60+'px');
	notdrop.style.setProperty('left',listleft-60+'px');
}


function takeBack(){
	dropper.style.setProperty('max-height','0px');
}

function takeBack1(){
	taskdrop.style.setProperty('max-height','0px');
}

function takeBack2(){
	hit3.style.setProperty('left','95%');
	hit3.style.setProperty('padding','7px 10px');
	notdrop.style.setProperty('max-height','0px');
}

function myFunction() {
	if(window.innerWidth<1530)
	{
		sticky = img.offsetTop+50;
	}
	if (window.pageYOffset >= sticky) {
	  	navbar.style.setProperty('background-color',bdstyle.backgroundColor);
	  	dropper.style.setProperty('background-color',bdstyle.backgroundColor);
	  	taskdrop.style.setProperty('background-color',bdstyle.backgroundColor);
	    navbar.classList.add("sticky");
	    navbar.classList.add("listbg");
	} 
	else {
		navbar.style.setProperty('background-color',hdstyle.backgroundColor);
		dropper.style.setProperty('background-color',hdstyle.backgroundColor);
		taskdrop.style.setProperty('background-color',hdstyle.backgroundColor);
	    navbar.classList.remove("sticky");
	    navbar.classList.remove('listbg');
	 }
	}
