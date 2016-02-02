$(document).ready(function(){
	function submitData(){
	var x = document.getElementById("main");
    var text = "";
    var i;
    for (i = 0; i < x.length ;i++) {
        text += x.elements[i].value + "<br>";
    }
    document.getElementById("demo").innerHTML = text;
	}
});