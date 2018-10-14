window.onscroll = function() {myFunction()};

var navbar = document.getElementById("mainnav");
var sticky = navbar.offsetTop;
var hd = document.getElementById("head");
var bd=document.querySelector("body");
var hdstyle = getComputedStyle(hd);
var bdstyle = getComputedStyle(bd); 
function myFunction() {
	if (window.pageYOffset >= sticky) {
	  	navbar.style.setProperty('background-color',bdstyle.backgroundColor);
	    navbar.classList.add("sticky")
	  } else {
		navbar.style.setProperty('background-color',hdstyle.backgroundColor);
	    navbar.classList.remove("sticky");
	  }	
	}
