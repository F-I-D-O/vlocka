<!DOCTYPE html>

<html lang="cs-cz" dir="ltr">
<head>
	<?php require 'php-vzhled/meta.php' ?>
	<title>28. oddíl Vločka - Novinky</title>
	<meta name="description" content="Jsme oddíl světlušek, vlčat, skautů, skautek a R&amp;R, 
		dohromady je nás okolo 100 VLOČEK - jsme taková malá lavina a klubovnu máme u 
		Seneckého rybníka (Plzeň - Bolevec). Oslavili jsme dvanácté narozeniny...">
	
	<!-- link na ikonu pro facebook -->
	<link rel="image_src" href="http://vlocka.skauting.cz/images/ikonyweb/logo3.png">
</head>

<div id="hlavni">
		<?php
		require 'php/databaze.php';
		require 'php-vzhled/zahlavi-default.php';
		require 'php-vzhled/horejsek.php';
		require 'php-vzhled/vlevo_zacatek.php';?>
		<?php 
		require 'php-vzhled/vlevo_konec.php';
		?>
		
		<div class="obsah">
			<h1> Strašidelný les</h1>
				<img src="fotky/vecer1.jpg" alt="" width="290" />
				<img src="fotky/vecer2.jpg" alt="" width="290" />						 
			 	<p>Strašidelný les se uskuteční <span style="text-decoration: underline">v pátek 7. září 2012 u Seneckého 
			 	rybníka</span>. Tato akce, určená pro odvážné kluky a holky s rodiči, pro školáky i předškoláky, má již 
			 	skoro desetiletou tradici. Start akce bude probíhat mezi 19:30 a 21:30, už teď se můžete 
			 	přihlašovat, aby jste měli své místo jisté! 
			 	Přihlásit se určitě vyplatí, na Strašidelném večeru bývá nával, 
			 	pokud se nepřihlásíte, hrozí že budete čekat. Cena akce je pro děti 30Kč, doprovod zdarma.</p>
			 	<br />
			 	<br />
			 	<br />
			 	<p style="font: bold 30px Arial; text-align: center">
			 	Přihlašování na Strašidelný les skončilo</p>
			 	<p style="font: 15px Arial; text-align: center">(Kdo nebude přihlášen, bude muset počkat, 
			 	než se na něj dostane řada v mezičasech)</p>
			 	<br />
			 	<p style="font: 15px Arial; text-align: center">Konec přihlašování je v pátek 7. 9. ve 14:00!!</p>
			 	<br />
			 	<br />
			 	<br />
			 	<p>Podívejte se také na <a target="_blank" href="stare/Fotokronika/HROCH2009/index.html">fotografie</a>
			 	z  minulých let</p>
			 	<img src="obrazky/plakaty/strasidla2012.png" alt="strašidelný les - plakát" width="670" />
		</div>
		<?php require 'php-vzhled/spodek.php'?>			
	</div>
</body>
</html>