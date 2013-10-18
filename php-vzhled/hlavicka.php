<?php

/**************************************************
 * KONSTANTY
 **************************************************/

const ODDELOVAC_PRIPONY = '.';

// soubor favicony
const SOUBOR_FAVICONY = 'favicon.ico';

// soubor pro skrytá html data dialogu
const SOUBOR_DIALOG_URL = 'dialog_url.php';

//adresáře
const ADRESAR_SCRIPTU = 'Script';
const ADRESAR_CKEDITOR = 'ckeditor';
const ADRESAR_DIALOGU = 'Dialogy';
const ADRESAR_DIALOGU_URL = 'Dialog_url';	

// cesty k adresářům
define('CESTA_ADRESAR_SCRIPTU', $_SERVER['DOCUMENT_ROOT'] . ODDELOVAC_ADRESY .  ADRESAR_SCRIPTU);
define('CESTA_ADRESAR_DIALOGU', $_SERVER['DOCUMENT_ROOT'] . ODDELOVAC_ADRESY .  ADRESAR_DIALOGU);

// adresa souboru favicony
define('ADRESA_SOUBOR_FAVICONY', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_OBRAZKU . ODDELOVAC_ADRESY .
		SOUBOR_FAVICONY);

// cesta k individuálnímu souboru meta (povinný kvůli description)
define('CESTA_SOUBOR_META_INDIV', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_META);

// cesty ke stylům 
define('CESTA_GLOBALNI_STYL', $_SERVER['DOCUMENT_ROOT'] . ODDELOVAC_ADRESY . Styl::SOUBOR_STYL);
define('CESTA_STYL_SABLONY', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . Styl::SOUBOR_STYL_SABLONY);
define('CESTA_STYL_PRIHLASOVACIHO_FORMULARE', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . 
		ADRESAR_PRIHLASOVACIHO_FORMULARE . ODDELOVAC_ADRESY . Styl::SOUBOR_STYL_PRIHLASOVACIHO_FORMULARE);
define('CESTA_INDIV_STYL', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . ADRESAR_STRANKY . ODDELOVAC_PRIPONY . 
		Styl::PRIPONA_STYLU);

// cesty ke skriptům
define('CESTA_DEFAULTNI_SKRIPT', CESTA_ADRESAR_SCRIPTU . ODDELOVAC_ADRESY . Skript::SOUBOR_DEFAULTNI_SCRIPT);
define('CESTA_INDIV_SKRIPT', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . ADRESAR_STRANKY . ODDELOVAC_PRIPONY .
		Skript::PRIPONA_SKRIPTU);

/**
 * Abstraktní třída pro práci z odkazy
 */
abstract class Odkaz{
	
/**************************************************
 * VLASTNOSTI INSTANCE
 **************************************************/
	
	/* PROMĚNNÉ */
	protected $cesta;
	protected $adresa;
	
	/* KONSTRUKTOR */
	public function __construct($cesta){
		if(!file_exists($cesta)){
			throw new Exception('Soubor neexistuje!');
		}
		$this->cesta = $cesta;
		$this->adresa = uni_cesta_na_uni_adresu($cesta);
	}
	
	/* METODY */
	
	/**
	 * slouží pro výpis odkazu
	 */
	public abstract function vypis_odkaz();
	
/**************************************************
 * VLASTNOSTI TŘÍDY
 **************************************************/
	
	/* PROMĚNNÉ */
	// defaultní styly - zde doplnit další v případě potřeby
	private static $defaultni_odkazy = [
		CESTA_GLOBALNI_STYL, 
		CESTA_STYL_SABLONY, 
		CESTA_STYL_PRIHLASOVACIHO_FORMULARE,
		
		CESTA_DEFAULTNI_SKRIPT
	];
	private static $objekty = [];
	
	/* METODY */
	//public static abstract function pridej_odkaz();
	
