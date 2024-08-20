<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<title>Cek Kelulusan</title></title>

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
	</head>
	<body>
 

<!-- [ signin-img-tabs ] start -->
<div class="blur-bg-images"></div>
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card text-center">
			<div class="card-body">
				<h3 class="mb-3">GENERATE DATA<br><span class="text-c-blue"><h5 class="text-c-blue"><?php foreach($cari as $res){ ?><?php echo $res->nama_lengkap ?> <?php } ?></h5></span></h3>
				<div class="toggle-block">
					<ol class="position-relative carousel-indicators justify-content-center">
						<li class="toggle-btn"></li>
						<li class="active"></li>
					</ol>
				
					<div class="custom-control custom-checkbox text-left mb-4 mt-2">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">Save credentials</label>
					</div>
					<button class="btn btn-primary mb-4">Signin</button>
					<button class="btn btn-outline-primary mb-4 toggle-btn">Create Profile</button>
					<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
				</div>
				<div class="toggle-block collapse">
					<ol class="position-relative carousel-indicators justify-content-center">
						<li class="active"></li>
						<li class="toggle-btn"></li>
					</ol>
					<div class="form-group mb-3">
						<label class="floating-label" for="Username">Username</label>
						<input type="text" class="form-control" id="Username">
					</div>
					<div class="form-group mb-3">
						<label class="floating-label" for="Email">Email address</label>
						<input type="email" class="form-control" id="Email">
					</div>
					<div class="form-group mb-3">
						<label class="floating-label" for="Password">Password</label>
						<input type="password" class="form-control" id="Password">
					</div>
					<div class="custom-control custom-checkbox text-left mb-4 mt-2">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">Send me the <a href="#!"> Newsletter</a> weekly.</label>
					</div>
					<button class="btn btn-primary mb-4">Signup</button>
					<button class="btn btn-outline-primary mb-4 toggle-btn">Existing user</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img-tabs ] end -->

	</body>
</html>