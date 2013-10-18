<?php 

const SOUBOR_NOVA_NOVINKA_STYL = 'nova_novinka.css';
const SOUBOR_NOVA_NOVINKA_SCRIPT = 'novaNovinka.js';

/**
 * Vygeneruje link na individuální styl stránky
 */
function link_na_styl_nova_novinka() {
	define('CESTA_STYL_NOVA_NOVINKA', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_NOVA_NOVINKA_STYL);
	define('ADRESA_STYL_NOVA_NOVINKA', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_STRANKY . ODDELOVAC_ADRESY . 
			SOUBOR_NOVA_NOVINKA_STYL);
	define('PARAMETR_CASOVE_ZNAMKY_STYL_NOVA_NOVINKA', parametr_casove_znamky(CESTA_STYL_NOVA_NOVINKA));
	echo '<link href="' . ADRESA_STYL_NOVA_NOVINKA . PARAMETR_CASOVE_ZNAMKY_STYL_NOVA_NOVINKA . '" 
				rel="stylesheet" 
				type="text/css">';
}

/**
 * Vygeneruje link na individuální skript stránky
 */
function link_na_script_nova_novinka() {
	define('CESTA_SKRIPT_NOVA_NOVINKA', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_NOVA_NOVINKA_SCRIPT);
	define('ADRESA_SKRIPT_NOVA_NOVINKA', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_STRANKY . ODDELOVAC_ADRESY . 
			SOUBOR_NOVA_NOVINKA_SCRIPT);
	define('PARAMETR_CASOVE_ZNAMKY_SKRIPT_NOVA_NOVINKA', parametr_casove_znamky(CESTA_SKRIPT_NOVA_NOVINKA));
	
	echo '<script src="' . ADRESA_SKRIPT_NOVA_NOVINKA . PARAMETR_CASOVE_ZNAMKY_SKRIPT_NOVA_NOVINKA . '"></script>';

}

function linky_nova_novinka(){
	if($GLOBALS['opravneni']->prover_opravneni(Opravneni::VEDOUCI)){
		linky_cke(); 
		link_na_styl_nova_novinka();
		link_na_script_nova_novinka();
  	}
}

?>
	

	<!-- titulek -->
	<title>Novinky - 28. oddíl Vločka</title>

	<!-- popis -->
	<meta name="description" content="Novinky a informace ze světa skautského oddílu Vločka Plzeň">
	
	<!-- linky pro vkládání nové novinky -->
	<?php linky_nova_novinka(); ?>
	
	        

