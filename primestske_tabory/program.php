<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<?php set_include_path($_SERVER["DOCUMENT_ROOT"]);
	require 'php-vzhled/meta.php' ?>
	<title>28. oddíl Vločka - Příměstské tábory - informace a program</title>
	
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
			<h1>Příměstské tábory 2013 - Program</h1>
				<h4>Je připraven bohatý program v okolí skautských kluboven u Seneckého rybníka:</h4>
					<p>(při nepříznivém počasí uvnitř)</p>
					<ul>
						<li>celotáborová hra (téma Z pohádky do pohádky, Hobit, Asterix a Obelix, Shrek)</li>
						<li>sportovní hry</li>
						<li>rukodělky</li>
						<li>lanové překážky</li>
						<li>stolní hry</li>
						<li>výlet do okolí</li>
						<li>zábavné soutěže</li>
						<li>projížďka na lodičce</li>
						<li>hry s padákem</li>
						<li>míčové hry</li>
						<li>vědecké pokusy</li>
						<li>stopovačka</li>
						<li>dramatické hry</li>
					</ul>
				<ul class="velky_seznam">
					<li>program pro děti od 5 do 11 let!</li>
					<li>cena tábora je 1300 Kč/týden</li>
					<li>děti dostanou jedno hlavní jídlo denně a dvě svačiny</li>
					<li>pití k dispozici po celý den </li>
					<li>každý den dva srazy: 7.30h a 8.30h na konečné tramvaje č.1 v Bolevci (či po domluvě později 
						v klubovně)</li>
					<li>konec vždy v 17h na konečné tramvaje č.1 v Bolevci (po domluvě možnost vyzvednutí 
						dítěte dříve u kluboven u Seneckého rybníka)</li>
				</ul>	
			 	<br />	
        		<p class="velke"><a target="_blank" href="http://vlocka-tabory.kambo.us/">Přihlašování na tábory</a> - 
        			přihlašuje se on-line!</p>
        		<p><u>Přihlášky vyplňte nejpozději do 31.5.2013</u></p>
		</div>
		<?php require 'primestske_tabory//spodek.php'?>			
	</div>
</body>
</html>