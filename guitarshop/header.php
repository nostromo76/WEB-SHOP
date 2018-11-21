<header id="header">
	<div class="header_gore hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i> +381 66 666 666</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> info@guitarshop.rs</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right">
						<ul class="nav navbar-nav">
							<li><a href="index.php?strana=admin"><i class="fa fa-user"></i></a></li>
							<li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.twitter.com"  target="_blank"><i class="fa fa-twitter"></i></a></li>								
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>		
	<div class="header-middle">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="index.php"><img src="images/logo.png" alt="Logo" /></a>
					</div>						
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							<li><a href="index.php?strana=korpa"><i class="fa fa-shopping-cart"></i> Korpa 
							<span id="korpa" class="label label-success"></span>
							</a></li>								
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="index.php" <?php if($_GET['strana']=="") echo ' class="active"';?>><i class="fa fa-home"></i> Početna</a></li>
							<?php
							$upit="SELECT * FROM kategorije";
							$rez=$db->izvrsiUpit($upit);
							while($red=$db->procitajRed($rez))
							{
								if($_GET['id']==$red->id && $_GET['strana']=="kategorija")
									$active = ' class="active"';
								else
									$active = '';
								echo "<li ><a $active href='index.php?strana=kategorija&id=$red->id'>$red->naziv</a></li>";
							}
							?>	
							<li><a href="index.php?strana=korpa" <?php if($_GET['strana']=="korpa") echo ' class="active"';?>><i class="fa fa-shopping-cart"></i> Korpa</a></li>
							<?php
							if($_SESSION['prijava']=="ok")
							{
								?>
								<li class="dropdown"><a href="#" <?php if($_GET['strana']=="admin") echo ' class="active"';?>>Admin<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="index.php?strana=admin">Porudžbine</a></li>
										<li><a href="index.php?strana=admin&tip=artikli">Artikli</a></li>
										<li><a href="index.php?strana=admin&tip=kategorije">Kategorije</a></li>
										<li><a href="index.php?strana=admin&tip=korisnici">Korisnici</a></li>
										<li><a href="index.php?strana=admin&tip=odjava">Odjava</a></li>
									</ul>
								</li> 
								<?php
							}
							?>
						</ul>
					</div>
				</div>					
			</div>
		</div>
	</div>
</header>