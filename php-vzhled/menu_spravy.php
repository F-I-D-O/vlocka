
<?php

const SOUBOR_NOVA_AKCE = 'vlozit_akci.php';
const SOUBOR_NOVA_GALERIE = 'fotokronika.php?vlozit=1';
const SOUBOR_NOVY_UZIVATEL = 'vlozit_uzivatele.php';
const SOUBOR_NOVY_PROFIL = 'vlozit_uzivatele.php?mod=1';
const SOUBOR_NOVY_UZIVATEL_S_PROFILEM = 'vlozit_uzivatele.php?mod=2';


define('ADRESA_NOVA_AKCE', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_PHP . ODDELOVAC_ADRESY . SOUBOR_NOVA_AKCE);
define('ADRESA_NOVA_GALERIE', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_PHP . ODDELOVAC_ADRESY . SOUBOR_NOVA_GALERIE);
define('ADRESA_NOVY_UZIVATEL', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_PHP . ODDELOVAC_ADRESY .
		SOUBOR_NOVY_UZIVATEL);
define('ADRESA_NOVY_PROFIL', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_PHP . ODDELOVAC_ADRESY . SOUBOR_NOVY_PROFIL);
define('ADRESA_NOVY_UZIVATEL_S_PROFILEM', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_PHP . ODDELOVAC_ADRESY . 
		SOUBOR_NOVY_UZIVATEL_S_PROFILEM);

function vypis_odkazy_spravy () {
	vypis_odkaz(ADRESA_NOVA_AKCE, 'PŘIDAT AKCI');
	vypis_odkaz(ADRESA_NOVA_GALERIE, 'PŘIDAT GALERII');
	
	if ($GLOBALS['opravneni']->prover_opravneni(Opravneni::HLAVNI_ADMIN)) {
		vypis_odkaz(ADRESA_NOVY_UZIVATEL, 'PŘIDAT UŽIVATELE');
		vypis_odkaz(ADRESA_NOVY_PROFIL, 'PŘIDAT PROFIL');
		vypis_odkaz(ADRESA_NOVY_UZIVATEL_S_PROFILEM, 'PŘIDAT UŽIVATELE S PROFILEM');
	}
}

function vypis_odkaz ($odkaz, $text) {
	echo '<li><a href=' . $odkaz . '">' . $text . '</a></li>';
}

?>

		<div id="odkazy_spravy" class="odkazy">
			<p class="nadpis_leve_menu">Úlohy správy</p>
				<ul>
					<?php vypis_odkazy_spravy() ?>
				</ul>	
		</div>
