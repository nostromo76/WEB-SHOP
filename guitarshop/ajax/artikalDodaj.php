<?php
include("../poziviKlasa.php");
$dodaj = new Glavna();
$dodaj->dodajArtikal($_POST['naziv'],$_POST['opis'],$_POST['cena'],$_POST['kategorija'],$_POST['istaknuto']);
?>