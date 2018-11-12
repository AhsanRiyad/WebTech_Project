function removeDisabledMobile(event){
	//console.log(document.getElementById("changeMobile").disabled)
	document.getElementById("changeMobile").disabled = false;
	document.getElementById("changeMobileSpan").style.backgroundColor = "#51A5D0";
}

function removeDisabledEmail(event){
	//console.log(document.getElementById("changeMobile").disabled)
	document.getElementById("changeEmail").disabled = false;
	document.getElementById("changeEmailSpan").style.backgroundColor = "#51A5D0";
}

function removeDisabledDOB(event){
	//console.log(document.getElementById("changeMobile").disabled)
	document.getElementById("changeDOB").disabled = false;
	document.getElementById("changeDOBSpan").style.backgroundColor = "#51A5D0";
}

function removeDisabledName(event){
	//console.log(document.getElementById("changeMobile").disabled)
	document.getElementById("changeName").disabled = false;
	document.getElementById("changeNameSpan").style.backgroundColor = "#51A5D0";
}



// javascript onclick id getting examples solved
// very very important
function cplay(check_id)
{
	var abc = check_id;
	console.log(abc);
	var kp = document.getElementById(abc);
	var mb = kp.parentNode;
	var td = mb.id;
	console.log(td);

	//event.parentNode.style.backgroundColor = "red";
}

// know which event is fired
$("#tipo-imovel").on("click change", function(event){
    console.log(event.type + " is fired");
});