<?php
if($_SESSION['prijava']=="ok")
{
	?>
	<section >
		<div class="container">
			<div class="row">
				
				<?php
				if($_GET['tip']=="artikli")
					include("strane/admin-artikli.php");
				elseif($_GET['tip']=="kategorije")
					include("strane/admin-kategorije.php");
				elseif($_GET['tip']=="korisnici")
					include("strane/admin-korisnici.php");			
				elseif($_GET['tip']=="odjava")
					include("strane/admin-odjava.php");					
				else
					include("strane/admin-porudzbine.php");
				?>
					
			</div>
		</div>
	</section>
	<?php	
}
else
{
	
	?>
	<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="login-form">
						<h2>Admin prijava</h2>
						<form action="#" id="form-search">
							<input type="email" placeholder="Email adresa" name="email"/>
							<input type="password" placeholder="Lozinka" name="password" />						
							<button type="button" class="btn btn-default" id="prijava">Prijava</button>
						</form>
						<?php
						if($_SESSION['prijava']=="error")
						echo '<br/><div class="alert alert-danger">Greška prilikom prijave</div>';
						?>
					</div>
				</div>			
			</div>
		</div>
	</section>
	<?php
}
?>