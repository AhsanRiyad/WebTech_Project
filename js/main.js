// update profile page disable input and backgroundColor change js;
// performed by capturing the object using onclick event
function removeDisabled(obj){

	obj.parentNode.nextSibling.nextElementSibling.disabled = false;
	obj.style.backgroundColor = "#51A5D0";

	
}









// javascript onclick id getting examples solved
// very very important
function cplay(check_id)
{
	
	console.log(check_id.parentNode.nextSibling.nextSibling);
	
	// var is = mb.nextSibling;
	// var idd = is.id;
	// console.log(idd);

	//event.parentNode.style.backgroundColor = "red";
}

// know which event is fired
$("#tipo-imovel").on("click change", function(event){
    console.log(event.type + " is fired");
});