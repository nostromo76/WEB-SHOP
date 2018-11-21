<?php
if(isset($_POST['azurirajSliku']))
{
	$slikaAzuriraj  = new Glavna();
	$slikaAzuriraj->slikaAzuriraj($_POST['artikal_id']);		
}
?>

<section id="cart_items">
	<div class="container">	
		<h2 class="title" style="width:50%;float:left">Artikli</h2>
		<h2 class="title text-right" style="width:50%;float:right"><a href="#" id="dodajToggle" style="color:#1aaa1a"><i class="fa fa-plus"></i></a></h2>
		<div style="clear:both"></div>
		<br/>
		
		<div id="dodajFormaToggle">
			<form id="dodajForma"  enctype="multipart/form-data" >
				<?php
				if($_GET['id']!="")
				{
					$podaci = new Glavna();
					$podaci->podaciArtikal($_GET['id']);					
				}
				?>
				
				<div class="col-md-3" style="padding-left:0px">
					Naziv<br/>
					<input type="text"  name="naziv" class="form-control" required value="<?php echo $podaci->naziv;?>">
				</div>
				<div class="col-md-3">
					Kategorija<br/>
					<select name="kategorija" class="form-control" >
						<?php
						$upit="SELECT * FROM kategorije ";
						$rez=$db->izvrsiUpit($upit);
						while($red=$db->procitajRed($rez))
						{
							?>
							<option value="<?php echo $red->id;?>" <?php if($podaci->kategorija == $red->id) echo ' selected="selected"';?>><?php echo $red->naziv;?></option>
							<?php
						}
						?>
					</select>
					
				</div>
				<div class="col-md-3">
					Cena<br/>
					<input type="text"  name="cena" class="form-control" required value="<?php echo $podaci->cena;?>">
					<input type="hidden"  name="id" class="form-control" required value="<?php echo $podaci->id;?>">
					
				</div>
				<div class="col-md-3">
					Istaknuto<br/>
					<select name="istaknuto" class="form-control" >
						<option value="0" <?php if($podaci->istaknuto == 0) echo ' selected="selected"';?>>Ne</option>
						<option value="1" <?php if($podaci->istaknuto == 1) echo ' selected="selected"';?>>Da</option>
					</select>
				</div>
				<div class="col-md-12" style="padding-left:0px;margin-top:15px;">
					Opis<br/>
					<textarea name="opis"  class="form-control" style="height:150px"><?php echo $podaci->opis;?></textarea>
				</div>
				<div class="col-md-4" style="padding-left:0px"><br/>
					<?php
					if($_GET['id']!="")
					{
						?>
						<button type="button" class="btn btn-fefault cart" id="izmeni"  style="margin-left:0px"><i class="fa fa-check"></i> Izmeni</button>
						<?php
					}
					else
					{
						?>
						<button type="button" class="btn btn-fefault cart" id="dodaj"  style="margin-left:0px"> <i class="fa fa-check"></i> Dodaj</button>
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
						<td class="hidden-xs">Cena</td>	
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


