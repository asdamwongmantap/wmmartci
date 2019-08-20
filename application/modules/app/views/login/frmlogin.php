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
	
	<section id="cart_items"><!--form-->
		<div class="container">
		<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Login</li>
				</ol>
			</div><!--/breadcrums-->
			
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?=base_url();?>app/customer/cek_login" method="POST">
							<input type="email" placeholder="Email Address" name="user" />
							<input type="password" placeholder="Password" name="password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>BELUM MENJADI MEMBER? SILAHKAN DAFTAR</h2>
						<h5>Jadilah Member untuk mendapatkan berbagai fasilitas menarik</h5>
						<a class="btn btn-primary" href="<?=base_url();?>app/customer/register">Sign Up</a>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<p>&nbsp;</p>
	
	<?php
		$this->load->view('ui/footermeta.php',$data);
	?>
  
</body>
</html>