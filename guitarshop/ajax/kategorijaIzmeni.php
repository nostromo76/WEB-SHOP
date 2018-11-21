<?php
include("../poziviKlasa.php");
$izmeni = new Glavna();
$izmeni->izmeniKategorija($_POST['naziv'], $_POST['opis'], $_POST['id']);
?>