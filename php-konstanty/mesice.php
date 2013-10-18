<?php
class Mesice{
	const LEDEN = 1;
	const UNOR = 2;
	const BREZEN = 3;
	const DUBEN = 4;
	const KVETEN = 5;
	const CERVEN = 6;
	const CERVENEC = 7;
	const SRPEN = 8;
	const ZARI = 9;
	const RIJEN = 10;
	const LISTOPAD = 11;
	const PROSINEC = 12;
	
	static $nazvy_mesicu = [self::LEDEN => 'leden', 
							self::UNOR => 'únor', 
							self::BREZEN => 'březen',
							self::DUBEN	=> 'duben',
							self::KVETEN	=> 'květen',
							self::CERVEN	=> 'červen',
							self::CERVENEC	=> 'červenec',
							self::SRPEN	=> 'srpen',
							self::ZARI	=> 'září',
							self::RIJEN	=> 'říjen',
							self::LISTOPAD	=> 'listopad',
							self::PROSINEC	=> 'prosinec'];
	
	static function nazev_mesice ($cislo_mesice) {
		return self::$nazvy_mesicu[ltrim($cislo_mesice, "0")];
	}
}

?>