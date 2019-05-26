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
        
        if ($rezultat->num_rows > 0) {
            
            while( $rezerwacje = $rezultat->fetch_assoc()) {
                echo " id rezerwacji : ".$rezerwacje["REZ_ID"]. " Data rezerwacji : ".$rezerwacje["REZ_DATA"]. " Cena : ".$rezerwacje["REZ_CENA"]." ilość miejsc : ".$rezerwacje["REZ_CENA"]/15;}
            
                                    }
        else {
                echo " 0 wyników ";
             }
    }
    $polaczenie->close();

    ?>