<?php
session_start();   
    require_once "connect.php";

    
	if (isset($_POST['godzinaOdjazdu']) && isset($_POST['przystanekPoczątkowy']) && isset($_POST['iloscMiejsc']))
    {   
        $wszystko_OK=true;
		$godzinaOdjazdu = $_POST['godzinaOdjazdu'];
        $przystanekPoczatkowy = $_POST['przystanekPoczatkowy'];
        $iloscMiejsc = $_POST['iloscMiejsc'];
    
        
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
                
                $aktualnaData =date('Y-m-d H:i:s');
                
            $rezultat = $polaczenie->query("SELECT KUR_ID FROM firma_transportowa.kurs WHERE KUR_POCZATEK = '$przystanekPoczatkowy' AND KUR_DATAPOCZ='$godzinaOdjazdu'");
                
            $rezultat1 = $polaczenie->query("INSERT INTO firma_transportowa.rezerwacje VALUES (NULL,'$aktualnaData','$iloscMiejsc',NULL,'$rezultat')");
            }
    }


?>




<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>busy - rezerwacja </title>

</head>

<body>
	
	<form method="post">
	
	
				
        
		
o której odjeżdzasz? :	
		<select name="godzinaOdjazdu">
		<option>2019-05-26 01:00:00</option>
		<option>10:00</option>
	    </select>
		<br />

skąd jedziesz? :	
		<select name="przystanekPoczatkowy">
		<option>Kraków</option>
		<option>Katowice</option>
	    </select>
	    
	    <br />
	    
	    ilość miejsc :	
		<select name="iloscMiejsc">
		<option>1</option>
		<option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
    
	    </select>
		<br />
		
		
		<input type="submit" value="rezerwuj" />
		
	</form>

</body>
</html>