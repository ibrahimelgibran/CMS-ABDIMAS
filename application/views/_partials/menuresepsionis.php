<body class="background-grd-purple">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
  <!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?php echo base_url() ?>resources/images/pengguna/default.png" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details"><?php echo $this->session->userdata("user_nama") ?></div>
						</div>
					</div>
					<!-- <div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">0</small></a></li>
							<li class="list-inline-item"><a href="<?php echo base_url() ?>bk/dashboard/logout" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div> -->
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					
					<!-- <li class="nav-item pcoded-menu-caption">
						<label>SMARTSCHOOL <span class="pcoded-badge badge badge-danger"><?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?></span></label>
					</li> -->

					<li class="nav-item">
						<a href="<?php echo base_url() ?>resepsionis/dashboard" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">Dashboard</span>
						</a>
					</li>

					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="fas fa-database"></i></span>
							<span class="pcoded-mtext">Buku Tamu</span>
						</a>
						<ul class="pcoded-submenu">
                            <li><a href="<?php echo base_url() ?>resepsionis/dashboard/dataresepsionis">Daftar Tamu</a></li>
						</ul>
					</li>

          			<li class="nav-item"><a href="<?php echo base_url() ?>index.php" class="nav-link ">
					  	<span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
						<span class="pcoded-mtext">Keluar</span></a>
					</li>

				</ul>
				
				<!-- <div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Butuh Bantuan ?</h6>
						<p>Silahkan hubungi Administrator anda bila menemui masalah</p>
						<a href="#!" target="_blank" class="btn btn-primary btn-sm text-white m-0">Support by Exampremium V.<?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?></a>
					</div>
				</div> -->
				
			</div>
		</div>
	</nav>

  	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
	  <div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand"> 
						<!-- ========   change your logo hear   ============ -->
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
			
				
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->