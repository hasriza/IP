/*Pickup Modal*/

var dbt1 = document.getElementById("dbt1");
var reqpick = document.getElementById("reqpick");
var close=document.getElementById("close_btn");
var container=document.getElementById("f_cont");

dbt1.addEventListener('click', reqOpen);
close.addEventListener('click', close_page);

function reqOpen(){
	reqpick.style.display='block';
}

function close_page(){
	reqpick.style.display = 'none';
}

window.addEventListener('click', outside);

function outside(e){
	if(e.target == reqpick){
		reqpick.style.display = 'none';
	}
}

/*Logs Modal*/
var dbt3 = document.getElementById("dbt3");
var donlogs=document.getElementById("donlogs");
var close1=document.getElementById("close_btn1")

dbt3.addEventListener('click', openLogs);
close1.addEventListener('click', closeLogs);

function openLogs(){
	donlogs.style.display='block';
}

function closeLogs(){
	donlogs.style.display='none';
}

window.addEventListener('click', outsidelog);

function outsidelog(e){
	if(e.target==donlogs){
		donlogs.style.display='none';
	}
}