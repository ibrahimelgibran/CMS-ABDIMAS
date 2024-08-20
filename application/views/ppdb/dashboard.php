
<!DOCTYPE html>
<html lang="en">
<head>
<?php foreach($data_profil as $res){ ?> <?php } ?>
<?php foreach($data_profilppdb as $profilppdb){ ?> <?php } ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online <?php echo $res->nama_lembaga ?></title>
		<base href="/"/>

		<link rel="icon" href="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/ppdb/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/ppdb/css/faa.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?php echo base_url() ?>assets/ppdb/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/ppdb/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" alt="Logo" width="30" style="position:absolute;margin-top:-10px;"> <span style="margin-left:35px;">PPDB Online</span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"><img src="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" alt="Logo" width="15"> Tentang Sekolah</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-info-circle"></i> Informasi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-phone-square"></i> Kontak Kami</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
              <div class="container" style="margin-top:-15px;">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" style="margin-top:-15%;margin-bottom:-5px;" width="100">
                    <div class="intro-text">
                        <span class="name shad" style="font-size:25px">PPDB Online <br> <?php echo $res->nama_lembaga ?></span>
                        <!-- <br><br><br><br><br> -->
                        <div style="margin-top:10%;"></div>
                        <br>
                        <span class="skills">
							<a href="files/037e6b30e368f296ed269ccbce6b8bd0.pdf" class="btn btn-warning btn-lg" style="font-size:14px;margin-bottom:1px; color:black; "><i class="fa fa-file-pdf-o faa-pulse animated"></i> &nbsp;Download Panduan PPDB Online</a>
						</span>
                        <br>
                        <!-- <hr class="star-light"> -->
						<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online </h3> -->
                        <div>

                        <?php foreach($data_jalurppdb as $jalurppdb){ ?>
							<a href="ppdb/pmpa" class="btn btn-success btn-lg" id="tombol_pmpa" style="width:300px;margin:5px;font-size:15px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran <br> <span style="font-size:12px;"><?php echo $jalurppdb->nama_jalur ?></span> <br> <?php echo $jalurppdb->kode_jalur ?></a>
                        <?php } ?>

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang sekolah</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 portfolio-item">
                    <a href="#" target="_blank" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" class="img-thumbnail" alt=""><br>
                        <span class="btn btn-success btn-block"><?php echo $res->alamatwebsite ?></span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi PPDB Online</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="text-align:justify">
                    <p class="text-center"><?php echo $res->nama_lembaga ?> <br> <?php echo $profilppdb->informasi ?></p>
                </div>
            
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                    <a href="#page-top" class="btn btn-md btn-outline">
                        <i class="fa fa-pencil-square-o "></i> PPDB Online                    </a> &nbsp;&nbsp;
                    <a href="#prosedur" class="btn btn-md btn-outline">
                        <i class="fa fa-tasks"></i> Prosedur PPDB Online                    </a>&nbsp;&nbsp;
                    <a href="logcs" class="btn btn-md btn-outline">
                        <i class="fa fa-sign-in"></i> Login Calon Siswa
                    </a>&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>

     <section id="prosedur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Prosedur PPDB Online</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                       <img class="img-responsive" src="img/alur_ppdb_online_new.jpg" alt="">
                    </div>
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center">
                                <h4>Penjelasan Prosedur PPDB Online</h4>
                                <hr class="star-primary">
                                <ol style="font-size:18px;text-align:justify">
                                <li>Calon Siswa mendaftarkan diri atau melakukan <b><a href="pendaftaran">Pendaftaran PPDB <i>online</i></a></b> melalui website <b><a href="">PPDB <?php echo $res->nama_lembaga ?></a></b>.</li>
                                <li>Setelah Calon Siswa berhasil melakukan pendaftaran, Calon siswa wajib melakukan <b>Print Out Pendaftaran & Mempersiapkan Kelengkapan Berkas PPDB <?php echo $res->nama_lembaga ?></b>.</li>
                                <li>Calon siswa datang ke <?php echo $res->nama_lembaga ?> untuk <b>VERIFIKASI</b>, membawa <b>Bukti pendaftaran & Kelengkapan Berkas PPDB <?php echo $res->nama_lembaga ?></b>. </li>
                                <li>Panitia PPDB melakukan <b>Verifikasi dan Validasi Berkas Pendaftaran</b>.</li>
                                <li>Setelah selesai Calon Siswa Menerima <b>TANDA BUKTI VERIFIKASI</b>.</li>
                                <li>Calon Siswa wajib mengambil <b>NOMOR TEST & Pengecekan Ruang Ujian</b>.</li>
                                <li>Jika Calon Siswa sudah mengambil <b>NOMOR TEST & Pengecekan Ruang Ujian</b> selanjutnya Calon Siswa wajib melakukan <b>TEST tertulis POTENSI AKADEMIK</b>.</li>
																<li>PENGUMUMAN HASIL PPDB Online bisa dilihat di Web PPDB <?php echo $res->nama_lembaga ?>. Untuk <b>No. Pendaftaran</b> sesuaikan dengan <b>Formulir No. Pendaftaran</b> & <b>Passwordnya</b> yaitu <b>NISN</b> Calon Siswa tersebut.</li>
																<li>Jika Calon Siswa dinyatakan <b>LULUS</b> maka Calon Siswa Wajib <b>Registrasi/Daftar Ulang</b> di <b><?php echo $res->nama_lembaga ?></b>.</li>
															</ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
		<section class="success" id="contact">
        <!-- <div class="container"> -->
            <div class="row" style="margin-top:-100px;margin-bottom:-105px;">
                <div class="col-lg-4 text-center">
                  <br><br>
                    <h2>Kontak Kami</h2>
                    <hr class="star-light">
                    <h4>
					<?php echo $res->alamat_lembaga ?> <br><br>
                    </h4>
                    <span style="color:#222;"><b><i class="fa fa-phone-square"></i> <?php echo $res->notelp ?></b> </span>
										&nbsp;
                    <span class="eml" style="color:#222;"><i class="fa fa-envelope"></i> <?php echo $res->email ?></span>
                    <br>
                    <a href="#" target="_blank"><h4 class="btn btn-success"><?php echo $res->nama_lembaga ?> </h4></a>
                </div>
                <div class="col-lg-8 text-center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.5604594676006!2d104.63630021402506!3d-4.109439246377554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e391817019a7369%3A0xecde8ed3fd88fb53!2sSMA+Negeri+1+Belitang!5e0!3m2!1sid!2sid!4v1523170424262" width="100%" height="465" frameborder="0" style="border:0" allowfullscreen></iframe>
              	</div>
            </div>
        <!-- </div> -->
    </section>



    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <a href="#" target="_blank"><?php echo $res->nama_lembaga ?></a> 2022 | IT Development
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/ppdb/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/ppdb/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url() ?>assets/ppdb/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/ppdb/js/freelancer.min.js"></script>

      <div class="modal fade" id="inbox-modal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="background:#2B589C;color:#fff;">
            <a class="close" data-dismiss="modal" style="color:#fff;">×</a>
            <h3 style="padding:0px;margin:0px;">PENTING!!!</h3>
          </div>
    			<div class="modal-body" style="background:#f9f9f9;">
    			  <p style="text-align:center"><span style="color:#ff0000"><strong><span style="font-size:18px"><var>SELAMAT DATANG&nbsp;DI WEBSITE</var></span></strong><br />
