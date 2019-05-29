<?php

	session_start();
	
	

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<link rel="stylesheet" type="text/css" href="wyglad.css" />
	<meta charset="utf-8" />
	<title>zarezerwuj busa</title>
</head>

<body>
	<div id="strona">
		<div id="naglowek">
		Logowanie
		</div>
		
		<div id="tabela">
	<a href="rejestracja.php">Rejestracja</a>
	<br /><br />
	
	<form action="zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
	
	</form>

	
<?php
	if(isset($_SESSION['blad']))	
echo $_SESSION['blad'];
?>
<br/><br/>

Kontakt : <br/>
ul. Jana Pawła II 37, 31-864 Kraków<br/>
Telefon/fax: (070) 012-34-56, (070)-011-22-33

		</div>
	</div>

</body>
</html>