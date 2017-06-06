//Slideshow
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 5 seconds
}

//Contact Details
function con() {
    document.getElementById("con1").innerHTML = "Phone: 0161 312 3640 Manchester Office";
    document.getElementById("con2").innerHTML = "Phone: 0141 258 3200 Glasgow Office";
	document.getElementById("con3").innerHTML = "AmeriCamp";
    document.getElementById("con4").innerHTML = "16 Fitzroy Place,";
	document.getElementById("con5").innerHTML = "Glasgow";
    document.getElementById("con6").innerHTML = "G3 7RW";
	document.getElementById("con7").innerHTML = "AmeriCamp";
    document.getElementById("con8").innerHTML = "Unit 5 The Foundry";
	document.getElementById("con9").innerHTML = "325 Ordsall Lane,";
    document.getElementById("con10").innerHTML = "Salford";
	document.getElementById("con11").innerHTML = "M5 3LW";
}

//Time and date
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
document.getElementById("time").innerHTML = d.toLocaleTimeString();