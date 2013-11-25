<?php

if(!$GLOBALS['opravneni']->prover_opravneni(Opravneni::VEDOUCI)){
	posledni_strana0();
}

?>
		
		<button id="nova_novinka-tlacitko_zobraz_formular" class="sprava_tlacitko">Nová novinka</button>
		
		<form id="nova_novinka-formular" >
			<p id="nova_novinka-nadpis">Nová novinka</p>
			<label for="nadpis">Nadpis novinky:</label>
			<input id="nova_novinka-nadpis_nove_novinky-pole" type="text" name="nadpis" maxlength="120">
			<label for="text">Text novinky:</label>
			<textarea id="nova_novinka-textarea" name="text_novinky" maxlength="10000"></textarea>
			<button id="nova_novinka-tlacitko_vlozit_novinku" class="sprava_tlacitko" type="button">
				Vložit novinku do databáze
			</button>
			<button id="nova_novinka-tlacitko_zpet" class="sprava_tlacitko" type="button">Zpět</button>
		</form>
	
			


