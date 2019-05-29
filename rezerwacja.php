<?php
				
   session_start();   
    require_once "connect.php";                            

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
                
                $rezultat3=$polaczenie->query("SELECT KUR_MAXMIEJSC  FROM firma_transportowa.kurs WHERE KUR_ID = '$kurs'");
                
                            $iloscMiejsc2 = $rezultat3->fetch_assoc();
                            $maxMiejsca = $iloscMiejsc2['KUR_MAXMIEJSC'];
                
                $rezultat2=$polaczenie->query("SELECT KUR_ILOSCMIEJSC  FROM firma_transportowa.kurs WHERE KUR_ID = '$kurs'");
                
                            $iloscMiejsc1 = $rezultat2->fetch_assoc();
                            $wolneMiejsca = $maxMiejsca -$iloscMiejsc1['KUR_ILOSCMIEJSC'];
                
                
                
                if($wolneMiejsca>=$iloscMiejsc){
					
                            $polaczenie->query("INSERT INTO firma_transportowa.rezerwacje VALUES (NULL,'$aktualnaData','$iloscMiejsc'*15,'$klient','$kurs')");
                
					
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY+ '$iloscMiejsc'*5
                    WHERE KLI_ID = '$klient' ");
                
                    $polaczenie->query("UPDATE firma_transportowa.kurs
                    SET KUR_ILOSCMIEJSC=KUR_ILOSCMIEJSC+'$iloscMiejsc'
                    WHERE KUR_ID='$kurs'");
                    
                }
                
                else {
                    
                    echo "brak wolnych miejsc";
                }

                    				
					
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
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>busy - rezerwacja </title>

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
	
	
			skąd jedziesz? :	
			<select name="przystanekPoczatkowy">
			<option  selected disabled hidden></option>
			<option>Kraków</option>
			<option>Katowice</option>
			</select>	
			
			
			o której odjeżdzasz? :	
			<select name="godzinaOdjazdu">
			<?
				

			?>
			
			<option>2019-05-26 10:00:00</option>
			<option>2019-05-26 14:00:00</option>
			<option>2019-05-26 17:00:00</option>
			<option>2019-05-27 10:00:00</option>
			<option>2019-05-27 14:00:00</option>
			<option>2019-05-27 17:00:00</option>
			<option>2019-05-28 10:00:00</option>
			<option>2019-05-28 14:00:00</option>
			<option>2019-05-28 17:00:00</option>
			<option>2019-05-29 10:00:00</option>
			<option>2019-05-29 14:00:00</option>
			<option>2019-05-29 17:00:00</option>
		   
			
			<option  selected disabled hidden></option>
			</select>
			<br />


			
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
			<br /><br />
		</div>
	</div>
</body>
</html>