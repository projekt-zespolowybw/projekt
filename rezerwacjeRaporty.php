<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
   session_start();   
    require_once "connect.php";
	try
	{
		$poloczenie = new mysqli($host, $db_user, $db_password, $db_name);

		if ($poloczenie->connect_error)
		{
			die("connection failed: " . $poloczenie->connect_error);
		} 
		
		
		
		
		
		$sql = "SELECT klient.KLI_ID, DAN_IMIE, DAN_NAZWISKO, DAN_EMAIL, DAN_LOGIN, REZ_ID, REZ_DATA, REZ_CENA FROM klient, dane, rezerwacje WHERE klient.DAN_ID = dane.DAN_ID AND klient.KLI_ID = rezerwacje.KLI_ID";
		$result = $poloczenie->query($sql);

		if ($result->num_rows > 0)
		{
			
				echo "<table><tr><th>data rezerwacji</th><th>id rezerwacji</th><th>cena rezerwacji</th><th>nazwisko klienta</th><th>imię klienta</th><th>email klienta<tr>";
		
			

			while($row = $result->fetch_assoc())
				{
						echo "<tr><td>" .$row["REZ_DATA"]. "</td><td>" . $row["REZ_ID"]. "</td><td>" . $row["REZ_CENA"]. "</td><td>" . $row["DAN_NAZWISKO"]. "</td><td>" . $row["DAN_IMIE"]. "</td><td>". $row["DAN_EMAIL"]. "</td></tr>";
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
