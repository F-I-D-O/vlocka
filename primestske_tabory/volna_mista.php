<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<?php set_include_path($_SERVER["DOCUMENT_ROOT"]);
	require 'php-vzhled/meta.php' ?>
	<title>28. oddíl Vločka - Příměstské tábory - volná místa</title>
	
	<!-- link na ikonu pro facebook -->
	<link rel="image_src" href="http://vlocka.skauting.cz/images/ikonyweb/logo3.png">
</head>

<body>
	<div id="hlavni">
		<?php
		set_include_path($_SERVER["DOCUMENT_ROOT"]);
		require 'php/databaze.php';
		require 'php-vzhled/zahlavi-default.php';
		require 'php-vzhled/horejsek.php';
		require 'primestske_tabory/vlevo_zacatek.php';?>
		<?php 
		require 'php-vzhled/vlevo_konec.php';
		?>
		
		<div class="obsah">
			<p style="position:absolute; top: 285px; left: 765px">Aktualizováno dne: 17. 5. 2013</p>
    		<h1>Příměstské tábory 2013 - volná místa</h1>
    			<p>Na léto 2013 jsme připravili čtyři běhy příměstského tábora pro kluky a holky ve věku 5 - 11 let.</p> 
               	<p>Tábory se uskuteční ve skautských klubovnách u Seneckého rybníka.</p>
    			<h3>5. - 9. 8. 2013 - Tábor z pohádky do pohádky</h3>
    				<p>4 volných míst</p>
      			<h3>12. - 16. 8. 2013 - Tábor Hobit</h3>
    				<p>29 volných míst</p>
     			<h3>19. - 23. 8. 2013 - Tábor Asterix a Obelix</h3>
    				<p>0 volných míst</p>
    			<h3>26. - 30. 8. 2013 - Tábor Shrek</h3>
    				<p>19 volných míst</p>
    			<br />	
        		<p class="velke"><a target="_blank" href="http://vlocka-tabory.kambo.us/">Přihlašování na tábory</a> - 
        			přihlašuje se on-line!</p>
        			
      			<h2>Průvodci na cestě pohádkovou říší</h2>
      			<p>Pavlína, Jonáš, Muflon, Lola, Maggie, Zubka, Medúza, Madla, Píšťalka, Danča</p>				
      			<h2>Trpaslící co povedou cestu k Hoře Osudu:</h2>
      			<p>Pavlína, Lola, Maggie, Muflon, Medúza, Lumík, Jonáš, Píšťalka, Danča...</p>				
      			<h2>Náčelníci kmene: </h2>
      			<p>Pavlína, Maggie, Jonáš, Lola, Muf, Zubka, Medúza, Lumík, Bobr, Danča</p>
      			<h2>Zlobří vedoucí: </h2>
      			<p>Pavlína, Syky, Danča, Píšťalka, Jonáš, Lola, Lumík, Bobr...</p>
 		</div>
    	<?php require 'primestske_tabory//spodek.php'?>			
	</div>
</body>
</html>