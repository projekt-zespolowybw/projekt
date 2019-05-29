<?php
				
   session_start();   
    require_once "connect.php";

mysqli_report(MYSQLI_REPORT_STRICT);
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);


$idKlienta=$_SESSION['id'] ;
               
                $rezultat1=$polaczenie->query("SELECT KLI_ID FROM firma_transportowa.klient WHERE DAN_ID='$idKlienta'");
                
                            $idKlienta = $rezultat1->fetch_assoc();
                            $klient= $idKlienta['KLI_ID'];

			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
                $wszystko_OK==false;
			}
			else
			{  
                
                        
                
                
                
                 $rezultat2=$polaczenie->query("SELECT KLI_PUNKTY FROM firma_transportowa.klient WHERE KLI_ID='$klient'");
                
                            $punktyKlienta = $rezultat2->fetch_assoc();
                            $punkty= $punktyKlienta['KLI_PUNKTY'];
                
                
            }


if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
                $wszystko_OK==false;
			}
			else
			{  if (isset($_POST['wyborNagrody1'])&&isset($_POST['wyborNagrody2'])) 
            
            {
                if ($_POST['wyborNagrody1']=='darmowy przejazd - 100 pkt' && $punkty>=100)
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-100
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
                
                elseif ($_POST['wyborNagrody1']=='pluszowy miś - 200 pkt' && $punkty>=200)
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-200
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
                 elseif ($_POST['wyborNagrody1']=='darmowy tygodniowy karnet - 300 pkt'&& $punkty>=300)
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-300
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
                 elseif ($_POST['wyborNagrody1']=='uścisk dłoni prezesa - 500 pkt'&& $punkty>=500)
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-500
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
                 elseif ($_POST['wyborNagrody1']=='miesięczny karnet - 1000 pkt' && $punkty>=1000)
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-1000
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
               
            }
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
			<div class="opcja"> <a href="grafikKursyKlient.php">Kursy</a> </div>
			<div class="opcja"><a href="wybierzNagrode.php">Program lojalnosciowy</a></div>
			<div class="opcja"><a href="logout.php">wyloguj</a></div>
			<div style="clear:both;"></div>
		</div>
		<div id="tabela">
			<br /><br />
			<form method="post">
		
		
			twoje punkty :	<?php echo $punkty; ?>	
		   <br/>	
			
			
			wybierz nagrodę : 
			<select name="wyborNagrody1">

			<option>darmowy przejazd - 100 pkt</option>
			<option>pluszowy miś - 200 pkt</option>
			<option>darmowy tygodniowy karnet - 300 pkt</option>
			<option>uścisk dłoni prezesa - 500 pkt</option>
			<option>miesięczny karnet - 1000 pkt</option>


			<option  selected disabled hidden></option>
			</select>
			<br />


			
			<input type="submit" value="wybierz" name="wyborNagrody2" />
			
		</form>
		<br /><br />
		</div>
	</div>
</body>
</html>