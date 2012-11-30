
function najetiNaTlacitko(event){
	var event = vratEvent(event);
	var tlacitko = vratTarget(event);
	
	if(tlacitko.getAttribute("class") == "zmena_odkaz"){
		alert("dgsdg");
		var atribut = document.createAttribute("style");
		atribut.value = "text-decoration: underline";
		tlacitko.setAttributeNode(atribut);
	}
}

var oblastAkce = document.getElementById("akce");

pridejObsluhu(oblastAkce, "mouseover", najetiNaTlacitko);


