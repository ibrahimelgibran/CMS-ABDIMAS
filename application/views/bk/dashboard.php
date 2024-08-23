<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] sstart -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <!-- support-section start -->
                <div class="row">
                        <div class="col-sm-6">
                            <div class="card social-card bg-c-red">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-user-graduate f-34 text-c-red social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0 text-white">Atlet Abdimas</h6>
                                            <p><?php echo $this->db->count_all_results('pendaftar'); ?> Atlet</p>
                                            <p class="m-b-0">Data yang masuk dalam database Abdimas</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="card social-card bg-c-blue">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie f-34 text-c-blue social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0 text-white">Coach Dan Pegawai</h6>
                                            <p><?php echo $this->db->count_all_results('guru'); ?> PTK</p>
                                            <p class="m-b-0">Data yang masuk dalam database Abdimas</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                </div>
                <!-- support-section end -->
            </div>
            <div class="col-lg-5 col-md-12">
                <!-- page statustic card start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-dark"><?php echo $this->db->count_all_results('kehadiransiswa'); ?></h4>
                                        <h6 class="text-muted m-b-0">Presensi Siswa</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Data Server</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-upload-cloud text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red"><?php echo $this->db->count_all_results('kasus'); ?></h4>
                                        <h6 class="text-muted m-b-0">Jumlah Pelanggaran</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-alert-triangle f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Data Server</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-upload-cloud text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- page statustic card end -->
            </div>
            <?php foreach($data_profil as $data_lembaga){ ?> <?php } ?>
            <div class="col-xl-3 col-lg-12">
                    <div class="card task-board-left">
                        <div class="card-header card-border-c-blue">
                    




                        </div>
                        <div class="card-body">
                          
                            <center><img style="width:150px;150px;" src="<?php echo base_url(); ?>upload/<?php echo $data_lembaga->logo; ?>" class="img-responsive img-thumbnail" /></center>
                                
                           
                        </div>
                      
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12">
                    <div class="card card-border-c-blue">
                        <div class="card-header">
                                <h4><?php echo $data_lembaga->nama_lembaga ?></h4>
                            <!-- <div class="row justify-content-between mt-2">
                                <div class="col-4">
                                <h6 class="mb-0">NPSN / NPSM</h6>
                                    <p class="mb-0 m-t-2"><?php echo $data_lembaga->npsn ?></p>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0">KODE REGISTRASI</h6>
                                    <p class="mb-0 m-t-2">SCHL-019877</p>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0">STATUS SEKOLAH</h6>
                                    <p class="mb-0 m-t-2"><?php echo $data_lembaga->status ?></p>
                                </div>
                            </div> -->
                        </div>

                        <div class="card-body">
                            <div id="trade-cart" class="mb-5 m-t-0">
                                <h6 class="mb-0">ALAMAT</h6>
                                <p class="mb-0 m-t-2"><?php echo $data_lembaga->alamat_lembaga ?></p>
                            </div>

                            <div class="row justify-content-between mt-2">
                                <div class="col-4">
                                    <h6 class="mb-0">NO TELEPON</h6>
                                    <p class="mb-0 m-t-2"><?php echo $data_lembaga->notelp ?></p>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0">E-MAIL</h6>
                                    <p class="mb-0 m-t-2"><?php echo $data_lembaga->email ?></p>
                                </div>

                                <div class="col-4">
                                    <h6 class="mb-0">WEBSITE</h6>
                                    <p class="mb-0 m-t-2"><?php echo $data_lembaga->alamatwebsite ?></p>
                                </div>

                            </div>

                            <div class="row justify-content-between mt-2">
                                <div class="col-4 mb-3 m-t-0">
                                    <h6 class="mb-0"></h6>
                                    <p class="mb-0 m-t-2"></p>
                                </div>
                            </div>

                        

                           


                        </div>
                    </div>




                </div>
            <!-- prject ,team member start -->




            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="text-center">
                        <h3 class="mt-3">Selamat Datang Di <span class="text-primary">Abdimas</span><sup>v<?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?></sup></h3>
                    </div>
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active" data-interval="50000">
                            <img src="<?php echo base_url() ?>assets/images/model/abdimas.png" class="wid-250 my-4" alt="images">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                <p class="f-16"><strong>Abdimas <?php echo $ver->version ?></strong> Terus Dalam Penyempurnaan.</p>
                                    <p class="f-16"> Aplikasi Abdimas - Aplikasi ini dikembangkan untuk menjadikan integrasi data yang tersusun dalam data center agar memudahkan pencarian dan manajemen data.</p>
                                    <div class="row justify-content-center text-left">
                                        <div class="col-md-10">
                                            <h4 class="mb-3">Fitur Yang Tersedia</h4>
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> CMS - Content Manajement Sistem</p>
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Administasian Siswa</p>
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Administasian Sarpras</p>
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Manajemen Rapor</p>                                            
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Pengelolaan Data</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="50000">
                            <img src="<?php echo base_url() ?>assets/images/model/iegcode.png" class="img-fluid mt-0" alt="images">
                        </div>
                        <!-- <div class="carousel-item" data-interval="50000">
                            <img src="assets/images/model/welcome.svg" class="wid-250 my-4" alt="images">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="f-16"><strong>Able pro v8.0</strong> will come with new Structure.</p>
                                    <p class="f-16"> it include  <strong>Gulp / npm support, UI kit, Live customizer improved version, New improved layouts with RTL support, 8+ New Admin Panels</strong></p>
                                </div>
                            </div>
                        </div> -->
                    </div>

                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="transform:rotate(180deg);margin-bottom:-1px">
                    <path class="elementor-shape-fill" fill="#4680ff" opacity="0.33"
                        d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
                    </path>
                    <path class="elementor-shape-fill" fill="#4680ff" opacity="0.66"
                        d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                    <path class="elementor-shape-fill" fill="#4680ff" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                </svg>
                <div class="modal-body text-center bg-primary py-4">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                    </ol>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="ml-2">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="mr-2">Next</span>
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
