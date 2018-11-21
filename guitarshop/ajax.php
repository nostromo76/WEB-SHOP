<script>
$(document).on('click','#dodajKorpa',function(e) {
	var data = $("#form-search").serialize();		
	$.ajax({
		data: data,
		type: "post",
		url: "ajax/korpaDodaj.php",
		success: function(data){
			$('#dodajKorpaInfo').html("<div class='alert alert-info'>Artikal je dodat u korpu</div>");
		}
	});
	$('#dodajKorpa').prop("disabled",true);
	brojacKorpe();
});

function brojacKorpe()	{
	var container = $("#korpa");
	container.load("ajax/korpaBrojac.php");
}
brojacKorpe();

<?php
if($_GET['strana']=="korpa")
{
?>
	function prikazKorpe()	{
		var container = $("#korpaPrikaz");
		container.load("ajax/korpaPrikaz.php");
	}
	prikazKorpe();

	$(document).on('click','#brisiKorpa',function(e) {
		var data = $("#form-search").serialize();		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/korpaBrisi.php",
			success: function(data){
				
			}
		});	
		brojacKorpe();
		prikazKorpe();
	});
	
	$(document).on('click','#poruciDugme',function(e) {
		var data = $("#poruciForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/poruci.php",
			success: function(data){
				$('#poruciInfo').html("<div class='alert alert-info' style='padding:5px;text-align:left'>Porudžbina je poslata!</div>");
			}
		});
		$("#poruciModal").hide();
		$("#poruciDugme").hide();
		brojacKorpe();
		prikazKorpe();
	});
	
<?php
}
?>


$(document).on('click','#prijava',function(e) {
	var data = $("#form-search").serialize();		
	
	$.ajax({
		data: data,
		type: "post",
		url: "ajax/prijava.php",
		success: function(data){
			window.location = "index.php?strana=admin"
		}
	});	
});


<?php
if($_GET['tip']=="korisnici")
{
?>
	$("#dodajFormaToggle").hide();
	<?php
	if($_GET['id']!="")
		echo '$("#dodajFormaToggle").show();';
	?>
	
	function prikazKorisnici()	{
		var container = $("#prikaz");
		container.load("ajax/korisniciPrikaz.php");
	}
	prikazKorisnici();

	$(document).on('click','#brisi',function(e) {
		var data = $("#brisiForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/korisniciBrisi.php",
			success: function(data){
				
			}
		});	
		prikazKorisnici();
	});
		
	$(function(){
		$("#dodajToggle").on("click", function(){
			$("#dodajFormaToggle").toggle();
		});
	});
	
	$(document).on('click','#dodaj',function(e) {
		var data = $("#dodajForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/korisniciDodaj.php",
			success: function(data){
				$('#dodajInfo').html("<div class='alert alert-info' style='float:right;width:150px;padding:5px'>Korisnik je dodat</div>");
			}
		});
		
		prikazKorisnici();
	});
	
	$(document).on('click','#izmeni',function(e) {
		var data = $("#dodajForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/korisniciIzmeni.php",
			success: function(data){
				$('#dodajInfo').html("<div class='alert alert-info' style='float:right;width:150px;padding:5px'>Korisnik je izmenjen</div>");
				window.location = "index.php?strana=admin&tip=korisnici"
			}
		});
		
		prikazKorisnici();
	});
<?php
}
?>

<?php
if($_GET['tip']=="kategorije")
{
?>
	$("#dodajFormaToggle").hide();
	<?php
	if($_GET['id']!="")
		echo '$("#dodajFormaToggle").show();';
	?>
	
	function prikazKategorija()	{
		var container = $("#prikaz");
		container.load("ajax/kategorijaPrikaz.php");
	}
	prikazKategorija();

	$(document).on('click','#brisi',function(e) {
		var data = $("#brisiForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/kategorijaBrisi.php",
			success: function(data){
				
			}
		});	
		prikazKategorija();
	});
		
	$(function(){
		$("#dodajToggle").on("click", function(){
			$("#dodajFormaToggle").toggle();
		});
	});
	
	$(document).on('click','#dodaj',function(e) {
		var data = $("#dodajForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/kategorijaDodaj.php",
			success: function(data){
				$('#dodajInfo').html("<div class='alert alert-info' style='float:right;width:150px;padding:5px'>Kategorija je dodata</div>");
			}
		});
		
		prikazKategorija();
	});
	
	$(document).on('click','#izmeni',function(e) {
		var data = $("#dodajForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/kategorijaIzmeni.php",
			success: function(data){
				$('#dodajInfo').html("<div class='alert alert-info' style='float:right;width:150px;padding:5px'>Kategorija je izmenjena</div>");
				window.location = "index.php?strana=admin&tip=kategorije"
			}
		});
		
		prikazKategorija();
	});
<?php
}
?>

<?php
if($_GET['tip']=="artikli")
{
?>
	$("#dodajFormaToggle").hide();
	<?php
	if($_GET['id']!="")
		echo '$("#dodajFormaToggle").show();';
	?>
	
	function prikazArtikala()	{
		var container = $("#prikaz");
		container.load("ajax/artikalPrikaz.php");
	}
	prikazArtikala();

	$(document).on('click','#brisi',function(e) {
		var data = $("#brisiForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/artikalBrisi.php",
			success: function(data){
				
			}
		});	
		prikazArtikala();
	});
		
	$(function(){
		$("#dodajToggle").on("click", function(){
			$("#dodajFormaToggle").toggle();
		});
	});
	
	$(document).on('click','#dodaj',function(e) {
		var data = $("#dodajForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/artikalDodaj.php",
			success: function(data){
				$('#dodajInfo').html("<div class='alert alert-info' style='float:right;width:150px;padding:5px'>Artikal je dodat</div>");
			}
		});
		
		prikazArtikala();
	});
	
	$(document).on('click','#izmeni',function(e) {
		var data = $("#dodajForma").serialize();		
		
		$.ajax({
			data: data,
			type: "post",
			url: "ajax/artikalIzmeni.php",
			success: function(data){
				$('#dodajInfo').html("<div class='alert alert-info' style='float:right;width:150px;padding:5px'>Artikal je izmenjen</div>");
				window.location = "index.php?strana=admin&tip=artikli"
			}
		});
		
		prikazArtikala();
	});
<?php
}
?>

function prikazPorudzbina()	{
	var container = $("#prikazPorudzbina");
	container.load("ajax/porudzbinePrikaz.php");
}
prikazPorudzbina();

</script>	