	public static function pridej_odkaz($odkaz){
		if(is_string($odkaz)){
			if(pripona($odkaz) === Styl::PRIPONA_STYLU){
				self::$objekty[] = new Styl($odkaz);
			}
			else if(pripona($odkaz) === Skript::PRIPONA_SKRIPTU){
				self::$objekty[] = new Skript($odkaz);
			}
			else{
				throw new Exception('řetězec musí být cestou ke stylu nebo ke skriptu - zadáno: "' . $odkaz . '"');
			}
		}
		else if($odkaz instanceof Odkaz){
			self::$objekty[] = $odkaz;
		}
		else{
			throw new Exception("odkaz musí být řetězec nebo instance třídy Odkaz");
		}
	}
	
	/**
	 * vloží do pole stylů defaultní styly
	 */
	public static function pridej_defaultni_odkazy(){
		self::pridej_odkaz(new Skript(Skript::ADRESA_JQUERY, false, true));
		self::pridej_odkaz(new Skript(Skript::ADRESA_JQUERY_UI, false, true));
		
		foreach (self::$defaultni_odkazy as $cesta_k_odkazu){
			self::pridej_odkaz($cesta_k_odkazu);
		}
		
		if (file_exists(CESTA_INDIV_STYL)) {	
			self::pridej_odkaz(CESTA_INDIV_STYL);
		}
		if (file_exists(CESTA_INDIV_SKRIPT)) {	
			self::pridej_odkaz(CESTA_INDIV_SKRIPT);
		}
	}
	
	public static function vypis_odkazy(){
		foreach (self::$objekty as $objekt){
			$objekt->vypis_odkaz();
		}
	}
}

/**
 * Třída pro práci se styly
 */
final class Styl extends Odkaz{
	
/**************************************************
 * VLASTNOSTI INSTANCE
 **************************************************/

	/* METODY */
	public function vypis_odkaz(){
		$parametr_casove_znamky = parametr_casove_znamky($this->cesta);
		echo "\t<link href='" . $this->adresa . $parametr_casove_znamky . "' rel='stylesheet' type='text/css'>\n";
	}
	
/**************************************************
 * VLASTNOSTI TŘÍDY
 **************************************************/
	
	/* KONSTANTY */
	const PRIPONA_STYLU = "css";
	
	// soubory stylů
	const SOUBOR_STYL = 'style.css';
	const SOUBOR_STYL_SABLONY = 'sablona.css';
	const SOUBOR_STYL_PRIHLASOVACIHO_FORMULARE = 'prihlasovaci_formular.css';
}

/**
 * Třída pro práci se skripty
 */
final class Skript extends Odkaz{
	
/**************************************************
 * VLASTNOSTI INSTANCE
 **************************************************/
	
	/* PROMĚNNÉ */
	private $vypis_casovou_znamku;
	
	/* KONSTRUKTOR */
	public function __construct($cesta, $vypis_casovou_znamku = true, $cesta_je_adresa = false){
		if($cesta_je_adresa){
			$this->adresa = $cesta;
		}
		else{
			parent::__construct($cesta);
		}
		$this->vypis_casovou_znamku = $vypis_casovou_znamku;
	}
	
	/* METODY */
	public function vypis_odkaz(){
		if($this->vypis_casovou_znamku === true){
			$parametr_casove_znamky = parametr_casove_znamky($this->cesta);
			echo "\t<script src='" . $this->adresa . $parametr_casove_znamky . "'></script>\n";
		}
		else{
			echo "\t<script src='"  . $this->adresa . "'></script>\n";
		}
	}
	
/**************************************************
 * VLASTNOSTI TŘÍDY
 **************************************************/
	
	/* KONSTANTY */
	const PRIPONA_SKRIPTU = 'js';
	
	// skripty
	const SOUBOR_DEFAULTNI_SCRIPT = 'default.js';
	const SOUBOR_SCRIPT_KNIHOVNA_FUNKCI = 'funkce.js';
	
