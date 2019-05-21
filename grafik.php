if (isset($_POST['markaPojazdu']))
    {    $wszystko_OK=true;
        $markaPojazdu = $_POST['markaPojazdu'];}

    else {$wszystko_OK=false;}


	if (isset($_POST['modelPojazdu']))
    {   $wszystko_OK=true;

		$modelPojazdu = $_POST['modelPojazdu'];}
else {$wszystko_OK=false;}


    if (isset($_POST['rejestracja']))
    {   $wszystko_OK=true;

		$rejestracja = $_POST['rejestracja'];}
else {$wszystko_OK=false;}


if (isset($_POST['dataProdukcji']))
    {   $wszystko_OK=true;

		$dataProdukcji = $_POST['dataProdukcji'];}
else {$wszystko_OK=false;}


if (isset($_POST['dataPrzegladu']))
    {   $wszystko_OK=true;

		$dataPrzegladu = $_POST['dataPrzegladu'];}
else {$wszystko_OK=false;}