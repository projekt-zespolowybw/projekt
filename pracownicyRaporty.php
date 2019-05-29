<!DOCTYPE html>
<html lang="pl">
<head>
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<style>
table, th, td
{
    border: 1px solid black;
}
</style>
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
		<div id="tabela">

	<form method="post">
		sortowanie
		<select name="sortuj">
		<option value="PRA_ID">id</option>
		<option value="PRA_DZIAL">licencja</option>
		<option value="DAN_IMIE">przejechane km</option>
		<option value="DAN_NAZWISKO">imię</option>
		<option value="DAN_LOGIN">nazwisko</option>
		<option value="DAN_EMAIL">login</option>
		</select>
		<br />
		wyszukiwanie po:
		<br />
		<select name="szukajTabela">
		<option value="PRA_ID">id</option>
		<option value="PRA_DZIAL">licencja</option>
		<option value="DAN_IMIE">przejechane km</option>
		<option value="DAN_NAZWISKO">imię</option>
		<option value="DAN_LOGIN">nazwisko</option>
		<option value="DAN_EMAIL">login</option>
		</select>
		<br />
		<input type="text" name="wyszukaj"/>
		<input type="submit" value="sortuj" />
		<br /><br />
	</form>

<?php
   session_start();   
    require_once "connect.php";
	$sortuj = "PRA_ID";
	$wyszukaj = " ";
	$szukajTabela = "PRA_ID";
	if (isset($_POST['sortuj'])&&isset($_POST['wyszukaj'])&&isset($_POST['szukajTabela']))
	{
		$sortuj 		= $_POST['sortuj'];
		$wyszukaj 		= $_POST['wyszukaj'];
		$szukajTabela 	= $_POST['szukajTabela'];
	}
	try
	{
		$poloczenie = new mysqli($host, $db_user, $db_password, $db_name);

		if ($poloczenie->connect_error)
		{
			die("connection failed: " . $poloczenie->connect_error);
		} 

		
		$sql = "SELECT pracownik.PRA_ID, PRA_DZIAL, dane.DAN_ID, DAN_IMIE, DAN_NAZWISKO, DAN_LOGIN, DAN_EMAIL FROM pracownik, dane WHERE pracownik.DAN_ID = dane.DAN_ID AND $szukajTabela LIKE '%$wyszukaj%' ORDER BY $sortuj";
		$result = $poloczenie->query($sql);

		if ($result->num_rows > 0)
		{
			
				echo "<table><tr><th>id</th><th>dział</th><th>imię</th><th>nazwisko</th><th>login</th><th>email<tr>";
		
			

			while($row = $result->fetch_assoc())
				{
						echo "<tr><td>" .$row["PRA_ID"]. "</td><td>" . $row["PRA_DZIAL"]. "</td><td>" . $row["DAN_IMIE"]. "</td><td>" . $row["DAN_NAZWISKO"]. "</td><td>" . $row["DAN_LOGIN"]. "</td><td>". $row["DAN_EMAIL"]. "</td></tr>";
				}
			echo "</table>";
		}
		else
		{
			echo "0 results";
		}
	}
	catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera!</span>';
			echo '<br />Informacja developerska: '.$e;
		}


?> 

		</div>
	</div>

</body>
</html>
