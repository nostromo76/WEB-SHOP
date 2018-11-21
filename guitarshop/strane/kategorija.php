<?php
$kategorija = new Glavna();
$kategorija->podaciKategorija($_GET['id']);
if($kategorija->naziv=="")
	include("strane/404.php");
else
{
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 padding-right">
				<h2 class="title"><?php	echo $kategorija->naziv;?></h2>
				<?php echo $kategorija->opis;?>
				<br/><br/>
			</div>
			<div class="features_items">
				<?php					
				$upit="SELECT * FROM artikli WHERE kategorija = $_GET[id]";
				$rez=$db->izvrsiUpit($upit);
				while($red=$db->procitajRed($rez))
				{
					?>
					<div class="col-sm-3">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<a href="index.php?strana=artikal&id=<?php echo $red->id;?>"><img src="images/shop/<?php echo $red->slika;?>" alt="<?php echo $red->naziv;?>" /></a>
									<h2><?php echo $red->naziv;?></h2>										
									<p><?php echo $red->cena;?> RSD</p>
									<a href="index.php?strana=artikal&id=<?php echo $red->id;?>" class="btn btn-default add-to-cart">Detaljnije</a>
								</div>								
							</div>								
						</div>
					</div>
					<?php						
				}
				?>					
			</div>		
		</div>
	</div>
</section>
<?php
}
?>