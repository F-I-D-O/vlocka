<?php 

const SOUBOR_NOVA_NOVINKA_STYL = 'nova_novinka.css';
const SOUBOR_NOVA_NOVINKA_SCRIPT = 'novaNovinka.js';

define('CESTA_STYL_NOVA_NOVINKA', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_NOVA_NOVINKA_STYL);
define('CESTA_SKRIPT_NOVA_NOVINKA', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_NOVA_NOVINKA_SCRIPT);

if($GLOBALS['opravneni']->prover_opravneni(Opravneni::VEDOUCI)){
	linky_cke(); 
	Odkaz::pridej_odkaz(CESTA_STYL_NOVA_NOVINKA);
	Odkaz::pridej_odkaz(CESTA_SKRIPT_NOVA_NOVINKA);
}

?>

	<!-- titulek -->
	<title>Novinky - 28. oddíl Vločka</title>

	<!-- popis -->
	<meta name="description" content="Novinky a informace ze světa skautského oddílu Vločka Plzeň">

	
	        

