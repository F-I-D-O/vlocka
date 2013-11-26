
<?php 

session_start(); 

/**************************************************
 * KONSTANTY
 **************************************************/

// oddělovač složek cesty pro použití v adrese - odkazu
const ODDELOVAC_ADRESY = '/'; 

/* ADRESÁŘE */

// adresář se soubory k individuální stránce
define('ADRESAR_STRANKY', preg_replace('/\\.[^.\\s]{3}$/', '', basename($_SERVER['PHP_SELF'])));

//další adresáře 
const ADRESAR_PHP = 'php';
const ADRESAR_SABLONY = 'php-vzhled';
const ADRESAR_KONSTANT = 'php-konstanty';
const ADRESAR_OBRAZKU = 'Obrazky';
const ADRESAR_OBRAZKU_SABLONY = 'Sablona';
const ADRESAR_OBRAZKU_IKON = 'Ikony';
const ADRESAR_PRIHLASOVACIHO_FORMULARE = 'prihlasovaci_formular';

/* SOUBORY */
const SOUBOR_KNIHOVNA_FUNKCI = 'funkce.php';
const SOUBOR_GENEROVANI_HTML = 'generovani_vzhledu.php';
const SOUBOR_OPRAVNENI = 'Opravneni.php';
const SOUBOR_HLAVICKA = 'hlavicka.php';
const SOUBOR_META = 'meta.php';
const SOUBOR_HOREJSEK = 'horejsek.php';
const SOUBOR_LEVA_STRANA = 'leva_strana.php';
const SOUBOR_SPODEK = 'spodek.php';

/* DALŠÍ */
const PROTOCOL = 'http://';

/* CESTY KE KOŘENOVÝM ADRESÁŘŮM */

define('CESTA_ADRESAR_STRANKY', $_SERVER['DOCUMENT_ROOT'] . ODDELOVAC_ADRESY . ADRESAR_STRANKY);

define('CESTA_ADRESAR_PHP', $_SERVER['DOCUMENT_ROOT'] . ODDELOVAC_ADRESY . ADRESAR_PHP);
define('CESTA_ADRESAR_SABLONY', $_SERVER['DOCUMENT_ROOT'] . ODDELOVAC_ADRESY . ADRESAR_SABLONY);
define('CESTA_ADRESAR_KONSTANT', $_SERVER['DOCUMENT_ROOT'] . ODDELOVAC_ADRESY . ADRESAR_KONSTANT);
define('CESTA_ADRESAR_OBRAZKU', $_SERVER['DOCUMENT_ROOT'] . ODDELOVAC_ADRESY .  ADRESAR_OBRAZKU);

/* CESTY K SOUBORŮM */
define('CESTA_KNIHOVNA_FUNKCI', CESTA_ADRESAR_PHP . ODDELOVAC_ADRESY . SOUBOR_KNIHOVNA_FUNKCI);
define('CESTA_GENEROVANI_VZHLEDU', CESTA_ADRESAR_PHP . ODDELOVAC_ADRESY . SOUBOR_GENEROVANI_HTML);
define('CESTA_OPRAVNENI', CESTA_ADRESAR_KONSTANT . ODDELOVAC_ADRESY . SOUBOR_OPRAVNENI);
define('CESTA_HLAVICKA', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_HLAVICKA);
define('CESTA_HOREJSEK', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_HOREJSEK);
define('CESTA_LEVA_STRANA', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_LEVA_STRANA);
define('CESTA_SPODEK', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . SOUBOR_SPODEK);

/* WEBOVÉ ADRESY */

// webová adresa kořenového adresáře stránek
define('ADRESA_STRANEK', PROTOCOL . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"]);

// další adresy
define('ADRESA_ADRESARE_OBRAZKU', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_OBRAZKU);
define('ADRESA_ADRESARE_OBRAZKU_SABLONY', ADRESA_ADRESARE_OBRAZKU . ODDELOVAC_ADRESY . ADRESAR_OBRAZKU_SABLONY);
define('ADRESA_ADRESARE_SABLONY', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_SABLONY);

/**************************************************
 * KNIHOVNY
 **************************************************/

require CESTA_KNIHOVNA_FUNKCI;
require CESTA_GENEROVANI_VZHLEDU;
require CESTA_OPRAVNENI;

// vytvoří objekt oprávnění podle kterého se určuje co na stránce bude
$opravneni = new Opravneni();

?>

<!--***********************************************
 * ZAČÁTEK STRÁNKY
 ***********************************************-->

<!DOCTYPE html>

<html lang="cs-cz" dir="ltr">
	
<?php require CESTA_HLAVICKA ?>

<body>
	
<div id="hlavni">
	<?php 
	require CESTA_HOREJSEK;
	require CESTA_LEVA_STRANA;



