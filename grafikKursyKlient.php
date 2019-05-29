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
	
		<div id="tabela">
			<br /><br />
			<form method="post">
				sortowanie
				<select name="sortuj">
				<option value="KUR_ID">id kursu</option>
				<option value="KUR_POCZATEK">początek kursu</option>
				<option value="KUR_KONIEC">koniec</option>
				<option value="KUR_DATAPOCZ">data roz</option>
				<option value="KUR_DATAKONC">data zak</option>
				<option value="KUR_ODLEGLOSC">odległość w km</option>
				<option value="KUR_CZAS">czas</option>
				<option value="KIE_ID">id kierowcy</option>
				<option value="POJ_ID">id pojazdu</option>
				</select>
				<br />
				wyszukiwanie po:
				<br />
				<select name="szukajTabela">
				<option value="KUR_ID">id kursu</option>
				<option value="KUR_POCZATEK">początek kursu</option>
				<option value="KUR_KONIEC">koniec</option>
				<option value="KUR_DATAPOCZ">data roz</option>
				<option value="KUR_DATAKONC">data zak</option>
				<option value="KUR_ODLEGLOSC">odległość w km</option>
				<option value="KUR_CZAS">czas</option>
				<option value="KIE_ID">id kierowcy</option>
				<option value="POJ_ID">id pojazdu</option>
				</select>
				<input type="text" name="wyszukaj"/>
				<input type="submit" value="sortuj" />
				<br /><br />
			</form>
		</div>
	</div>

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

		
		$sql = "SELECT kurs.KUR_ID, KUR_POCZATEK, KUR_KONIEC, KUR_DATAPOCZ, KUR_DATAKONC, KUR_ODLEGLOSC, KUR_CZAS, kierowca.KIE_ID, POJ_ID FROM kierowca, kurs WHERE kierowca.KIE_ID = kurs.KIE_ID AND $szukajTabela LIKE '%$wyszukaj%' ORDER BY $sortuj";
		$result = $poloczenie->query($sql);

		if ($result->num_rows > 0)
		{
			
				echo "<table><tr><th>id kursu</th><th>początek kursu</th><th>koniec</th><th>data roz</th><th>data zak</th><th>odległość w km</th><th>czas</th><th>id kierowcy</th><th>pojazd id<tr>";
		
			

			while($row = $result->fetch_assoc())
				{
						echo "<tr><td>" .$row["KUR_ID"]. "</td><td>" . $row["KUR_POCZATEK"]. "</td><td>" . $row["KUR_KONIEC"]. "</td><td>" . $row["KUR_DATAPOCZ"]. "</td><td>" . $row["KUR_DATAKONC"]. "</td><td>". $row["KUR_ODLEGLOSC"]. "</td><td>". $row["KUR_CZAS"]. "</td><td>". $row["KIE_ID"]. "</td><td>". $row["POJ_ID"]."</td></tr>";
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


</body>
</html>
