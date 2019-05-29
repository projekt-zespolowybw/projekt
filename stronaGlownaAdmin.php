<?php

	session_start();
	
	

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<title>busy-Administracja</title>
</head>

<body>
	<div id="strona">
		<div id="naglowek">
			Panel administratora
		</div>
		<div id="menu">
			<div class="opcja"> <a href="dodajPojazd.php">Dodaj pojazd</a> </div>
			<div class="opcja"> <a href="dodajKursAdmin.php">Dodaj kurs</a> </div>
			<div class="opcja"> <a href="grafikKursyAdmin.php">Kursy</a> </div>
			<div class="opcja"> <a href="dodajPracownika.php">Dodaj pracownika</a> </div>
			<div class="opcja"> <a href="kierowcyRaportyAdmin.php">Raporty kierowcow</a> </div>
			<div class="opcja"><a href="raportAdmin.php">Generuj raport</a></div>
			<div class="opcja"><a href="grafikAdmin.php">Ustal Grafik</a></div>
			<div class="opcja"><a href="logout.php">wyloguj</a></div>
			<div style="clear:both;"></div>
		</div>
	</div>
</body>
</html>