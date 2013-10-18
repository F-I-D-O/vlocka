<?php

/**
 * Konstanty popisující platné úrovně oprávnění.
 * @author Fido
 */
class Opravneni {
	const ANONYM = 0;
	const VEDOUCI = 10;
	const VEDOUCI_ODDILU = 20;
	const HLAVNI_ADMIN = 25;
	
	
	static $nazvy_funkci = [self::ANONYM => 'Nepřihlášen', 
							self::VEDOUCI => 'Vedoucí', 
							self::VEDOUCI_ODDILU => 'Vedoucí oddílu', 
							self::HLAVNI_ADMIN => 'Admin'];
	
	
	private $uroven;
	function get_opravneni() {
		return $this->uroven;
	}
	
	function __construct() {
		if(array_key_exists("role", $_SESSION)){
			$this->uroven = $_SESSION["role"];
		}
		else{
			$this->uroven = self::ANONYM;
		}
	}

	/**
	 * Ověřuje zda má uživatel dostatečné oprávnění
	 * @param int $sila požadované oprávnění
	 * @return boolean true pokud je oprávnění dostatečné, false pokud je oprávnění nedostatečné.
	 */
	function prover_opravneni ($sila) {
		if($this->uroven < $sila){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
}

?>
