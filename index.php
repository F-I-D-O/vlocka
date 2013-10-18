
<?php 

// začátek šablony - vyjímka ze strikního užívání konstant
require 'php-vzhled/sablona_zacatek.php';

const SOUBOR_NOVINKY = 'novinky.php';

define('CESTA_NOVINKY', CESTA_ADRESAR_STRANKY . ODDELOVAC_ADRESY . SOUBOR_NOVINKY);

	require CESTA_NOVINKY;

?>
	
		
	
		
	<div id="vpravo">		
		<!-- Oblast důležitých zpráv -->		
		<?php require "php-vzhled/dulezite.php";?>
		<br>	
		<a href="<?php echo("http://" . $_SERVER["SERVER_NAME"] . "/prijimame_cleny.php") ?>">
			<img src="Obrazky/Ikony/ikona-nabor.png" alt="přijímáme členy">
		</a>	

		<div id="anketnik"  style="margin: 10px">
			<h2>Vzkazovník</h2>
			<!-- BLUEBOARD SHOUTBOARD -->
			<iframe style="border: 0px; width: 222px; height: 320px; overflow: hidden"   
					src="http://www.blueboard.cz/shoutboard.php?hid=cs9fkuk8dxdikj62p2r59cbffa263k">
						<a href="http://www.blueboard.cz/shoutboard.php?hid=cs9fkuk8dxdikj62p2r59cbffa263k">
						ShoutBoard od BlueBoard.cz</a>
			</iframe>
			<!-- BLUEBOARD SHOUTBOARD KONEC -->
		</div>
	</div>

<?php 

// konec šablony - vyjímka ze strikního užívání konstant
require 'php-vzhled/sablona_konec.php';

?>		
