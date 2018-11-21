<?php
include("../poziviKlasa.php");
$prijava = new Glavna();
echo $prijava->proveriKorisnika($_POST['email'], $_POST['password']);
?>