
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <!--<title><?php foreach($data_profil as $data_lembaga){ ?> <?php } ?></title>-->
  <title>E-PERPUSTAKAAN | <?php echo $data_lembaga->nama_lembaga ?></title>


  <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" href="<?php echo base_url() ?>upload/<?php echo $data_lembaga->logo ?>" type="image/gif">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/waves.min.css" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/feather.css">
  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/icofont.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/auth-pages.css">
  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/pages.css">
</head>

<body themebg-pattern="theme6">
	  <div class="theme-loader">
		<div class="loader-track">
		  <div class="preloader-wrapper">
			<div class="spinner-layer spinner-blue">
			  <div class="circle-clipper left">
				<div class="circle"></div>
			  </div>
			  <div class="gap-patch">
				<div class="circle"></div>
			  </div>
			  <div class="circle-clipper right">
				<div class="circle"></div>
			  </div>
			</div>
			<div class="spinner-layer spinner-red">
			  <div class="circle-clipper left">
				<div class="circle"></div>
			  </div>
			  <div class="gap-patch">
				<div class="circle"></div>
			  </div>
			  <div class="circle-clipper right">
				<div class="circle"></div>
			  </div>
			</div>
			<div class="spinner-layer spinner-yellow">
			  <div class="circle-clipper left">
				<div class="circle"></div>
			  </div>
			  <div class="gap-patch">
				<div class="circle"></div>
			  </div>
			  <div class="circle-clipper right">
				<div class="circle"></div>
			  </div>
			</div>
			<div class="spinner-layer spinner-green">
			  <div class="circle-clipper left">
				<div class="circle"></div>
			  </div>
			  <div class="gap-patch">
				<div class="circle"></div>
			  </div>
			  <div class="circle-clipper right">
				<div class="circle"></div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	<section class="login-block">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-md-12 col-sm-12">
					<div class="auth-box card box-login bg-white-ebook text-black">
						<div class="card-block">
							<div class="row">
								<div class="text-center m-b-10 m-t-20">
									
								</div>
								<div class="col-md-12">
									<h3 class="text-center txt-primary"><img style="width:30%" class="text-center" src="<?php echo base_url() ?>upload/<?php echo $data_lembaga->logo ?>" alt="logo.png"><br>Login Pengelola<br>e-perpustakaan<br></h3>
								</div>
							</div>
							
							<div class="tab-content card-block" style="padding-bottom: 0.5rem;">
								<div class="tab-pane active" id="pengelola" role="tabpanel">
									<form class="md-float-material" action="<?php echo base_url() ?>loginperpustakaan" method="POST">
										<div class="form-group form-primary">
											<label class="float-label">Username</label>
											<input type="text" id="username" name="username" class="form-control" ><span class="form-bar"></span>
											<?php echo form_error('username'); ?>
										</div>
										<div class="form-group form-primary">
											<label class="float-label">Password</label>
											<div class="input-group">
												<input type="password" id="password" name="password" class="form-control" style="width: 1%">
												<span id="button-show-password" class="input-group-append" style="background: #4099ff">
													<label class="input-group-text" style="color:#fff;background:transparent;border:0px;cursor:pointer;line-height:2px;"><i id="icon-password" class="feather icon-eye-off"></i></label>
												</span>
													<span class="form-bar"></span>
												
											</div><?php echo form_error('password'); ?>
											<!--<input type="password" id="admin_password" name="admin_password" class="form-control" required="">-->
											
										</div>  <?php if(isset($error)) { echo $error; }; ?>
										<div class="row text-left">
										</div>
										<div class="row m-t-20">
											<div class="col-md-12">
												<button type="submit" class="btn-rounded btn btn-primary btn-md btn-block waves-effect text-center">LOGIN PENGELOLA E-LIBRARY</button>
											</div>
										</div>

									</form>
								</div>
							</div>
							<!-- <p class="text-center text-left">Belum punya akun?  <a class="text-primary" style="font-weight: bold" href="https://e-library.erlanggaonline.co.id/auth/registerperpus"> <strong>Daftar disini</strong></a> Gratis!</p> -->
							<hr style="border-color: #fff; margin: 5px; margin-top: 10px">
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-xl-12 col-md-6">
							<div class="catalog-box card box-widget bg-blue-ebook">
								<div class="card-block">
									<div class="row">
										<div class="col-md-12">
											
											<div id="content-catalog"></div>
											<div class="row row-catalog">
												<div class="col-md-12 text-white">
                        							APLIKASI E-PERPUSTAKAAN |  <?php echo $data_lembaga->nama_lembaga ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-md-6 col-sm-12">
							<div class="catalog-box card box-widget bg-YELLOW-ebook m-b-20">
								<div class="card-block">
									<div class="row">
										<div class="col-md-12">
											<a href="https://erlanggaonline.com/survey" target="_blank">
												<div class="card" style="margin-bottom: 0px;">
													<div class="text-center card-body">
														<div class="area-img-bukukunjungan">
															<img class="img-buku-kunjungan img-fluid" src="https://e-library.erlanggaonline.co.id/assets/images/survei-kepuasan.png" alt="logo.png">
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
            <div class="col-xl-4 col-md-6 col-sm-12">
							<div class="catalog-box card box-widget bg-green-ebook m-b-20">
								<div class="card-block">
									<div class="row">
										<div class="col-md-12">
											<h3 class="text-white text-center txt-primary m-b-40 m-t-10">Survei Kepuasan Pelanggan</h3>
											<a href="https://erlanggaonline.com/survey" target="_blank">
												<div class="card" style="margin-bottom: 0px;">
													<div class="text-center card-body">
														<div class="area-img-bukukunjungan">
															<img class="img-buku-kunjungan img-fluid" src="https://e-library.erlanggaonline.co.id/assets/images/survei-kepuasan.png" alt="logo.png">
														</div>
														<a href="https://erlanggaonline.com/survey" target="_blank" class="btn btn-catalog btn-green-ebook btn-block waves-effect waves-light text-white btn-goto-guestbook f-w-bold">Klik disini</a>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-sm-12">
							<div class="catalog-box card box-widget bg-red-ebook m-b-20">
								<div class="card-block">
									<div class="row">
										<div class="col-md-12">
											<h3 class="text-white text-center txt-primary m-b-40 m-t-10">Buku Kunjungan <span style="white-space: nowrap;">e-Library</span></h3>
											<div class="card" style="margin-bottom: 0px;">
												<a href="kunjunganperpustakaan" target="_blank">
													<div class="text-center card-body">
														<div class="area-img-bukukunjungan">
															<img class="img-buku-kunjungan img-fluid" src="https://e-library.erlanggaonline.co.id/assets/images/buku-kunjungan.png" alt="logo.png">
														</div>
														<a href="kunjunganperpustakaan" target="_blank" class="btn btn-catalog btn-red-ebook btn-block waves-effect waves-light text-white btn-goto-guestbook f-w-bold">Klik disini</a>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-sm-12">
							<div class="catalog-box card box-widget bg-purple-ebook m-b-20">
								<div class="card-block">
									<div class="row">
										<div class="col-md-12">
											<h3 class="text-white text-center txt-primary m-b-40 m-t-10">Video Tutorial <span style="white-space: nowrap;">e-Library</span></h3>
											<div class="card" style="margin-bottom: 0px;">
												<a href="https://e-library.erlanggaonline.co.id/video_tutorial" target="_blank" >
													<div class="text-center card-body">
														<div class="area-img-bukukunjungan">
															<img class="img-buku-kunjungan img-fluid" src="https://e-library.erlanggaonline.co.id/assets/images/video-tutorial.png" alt="logo.png">
														</div>
														<a href="https://e-library.erlanggaonline.co.id/video_tutorial" target="_blank" class="btn btn-catalog btn-purple-ebook btn-block waves-effect waves-light text-white btn-goto-guestbook f-w-bold">Klik disini</a>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="card box-widget bg-blue-ebook text-white">
						<div class="card-block">
							<div class="row">
								<!-- <div class="text-center">
									<img style="width:20%" src="https://e-library.erlanggaonline.co.id/upload/logo.png" alt="logo.png">
								</div> -->
								<div class="col-md col-sm-12">
									<h3 class="text-center txt-primary m-b-20">Unduh Aplikasi untuk Anggota <span style="white-space: nowrap">e-Library</span> Erlangga</h3>
								</div>
								<div class="col-md col-sm-12 m-b-20">
									<a target="_blank" href="https://play.google.com/store/apps/details?id=com.erl.e_library"><img src="https://e-library.erlanggaonline.co.id/assets/images/get-in-on-playstore.png" class="img-fluid image-download-app" alt="Responsive image"></a>
								</div>
								<div class="col-md col-sm-12 m-b-20">
									<a target="_blank" href="https://apps.apple.com/id/app/elibrary-erlangga/id1550550115"><img src="https://e-library.erlanggaonline.co.id/assets/images/get-in-on-appstore.png" class="img-fluid image-download-app" alt="Responsive image"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</section>

	<script src="https://e-library.erlanggaonline.co.id/assets/js/jquery.min.js"></script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/jquery-ui.min.js"></script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/popper.min.js"></script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/bootstrap.min.js"></script>

	<script src="https://e-library.erlanggaonline.co.id/assets/js/waves.min.js"></script>

	<script src="https://e-library.erlanggaonline.co.id/assets/js/jquery.slimscroll.js"></script>

	<script src="https://e-library.erlanggaonline.co.id/assets/js/modernizr.js"></script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/css-scrollbars.js"></script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/common-pages.js"></script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/notiflix-aio-2.4.0.min.js"></script>



</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->

</html>