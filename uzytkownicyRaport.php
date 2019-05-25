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
	<form method="post">
		<br />
		pierwsza kolumna
		<select name="pierwszePole">
		<option value="KLI_ID">id</option>
		<option value="DAN_IMIE">imie</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_LOGIN">login</option>
		<option value="DAN_EMAIL">email</option>
		<option value="KLI_PUNKTY">punkty</option>
		</select>
		druga kolumna
		<select name="drugiePole">
		<option value=" ">brak</option>
		<option value="DAN_IMIE">imie</option>
		<option value="KLI_ID">id</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_LOGIN">login</option>
		<option value="DAN_EMAIL">email</option>
		<option value="KLI_PUNKTY">punkty</option>
		</select>
		trzecia kolumna
		<select name="trzeciePole">	
		<option value=" ">brak</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="KLI_ID">id</option>
		<option value="DAN_IMIE">imie</option>
		<option value="DAN_LOGIN">login</option>
		<option value="DAN_EMAIL">email</option>
		<option value="KLI_PUNKTY">punkty</option>
		</select>
		czwarta kolumna
		<select name="czwartePole">
		<option value=" ">brak</option>
		<option value="DAN_LOGIN">login</option>
		<option value="KLI_ID">id</option>
		<option value="DAN_IMIE">imie</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_EMAIL">email</option>
		<option value="KLI_PUNKTY">punkty</option>
		</select>
		piąta kolumna
		<select name="piatePole">
		<option value=" ">brak</option>
		<option value="DAN_EMAIL">email</option>
		<option value="KLI_ID">id</option>
		<option value="DAN_IMIE">imie</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_LOGIN">login</option>
		<option value="KLI_PUNKTY">punkty</option>
		</select>
		szósta kolumna
		<select name="szostePole">
		<option value=" ">brak</option>
		<option value="KLI_PUNKTY">punkty</option>
		<option value="KLI_ID">id</option>
		<option value="DAN_IMIE">imie</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_LOGIN">login</option>
		<option value="DAN_EMAIL">email</option>
		</select>
		<br />
		sortowanie
		<br />
		<select name="sortuj">
		<option value="KLI_ID">id</option>
		<option value="DAN_IMIE">imie</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_LOGIN">login</option>
		<option value="DAN_EMAIL">email</option>
		<option value="KLI_PUNKTY">punkty</option>
		</select>
		<br />
		wyszukiwanie po:
		<br />
		<select name="szukajTabela">
		<option value="KLI_ID">id</option>
		<option value="DAN_IMIE">imie</option>
		<option value="DAN_NAZWISKO">nazwisko</option>
		<option value="DAN_LOGIN">login</option>
		<option value="DAN_EMAIL">email</option>
		<option value="KLI_PUNKTY">punkty</option>
		</select>
		<input type="text" name="wyszukaj"/>
		<input type="submit" value="sortuj" />
		<br /><br />
		<input type="submit" value="pokaż dane" />
	</form>

