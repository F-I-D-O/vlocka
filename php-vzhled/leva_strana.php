<?php

const SOUBOR_LEVE_MENU = 'leve_menu.php';
const SOUBOR_MENU_STRANKY = 'menu.php';
const SOUBOR_MENU_SPRAVY = 'menu_spravy.php';

define('CESTA_LEVE_MENU', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_LEVE_MENU);
define('CESTA_MENU_STRANKY', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_MENU_STRANKY);
define('CESTA_MENU_SPRAVY', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_MENU_SPRAVY);

function menu_stranky(){
	if(file_exists(CESTA_MENU_STRANKY)){
  		require CESTA_MENU_STRANKY;
  	}
}

function menu_spravy(){
	if($GLOBALS['opravneni']->prover_opravneni(Opravneni::VEDOUCI)){
  		require CESTA_MENU_SPRAVY;
  	}
}

?>

	<div id="vlevo">
		<?php
		require CESTA_LEVE_MENU;
		menu_stranky();
		menu_spravy();
		?>
	</div>	