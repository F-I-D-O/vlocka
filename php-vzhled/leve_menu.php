		
<?php

const SOUBOR_PLAN_AKCI = 'plan.php';
const SOUBOR_BODOVANI_MALY = 'bodovani_maly.php';
const SOUBOR_TB_VELKY = 'tb_velky.php';
const SOUBOR_VYBAVENI = 'vybaveni.php';
const SOUBOR_DOKUMENTY = 'dokumenty.php';
const SOUBOR_ODKAZY = 'odkazy.php';

define('ADRESA_PLAN_AKCI', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_PLAN_AKCI);
define('ADRESA_BODOVANI_MALY', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_BODOVANI_MALY);
define('ADRESA_TB_VELKY', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_TB_VELKY);
define('ADRESA_VYBAVENI', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_VYBAVENI);
define('ADRESA_DOKUMENTY', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_DOKUMENTY);
define('ADRESA_ODKAZY', ADRESA_STRANEK . ODDELOVAC_ADRESY . SOUBOR_ODKAZY);

?>

		<div class="odkazy">
			<p class="nadpis_leve_menu">Hlavní menu</p>
				<ul>
					<li><a href="<?php echo ADRESA_PLAN_AKCI ?>">PLÁN AKCÍ</a></li>
					<li><a href="<?php echo ADRESA_BODOVANI_MALY ?>">BODOVÁNÍ VLČAT A SVĚTLUŠEK</a></li>
					<li><a href="<?php echo ADRESA_TB_VELKY ?>">TB SKAUTI A SKAUTKY</a></li>
					<li><a href="<?php echo ADRESA_VYBAVENI ?>">VYBAVENÍ NA AKCE</a></li>
					<li><a href="<?php echo ADRESA_DOKUMENTY ?>">DOKUMENTY</a></li>
					<li><a href="<?php echo ADRESA_ODKAZY ?>">ODKAZY</a></li>
				</ul>	
		 </div>