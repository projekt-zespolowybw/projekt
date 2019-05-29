<?php

	session_start();
	
	

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<title></title>
</head>

<body>
	<div id="strona">
		<div id="naglowek">
		Panel pracownika
		</div>
		<div id="menu">

			<div class="opcja"> <a href="dodajKursPracownik.php">Dodaj kurs</a> </div>
			<div class="opcja"> <a href="grafikKursyPracownik.php">Kursy</a> </div>
			<div class="opcja"> <a href="kierowcyRaportyPracownik.php">Raporty kierowcow</a> </div>
			<div class="opcja"><a href="raportPracownik.php">Generuj raport</a></div>
			<div class="opcja"><a href="grafikPracownik.php">Ustal Grafik</a></div>
			<div class="opcja"><a href="logout.php">wyloguj</a></div>
			<div style="clear:both;"></div>
		</div>	
	</div>
</body>
</html>