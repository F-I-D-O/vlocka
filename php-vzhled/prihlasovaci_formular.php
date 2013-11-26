
<?php 

// obsah oblasti - záleží na tom, jestli je uživatel přihlášen	
define('OBSAH', isset($_SESSION["ID"]) ? 'prihlasovaci_formular_prihlasen.php' : 
		'prihlasovaci_formular_neprihlasen.php');
	
define('CESTA_OBSAHU', CESTA_ADRESAR_SABLONY . ODDELOVAC_ADRESY . ADRESAR_PRIHLASOVACIHO_FORMULARE . ODDELOVAC_ADRESY . 
		OBSAH);

?>

<!--***********************************************
 * ZAČÁTEK HTML KÓDU
 ***********************************************-->

		<div id="prihlasovaci_formular" >
			<?php require  CESTA_OBSAHU ?>
		</div>
