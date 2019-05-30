<?php

	session_start();
	
	

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<title>Strona pracownika</title>
</head>

<body>
	
	<div id="strona">
		<div id="naglowek">
			Panel Pracownika
		</div>
		<div id="menu">
		<div class="opcja"><a href="rezerwacjeRaportyP.php">Generuj raport</a></div>
		<div class="opcja"><a href="grafik.php">Ustal Grafik</a></div>
		<div class="opcja"><a href="dodajKurs.php">dodaj kurs</a></div>
		<div class="opcja"><a href="logout.php">wyloguj</a></div>
		<div style="clear:both;"></div>
		</div>
	</div>

</body>
</html>