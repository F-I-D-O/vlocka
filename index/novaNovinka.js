$(document).ready(function(){

var animaceSkryjOdkaz = {
	effect: 'fade',
	duration: 300
	//complete: zobrazFormular
};	

var animaceZobrazOdkaz = {
	effect: 'fade',
	duration: 300
};	
	
//var animaceZobrazFormular = {
//	effect: 'blind',
//	easing: 'easeOutBounce',
//	duration: 1000,
//	direction: 'vertical',
//	complete: zobrazCKE
//};
//
//var animaceSkryjFormular = {
//	effect: 'blind',
//	easing: 'easeOutBounce',
//	duration: 1000,
//	direction: 'vertical',
//	complete: zobrazOdkaz
//};

//function zobrazFormular () {
//	$('#nova_novinka-formular').show(animaceZobrazFormular);
//}

function zobrazOdkaz () {
	$('#nova_novinka-tlacitko_zobraz_formular').show(animaceZobrazOdkaz);
}
 
$('#nova_novinka-tlacitko_zobraz_formular').click(function () {
	$('#nova_novinka-tlacitko_zobraz_formular').hide(animaceSkryjOdkaz);
	$('#nova_novinka-formular').slideDown(500);
});

$('#nova_novinka-tlacitko_zpet').click(function () {
	$('#nova_novinka-formular').slideUp(300);
	$('#nova_novinka-tlacitko_zobraz_formular').show(animaceZobrazOdkaz);
});


// zamění textarea za ckeditor
$('#nova_novinka-textarea').ckeditor({
	customConfig: ADRESAR_STRANKY + ODDELOVAC_ADRESARU + SOUBOR_CKEDITOR_CONFIG
});

});


