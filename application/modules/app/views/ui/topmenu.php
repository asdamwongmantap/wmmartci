<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="social-icons pull-left">
							&nbsp;
						</div>
					</div>
					<div class="col-sm-6">
						<div class="contactinfo pull-right">
							<ul class="nav nav-pills">
							<?php if (!$this->session->userdata('username')){?>
								<li><a href="#"><i class="fa fa-user"></i> Selamat Datang Pengunjung</a></li>
								<?php }else{ ?>
									<li><a href="#"><i class="fa fa-user"></i> Selamat Datang <?=$this->session->userdata('username');?></a></li>
								<?php } ?>
								
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?=base_url();?>/assets/images/home/logowmmartedit.png" alt="" /></a>
						</div>
						
					</div>
					
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?=base_url();?>app/transaksi/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if (!$this->session->userdata('username')){?>
									<li><a href="<?=base_url();?>app/customer/login"><i class="fa fa-lock"></i> Login</a></li>
								<?php }else{ ?>
									<li><a href="<?=base_url();?>app/customer/logout"><i class="fa fa-lock"></i> Logout</a></li>
									
								<?php } ?>
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="pull-right">
							<form action="<?=base_url();?>app/product/search" class="searchform">
								<input type="text" placeholder="Search" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->