<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Language" content="cs">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="geo.country" content="CZ">
	<meta name="keywords" content="skauti Plzeň,skauting Plzen,Vločka Plzeň,skauti předškoláci,skautský oddíl Plzeň">
	<meta name="Rating" content="General">
	<meta name="googlebot" content="snippet,archive">
	<meta name="description" content="28. oddíl Vločka - Příměstské tábory - mapa">
	<link href="../style.css" rel="stylesheet" type="text/css">
	<link rel="image_src" href="http://vlocka.skauting.cz/images/ikonyweb/logo3.png">
	<link href="http://vlocka.skauting.cz/images/ikonyweb/logo-mini3.ico" rel="Shortcut Icon">
	<title>28. oddíl Vločka Plzeň</title>
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
	 		<h1>Příměstské tábory 2012 - Mapa</h1>
	 			<img src="mapa_klubovna.JPG" alt="" border="0" width="630"/>
	 			<a href="http://www.mapy.cz/#x=130700224@y=134911488@z=15@mm=FP@ax=130700224@ay=134911488@at=Skautk%C3%A9%20klubovny%20%22Sene%C4%8D%C3%A1k%22@ad=Skautk%C3%A9%20klubovny%20%22Sene%C4%8D%C3%A1k%22@sa=s@st=s@ssq=seneck%C3%BD%20rybn%C3%ADk%20skauti" target="_blank">
	 			Klubovna na mapách cz</a>
		</div>
		<?php require 'primestske_tabory//spodek.php'?>			
	</div>
</body>
</html>