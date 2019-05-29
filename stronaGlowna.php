<?php

	session_start();
	
	

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<title>Busy-strona glowna</title>
</head>

<body>
	
	<div id="strona">
		<div id="naglowek">
			Strona glowna
		</div>
		<div id="menu">
			<div class="opcja"> <a href="rezerwacja.php">Rezerwacja</a> </div>
			<div class="opcja"> <a href="wyswietlRezerwacje.php">Wyswietl rezerwacje</a> </div>
			<div class="opcja"> <a href="grafikKursyKlient.php">Kursy</a> </div>
			<div class="opcja"><a href="wybierzNagrode.php">Program lojalnosciowy</a></div>
			<div class="opcja"><a href="logout.php">wyloguj</a></div>
			<div style="clear:both;"></div>
		</div>
	</div>
</body>
</html>