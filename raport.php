<?php

	session_start();
	
	

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<title>raporty</title>
</head>

<body>
	<div id="strona">
		<div id="naglowek">
			Generuj raport
		</div>
		<div id="menu">
		<div class="opcja"><a href="uzytkownicyRaport.php">użytkownicy</a></div>
		<div class="opcja"><a href="kierowcyRaporty.php">rapory kierowcy</a></div>
		<div class="opcja"><a href="pracownicyRaporty.php">pracownicy raporty</a></div>
		<div class="opcja"><a href="rezerwacjeRaporty.php">rezerwacje raporty</a></div>
		<div class="opcja"><a href="stronaGlownaAdmin.php">powrot</a></div>
		<div style="clear:both;"></div>	
		</div>
	</div>
</body>
</html>