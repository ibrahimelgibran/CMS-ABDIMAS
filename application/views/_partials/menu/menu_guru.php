<?php foreach($temaaktif as $tema){ ?><?php } ?>
<body class="background-<?php echo $tema->style ?>">
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
							<div id="more-details"><?php echo $this->session->userdata("user_nama") ?> </div>
						</div>
					</div>
					<!-- <div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">0</small></a></li>
							<li class="list-inline-item"><a href="<?php echo base_url() ?>admin/dashboard/logout" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div> -->
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					
					<!-- <li class="nav-item pcoded-menu-caption">
					<span class="badge badge-info">PROSES <?php echo $this->benchmark->elapsed_time();?> | MEMORY <?php echo $this->benchmark->memory_usage();?></span>
					</li> -->

					<li class="nav-item">
						<a href="<?php echo base_url() ?>guru/dashboard" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">Dashboard</span>
						</a>
					</li>		
					
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-user"></i></span>
							<span class="pcoded-mtext">Biodata</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/biodata/">Informasi Pribadi</a></li>
							<li><a href='<?php echo base_url() ?>guru/dashboard/biodatafoto/<?php echo $this->session->userdata("user_id") ?>'>Foto Pribadi</a></li>	
						</ul>
					</li>

					<!--<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
							<span class="pcoded-mtext">E-Learning</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href='<?php echo base_url() ?>guru/dashboard/elearning'>E-Learning</a></li>	
						</ul>
					</li>-->

					<!-- <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
							<span class="pcoded-mtext">Pembelajaran</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href='<?php echo base_url() ?>guru/dashboard/bukudigital'>Buku Digital</a></li>
							<li><a href='<?php echo base_url() ?>guru/dashboard/videopembelajaran'>Video Pembelajaran</a></li>	
						</ul>
					</li> -->
				
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-bell"></i></span>
							<span class="pcoded-mtext">Presensi</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/kehadiranguru/">Presensi Masuk</a></li>	
						</ul>
					</li>
				
						<!--
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-book"></i></span>
							<span class="pcoded-mtext">E-Jurnal</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/jadwalmengajar/">Jadwal Mengajar</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/jurnalguru/">Jurnal Guru</a></li>
						</ul>
					</li>
					-->

					<!-- <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-book"></i></span>
							<span class="pcoded-mtext">E-Kinerja</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/dataekinerja/">Data E-Kinerja</a></li>
						</ul>
					</li> -->



					<!-- <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-book"></i></span>
							<span class="pcoded-mtext">E-Rapor</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/datakelasmengajar/">Data Kelas</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt1/">Semester 1</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt2/">Semester 2</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt3/">Semester 3</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt4/">Semester 4</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt5/">Semester 5</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt6/">Semester 6</a></li>
						</ul>
					</li> -->












          			<li class="nav-item"><a href="<?php echo base_url() ?>guru/dashboard/logout" class="nav-link ">
					  	<span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
						<span class="pcoded-mtext">Keluar</span></a>
					</li>

				</ul>
				
				<div class="card text-center">
					<!-- <div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Butuh Bantuan ?</h6>
						<p>Silahkan hubungi Administrator anda bila menemui masalah</p>
						<a href="#!" target="_blank" class="btn btn-primary btn-sm text-white m-0">Support XCode V.<?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?></a>
					</div> -->
				</div>
				
			</div>
		</div>
	</nav>

  	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
	  <div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo gambar di atas   ============ -->
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->