	// adresy externích knihoven
	const ADRESA_JQUERY = '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js';
	const ADRESA_JQUERY_UI = '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js';
}

/**************************************************
 * PROMĚNNÉ
 **************************************************/

$html_pro_skripty = [];

/**************************************************
 * FUNKCE
 **************************************************/

function vypis_meta_opravneni(){
	echo '<meta name="opravneni" content="' . $GLOBALS['opravneni']->get_opravneni() . '">';
}

/**
 * Přidá do seznamu skriptů link na skript knihovny funkcí
 */
function link_na_script_knihovna_funkci(){
	define('CESTA_SCRIPT_KNIHOVNA_FUNKCI', CESTA_ADRESAR_SCRIPTU . ODDELOVAC_ADRESY .
			Skript::SOUBOR_SCRIPT_KNIHOVNA_FUNKCI);
	Odkaz::pridej_odkaz(CESTA_SCRIPT_KNIHOVNA_FUNKCI);
}

/**
 *  Zařídí vše potřebné pro fungování dialogu url
 */
function linky_dialog_url(){
	link_na_script_knihovna_funkci();
	
	define('CESTA_ADRESAR_DIALOGU_URL', CESTA_ADRESAR_DIALOGU . ODDELOVAC_ADRESY .  ADRESAR_DIALOGU_URL);
	define('CESTA_STYL_DIALOG_URL', CESTA_ADRESAR_DIALOGU_URL . ODDELOVAC_ADRESY . Styl::SOUBOR_STYL);
	define('CESTA_SOUBOR_DIALOG_URL', CESTA_ADRESAR_DIALOGU_URL . ODDELOVAC_ADRESY . SOUBOR_DIALOG_URL);
	
	Odkaz::pridej_odkaz(CESTA_STYL_DIALOG_URL);
	$GLOBALS['html_pro_skripty'][] = CESTA_SOUBOR_DIALOG_URL;
}

/**
 * Zařídí vše potřebné pro použití CKEditoru
 */
function linky_cke(){
	// cesty CKeditor 
	define('CESTA_ADRESAR_CKEDITOR', CESTA_ADRESAR_SCRIPTU . ODDELOVAC_ADRESY . ADRESAR_CKEDITOR);
	define('CESTA_CKEDITOR', CESTA_ADRESAR_CKEDITOR . ODDELOVAC_ADRESY . 'ckeditor.js');
	define('CESTA_CKEDITOR_JQUERY_ADAPTER', CESTA_ADRESAR_CKEDITOR . ODDELOVAC_ADRESY . 'adapters/jquery.js' );
	
	linky_dialog_url();
	
	Odkaz::pridej_odkaz(new Skript(CESTA_CKEDITOR, false));
	Odkaz::pridej_odkaz(new Skript(CESTA_CKEDITOR_JQUERY_ADAPTER, false));
}

/**************************************************
 * PŘÍKAZY
 **************************************************/

// vloží do seznamu defaultní styly a skripty
Odkaz::pridej_defaultni_odkazy();

?>

<!--***********************************************
 * ZAČÁTEK HLAVIČKY
 ***********************************************-->

<head>
	<!-- používané meta tagy -->
	<meta charset="UTF-8">
	
	<!-- meta tag pro oprávnění -->
		
	<!-- link na ikonu do záložek nebo tabů -->
	<link href="<?php echo ADRESA_SOUBOR_FAVICONY ?> " rel="Shortcut Icon">
	
	<!-- link na ikonu pro facebook -->
	<!--	<link rel="image_src" href="http://vlocka.skauting.cz/images/ikonyweb/logo3.png">-->
		
	<?php 
	
	// soubor s individuálními meta informacemi pro stránků
	require CESTA_SOUBOR_META_INDIV;
	
	//výpis všech stylů a skriptů
	Odkaz::vypis_odkazy();
	
	?>
</head>

<?php

foreach ($GLOBALS['html_pro_skripty'] as $soubor_html_element){
	require $soubor_html_element;
}

?>