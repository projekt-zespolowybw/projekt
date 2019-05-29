<?php

	session_start();   
    require_once "connect.php";

    
    if (isset($_POST['markaPojazdu']) && isset($_POST['modelPojazdu']) && isset($_POST['rejestracja']) && isset($_POST['dataProdukcji']) && isset($_POST['dataPrzegladu']))
    {
        $wszystko_OK=true;
        $markaPojazdu = $_POST['markaPojazdu'];
        $modelPojazdu = $_POST['modelPojazdu'];
        $rejestracja = $_POST['rejestracja'];
        $dataProdukcji = $_POST['dataProdukcji'];
        $dataPrzegladu = $_POST['dataPrzegladu'];
    }
else {$wszystko_OK=false;}

		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
            {
				
				
				if ($wszystko_OK==true)
				{
					
					if ($polaczenie->query("INSERT INTO firma_transportowa.pojazd VALUES (NULL, '$markaPojazdu','$modelPojazdu', '$rejestracja','$dataProdukcji','$dataPrzegladu')"))
					{
						echo "udało się dodać pojazd";
						header('Location: stronaGlownaAdmin.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	
	
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>busy - dodawanie pojazdu</title>
	
	<style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>

<body>
	<div id="strona">
		<div id="naglowek">
			Panel administratora
		</div>
		<div id="menu">
		<div class="opcja"><a href="dodajPojazd.php">Dodaj pojazd</a></div>
		<div class="opcja"><a href="dodajPracownika.php">Dodaj pracownika</a></div>
		<div class="opcja"><a href="dodajKurs.php">Dodaj kurs</a></div>
		<div class="opcja"><a href="raport.php">Generuj raport</a></div>
		<div class="opcja"><a href="grafik.php">Ustal Grafik</a></div>
		<div class="opcja"><a href="grafikKursy.php">Grafik kursów</a></div>
		<div class="opcja"><a href="logout.php">wyloguj</a></div>
		<div style="clear:both;"></div>
		</div>
		<div id="tabela">
	
	<form method="post">
	
		Marka Pojazdu: <br /> <input type="text" name="markaPojazdu" /><br />
		
		Model Pojazdu: <br /> <input type="text" name="modelPojazdu" /><br />
				
        Rejestracja: <br /> <input type="text" maxlength="7" name="rejestracja" /><br />
		
		
		Data Produkcji: <br /> <input type="date" name="dataProdukcji" /><br />
		

		Data przegladu: <br /> <input type="date" name="dataPrzegladu" /><br />
		
		
		<?php
			if (isset($_SESSION['e_regulamin']))
			{
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);
			}
		?>	

		
		<br />
		
		<input type="submit" value="Zarejestruj się" />
		
	</form>
	</div>
	</div>
	
</body>
</html>