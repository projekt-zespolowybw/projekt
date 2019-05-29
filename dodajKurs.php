<?php

	session_start();   
    require_once "connect.php";

    
    if (isset($_POST['przystanekPoczatkowy']) && isset($_POST['przystanekKoncowy']) && isset($_POST['czasOdjazdu']) && isset($_POST['czasPrzyjazdu']) && isset($_POST['odleglosc'])&& isset($_POST['maxmiejsc']))
    {
        
        
        
        $wszystko_OK=true;
        $przystanekPoczatkowy = $_POST['przystanekPoczatkowy'];
        
        $przystanekKoncowy = $_POST['przystanekKoncowy'];
        $czasOdjazdu = $_POST['czasOdjazdu'];
        $czasPrzyjazdu = $_POST['czasPrzyjazdu'];
        $odleglosc = $_POST['odleglosc'];
         $maxMiejsc = $_POST['maxmiejsc'];
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
                    
                    
                    
                     $rezultat = $polaczenie->query("SELECT KUR_ID FROM kurs");
                        
                    $ileKursow = $rezultat->num_rows;
                    
                    $resztamodulo= ($ileKursow%6)+1;
					
					if ($polaczenie->query("INSERT INTO firma_transportowa.kurs VALUES ( NULL, '$przystanekPoczatkowy','$przystanekKoncowy','$czasOdjazdu','$czasPrzyjazdu','$odleglosc' ,'$czasPrzyjazdu - $czasOdjazdu', 0 ,'$maxMiejsc','$resztamodulo','$resztamodulo')"))
                        
                       
                    
                    
                    
					{
						echo "udało się dodać kurs";
						header('Location: stronaGlownaAdmin.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
                
                $przystanekPoczatkowy = NULL;
                $przystanekKoncowy = NULL;
                $czasOdjazdu = NULL;
                $czasPrzyjazdu = NULL;
                $odleglosc = NULL;
                $maxMiejsc =NULL;
		  		
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
	
		Przystanek początkowy: <br /> <input type="text" name="przystanekPoczatkowy" /><br/>
				
		Przystanek końcowy: <br /> <input type="text" name="przystanekKoncowy" /><br />
				
        czas odjazdu <br /> <input type="datetime-local" name="czasOdjazdu" /><br />
		
		
		czas przyjazdu <br /> <input type="datetime-local" name="czasPrzyjazdu" /><br />
		

		odległośc: <br /> <input type="number" name="odleglosc" /><br />
		
        maksymalna ilosc miejsc: <br /> <input type="number" name="maxmiejsc" /><br />

		
		
		
		<br />
		
		<input type="submit" value="Dodaj przejazd" />
		
	</form>

		</div>
	</div>

</body>
</html>