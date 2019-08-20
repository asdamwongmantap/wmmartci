<!DOCTYPE html>
<html lang="en">
<head>
    <?php
		$this->load->view('ui/headermeta.php',$data);
	?>
</head><!--/head-->

<body>
	<?php
		$this->load->view('ui/topmenu.php',$data);
		
	?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Registration</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Registration User</h2>
			</div>
			
			<center>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-md-3">&nbsp;</div>
					<div class="col-sm-5">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<form action="<?=base_url();?>app/customer/simpanregistrasi" method="POST">
								<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control">
								<input type="text" name="email" placeholder="Email" class="form-control">
								<input type="password" name="password" placeholder="Password" class="form-control">
								<textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
								<input type="text" name="telpon" placeholder="Telpon" class="form-control">
								<select name="kota" id="kota">
									<option value="">Pilih Kota</option>
									<option value="1">Serang</option>
								</select>
								<input type="submit" class="btn btn-primary" name="btndaftar" id="btndaftar" value="REGISTER">
							</form>
						</div>
					</div>
					
				</div>
			</div>
			</center>
		</div>	
	</section> <!--/#cart_items-->

	
	<?php
		$this->load->view('ui/footermeta.php',$data);
	?>
  
</body>
</html>