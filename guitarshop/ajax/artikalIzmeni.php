<?php
include("../poziviKlasa.php");
$izmeni = new Glavna();
$izmeni->izmeniArtikal($_POST['naziv'],$_POST['opis'],$_POST['cena'],$_POST['kategorija'],$_POST['istaknuto'], $_POST['id']);
?>