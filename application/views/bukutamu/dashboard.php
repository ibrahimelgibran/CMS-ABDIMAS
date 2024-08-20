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
            <!-- <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                    	<label>Navigation</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                    	<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Menu</span></a>
                    	<ul class="pcoded-submenu">
                    		<li><a href="../loginresepsionis">Login Resepsionis</a></li>
                    	</ul>
                    </li>
                </ul>
            </div> -->
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
                      
                    </div>
                </div>
                <!-- [ Main Content ] start -->
                <div class="row">
                    <!-- [ horizontal-layout ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Daftar Buku Tamu</h5>
                            </div>
                            <div class="card-body">
                                


                            <div class="row align-items-center m-l-0">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahtamu"><i class="feather icon-plus"></i>Catat Daftar Tamu</button>
                                </div>
                            </div>
                            <div></div>

                            <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No.HP/EMAIL</th>
                                        <th>Maksud / Tujuan</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datatamu as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td><?php echo format_indo(date($res->tanggal));?> | <?php echo $res->jam ?></td>
                                        <td><?php echo $res->nama ?></td>
                                        <td class="text-left"><?php echo $res->alamat ?></td>
                                        <td class="text-center"><?php echo $res->pekerjaan ?></td>
                                        <td class="text-center"><?php echo $res->tujuan ?></td>
                                       
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
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Kehadiran Tamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>beranda/simpantamu" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama">Nama Tamu</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Tamu" autocomplete="off" required="" oninvalid="this.setCustomValidity('isikan nama anda')" oninput="setCustomValidity('')">
                                <input type="hidden" class="form-control" id="formatTanggal" value="<?php $tgl=date('Y-m-d'); echo $tgl; ?>" name="tanggal" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" autocomplete="off" required="" oninvalid="this.setCustomValidity('alamat harus diisi')" oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="pekerjaan">No. HP  / Email yang bisa di hubungin</label>
                                <input type="text" class="form-control" name="pekerjaan" placeholder="Email / No.HP" autocomplete="off" required="" oninvalid="this.setCustomValidity('pekerjaan perlu diisi')" oninput="setCustomValidity('')">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="tujuan">Maksud Kunjungan</label>
                                <input type="text" class="form-control" name="tujuan" placeholder="Tujuan Berkunjung" autocomplete="off" required="" oninvalid="this.setCustomValidity('tujuan harus diisi')" oninput="setCustomValidity('')">
                            </div>
                        </div>

                  

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="jam">Jam</label>
                                <input type="text" class="form-control" id="jam" name="jam" value="<?php echo  date("H:i:s"); ?>" readonly>
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
    	<!-- <script src="<?php echo base_url() ?>assets/js/menu-setting.min.js"></script> -->


    <!-- prism Js -->
    <script src="<?php echo base_url() ?>assets/js/plugins/prism.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>


    <script src="<?php echo base_url() ?>assets/js/horizontal-menu.js"></script>
    <script>
        $(document).ready(function() {
            $("#pcoded").pcodedmenu({
                themelayout: 'horizontal',
                MenuTrigger: 'hover',
                SubMenuTrigger: 'hover',
            });
        });
    </script>

    <script>
        // DataTable start

        $(document).ready(function() {
            $('#report-table').DataTable();
        
        });

        
        // DataTable end
    </script>



</body>

</html>
