<?php
class Glavna
{
	public function slucajniString($brojKaraktera)
	{
		$chars= "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
		srand((double)microtime()*1000000);
		for($i=0; $i<$brojKaraktera; $i++) {
		  $rand.= $chars[rand()%strlen($chars)];
		}
		return $rand;
	}
	
	public function prikaziArtikal($id)
	{
		$db = new Baza();
		$upit = "SELECT * FROM artikli WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			$this->naziv = $red->naziv;
			$this->opis = $red->opis;
			$this->slika = $red->slika;
			$this->cena = $red->cena;
		}
	}
	
	public function korpaDodajArtikal($id)
	{
		$db = new Baza();
		
		$upit = "SELECT * FROM artikli WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			$cena = $red->cena;
		}
		
		$upit = "SELECT * FROM porudzbine_detalji WHERE artikal = $id AND code = '$_SESSION[code]'";
		$rez = $db->izvrsiUpit($upit);		
		$brojac = mysqli_num_rows($rez);
		if($brojac == 0)
		{
			$upit = "INSERT INTO porudzbine_detalji (code, artikal, kolicina, cena) VALUES ('$_SESSION[code]', $id, 1, $cena)";
			$rez = $db->izvrsiUpit($upit);		
		}
		else
		{
			$upit = "UPDATE porudzbine_detalji SET kolicina = kolicina + 1 WHERE artikal = $id AND code = '$_SESSION[code]'";
			$rez = $db->izvrsiUpit($upit);	
		}
	}
	
	public function korpaBrojac()
	{
		$db = new Baza();		
		
		$upit = "SELECT id FROM porudzbine_detalji WHERE code = '$_SESSION[code]'";
		$rez = $db->izvrsiUpit($upit);		
		return mysqli_num_rows($rez);
	}
	
	public function korpaPrikaz()
	{
		$db = new Baza();		
		?>
		<table class="table ">
			<thead>
				<tr class="cart_menu">
					<td class="image hidden-xs">Artikal</td>
					<td class="description"></td>
					<td class="price hidden-xs">Cena</td>
					<td class="quantity hidden-xs">Količina</td>
					<td class="total">Ukupno</td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				<?php
				$totalCena = 0;
				$upit = "SELECT * FROM porudzbine_detalji WHERE code = '$_SESSION[code]'";
				$rez = $db->izvrsiUpit($upit);	
				if(mysqli_num_rows($rez) == 0)
				{
					echo '<tr><td colspan="6"><div class="alert alert-info">Korpa je prazna</div><br/></td></tr>';
				}
				else
				{
					while($red=$db->procitajRed($rez))
					{
						$upitA = "SELECT * FROM artikli WHERE id = $red->artikal";
						$rezA = $db->izvrsiUpit($upitA);		
						while($redA=$db->procitajRed($rezA))
						{
							$slika = $redA->slika;
							$artikalid = $redA->id;
							$naziv = $redA->naziv;
						}
						?>
						<tr>
							<td class="cart_product hidden-xs">
								<a href="index.php?strana=artikal&id=<?php echo $artikalid;?>"><img src="images/shop/<?php echo $slika;?>" alt="" style="height:30px"></a>
							</td>
							<td class="cart_price">
								<p><?php echo $naziv;?></p>					
							</td>
							<td class="cart_price hidden-xs">
								<p><?php echo $red->cena;?> RSD</p>
							</td>
							<td class="cart_price hidden-xs">
								<p><?php echo $red->kolicina;?></p>
							</td>
							<td class="cart_price">
								<?php
								$totalLinija = $red->cena * $red->kolicina;
								$totalCena = $totalCena + $totalLinija;
								?>
								<p ><?php echo $totalLinija;?> RSD</p>
							</td>
							<td class="cart_delete">
								<form id="form-search">							
									<input type="hidden" value="<?php echo $red->id;?>" name="id">
									<button type="button" class="cart_quantity_delete" href="" id="brisiKorpa"><i class="fa fa-times"></i></button>
								</form>
							</td>
						</tr>
						<?php
					}
				}
				?>
			</tbody>
		</table>
		<br/><br/>
		<?php
		if(mysqli_num_rows($rez) > 0)
		{
			?>
			<div class="col-md-8">&nbsp;</div>
			<div class="col-md-4" style="padding-right:0px">
			<div style="border:1px solid #E6E4DF;margin-top:15px;">
				<h2 class="text-center">Ukupno: <?php echo $totalCena;?> RSD</h2>
				<a style="width:90%" class="btn btn-fefault cart" href="#poruci" id="poruciModal" data-toggle="modal"><i class="fa fa-check"></i> Poruči</a>
				<br/><br/>
			</div>
			</div>
		
		<?php
		}
	}
	
	public function korpaBrisiArtikal($id)
	{
		$db = new Baza();
		$upit = "DELETE FROM porudzbine_detalji WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);				
	}
	
	public function proveriKorisnika($email, $password)
	{
		$db = new Baza();
		$password = md5($password);
		$upit = "SELECT * FROM korisnici WHERE email = '$email' AND password = '$password'";
		$rez = $db->izvrsiUpit($upit);		
		if(mysqli_num_rows($rez) == 1)
		{
			$_SESSION['prijava']="ok";
			return 1;
		}
		else
		{
			$_SESSION['prijava']="error";
			return 0;			
		}
	}
	
	public function podaciKorisnika($id)
	{
		$db = new Baza();		
		$upit = "SELECT * FROM korisnici WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			$this->email = $red->email;
		}
	}
	
		
	public function korisniciPrikaz()
	{
		$db = new Baza();		
						
		$upit = "SELECT * FROM korisnici";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			?>
			<tr>
				<td class="cart_product hidden-xs">
					<?php echo $red->email;?>
				</td>
				
				<td class="cart_delete">
					<form action="index.php" style="float:left;margin-right:5px">			
						<input type="hidden" value="korisnici" name="tip">
						<input type="hidden" value="admin" name="strana">
						<input type="hidden" value="<?php echo $red->id;?>" name="id">
						<button type="submit" class="cart_quantity_delete" ><i class="fa fa-pencil"></i></button>
					</form>
					<form id="brisiForma">			
						
						<input type="hidden" value="<?php echo $red->id;?>" name="id">
						<button type="button" class="cart_quantity_delete" href="" id="brisi"><i class="fa fa-times"></i></button>
					</form>
				</td>
			</tr>
			<?php
		}
	}
	
	public function brisiKorisnik($id)
	{
		$db = new Baza();
		$upit = "DELETE FROM korisnici WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);				
	}
	
	public function dodajKorisnik($email, $password)
	{
		$db = new Baza();
		$password = md5($password);
		
		$upit = "SELECT * FROM korisnici WHERE email = '$email' AND password = '$password'";
		$rez = $db->izvrsiUpit($upit);		
		if(mysqli_num_rows($rez) == 0)
		{
			$upit = "INSERT INTO korisnici (email, password) VALUES ('$email', '$password')";
			$rez = $db->izvrsiUpit($upit);	
		}
	}
	
	public function izmeniKorisnik($email, $password, $id)
	{
		$db = new Baza();
		$password = md5($password);
		
		$upit = "UPDATE korisnici SET email ='$email' WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);	
		
		if($password !='dad3a37aa9d50688b5157698acfd7aee') 
		{
			$upit = "UPDATE korisnici SET password = '$password' WHERE id = $id";
			$rez = $db->izvrsiUpit($upit);	
		}
	}
	
	public function podaciKategorija($id)
	{
		$db = new Baza();		
		$upit = "SELECT * FROM kategorije WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			$this->naziv = $red->naziv;
			$this->opis = $red->opis;
		}
	}
	
	public function kategorijePrikaz()
	{
		$db = new Baza();		
						
		$upit = "SELECT * FROM kategorije";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			?>
			<tr>
				<td class="cart_product hidden-xs">
					<?php echo $red->naziv;?>
				</td>
				
				<td class="cart_delete">
					<form action="index.php" style="float:left;margin-right:5px">			
						<input type="hidden" value="kategorije" name="tip">
						<input type="hidden" value="admin" name="strana">
						<input type="hidden" value="<?php echo $red->id;?>" name="id">
						<button type="submit" class="cart_quantity_delete" ><i class="fa fa-pencil"></i></button>
					</form>
					<form id="brisiForma">			
						
						<input type="hidden" value="<?php echo $red->id;?>" name="id">
						<button type="button" class="cart_quantity_delete" href="" id="brisi"><i class="fa fa-times"></i></button>
					</form>
				</td>
			</tr>
			<?php
		}
	}
	
	public function brisiKategorija($id)
	{
		$db = new Baza();
		$upit = "DELETE FROM kategorije WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);				
	}
	
	public function dodajKategorija($naziv, $opis)
	{
		$db = new Baza();
		$upit = "SELECT * FROM kategorije WHERE naziv = '$naziv'";
		$rez = $db->izvrsiUpit($upit);		
		if(mysqli_num_rows($rez) == 0)
		{
			$upit = "INSERT INTO kategorije (naziv, opis) VALUES ('$naziv', '$opis')";
			$rez = $db->izvrsiUpit($upit);	
		}
	}
	
	public function izmeniKategorija($naziv, $opis, $id)
	{
		$db = new Baza();		
		
		$upit = "UPDATE kategorije SET naziv ='$naziv', opis= '$opis' WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);	
	}
	
	public function podaciArtikal($id)
	{
		$db = new Baza();		
		$upit = "SELECT * FROM artikli WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			$this->naziv = $red->naziv;
			$this->id = $red->id;
			$this->opis = $red->opis;
			$this->cena = $red->cena;
			$this->istaknuto = $red->istaknuto;
			$this->kategorija = $red->kategorija;
			$this->slika = $red->slika;
		}
	}
	
	public function artikliPrikaz()
	{
		$db = new Baza();		
						
		$upit = "SELECT * FROM artikli";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			?>
			<tr>
				<td >
					<img src="images/shop/<?php echo $red->slika;?>" style="height:30px">
					<?php echo $red->naziv;?>
				</td>
				<td class=" hidden-xs">
					<?php echo $red->cena;?>
				</td>
				<td class="cart_delete">
					
					
					
					<form action="index.php" style="float:left;margin-right:5px">			
						<input type="hidden" value="artikli" name="tip">
						<input type="hidden" value="admin" name="strana">
						<input type="hidden" value="<?php echo $red->id;?>" name="id">
						<button type="submit" class="cart_quantity_delete" ><i class="fa fa-pencil"></i></button>
					</form>
					<form id="brisiForma" style="float:left;margin-right:5px">			
						
						<input type="hidden" value="<?php echo $red->id;?>" name="id">
						<button type="button" class="cart_quantity_delete" href="" id="brisi"><i class="fa fa-times"></i></button>
					</form>
					
					<a  data-toggle="modal" href="#detalji<?php echo $red->id;?>" class="cart_quantity_delete" style="background:#000;float:left;margin-right:5px;padding:2px 7px;"><i class="fa fa-image"></i></a>
					<div class="modal" id="detalji<?php echo $red->id;?>" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog ">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></button>
								<h4 class="modal-title">Izmena slike artikla</h4>
							</div>
							<form action="" method="post"  enctype="multipart/form-data" >
							<div class="modal-body">
								
								
								<input type="file" name="slika">
								<input type="hidden" name="artikal_id" value="<?php echo $red->id;?>">
							</div>
							<div class="modal-footer">	
								<button type="submit" class="btn btn-success" name="azurirajSliku" >Ažuriraj</button>					
							</div>		
							</form>
						</div>		
					</div>
					</div>
					
				</td>
			</tr>
			<?php
		}
	}
	
	public function brisiArtikal($id)
	{
		$db = new Baza();
		$upit = "DELETE FROM artikli WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);				
	}
	
	public function dodajArtikal($naziv, $opis, $cena, $kategorija, $istaknuto)
	{
		$db = new Baza();
		$upit = "INSERT INTO artikli (naziv, opis, cena, kategorija, istaknuto) VALUES ('$naziv', '$opis', '$cena', '$kategorija', '$istaknuto')";
		$rez = $db->izvrsiUpit($upit);			
	}
	
	public function izmeniArtikal($naziv, $opis, $cena, $kategorija, $istaknuto, $id)
	{
		$db = new Baza();		
		
		$upit = "UPDATE artikli SET naziv ='$naziv', opis= '$opis', cena = '$cena', kategorija = $kategorija, istaknuto = $istaknuto WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);	
	}
	
	
	public function poruci($ime, $adresa, $telefon, $email)
	{
		$db = new Baza();
		$datum = date("Y-m-d H:i:s");
		$upit = "INSERT INTO porudzbine (ime, adresa, telefon, email, code, datum) VALUES ('$ime', '$adresa', '$telefon', '$email', '$_SESSION[code]', '$datum')";
		
		$rez = $db->izvrsiUpit($upit);		
		$_SESSION['code']=$this->slucajniString(6);
	}
	
	public function porudzbinePrikaz()
	{
		$db = new Baza();		
						
		$upit = "SELECT * FROM porudzbine";
		$rez = $db->izvrsiUpit($upit);		
		while($red=$db->procitajRed($rez))
		{
			?>
			<tr>
				<td class=" hidden-xs">
					<?php echo $red->code;?>
				</td>
				<td class=" ">
					<?php echo $red->ime;?>
				</td>
				<td class=" ">
					<?php echo $red->adresa;?>
				</td>
				<td class=" hidden-xs">
					<?php echo $red->email;?>
				</td>
				<td class=" hidden-xs">
					<?php echo $red->telefon;?>
				</td>
				<td class="cart_delete">
					<input type="hidden" value="<?php echo $red->id;?>" name="id">
					<a  data-toggle="modal" href="#detalji<?php echo $red->id;?>" class="cart_quantity_delete" style="background:#000"><i class="fa fa-bars"></i></a>
					<div class="modal" id="detalji<?php echo $red->id;?>" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog ">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></button>
								<h4 class="modal-title">Porudžbenica</h4>
							</div>
							<div class="modal-body">
								<table class="table ">
									<thead>
										<tr class="cart_menu">
											<td class="image hidden-xs">Artikal</td>
											<td class="description"></td>
											<td class="price hidden-xs">Cena</td>
											<td class="quantity hidden-xs">Količina</td>
											<td class="total">Ukupno</td>											
										</tr>
									</thead>
									<tbody>
										<?php
										$totalCena = 0;
										$upit = "SELECT * FROM porudzbine_detalji WHERE code = '$red->code'";
										$rez2 = $db->izvrsiUpit($upit);	
										while($red2=$db->procitajRed($rez2))
										{
											$upitA = "SELECT * FROM artikli WHERE id = $red2->artikal";
											$rezA = $db->izvrsiUpit($upitA);		
											while($redA=$db->procitajRed($rezA))
											{
												$slika = $redA->slika;
												$artikalid = $redA->id;
												$naziv = $redA->naziv;
											}
											?>
											<tr>
												<td class="cart_product hidden-xs">
													<a href="index.php?strana=artikal&id=<?php echo $artikalid;?>"><img src="images/shop/<?php echo $slika;?>" alt="" style="height:30px"></a>
												</td>
												<td class="cart_price">
													<p><?php echo $naziv;?></p>					
												</td>
												<td class="cart_price hidden-xs">
													<p><?php echo $red2->cena;?> RSD</p>
												</td>
												<td class="cart_price hidden-xs">
													<p><?php echo $red2->kolicina;?></p>
												</td>
												<td class="cart_price">
													<?php
													$totalLinija = $red2->cena * $red2->kolicina;
													$totalCena = $totalCena + $totalLinija;
													?>
													<p ><?php echo $totalLinija;?> RSD</p>
												</td>												
											</tr>
											<?php
										}										
										?>
									</tbody>
								</table>
								<h3 style="float:right">UKUPNO: <?php echo $totalCena;?> RSD</h3>
								<div style="clear:both"></div>
								<h3>Podaci o kupcu</h3><hr/>
								<table class="table table-striped">
									<tr><td>Ime i prezime</td><td><?php echo $red->ime;?></td></tr>
									<tr><td>Adresa</td><td><?php echo $red->adresa;?></td></tr>
									<tr><td>Email</td><td><?php echo $red->email;?></td></tr>
									<tr><td>ITelefon</td><td><?php echo $red->telefon;?></td></tr>
								</table>
								
								
							</div>
							<div class="modal-footer">	
								<button type="button" class="btn default" data-dismiss="modal">Zatvori</button>					
							</div>							
						</div>		
					</div>
				</div>
				</td>
			</tr>
			<?php
		}
	}
	
	public function slikaAzuriraj($id)
	{
		$target = "images/shop/";
		$code = time();
		$file = basename($_FILES['slika']['name']);	
		$target1 = $target . $file;	
		if(move_uploaded_file($_FILES['slika']['tmp_name'], $target1))
		{
			$fileDB = $file;
		}
		else
		{
			$fileDB = "";
			
		}
		
		$db = new Baza();		
		
		$upit = "UPDATE artikli SET slika ='$fileDB' WHERE id = $id";
		$rez = $db->izvrsiUpit($upit);			
	}
}
?>