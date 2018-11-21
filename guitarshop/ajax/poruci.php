<?php
include("../poziviKlasa.php");
$dodaj = new Glavna();
$dodaj->poruci($_POST['ime'], $_POST['adresa'], $_POST['telefon'], $_POST['email']);
?>