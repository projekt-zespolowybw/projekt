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
		<div class="opcja"><a href="rezerwacja.php">Zarezerwuj bilet</a></div>
		<div class="opcja"><a href="wybierzNagrode.php">Wybierz nagordę za punkty</a></div>
		<div class="opcja"><a href="wyswietlRezerwacje.php">Wyświetl swoje rezerwacje</a></div>
		<div class="opcja"><a href="logout.php">wyloguj</a></div>
		<div style="clear:both;"></div>
		</div>
		<div id="tabela">

<?php
session_start();   
    require_once "connect.php";


    
    
    
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
        $idKlienta=$_SESSION['id'] ;

            $rezultat1=$polaczenie->query("SELECT KLI_ID FROM firma_transportowa.klient WHERE DAN_ID='$idKlienta'");
                
            $idKlienta = $rezultat1->fetch_assoc();
            $klient= $idKlienta['KLI_ID'];
        
        
            $rezultat = $polaczenie->query("SELECT * FROM rezerwacje WHERE KLI_ID='$klient'");
        
            $nowalinia="\r\n";
        
        if ($rezultat->num_rows > 0) 
		{
			echo "<table><tr><th>id rezerwacji</th><th>data rezerwacji</th><th>cena</th><th>ilość miejsc</th></tr>";
            
            while($rezerwacje = $rezultat->fetch_assoc())
			{
					echo "<tr><td>" . $rezerwacje["REZ_ID"] . "</td><td>" . $rezerwacje["REZ_DATA"] . "</td><td>" . $rezerwacje["REZ_CENA"]."</td><td>". $rezerwacje["REZ_CENA"]/15 . "</td></tr>";
			}
            echo "</table>";
        }
        else 
		{
            echo " 0 wyników ";
        }
    }
    $polaczenie->close();

    ?>
		</div>
		</div>
</body>
</html>
