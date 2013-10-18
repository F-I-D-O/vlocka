<?php

if(!$GLOBALS['opravneni']->prover_opravneni(Opravneni::VEDOUCI)){
	posledni_strana0();
}

?>
		
		<button id="nova_novinka-tlacitko_zobraz_formular" class="tlacitko_spravy">Nová novinka</button>
		
		<form id="nova_novinka-formular" >
			<p id="nova_novinka-nadpis">Nová novinka</p>
			<label for="nadpis">Nadpis novinky:</label>
			<input id="nova_novinka-nadpis_nove_novinky-pole" type="text" name="nadpis" maxlength="120">
			<label for="text">Text novinky:</label>
			<textarea id="nova_novinka-textarea" name="text_novinky" maxlength="10000"></textarea>
			<button id="nova_novinka-tlacitko_vlozit_novinku" class="tlacitko_spravy" type="button">
				Vložit novinku do databáze
			</button>
			<button id="nova_novinka-tlacitko_zpet" class="tlacitko_spravy" type="button">Zpět</button>
		</form>
	
			


