<?php

function oznameni_o_chybe ($typ_chyby) {
	if(array_key_exists($typ_chyby, $_GET)){
		echo	'<div class="error">
					<p>' . $_GET[$typ_chyby] . '</p>
				</div>';
	}
}

?>
