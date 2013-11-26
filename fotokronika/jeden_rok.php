<?php
/* načtení galerií z databáze */
	$sql = "SELECT * FROM fotokronika WHERE YEAR(datum_konce) = " . $_GET["rok"] . " ORDER BY datum_konce";
	$fotokronika = $databaze->queryObjectArray($sql);
	
	echo("<h1>Fotokronika " . $_GET["rok"] . "</h1>");
	
	if(!$fotokronika){
		echo("<p style=\"margin: 20px; font-size: 18px\">Nebyla nalezena žádná galerie.");
	}
	
	/* Výpis galerií*/
	else{
		$barva = "#FFB96A";
		for($i = 0; $i < count($fotokronika); $i++){
			$galerie = $fotokronika[$i];
			if($galerie->aktivni < 1 && !opravneni(2)){
				continue;
			}
			$datum_zacatku = new DateTime($galerie->datum_zacatku);
			$datum_konce = new DateTime($galerie->datum_konce);
			$sql = "SELECT profilID FROM vztah_profil_galerie WHERE galerieID = " . $galerie->ID;
			$autori = $databaze->queryArray($sql);
			
			if($galerie->aktivni == 0){
				$barva = "#A5A6A7";
			}
			echo("<div class=\"fotokronika\" style=\"background: " . $barva . "\">");
				
				//datum
				echo("<div class=\"fotokronika-datum\">");
					if($datum_zacatku != $datum_konce){
						if($datum_zacatku->format("m") == $datum_konce->format("m")){
							echo($datum_zacatku->format("d.-"));
							echo($datum_konce->format("d. m. Y"));
						}
						else{
							echo($datum_zacatku->format("d. m.-"));
							echo($datum_konce->format("d. m. Y"));
						}							
					}
					else{
						echo($datum_konce->format("d. m. Y"));
					}
				echo("</div>");
									
				//název galerie
				echo('<div class="fotokronika-nazev"><a'); 
				//if(!strpos($galerie->odkaz, "vlocka.skauting.cz")){
					echo(' target="_blank" ');
				//}
				echo(' href="' . $galerie->odkaz . '">' . $galerie->nazev . '</a></div>');
				
				//aktivita
				echo('<div class="fotokronika-aktivita">');
				if(opravneni(1)){
					echo('<a href="php/zmen_galerii.php?rok=' . $_GET["rok"] . '&smaz=' . $galerie->ID . '">');
					echo('<img src="http://' . $_SERVER["SERVER_NAME"] . '/obrazky/ikony/trash2.png">');
					echo("</a>");
					if($galerie->aktivni > 0){
						echo('<a href="php/zmen_galerii.php?rok=' . $_GET["rok"] . '&deaktivace=' . $galerie->ID . '">');
						echo('<img src="http://' . $_SERVER["SERVER_NAME"] . '/obrazky/ikony/globeg.png">');
						echo("</a>");
					}
					else{
						echo('<a href="php/zmen_galerii.php?rok=' . $_GET["rok"] . '&aktivace=' . $galerie->ID . '">');
						echo('<img src="http://' . $_SERVER["SERVER_NAME"] . '/obrazky/ikony/globeb.png">');
						echo("</a>");
					}
				}
				if($galerie->aktivni == 0 && $_SESSION["role"] == 2){
					echo('NEAKTIVNÍ');
				}
				echo("</div>");
				
				//autoři
				echo('<div class="fotokronika-autori">');
				$prvni = TRUE;
				for($j = 0; $j < count($autori); $j++){
					$id = $autori[$j]["profilID"];
					if($id){
						if($prvni == FALSE){
							echo(", ");
						}
						$odkaz = odkaz_na_profil($id, $databaze);
						echo($odkaz);
						$prvni = FALSE;
					}
				}
				if(isset($galerie->autori)){
					if($prvni == FALSE){
						echo(", ");
					}
					echo($galerie->autori);
				}
				echo('</div>');
				
			echo("</div>");
			if($barva == "#FFB96A"){
				$barva = "#FFEE9F";
			}
			else{
				$barva = "#FFB96A";
			}
		}
	}
}