<?php

const SOUBOR_LOGIN = 'login.php';

define('ADRESA_LOGIN', ADRESA_STRANEK . ODDELOVAC_ADRESY . ADRESAR_PHP . ODDELOVAC_ADRESY . SOUBOR_LOGIN);

?>

			<form action="<?php echo ADRESA_LOGIN ?>" method="post">
				<table>
					<tr>
						<td><label for="login">login</label></td>
						<td><input id="login_text_pole" type="text" name="login" maxlength="20"></td>
						<td></td>
					</tr>
					<tr>
						<td><label for="heslo">heslo</label></td>
						<td><input id="heslo" type="password" name="heslo" maxlength="20"></td>
						<td><input type="submit" value="přihlásit"></td>
					</tr>
				</table>
			</form>

			<?php oznameni_o_chybe("chyba_prihlaseni")?>
			