<strong><span style="font-size:18px"><var>Penerimaan Peserta Didik Baru (PPDB) On Line<br />
<?php echo $res->nama_lembaga ?> </var></span></strong><br />
<strong><span style="font-size:18px"><var>Tahun Pelajaran 2022/2023</var></span></strong></span><br />
&nbsp;</p>

<p style="text-align:center"><span style="color:#ff0000"><span style="font-size:22px"><var>PENGUMUMAN PPDB <?php echo $res->nama_lembaga ?> TAHUN PELAJARAN 2022/2023&nbsp;</var></span></span><br />
<span style="color:#ff0000"><span style="font-size:18px"><em>JALUR PMPA, JALUR AFIRMASI DAN MUTASI&nbsp;<br />
TANGGAL 28 - 31 MARET 2022<br />
WEBSITE PENDAFTARAN DIBUKA PUKUL 21.00 WIB</em></span></span><br />

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:12px"><span style="color:#ff0000"><em><strong>PENTING</strong><br>SANGAT DISARANKAN UNTUK MENDAFTAR MENGGUNAKAN LAPTOP, KOMPUTER ATAU PC DAN MENGGUNAKAN APLIKASI GOOGLE CHROME TIDAK DISARANKAN MENGGUNAKAN HANDPONE/HP</em></span></span></p>

<p style="text-align:center"><strong><span style="color:null"><span style="font-size:16px"><span style="font-family:Courier New,Courier,monospace">-ADMIN PPDB <?php echo $res->nama_lembaga ?>-</span></span></span></strong></p>
          </div>
          <div class="modal-footer">
            <a href="JavaScript:void(0);" class="btn btn-default" data-dismiss="modal">Tutup</a>
          </div>
        </div>
      </div>
    </div>

        <script type="text/javascript">
      $(window).load(function(){
          $('#inbox-modal').modal('toggle');
      });
    </script>
    
    <script>
              waktu_mundur("2020-06-11 23:59:59", 'pmpa');
                  waktu_mundur("2021-03-31 13:35:53", 'af');
                  waktu_mundur("2021-03-31 13:36:29", 'mt');
        function waktu_mundur(waktu, jalur)
  {
    if ($("#waktu_"+jalur).length==0) { return false; }

    // Mengatur waktu akhir perhitungan mundur
    var countDownDate = new Date(waktu).getTime();

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

      // Untuk mendapatkan tanggal dan waktu hari ini
      var now = new Date().getTime();

      // Temukan jarak antara sekarang dan tanggal hitung mundur
      var distance = countDownDate - now;

      // Perhitungan waktu untuk hari, jam, menit dan detik
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      if(hours < 10){ hours="0"+hours; }
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      if(minutes < 10){ minutes="0"+minutes; }
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      if(seconds < 10){ seconds="0"+seconds; }

      // Keluarkan hasil dalam elemen dengan id = "waktu_jalur"
      if (days <= 0) { Harinya = ''; }else { Harinya = days + " HARI, "; }
      document.getElementById("waktu_"+jalur).innerHTML = Harinya + hours + ":"
      + minutes + ":" + seconds + "";

      // Jika hitungan mundur selesai, tulis beberapa teks
      if (distance < 0) {
        clearInterval(x);
        $("#tombol_waktu_"+jalur).remove();
        $("#tombol_"+jalur).show();
      }else {
        $("#tombol_"+jalur).hide();
      }
    }, 1000);
  }
  </script>

</body>
</html>
