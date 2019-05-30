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
		<div class="opcja"><a href="uzytkownicyRaportP.php">użytkownicy</a></div>
		<div class="opcja"><a href="kierowcyRaportyP.php">rapory kierowcy</a></div>
		<div class="opcja"><a href="pracownicyRaportyP.php">pracownicy raporty</a></div>
		<div class="opcja"><a href="rezerwacjeRaportyP.php">rezerwacje raporty</a></div>
		<div class="opcja"><a href="stronaPracownika.php">powrot</a></div>
		<div style="clear:both;"></div>	
		</div>
		<div id="tabela">

	<form method="post">
		sortowanie
		<select name="sortuj">
		<option value="KIE_ID">id</option>
		<option value="KIE_LICENCJA">licencja</option>
		<option value="KIE_ILOSCKM">przejechane km</option>
		<option value="DAN_IMIE">imię</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_LOGIN">login</option>
		<option value="DAN_EMAIL">email</option>
		</select>
		<br />
		wyszukiwanie po:
		<br />
		<select name="szukajTabela">
		<option value="KIE_ID">id</option>
		<option value="KIE_LICENCJA">licencja</option>
		<option value="KIE_ILOSCKM">przejechane km</option>
		<option value="DAN_IMIE">imię</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_LOGIN">login</option>
		<option value="DAN_EMAIL">email</option>
		</select>
		<input type="text" name="wyszukaj"/>
		<input type="submit" value="sortuj" />
		<br /><br />
	</form>

<?php
   session_start();   
    require_once "connect.php";
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

		
		$sql = "SELECT kierowca.KIE_ID, KIE_LICENCJA, KIE_ILOSCKM, pracownik.PRA_ID, DAN_IMIE, DAN_NAZWISKO, DAN_LOGIN, DAN_EMAIL FROM pracownik, dane, kierowca WHERE kierowca.PRA_ID = pracownik.PRA_ID AND pracownik.DAN_ID = dane.DAN_ID AND $szukajTabela LIKE '%$wyszukaj%' ORDER BY $sortuj";
		$result = $poloczenie->query($sql);

		if ($result->num_rows > 0)
		{
			
				echo "<table><tr><th>id</th><th>licencja</th><th>przejechane km</th><th>imię</th><th>nazwisko</th><th>login</th><th>email<tr>";
		
			

			while($row = $result->fetch_assoc())
				{
						echo "<tr><td>" .$row["KIE_ID"]. "</td><td>" . $row["KIE_LICENCJA"]. "</td><td>" . $row["KIE_ILOSCKM"]. "</td><td>" . $row["DAN_IMIE"]. "</td><td>" . $row["DAN_NAZWISKO"]. "</td><td>". $row["DAN_LOGIN"]. "</td><td>". $row["DAN_EMAIL"]. "</td></tr>";
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
