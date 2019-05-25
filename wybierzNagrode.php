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
    echo "wybór nagrody";


if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
                $wszystko_OK==false;
			}
			else
			{  if (isset($_POST['wyborNagrody1'])&&isset($_POST['wyborNagrody2'])) 
            
            {
                if ($_POST['wyborNagrody1']=='darmowy przejazd - 100 pkt')
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-100
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
                
                elseif ($_POST['wyborNagrody1']=='pluszowy miś - 200 pkt')
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-200
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
                 elseif ($_POST['wyborNagrody1']=='darmowy tygodniowy karnet - 300 pkt')
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-300
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
                 elseif ($_POST['wyborNagrody1']=='uścisk dłoni prezesa - 500 pkt')
                {
                                
                    $polaczenie->query("UPDATE firma_transportowa.klient
                    SET KLI_PUNKTY=KLI_PUNKTY-500
                    WHERE KLI_ID = '$klient' ");
                
                    $_POST['wyborNagrody1']=NULL;
                    header ("location: stronaGlowna.php");
                    
                    
                }
                
                 elseif ($_POST['wyborNagrody1']=='miesięczny karnet - 1000 pkt')
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
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>busy - rezerwacja </title>

</head>

<body>
	
	<form method="post">
	
	
twoje punkty : 		<?php echo $punkty; ?>	
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

</body>
</html>