<?php
   session_start();   
    require_once "connect.php";
	if (isset($_POST['pierwszePole'])&&isset($_POST['drugiePole'])&&isset($_POST['trzeciePole'])&&isset($_POST['czwartePole'])&&isset($_POST['piatePole'])&&isset($_POST['szostePole'])&&isset($_POST['sortuj'])&&isset($_POST['wyszukaj'])&&isset($_POST['szukajTabela']))
	{
		$pierwszePole = $_POST['pierwszePole'];
		$drugiePole   = $_POST['drugiePole'];
		$trzeciePole  = $_POST['trzeciePole'];
		$czwartePole  = $_POST['czwartePole'];
		$piatePole    = $_POST['piatePole'];
		$szostePole   = $_POST['szostePole'];
		$sortuj		  = $_POST['sortuj'];
		$wyszukaj 	  = $_POST['wyszukaj'];
		$szukajTabela = $_POST['szukajTabela'];
	}
	try
	{
		$poloczenie = new mysqli($host, $db_user, $db_password, $db_name);

		if ($poloczenie->connect_error)
		{
			die("connection failed: " . $poloczenie->connect_error);
		} 
		
		/*if ($_POST['drugiePole'] === " ") 
		{
		$_POST['drugiePole'] = null; // or 'NULL' for SQL
		}
		if ($_POST['trzeciePole'] === " ") 
		{
		$_POST['trzeciePole'] = null; // or 'NULL' for SQL
		}
		if ($_POST['czwartePole'] === " ") 
		{
		$_POST['czwartePole'] = null; // or 'NULL' for SQL
		}
		if ($_POST['piatePole'] === " ") 
		{
		$_POST['piatePole'] = null; // or 'NULL' for SQL
		}
		if ($_POST['szostePole'] === " ") 
		{
		$_POST['szostePole'] = null; // or 'NULL' for SQL
		}*/
			switch ($_POST['pierwszePole'])
			{ 
			case "KLI_ID":
				$pierwsze = "id";
				break;
			case "DAN_IMIE":
				$pierwsze = "imię";
				break;
			case "DAN_NAZWISKO":
				$pierwsze = "nazwisko";
				break;
			case "DAN_LOGIN":
				$pierwsze = "login";
				break;
			case "DAN_EMAIL":
				$pierwsze = "e-mail";
				break;
			case "KLI_PUNKTY":
				$pierwsze = "punkty";
				break;
			default:
				$_POST['pierwszePole'] = null;
			}
				
			switch ($_POST['drugiePole'])
			{ 
			case "KLI_ID":
				$drugie = "id";
				break;
			case "DAN_IMIE":
				$drugie = "imię";
				break;
			case "DAN_NAZWISKO":
				$drugie = "nazwisko";
				break;
			case "DAN_LOGIN":
				$drugie = "login";
				break;
			case "DAN_EMAIL":
				$drugie = "e-mail";
				break;
			case "KLI_PUNKTY":
				$drugie = "punkty";
				break;
			default:
				$_POST['drugiePole'] = null;
			}		
			
			switch ($_POST['trzeciePole'])
			{ 
			case "KLI_ID":
				$trzecie = "id";
				break;
			case "DAN_IMIE":
				$trzecie = "imię";
				break;
			case "DAN_NAZWISKO":
				$trzecie = "nazwisko";
				break;
			case "DAN_LOGIN":
				$trzecie = "login";
				break;
			case "DAN_EMAIL":
				$trzecie = "e-mail";
				break;
			case "KLI_PUNKTY":
				$trzecie = "punkty";
				break;
			default:
				$_POST['trzeciePole'] = null;
			}
					
			switch ($_POST['czwartePole'])
			{ 
			case "KLI_ID":
				$czwarte = "id";
				break;
			case "DAN_IMIE":
				$czwarte = "imię";
				break;
			case "DAN_NAZWISKO":
				$czwarte = "nazwisko";
				break;
			case "DAN_LOGIN":
				$czwarte = "login";
				break;
			case "DAN_EMAIL":
				$czwarte = "e-mail";
				break;
			case "KLI_PUNKTY":
				$czwarte = "punkty";
				break;
			default:
				$_POST['czwartePole'] = null;
			}
			
			switch ($_POST['piatePole'])
			{ 
			case "KLI_ID":
				$piate = "id";
				break;
			case "DAN_IMIE":
				$piate = "imię";
				break;
			case "DAN_NAZWISKO":
				$piate = "nazwisko";
				break;
			case "DAN_LOGIN":
				$piate = "login";
				break;
			case "DAN_EMAIL":
				$piate = "e-mail";
				break;
			case "KLI_PUNKTY":
				$piate = "punkty";
				break;
			default:
				$_POST['piatePole'] = null;
			}
			
			switch ($_POST['szostePole'])
			{ 
			case "KLI_ID":
				$szoste = "id";
				break;
			case "DAN_IMIE":
				$szoste = "imię";
				break;
			case "DAN_NAZWISKO":
				$szoste = "nazwisko";
				break;
			case "DAN_LOGIN":
				$szoste = "login";
				break;
			case "DAN_EMAIL":
				$szoste = "e-mail";
				break;
			case "KLI_PUNKTY":
				$szoste = "punkty";
				break;
			default:
				$_POST['szostePole'] = null;
			}
		//}
		
		
		
		$sql = "SELECT KLI_ID, KLI_PUNKTY, DAN_IMIE, DAN_NAZWISKO, DAN_EMAIL, DAN_LOGIN FROM klient, dane WHERE klient.DAN_ID = dane.DAN_ID AND $szukajTabela LIKE '%$wyszukaj%' ORDER BY $sortuj";
		$result = $poloczenie->query($sql);

		if ($result->num_rows > 0)
		{
			if($_POST['drugiePole'] != null && $_POST['trzeciePole'] != null && $_POST['czwartePole'] != null && $_POST['piatePole'] != null && $_POST['szostePole'] != null)
			{
				echo "<table><tr><th>$pierwsze</th><th>$drugie</th><th>$trzecie</th><th>$czwarte</th><th>$piate</th><th>$szoste<tr>";
			}
			elseif($_POST['drugiePole'] != null && $_POST['trzeciePole'] != null && $_POST['czwartePole'] != null && $_POST['piatePole'] != null && $_POST['szostePole'] == null)
			{
				echo "<table><tr><th>$pierwsze</th><th>$drugie</th><th>$trzecie</th><th>$czwarte</th><th>$piate<tr>";
			}
			elseif($_POST['drugiePole'] != null && $_POST['trzeciePole'] != null && $_POST['czwartePole'] != null && $_POST['piatePole'] == null && $_POST['szostePole'] == null)
			{
				echo "<table><tr><th>$pierwsze</th><th>$drugie</th><th>$trzecie</th><th>$czwarte<tr>";
			}
			elseif($_POST['drugiePole'] != null && $_POST['trzeciePole'] != null && $_POST['czwartePole'] == null && $_POST['piatePole'] == null && $_POST['szostePole'] == null)
			{
				echo "<table><tr><th>$pierwsze</th><th>$drugie</th><th>$trzecie<tr>";
			}
			elseif($_POST['drugiePole'] != null && $_POST['trzeciePole'] == null && $_POST['czwartePole'] == null && $_POST['piatePole'] == null && $_POST['szostePole'] == null)
			{
				echo "<table><tr><th>$pierwsze</th><th>$drugie<tr>";
			}
			elseif($_POST['drugiePole'] == null && $_POST['trzeciePole'] == null && $_POST['czwartePole'] == null && $_POST['piatePole'] == null && $_POST['szostePole'] == null)
			{
				echo "<table><tr><th>$pierwsze<tr>";
			}
			

			while($row = $result->fetch_assoc())
				{
					if($_POST['drugiePole'] != null && $_POST['trzeciePole'] != null && $_POST['czwartePole'] != null && $_POST['piatePole'] != null && $_POST['szostePole'] != null)
					{
						echo "<tr><td>" .$row[$pierwszePole]. "</td><td>" . $row[$drugiePole]. "</td><td>" . $row[$trzeciePole]. "</td><td>" . $row[$czwartePole]. "</td><td>" . $row[$piatePole]. "</td><td>". $row[$szostePole]. "</td></tr>";
					}
					elseif($_POST['drugiePole'] != null && $_POST['trzeciePole'] != null && $_POST['czwartePole'] != null && $_POST['piatePole'] != null && $_POST['szostePole'] == null)
					{
						echo "<tr><td>" .$row[$pierwszePole]. "</td><td>" . $row[$drugiePole]. "</td><td>" . $row[$trzeciePole]. "</td><td>" . $row[$czwartePole]. "</td><td>" . $row[$piatePole]. "</td></tr>";
					}
					elseif($_POST['drugiePole'] != null && $_POST['trzeciePole'] != null && $_POST['czwartePole'] != null && $_POST['piatePole'] == null && $_POST['szostePole'] == null)
					{
						echo "<tr><td>" .$row[$pierwszePole]. "</td><td>" . $row[$drugiePole]. "</td><td>" . $row[$trzeciePole]. "</td><td>" . $row[$czwartePole].  "</td></tr>";	
					}
					elseif($_POST['drugiePole'] != null && $_POST['trzeciePole'] != null && $_POST['czwartePole'] == null && $_POST['piatePole'] == null && $_POST['szostePole'] == null)
					{
						echo "<tr><td>" .$row[$pierwszePole]. "</td><td>" . $row[$drugiePole]. "</td><td>" . $row[$trzeciePole]. "</td></tr>";
					}
					elseif($_POST['drugiePole'] != null && $_POST['trzeciePole'] == null && $_POST['czwartePole'] == null && $_POST['piatePole'] == null && $_POST['szostePole'] == null)
					{
						echo "<tr><td>" .$row[$pierwszePole]. "</td><td>" . $row[$drugiePole]. "</td></tr>";
					}
					elseif($_POST['drugiePole'] == null && $_POST['trzeciePole'] == null && $_POST['czwartePole'] == null && $_POST['piatePole'] == null && $_POST['szostePole'] == null)
					{
						echo "<tr><td>" .$row[$pierwszePole] . "</td></tr>";
					}

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
