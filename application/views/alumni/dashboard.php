<!DOCTYPE html>
<html lang="en">

<head><?php foreach($data_profil as $res){ ?> <?php } ?>
    <title><?php echo $res->nama_lembaga; ?></title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" type="image/x-icon">

    <!-- prism css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins/prism-coy.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins/dataTables.bootstrap4.min.css">
    


</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar theme-horizontal menu-light brand-blue">
        <div class="navbar-wrapper">
            <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                    	<label>Navigation</label>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg header-blue navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="../beranda" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img style="width:30px;30px;" src="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" alt="" class="logo">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a><?php echo $res->nama_lembaga; ?>
        </div>
        
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Halaman</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Rekam Jejak Siswa</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Main Content ] start -->
                <div class="row">
                    <!-- [ horizontal-layout ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5><marquee><?php echo $res->pesanberjalan ?></marquee></h5>
                            </div>
                            <div class="card-body">
                                


                            <div class="row align-items-center m-l-0">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahtamu"><i class="feather icon-plus"></i>ISI DATA</button>
                                </div>
                            </div>
                            <div>Informasi Alumni</div>

                            <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tahun Masuk</th>
                                        <th>Tahun Lulus</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($dataalumni as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td><?php echo $res->nama_alumni ?></td>
                                        <td class="text-center"><?php echo $res->jk ?></td>
                                        <td class="text-center"><?php echo $res->thn_masuk ?></td>
                                        <td class="text-center"><?php echo $res->thn_lulus ?></td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- [ horizontal-layout ] end -->
                </div>
                <!-- [ Main Content ] end -->
                <!-- [ Main Content ] start -->
            
                <!-- [ Main Content ] end -->
            </div>
        </div>



    <div class="modal fade" id="modal-tambahtamu" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
           
            <div class="modal-body">
                <form action="<?php echo base_url() ?>beranda/simpanalumni" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">

                        <div class="col-sm-12">
                        <span class="badge badge-danger">Identitas Diri</span><hr>
                        </div>
                    
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="nama_alumni">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_alumni" placeholder="Nama Lengkap" autocomplete="off" required="" oninvalid="this.setCustomValidity('isikan Nama Lengkap anda')" oninput="setCustomValidity(''); this.value = this.value.toUpperCase()">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="jk">Jenis Kelamin</label>
                                <select class="form-control" id="jk" name="jk">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="nisn">NISN</label>
                                <input type="number" class="form-control" name="nisn" placeholder="NISN" autocomplete="off" required="" oninvalid="this.setCustomValidity('isikan NISN anda')" oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="temapatlahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="temapatlahir" autocomplete="off" required="" oninvalid="this.setCustomValidity('isikan Tempat Lahir')" oninput="setCustomValidity(''); this.value = this.value.toUpperCase()">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" autocomplete="off" required="" oninvalid="this.setCustomValidity('isikan Tanggal Lahir anda')" oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="agama">Agama</label>
                                <select class="form-control" id="agama" name="agama">
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDDHA">BUDDHA</option>
                                    <option value="KONGHUCU">KONGHUCU</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="thn_masuk">Tahun Masuk</label>
                                <input type="number" class="form-control" name="thn_masuk" placeholder="Tahun Masuk" autocomplete="off" required="" oninvalid="this.setCustomValidity('isikan Tahun Masuk')" oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="thn_lulus">Tahun Lulus</label>
                                <input type="number" class="form-control" name="thn_lulus" placeholder="Tahun Lulus" autocomplete="off" required="" oninvalid="this.setCustomValidity('isikan Tahun Lulus')" oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <div class="col-sm-12">
                        <span class="badge badge-danger">Bila Bekerja</span><hr>
                        </div><hr>
                      
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="namaperusahaan">Nama Perusahaan</label>
                                <input type="text" class="form-control" name="namaperusahaan" placeholder="PT.NUSANTARA">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="bidangusaha">Bidang Usaha</label>
                                <input type="text" class="form-control" name="bidangusaha" placeholder="Manufaktur">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="pekerjaan">Pekerjaan/Jabatan</label>
                                <input type="text" class="form-control" name="pekerjaan" placeholder="Staff">
                            </div>
                        </div>

                        

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="penghasilan">Penghasilan</label>
                                <input type="number" class="form-control" name="penghasilan" placeholder="3000000" autocomplete="off" required="" oninvalid="this.setCustomValidity('isikan Penghasilan')" oninput="setCustomValidity(''); this.value = this.value.toUpperCase()">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="ikatankerja">Ikatan Kerja</label>
                                <select class="form-control" id="ikatankerja" name="ikatankerja">
                                    <option value=""></option>
                                    <option value="TETAP">TETAP</option>
                                    <option value="KONTRAK">KONTRAK</option>
                                    <option value="FREELANCE">FREELANCE</option>
                                    <option value="PROFESIONAL">PROFESIONAL</option>
                                    <option value="PEJABAT PUBLIC">PEJABAT PUBLIC</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="kompetensi">Apakah Sesuai Kompetensi</label>
                                <select class="form-control" id="kompetensi" name="kompetensi">
                                    <option value=""></option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>
                        </div>
                            
                        <div class="col-sm-12">
                        <span class="badge badge-danger">Bila Melanjutkan Ke Perguruan Tinggi</span><hr>
                        </div><hr>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="perguruantinggi">Nama Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="perguruantinggi" placeholder="ITB">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="programstudi">Program Studi</label>
                                <input type="text" class="form-control" name="programstudi"  placeholder="Manajemen">
                            </div>
                        </div>

                        <div class="col-sm-12">
                        <span class="badge badge-danger">Keterangan</span>
                        </div><hr>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="tanggalmasuk">Tanggal Masuk Kerja/Perguruan Tinggi</label>
                                <input type="date" class="form-control" name="tanggalmasuk" placeholder="01/01/2022">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <button class="btn btn-primary" id="pnotify-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




    </div>
    <!-- [ Main Content ] end -->

        <!-- Warning Section start -->
        <!-- Older IE warning message -->
        <!--[if lt IE 11]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade
                   <br/>to any of the following web browsers to access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="assets/images/browser/chrome.png" alt="Chrome">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="assets/images/browser/firefox.png" alt="Firefox">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="assets/images/browser/opera.png" alt="Opera">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="assets/images/browser/safari.png" alt="Safari">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="assets/images/browser/ie.png" alt="">
                                <div>IE (11 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
        <!-- Warning Section Ends -->

        <!-- Required Js -->
        <script src="<?php echo base_url() ?>assets/js/vendor-all.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/ripple.js"></script>
        <script src="<?php echo base_url() ?>assets/js/pcoded.min.js"></script>


    <!-- prism Js -->
    <script src="<?php echo base_url() ?>assets/js/plugins/prism.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables.responsive.min.js"></script>


           <script>
            // DataTable start

            $(document).ready(function() {
                $('#report-table').DataTable();
           
            });
            // DataTable end
        </script>



</body>

</html>
