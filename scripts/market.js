/*DISPLAYING MODALS*/
/*Book Availability Modal*/
var bookbtn = document.getElementById("bookbtn");
var bookQuant=document.getElementById("bookQuant");
var close_btn18=document.getElementById("close_btn18");

bookbtn.addEventListener('click', openBook);
close_btn18.addEventListener('click', closeBook);
window.addEventListener('click', outside1);

function openBook(){
	bookQuant.style.display="block";
}

function closeBook(){
	bookQuant.style.display="none";
}

function outside1(e){
	if(e.target == bookQuant){
		bookQuant.style.display = "none";
	}
}

/*Bench Availability Modal*/
var benchbtn = document.getElementById("benchbtn");
var benchQuant=document.getElementById("benchQuant");
var close_btn19=document.getElementById("close_btn19");

benchbtn.addEventListener('click', openBench);
close_btn19.addEventListener('click', closeBench);
window.addEventListener('click', outside2);

function openBench(){
	benchQuant.style.display="block";
}

function closeBench(){
	benchQuant.style.display="none";
}

function outside2(e){
	if(e.target == benchQuant){
		benchQuant.style.display = "none";
	}
}

/*Roof Availability Modal*/
var roofbtn = document.getElementById("roofbtn");
var roofQuant=document.getElementById("roofQuant");
var close_btn20=document.getElementById("close_btn20");

roofbtn.addEventListener('click', openRoof);
close_btn20.addEventListener('click', closeRoof);
window.addEventListener('click', outside3);

function openRoof(){
	roofQuant.style.display="block";
}

function closeRoof(){
	roofQuant.style.display="none";
}

function outside3(e){
	if(e.target == roofQuant){
		roofQuant.style.display = "none";
	}
}

/*DISPLAYING FORMS*/
/*Books order*/
function ordBooks(){
        var data = ["<form method='POST' action='marketdb.php' >",
        			"<div>", 
        				"<input type='text' placeholder='Quantity Required' name='or_quant' autofocus='on' size=35 >",
        			"</div>",
        			 "<div>",
					    "<input type='submit' name='bookbtn' class='sub'>",
					  "</div>",
					  "</form>"
        			].join(' ');
		document.getElementById("bookForm").innerHTML= data;					
};

/*Benches Order*/
function ordBenches(){
        var data = ["<form method='POST' action='marketdb.php' >",
        			"<div>", 
        				"<input type='text' placeholder='Quantity Required' name='or_quant' autofocus='on' size=35 >",
        			"</div>",
        			 "<div>",
					    "<input type='submit' name='benchbtn' class='sub'>",
					  "</div>",
					  "</form>"
        			].join(' ');
		document.getElementById("benchForm").innerHTML= data;					
};

/*Roofs Order*/
function ordRoofs(){
        var data = ["<form method='POST' action='marketdb.php' >",
        			"<div>", 
        				"<input type='text' placeholder='Quantity Required' name='or_quant' autofocus='on' size=35 >",
        			"</div>",
        			 "<div>",
					    "<input type='submit' name='roofbtn' class='sub'>",
					  "</div>",
					  "</form>"
        			].join(' ');
		document.getElementById("roofForm").innerHTML= data;					
};
