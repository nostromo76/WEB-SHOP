<section id="cart_items">
	<div class="container">	
		<h2 class="title" style="width:50%;float:left">Kategorije</h2>
		<h2 class="title text-right" style="width:50%;float:right"><a href="#" id="dodajToggle" style="color:#1aaa1a"><i class="fa fa-plus"></i></a></h2>
		<div style="clear:both"></div>
		<br/>
		
		<div id="dodajFormaToggle">
			<form id="dodajForma">
				<?php
				if($_GET['id']!="")
				{
					$podaci = new Glavna();
					$podaci->podaciKategorija($_GET['id']);
				}
				?>
				
				<div class="col-md-4" style="padding-left:0px">
					Naziv<br/>
					<input type="text"  name="naziv" class="form-control" required value="<?php echo $podaci->naziv;?>">
				</div>
				<div class="col-md-12" style="padding-left:0px">
					Opis<br/>
					<textarea  name="opis"  class="form-control" style="height:150px"><?php echo $podaci->opis;?></textarea>			
					<input type="hidden"  name="id" value="<?php echo $_GET['id'];?>">
				</div>
				<div class="col-md-4" style="padding-left:0px"><br/>
					<?php
					if($_GET['id']!="")
					{
						?>
						<button type="button" class="btn btn-fefault cart" id="izmeni" style="margin-left:0px"><i class="fa fa-check"></i> Izmeni</button>
						<?php
					}
					else
					{
						?>
						<button type="button" class="btn btn-fefault cart" id="dodaj"  style="margin-left:0px"><i class="fa fa-check"></i> Dodaj</button>
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
						<td >Naziv</td>					
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


