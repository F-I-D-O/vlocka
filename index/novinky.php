<?php

const SOUBOR_DATABAZE = 'Databaze.php';
const SOUBOR_MESICE = 'Mesice.php';
const SOUBOR_NOVA_NOVINKA = 'nova_novinka.php';

define('CESTA_MESICE', CESTA_ADRESAR_KONSTANT . ODDELOVAC_ADRESY . SOUBOR_MESICE);
define('CESTA_DATABAZE', CESTA_ADRESAR_PHP . ODDELOVAC_ADRESY . SOUBOR_DATABAZE);
define('CESTA_NOVA_NOVINKA', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_NOVA_NOVINKA);

require CESTA_DATABAZE;
require CESTA_MESICE;

function vykresli_formular_nova_novinka () {
	if($GLOBALS['opravneni']->prover_opravneni(Opravneni::VEDOUCI)){
		require CESTA_NOVA_NOVINKA;
	}
} 

$databaze = new Databaze();

?>

	<div id="novinky">				
		<p id="novinky_nadpis">Novinky</p>		
		
		<!-- formulář pro vložení nové novinky -->
		<?php vykresli_formular_nova_novinka()?>
		
		<?php

		if(array_key_exists("archiv", $_GET)){
			$datum_ted = new DateTime($_GET["archiv"]);
		}
		else{
			$datum_ted = new DateTime();
		}
		$zacatek_mesice = clone $datum_ted;
		$zacatek_mesice->modify("-1 month");
		if($GLOBALS['opravneni']->prover_opravneni(Opravneni::VEDOUCI)){
			$sql = "SELECT * FROM novinky WHERE datum BETWEEN '" . $zacatek_mesice->format("Y-m-d H:i:00") .
						"' AND '" . $datum_ted->format("Y-m-d H:i:00") . "' ORDER BY datum DESC"; 
		}
		else{
			$sql = "SELECT * FROM novinky WHERE aktivni > 0 AND datum BETWEEN '" . $zacatek_mesice->format("Y-m-d H:i:00") .
						"' AND '" . $datum_ted->format("Y-m-d H:i:00") . "' ORDER BY datum DESC"; 
		}

		$novinky_mesic = $databaze->queryObjectArray($sql);
		if($novinky_mesic){
			for($i = 0; $i < count($novinky_mesic); $i++){
				echo("<div class=\"novinka\">");
					$datum_novinky = new DateTime($novinky_mesic[$i]->datum);
					echo("<p class=\"datum\">" . $datum_novinky->format("j. n. Y H:i") . "</p>");
					echo('<p class="nadpis-novinka">' . $novinky_mesic[$i]->nadpis . '</p>');
					echo($novinky_mesic[$i]->text);
					if($GLOBALS['opravneni']->prover_opravneni(Opravneni::VEDOUCI)){
						echo("<p class=\"upravy-novinka\">");
							echo("<a href=\"php/novinka-upravy.php?smaz=" . $novinky_mesic[$i]->ID . "\">smaž novinku</a>");
							if($novinky_mesic[$i]->aktivni > 0){
								echo("<a href=\"php/novinka-upravy.php?deaktivace=" . $novinky_mesic[$i]->ID . "\">deaktivuj novinku</a>");
							}
							else{
								echo("<a href=\"php/novinka-upravy.php?aktivace=" . $novinky_mesic[$i]->ID . "\">aktivuj novinku</a>");
							}						
						echo("</p>");
					}						
				echo("</div>");
			}
		}			
		?>

		<div id="archiv_novinek">
			<?php 
			$datm_ted = new DateTime();
			$datum_arch = new DateTime($datm_ted->format("Y-m"));
			while($datum_arch > new DateTime("2011-09-01 00:00:00")){					
				$archiv = $datum_arch->format("Y-m-d");
				$datum_arch->modify("-1 month");

			echo("<a href=\"index.php?archiv=" . $archiv . "\">" . " " . Mesice::nazev_mesice($datum_arch->format("m")) . " " . 
				$datum_arch->format("Y") . "</a> ");

				if($datum_arch->format("Y-m") != "2011-09"){
					echo("|");
				}				
			}				
			?>
		</div>
		<br>
	</div>