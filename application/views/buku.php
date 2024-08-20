<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?php foreach($data_profil as $data_lembaga){ ?><?php echo $data_lembaga->nama_lembaga ?> <?php } ?></title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>/assets/smartbookmaterial/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>/assets/smartbookmaterial/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>/assets/smartbookmaterial/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/smartbookmaterial/img/favicons/favicon.ico">
    <link rel="manifest" href="<?php echo base_url() ?>/assets/smartbookmaterial/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo base_url() ?>/assets/smartbookmaterial/img/favicons/mstile-150x150.png">
    <meta http-equiv="X-Frame-Options" content="allow">
    <meta name="robots" content="noindex" />
     <!--    CSS Boostrap CSS Style-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?php echo base_url() ?>/assets/smartbookmaterial/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary py-2 d-none d-sm-block">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-f text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-pinterest text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram text-900"> </i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/smartbookmaterial/img/gallery/logo-n.png" height="45" alt="logo" /><?php echo $data_lembaga->nama_lembaga ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="<?php echo base_url() ?>beranda/smartbook">BERANDA</a></li>
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                BUKU
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="bukuumum">Buku Umum</a></li>
                </ul>
              </div>
              <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              VIDEO PEMBELAJARAN
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="videopembelajaran">Video Pembelajaran</a></li>
                </ul>
              </div>
            <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="dropdown d-none d-lg-block ">
              <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <section class="pt-6 bg-gradient" style="background:#0d5590;" id="home">



                     

                     
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" style="margin-top:-5.8rem">

        <div class="container">
          <div class="row">
            <div class="card card-span">
              <div class="card-body">
                <div class="row flex-center gx-0">
                  <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="<?php echo base_url() ?>resources/smartbookmaterial/images/Asset-5.png" width="170" alt="..." /></div>
                  <div class="col-lg-8 col-xl-4">
                    <h1 class="text-dark fs-lg-4 fs-xl-5">Semua Kategori Buku Umum</h1>
                  </div>
                  </div>
                <div class="container">
                    <div class="row">
                      <h1 class="text-center mb-5 text-primary"></h1>
                      <?php foreach($buku as $res){ ?>
                      <div class="shadow-sm col-md-3 mb-3 text-center">
                        <div><img class="card-img-top w-50" src="<?php echo base_url() ?>file/filecoverbuku/<?php echo $res->foto_buku ?>" width="25" height="200" alt="courses" />
                          <div class="card-body">
                            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1"><?php echo $res->nama_buku ?></h5>
                            <a class="text-muted fs--1 stretched-link text-decoration-none" href="<?php echo base_url() ?>file/filebuku/<?php echo $res->file_buku ?>" data-toggle="modal" data-target="#modal-filebuku<?php echo $res->id_buku ?>"></a>
                          </div>
                          <div><i>Kategori <strong><?php echo $res->kategori ?></strong></i></div>
                          
                        </div>
                      </div>

                      <div class="modal fade" id="modal-filebuku<?php echo $res->id_buku ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo $res->nama_buku ?> </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                <iframe src="<?php echo base_url() ?>file/filebuku/<?php echo $res->file_buku ?>" width="840" height="680" allow="autoplay"></iframe>
                                </div>
                            </div>
                        </div>
                      </div>
                         
                      <?php } ?>
                
                      <?php echo $this->pagination->create_links(); ?>

                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




    




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-secondary">

        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="<?php echo base_url() ?>assets/smartbookmaterial/img/gallery/footer-logo.png" height="51" alt="" /></a>
              <p class="text-light my-4"> <i class="fas fa-map-marker-alt me-3"></i><span class="text-light"><?php echo $data_lembaga->alamat_lembaga ?>,<?php echo $data_lembaga->kota_lembaga ?> - <?php echo $data_lembaga->provinsi_lembaga ?>  &nbsp;</span><a class="text-light" href="tel:+604-680-9785"></a><br /></p>
              <p class="text-light"> <i class="fas fa-envelope me-3"> </i><a class="text-light" href="mailto:vctung@outlook.com"><?php echo $data_lembaga->email ?></a></p>
              <p class="text-light"> <i class="fas fa-phone-alt me-3"></i><a class="text-light" href="tel:1-800-800-2299"><?php echo $data_lembaga->notelp ?></a></p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0" style="margin-top: -5.8rem;">
        <div class="container bg-primary">
          <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold">All rights Reserved &copy; <?php echo $data_lembaga->nama_lembaga ?>, 2021</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end"> Support 
               &nbsp;by&nbsp;<a class="fw-bold text-900" href="https://exampremium.co.id.com/" target="_blank">Exampremium </a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?php echo base_url() ?>/vendors/smartbookmaterial/@popperjs/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/vendors/smartbookmaterial/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/vendors/smartbookmaterial/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo base_url() ?>/vendors/smartbookmaterial/fontawesome/all.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/smartbookmaterial/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <!--    JavaScripts Boostrap Js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>