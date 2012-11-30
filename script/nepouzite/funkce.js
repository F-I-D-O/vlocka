
function pridejObsluhu(element, typ, obsluha){
	if(element.addEventListener){
		element.addEventListener(typ, obsluha, false)
	}
	else if(element.attachEvent){
		element.attachEvent("on" + typ, obsluha)
	}
	else{
		element["on + type"] = obsluha;
	}
}

function odeberObsluhu(element, typ, obsluha){
	if(element.removeEventListener){
		element.removeEventListener(typ, obsluha, false)
	}
	else if(element.dettachEvent){
		element.dettachEvent("on" + typ, obsluha)
	}
	else{
		element["on + type"] = null;
	}
}

function vratEvent(event){
	if(event){
		return event;
	}
	else{
		return window.event;
	}
}

function vratTarget(event){
	if(event.target){
		return event.target;
	}
	else{
		return event.srcElement;
	}
}

