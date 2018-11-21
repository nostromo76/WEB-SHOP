<section id="slider">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>					
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1>NAJPOVOLJNIJE</h1>
								<h2>Električne gitare u Srbiji</h2>
								<p>Proverite zašto smo lider na tržištu gitara i zašto nam vrhunski muzičari veruju! </p>								
							</div>
							<div class="col-sm-6">
								<img src="images/gitara1.jpg" class=" img-responsive" alt="" />								
							</div>
						</div>	
						<div class="item">	
							<div class="col-sm-6">
								<h1>VELIKI IZBOR</h1>
								<h2>Akustičnih gitara</h2>
								<p>Zasvirajte omiljene akorde uz naše akustične gitare</p>
							</div>
							<div class="col-sm-6">
								<img src="images/gitara2.jpg" class=" img-responsive" alt="" />								
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1>SVE ZA GITARE</h1>
								<h2>Dodatna oprema i pojačala</h2>
								<p>Najveći izbor dodatne opreme, aksesoara i pojačala na domaćem tržištu.</p>
							</div>
							<div class="col-sm-6">
								<img src="images/oprema.jpg" class=" img-responsive" alt="" />
								
							</div>
						</div>
					</div>					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 padding-right">
				<h1 class="title">Guitar Shop</h1>
				<p>
				Lorem ipsum dolor sit amet, te persius prodesset per, cibo fugit audiam per ad. Affert aeterno ut est. Et debet aeterno dolorem ius. Oblique fabulas scribentur et nec, iisque suscipit mei in.
				Cu assentior inciderint eum, ei augue erroribus sea. Cu offendit recusabo sed. Modus omittantur his ad. Exerci aliquip forensibus sed ei, mel at tritani sensibus voluptaria. Vis albucius copiosae ne.
				Reque nobis vim cu. Cetero ornatus forensibus ius te, eum eu iuvaret alienum complectitur, per eu harum evertitur consectetuer. Civibus deserunt sententiae te cum. Summo phaedrum expetenda cu eum, fugit dolorem in cum, paulo debitis expetendis sea ei. Cu quaeque iudicabit sea.
				<br/><br/>
				At voluptaria mediocritatem pro. Ne cum utinam postulant. Mea partem omnesque cotidieque et, conceptam efficiendi dissentiet eum ex, omnesque postulant ei per. Eum ad porro exerci, veniam tempor mollis mel et.
				Pericula cotidieque eos id. Est eu causae feugait, ut pro praesent pericula consectetuer. Laoreet commune sed et, clita aliquam referrentur duo cu. Usu melius scaevola adipisci et, mel id debitis dolorem rationibus. Timeam persecuti mei te. Vocent ancillae sed id.
				</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<br/><br/>
			<div class="col-md-12">
				<h2 class="title">Izdvojeni artikli</h2>
			</div>
			<div class="features_items">
				<?php
				$upit="SELECT * FROM artikli WHERE istaknuto = 1 ORDER BY RAND() LIMIT 4";
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