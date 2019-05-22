<?php

	session_start();   
    require_once "connect.php";

    
    if (isset($_POST['przystanekPoczatkowy']) && isset($_POST['przystanekKoncowy']) && isset($_POST['czasOdjazdu']) && isset($_POST['czasPrzyjazdu']) && isset($_POST['odleglosc']))
    {
        $wszystko_OK=true;
        $przystanekPoczatkowy = $_POST['przystanekPoczatkowy'];
        
        $przystanekKoncowy = $_POST['przystanekKoncowy'];
        $czasOdjazdu = $_POST['czasOdjazdu'];
        $czasPrzyjazdu = $_POST['czasPrzyjazdu'];
        $odleglosc = $_POST['odleglosc'];
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
					
					if ($polaczenie->query("INSERT INTO firma_transportowa.kurs VALUES (NULL, '$przystanekPoczatkowy','$przystanekKoncowy', '$czasOdjazdu','$czasPrzyjazdu','$odleglosc' , '$czasPrzyjazdu - $czasOdjazdu')"))
					{
						echo "udało się dodać kurs";
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
	
	<form method="post">
	
		Przystanek początkowy: <br /> <input type="text" name="przystanekPoczatkowy" /><br/>
				
		Przystanek końcowy: <br /> <input type="text" name="przystanekKoncowy" /><br />
				
        czas odjazdu <br /> <input type="datetime-local" name="czasOdjazdu" /><br />
		
		
		czas przyjazdu <br /> <input type="datetime-local" name="czasPrzyjazdu" /><br />
		

		odległośc: <br /> <input type="number" name="odleglosc" /><br />
		
		
		
		<br />
		
		<input type="submit" value="Dodaj przejazd" />
		
	</form>

</body>
</html>