<?php

const SOUBOR_LOGOUT = 'logout.php';

define('ADRESA_LOGOUT', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_PHP . ODDELOVAC_ADRESY . SOUBOR_LOGOUT);

?>

			<div id="prihlasovaci_formular_prihlasen" >
				<p id="login"><?php echo $_SESSION["login"] ?></p>
				<p id="role"><?php echo Opravneni::$nazvy_funkci[$_SESSION["role"]] ?></p>
				<form action="<?php echo ADRESA_LOGOUT ?>" method="post">
					<input type="submit" value="odhlásit">
				</form>
			</div>
			<!-- <div style="float: right; position: relative; top: -23px">
				//<?php
//				set_include_path($_SERVER["DOCUMENT_ROOT"]);
//				?>
			</div> -->
