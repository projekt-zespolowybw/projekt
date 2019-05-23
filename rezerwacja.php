<?php
				
   session_start();   
    require_once "connect.php";


    echo "rezerwacja";
	if (isset($_POST['iloscMiejsc']) && isset($_POST['godzinaOdjazdu']) && isset($_POST['przystanekPoczatkowy']) && isset($_POST['rezerwacja']))
    {   
        
        require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
        
		$godzinaOdjazdu = $_POST['godzinaOdjazdu'];
        $przystanekPoczatkowy = $_POST['przystanekPoczatkowy'];
        $iloscMiejsc = $_POST['iloscMiejsc'];
        
        
        	echo $godzinaOdjazdu ;
            echo $przystanekPoczatkowy ;
            echo $iloscMiejsc ;
        
        
        
        
        try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
                $wszystko_OK==false;
			}
			else
			{
				
                   $aktualnaData = date('Y-m-d H:i:s');
                    echo  $aktualnaData;
                
                
                        $idKlienta=$_SESSION['id'] ;
                    
                        $rezultat1=$polaczenie->query("SELECT KLI_ID FROM firma_transportowa.klient WHERE DAN_ID='$idKlienta'");
                
                            $idKlienta = $rezultat1->fetch_assoc();
                            $klient= $idKlienta['KLI_ID'];
                            
                                                        
                        $rezultat=$polaczenie->query("SELECT KUR_ID FROM firma_transportowa.kurs WHERE KUR_POCZATEK = '$przystanekPoczatkowy' AND KUR_DATAPOCZ='$godzinaOdjazdu'");
                
                            $idKursu = $rezultat->fetch_assoc();
                            $kurs = $idKursu['KUR_ID'];
                
					
                            $polaczenie->query("INSERT INTO firma_transportowa.rezerwacje VALUES (NULL,'$aktualnaData','$iloscMiejsc'*15,'$klient','$kurs')");
                
					


                    				
					
				}
				$polaczenie->close();

			}
			
		
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera!</span>';
			echo '<br />Informacja developerska: '.$e;
		}

        $godzinaOdjazdu = NULL;
        $przystanekPoczatkowy = NULL;
        $iloscMiejsc = NULL;

        header ('Location: stronaGlowna.php');
        
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
        <option  selected disabled hidden></option>
	    </select>
		<br />

skąd jedziesz? :	
		<select name="przystanekPoczatkowy">
        <option  selected disabled hidden></option>
		<option>Kraków</option>
		<option>Katowice</option>
	    </select>
	    
	    <br />
	    
	    ilość miejsc :	
		<select name="iloscMiejsc" >
		<option  selected disabled hidden></option>
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
		
		
		<input type="submit" value="rezerwuj" name="rezerwacja" />
		
	</form>

</body>
</html>