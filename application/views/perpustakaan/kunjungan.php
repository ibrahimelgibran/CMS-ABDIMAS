

<!DOCTYPE html>
<html lang="en">
<?php foreach($data_profil as $data_lembaga){ ?> <?php } ?>
<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title><?php echo $data_lembaga->nama_lembaga ?></title>


  <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Aplikasi ini adalah aplikasi untuk membaca eBook yang diterbitkan oleh Penerbit Erlangga berbasis perpustakaan digital. Kamu bisa meminjam buku yang sudah tersedia di koleksi buku perpustakaanmu." />
  <meta name="keywords" content="ebook, elibrary, e-library, e-book, erlangga, ebook erlangga" />

  <link rel="icon" href="<?php echo base_url() ?>upload/<?php echo $data_lembaga->logo ?>" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/waves.min.css" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/feather.css">

  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/themify-icons.css">

  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/icofont.css">

  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/pages.css">
  <link rel="stylesheet" type="text/css" href="https://e-library.erlanggaonline.co.id/assets/css/sweetalert.css">
  	<style>
	.card-form{
        width: 100%;
        max-width: 900px;
        display: block;
        margin: auto;
    }
    .form-guest-book{
        padding : 0px 30px;
    }
	.title-back{
		font-weight: bold;
		margin-top: 3px;
	}
	.area-btn-back{
		max-width: 50px;
	}
    @media only screen and (max-width: 768px) {
        .form-guest-book{
            padding : 0px;
        }
		.title-back{
			font-weight: bold;
			margin-top: 5px;
		}
    }
	body{
		background-image: none;
	}
	.video-card{
		margin-top: 20px;
	}

	
	</style>
</head>

<body themebg-pattern="theme3">

	
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
		<div class="container-fluid" style="padding-top: 50px">
            <div class="card card-form">
				
                <div class="card-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <img style="max-height: 100px; margin-bottom: 20px" src="<?php echo base_url() ?>upload/<?php echo $data_lembaga->logo ?>" alt="logo.png">
                            </div>
                            <h3 class="text-center txt-primary perpustakaan-name"> <?php echo $data_lembaga->nama_lembaga ?></h3>
                            <h5 class="text-center txt-primary perpustakaan-name m-b-30">Buku Kunjungan Perpustakaan</h5>
                            <hr style="margin-bottom: 0px;">
                            
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-guest-book">
                                    <form action="<?php echo base_url() ?>beranda/simpanpengunjung" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                                            
                                        <?php if($this->session->flashdata('pemberitahuan_berhasil')){ ?>  
                                            <div class="alert alert-info">  
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>  
                                            <strong></strong> <?php echo $this->session->flashdata('pemberitahuan_berhasil'); ?>  
                                            </div>  
                                        <?php } ?> 

                                            <div class="col-sm-12 text-black">
                                                <div class="table-responsive">
                                                <table id="report-table3" class="table table-bordered table-striped mb-0" style="width:100%">
                                                    <thead>
                                                        <tr class="btn-primary">
                                                            <th style="width: 4S%;" class="text-center"></th>
                                                            <th style="width: 25%;" class="text-center">NISN</th>
                                                            <th style="width: 25%;">Nama Siswa</th>
                                                            <th style="width: 25%;" class="text-center">Kelas</th>
                                                            <th style="width: 25%;" class="text-center">Jenis Kelamin</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody><?php $no = 1; foreach($data_siswa as $key){ ?>
                                                        <tr class="text-black">
                                                            <td class="text-center"><input type="checkbox" id="id_pengunjungperpustakaan" name="id_pengunjungperpustakaan" value="<?php echo $key->id_pendaftar?>"></td>
                                                            <td class="text-center"><?php echo $key->nisn ?> </td>
                                                            <td><?php echo $key->nama_lengkap ?> </td>
                                                            <td class="text-center"><?php echo $key->siswa_kelas ?> </td>
                                                            <td class="text-center"><?php echo $key->jeniskelamin ?> </td>
                                                            
                                                        </tr><?php } ?>
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            
                                        </div>
                                       
                                      
                                       

                                      
										(*) Data Harus diisi.
                                        <button class="btn btn-primary" style="display: block; margin: auto; width: 100%; max-width: 140px" class="btn btn-info btn-md waves-effect waves-light text-white btn-goto-guestbook f-w-bold">ABSEN</button>
                                        </form>
                                    </div>
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
	<script src="https://e-library.erlanggaonline.co.id/assets/vendor/pagination/jq-paginator.js"></script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/notiflix-aio-2.4.0.min.js"></script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/sweetalert.min.js"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
		  dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script src="https://e-library.erlanggaonline.co.id/assets/js/rocket-loader.min.js"></script>
	<script>
		$('#btn-save').on('click', function(){
			var perpus = 'Nzc3MQ';
			var nis = $('#nis').val();
			var nama = $('#nama').val();
			var email = $('#email').val();
			var pekerjaan = $('#pekerjaan').val();
			var telepon = $('#telepon').val();
			var kelas = $('#kelas').val();
			var gender = $('#gender').val();
			var keperluan = $('#keperluan').val();
			if(nama != '' && email != '' && pekerjaan != '' && kelas != '' && gender != '' && keperluan != ''){
				$.ajax({
					url: 'https://e-library.erlanggaonline.co.id/guest_book/save_guestbook',
					type: 'POST',
					data: {
						nis: nis,
						nama: nama,
						email: email,
						perpus: perpus,
						pekerjaan: pekerjaan,
						telepon: telepon,
						kelas: kelas,
						gender: gender,
						keperluan: keperluan,
					},
					success: function(response) {
						var result = JSON.parse(response);
						if(result['status'] == 'sukses'){
							swal({
								title: "Berhasil !",
								text: "Data berhasil terkirim ke perpustakaan.",
								icon: "success"
							});
							$('#nis').val('');
							$('#nama').val('');
							$('#email').val('');
							$('#pekerjaan').val('');
							$('#telepon').val('');
							$('#kelas').val('');
							$('#gender').val('');
							$('#keperluan').val('');
						} else {
							swal({
								title: "Gagal !",
								text: "Data gagal terkirim ke perpustakaan.",
								icon: "error"
							});
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						swal({
							title: "Gagal !",
							text: "Data gagal terkirim ke perpustakaan.",
							icon: "error"
						});
					}
				});
			} else {
				swal({
					title: "Data Belum Lengkap !",
					text: "Masih ada data yang kosong. Silahkan periksa kembali data anda.",
					icon: "warning"
				});
			}
			
		});
	</script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->

</html>