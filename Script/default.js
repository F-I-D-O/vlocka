
$(document).ready(function(){
		
/**************************************************
 * GLOBÁLNÍ 
 **************************************************/

/*
 * KONSTANTY
 */ 	
window.ODDELOVAC_ADRESARU = '/';
window.SOUBOR_INDEX = 'index.php';
window.SOUBOR_CKEDITOR_CONFIG = 'ckeditorConfig.js';
	
window.ADRESAR_STRANKY = document.URL.charAt(document.URL.length - 1) === 'p' ? document.URL.slice(0, -4) : 
		document.URL + SOUBOR_INDEX.slice(0, -4);

/*
 * objekt oprávnění
 */ 	
window.Opravneni = {
	ANONYM: 0,
	VEDOUCI: 10,
	VEDOUCI_ODDILU: 20,
	HLAVNI_ADMIN: 25,
	
	uroven: parseInt($('meta[name=opravneni]').attr("content")),
	
	proverOpravneni: function(sila){
		if (uroven < sila){
			return false;
		}
		else{
			return true;
		}
	}
};

/**************************************************
 * LOKÁLNÍ
 **************************************************/
 
/**
 * před opuštěním stránky zavolá funkci rozepsane_formulare(), pokud vrátí true, vyskočí varovné okno.
 */
$(window).bind('beforeunload', function(event) {
    if(rozepsane_formulare()){
		return 'Opravdu? Přijdeš o data z formulářů!';
	}
});

/**
 * Funkce testuje, zdali jsou na stránce nějaká rozepsané formulářová pole, konkráétně textarea a input="text"
 * @returns {Boolean} true pokud jsou nějaká rozepsaná pole, jinak false
 */
function rozepsane_formulare() {
	var rozepsane = false;
	
	$('input[type="text"], textarea').each(function () {
		if ($( this ).parents('#prihlasovaci_formular').length === 0 && $( this ).val().length > 0 && 
				$( this ).css('display') !== 'none'){
			rozepsane = true;
			return false;
		}
	});
	
	return rozepsane;
}  
 
});


