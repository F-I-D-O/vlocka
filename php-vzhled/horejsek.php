
<?php

/**************************************************
 * KONSTANTY
 **************************************************/

/* SOUBORY */
const SOUBOR_LOGO = 'logo.php';
const SOUBOR_DEFAULTNI_LOGO = 'logo-default.php';
const SOUBOR_NADPIS_STRANEK = 'nadpis.php';
const SOUBOR_MENU = 'horni_menu.php';
const SOUBOR_PRIHLASOVACI_FORMULAR = 'prihlasovaci_formular.php';
const SOUBOR_UVOD = 'uvod.php';

/* CESTY */

// cesta k souboru se záhlavím, pokud neexistuje, nahradí se defaultním záhlavím
define('CESTA_LOGO', file_exists(CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_LOGO) ? 
							CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_LOGO : 
							CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_DEFAULTNI_LOGO);

define('CESTA_NADPIS_STRANEK', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_NADPIS_STRANEK);
define('CESTA_MENU', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_MENU);
define('CESTA_PRIHLASOVACI_FORMULAR', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_PRIHLASOVACI_FORMULAR);
define('CESTA_UVOD', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_UVOD);

?>

<!--***********************************************
 * ZAČÁTEK HTML KÓDU
 ***********************************************-->
	
	<div id="horejsek" >
		<?php 
		require CESTA_LOGO;
		require CESTA_NADPIS_STRANEK;
		require CESTA_MENU;
		require CESTA_PRIHLASOVACI_FORMULAR;
		require CESTA_UVOD;
		?>
	</div>