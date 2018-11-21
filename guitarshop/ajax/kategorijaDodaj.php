<?php
include("../poziviKlasa.php");
$dodaj = new Glavna();
$dodaj->dodajKategorija($_POST['naziv'], $_POST['opis']);
?>