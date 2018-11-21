<?php
include("../poziviKlasa.php");
$izmeni = new Glavna();
$izmeni->izmeniKorisnik($_POST['email'], $_POST['password'], $_POST['id']);
?>