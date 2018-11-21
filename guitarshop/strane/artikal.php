<?php
$artikal = new Glavna();
$artikal->prikaziArtikal($_GET['id']);
if($artikal->naziv=="")
	include("strane/404.php");
else
{
?>
<section>
<div class="container">
	<div class="row">
		<div class="product-details">
			<div class="col-sm-5">
				<div class="view-product">
					<img src="images/shop/<?php echo $artikal->slika;?>" alt="" />								
				</div>
			</div>
			<div class="col-sm-7">
				<div class="product-information">						
					<h2><?php echo $artikal->naziv;?></h2>
					<p><?php echo $_SESSION['code'];?></p>					
					<span>
						<form id="form-search">
						<span><?php echo $artikal->cena;?> RSD</span>			
						<input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
						<button type="button" class="btn btn-fefault cart" id="dodajKorpa">
							<i class="fa fa-shopping-cart"></i>
							Dodaj u korpu
						</button>
						</form>
					</span>						
					<div id="dodajKorpaInfo" ></div>
					<br/><br/>
					<?php echo $artikal->opis;?>
				</div>
			</div>			
		</div>
	</div>
</div>
</section>
<?php
}
?>
