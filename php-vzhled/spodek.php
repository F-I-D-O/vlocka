<?php

const OBRAZEK_POMOCNE_TLAPKY = 'nejlepsi-pritel.gif';
const OBRAZEK_VALID_HTML = 'valid-html401.gif';
const OBRAZEK_PLACKA = 'placka5.png';

const ADRESA_TOPLIST_LOGO = 'http://toplist.cz/count.asp?id=371167';
const ADRESA_TOPLIST_POCITADLO = 'http://toplist.cz/count.asp?logo=mc&amp;ID=371167';
const ADRESA_POMOCNE_TLAPKY = 'http://www.pomocnetlapky.cz';
const ADRESA_STRANKY_JUNAKA = 'http://www.skaut.cz';
		
define('ADRESA_OBRAZEK_POMOCNE_TLAPKY', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_OBRAZKU . ODDELOVAC_ADRESY . 
		ADRESAR_OBRAZKU_SABLONY . ODDELOVAC_ADRESY . OBRAZEK_POMOCNE_TLAPKY);
define('ADRESA_OBRAZEK_VALID_HTML', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_OBRAZKU . ODDELOVAC_ADRESY . 
		ADRESAR_OBRAZKU_IKON . ODDELOVAC_ADRESY . OBRAZEK_VALID_HTML);
define('ADRESA_OBRAZEK_PLACKA', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_OBRAZKU . ODDELOVAC_ADRESY . 
		ADRESAR_OBRAZKU_SABLONY . ODDELOVAC_ADRESY . OBRAZEK_PLACKA);

?>

	
	<div id="spodek">
		<img id="toplist_logo" src="<?php echo ADRESA_TOPLIST_LOGO ?>" alt="TOPlist" >
		<img id="toplist_pocitadlo" src="<?php echo ADRESA_TOPLIST_POCITADLO ?>" alt="počítadlo návštěvnosti">
		<a href="<?php echo ADRESA_POMOCNE_TLAPKY ?>">
			<img src="<?php echo ADRESA_OBRAZEK_POMOCNE_TLAPKY ?>" alt="pomocné tlapky">
		</a>
		<img id="valid_html" src="<?php echo ADRESA_OBRAZEK_VALID_HTML ?>" alt="HTML 4.01 Valid">
		<div id="placka">
			<a target="_blank" href="<?php echo ADRESA_STRANKY_JUNAKA ?>">
				<img src="<?php echo ADRESA_OBRAZEK_PLACKA ?>" alt="www.skaut.cz">
			</a>
		</div>
	</div>