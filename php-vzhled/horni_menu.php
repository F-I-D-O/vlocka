<?php

const SOUBOR_PRIJIMAME_CLENY = 'prijimame_cleny.php';
const SOUBOR_O_NAS = 'o_nas.php';
const SOUBOR_SKAUTING = 'skauting.php';
const SOUBOR_KONTAKT = 'kontakt.php';
const SOUBOR_FOTOKRONIKA = 'fotokronika.php';

define('ADRESA_PRIJIMAME_CLENY', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_PRIJIMAME_CLENY);
define('ADRESA_O_NAS', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_O_NAS);
define('ADRESA_SKAUTING', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_SKAUTING);
define('ADRESA_KONTAKT', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_KONTAKT);
define('ADRESA_FOTOKRONIKA', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_FOTOKRONIKA);

?>

		<div id="menu">
			<a	id="odkaz_domu" href="<?php echo ADRESA_STRANEK ?>">DOMŮ</a>
			<a	id="odkaz_prijimame_cleny" href="<?php echo ADRESA_PRIJIMAME_CLENY ?>">PŘIDEJ SE</a>
			<a	id="odkaz_o_nas" href="<?php echo ADRESA_O_NAS ?>">O NÁS</a>
			<a	id="odkaz_skauting" href="<?php echo ADRESA_SKAUTING ?>">SKAUTING</a>
			<a	id="odkaz_kontakt" href="<?php echo ADRESA_KONTAKT ?>">KONTAKT</a>
			<a 	id="odkaz_fotokronika" href="<?php echo ADRESA_FOTOKRONIKA ?>">FOTO &amp; VIDEO</a>			
		</div>