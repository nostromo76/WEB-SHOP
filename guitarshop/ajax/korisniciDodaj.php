<?php
include("../poziviKlasa.php");
$dodaj = new Glavna();
$dodaj->dodajKorisnik($_POST['email'], $_POST['password']);
?>