<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<?php set_include_path($_SERVER["DOCUMENT_ROOT"]);
	require 'php-vzhled/meta.php' ?>
	<title>28. oddíl Vločka - Příměstské tábory - přihláška a kontakt</title>
	
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
			<h1>Příměstské tábory 2013 - Přihláška a kontakt</h1>
				<p class="velke"><a target="_blank" href="http://vlocka-tabory.kambo.us/">Přihlášování na Příměstské tábory 2013</a>
				 - přihlašujeme se na internetu</p>
				<p>Máme omezený počet míst, o přijetí rozhoduje datum zaslání přihlášky!</p>
				<p>kdo by si nerozumněl s internetovou přihláškou, může se s námi domluvit i jinak 
				(on-line přihláška je ale rychlejší a jednodušší)</p>
 				<h2>S dotazy se obracejte na:</h2>
            		<p><b>plzentabor@gmail.com</b></p>
					<p><b>Pavlína Trejbalová</b> - tel.:775 279 081 </p>			 
		</div>
		<?php require 'primestske_tabory/spodek.php'?>			
	</div>
</body>
</html>