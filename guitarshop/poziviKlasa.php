<?php
session_start();
error_reporting(0);
require_once("klase/classBaza.php");
require_once("klase/classGlavna.php");

$db=new Baza();
if(mysqli_connect_error())
{
	echo "Baza nije dostupna!!!!";
	exit();
}
?>