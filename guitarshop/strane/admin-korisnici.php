<section id="cart_items">
	<div class="container">	
		<h2 class="title" style="width:50%;float:left">Korisnici</h2>
		<h2 class="title text-right" style="width:50%;float:right"><a href="#" id="dodajToggle" style="color:#1aaa1a"><i class="fa fa-plus"></i></a></h2>
		<div style="clear:both"></div>
		<br/>
		
		<div id="dodajFormaToggle">
			<form id="dodajForma">
				<?php
				if($_GET['id']!="")
				{
					$podaci = new Glavna();
					$podaci->podaciKorisnika($_GET['id']);
					$lozinka = 'xxxxxx';
				}
				?>
				
				<div class="col-md-4" style="padding-left:0px">
					E-mail<br/>
					<input type="text"  name="email" class="form-control" required value="<?php echo $podaci->email;?>">
				</div>
				<div class="col-md-4">
					Lozinka<br/>
					<input type="password"  name="password"  class="form-control" required autocomplete="off" value="<?php echo $lozinka;?>">
					<input type="password"  name="password3"  class="form-control" required autocomplete="off" style="visibility:hidden">
					<input type="hidden"  name="id" value="<?php echo $_GET['id'];?>">
				</div>
				<div class="col-md-4"><br/>
					<?php
					if($_GET['id']!="")
					{
						?>
						<button type="button" class="btn btn-fefault cart" id="izmeni"><i class="fa fa-check"></i> Izmeni</button>
						<?php
					}
					else
					{
						?>
						<button type="button" class="btn btn-fefault cart" id="dodaj"><i class="fa fa-check"></i> Dodaj</button>
						<?php
					}	
					?>
					<div id="dodajInfo" style="float:right"></div>
				</div>
			</form><div style="clear:both"></div>
			<br/>
		</div>
		
		
		
		<div class="table-responsive cart_info" >
			
			
			<table class="table ">
				<thead>
					<tr class="cart_menu">
						<td >Email</td>					
						<td >Opcije</td>
					</tr>
				</thead>
				<tbody id="prikaz">
				
				</tbody>
			</table>
		</div>
	
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</div>
</section> 


