<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Wali Kelas</a></li>
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
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                
                                <h2 class="m-0"><?php echo $this->db->count_all_results('pendaftar'); ?> </h2>
                                <span class="text-c-blue">Jumlah Siswa Aktif</span>
                                <p class="mb-3 mt-3">Total siswa yang masuk ke database.</p>
                            </div>
                            
                            <div id="support-chart"></div>
                            <div class="card-footer bg-primary text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white"><?php echo $this->db->where(['jeniskelamin'=>"L"])->from("pendaftar")->count_all_results();?></h4>
                                        <span>Laki-Laki</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white"><?php echo $this->db->where(['jeniskelamin'=>"P"])->from("pendaftar")->count_all_results();?></h4>
                                        <span>Perempuan</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white"><?php echo $this->db->count_all_results('pendaftar'); ?></h4>
                                        <span>Total</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0"><?php echo $this->db->count_all_results('guru'); ?></h2>
                                <span class="text-c-green">Jumlah Guru Aktif</span>
                                <p class="mb-3 mt-3">Total guru yang masuk ke database.</p>
                            </div>
                            <div id="support-chart1"></div>
                            <div class="card-footer bg-success text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white"><?php echo $this->db->where(['jeniskelamin'=>"L"])->from("guru")->count_all_results();?></h4>
                                        <span>Laki-Laki</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white"><?php echo $this->db->where(['jeniskelamin'=>"P"])->from("guru")->count_all_results();?></h4>
                                        <span>Perempuan</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white"><?php echo $this->db->count_all_results('guru'); ?></h4>
                                        <span>Total</span>
                                    </div>
                                </div>
                            </div>
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
                                        <h4 class="text-dark"><?php echo $this->db->count_all_results('kehadiranguru'); ?></h4>
                                        <h6 class="text-muted m-b-0">Presensi Guru</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-dark">
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
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue"><?php echo $this->db->count_all_results('rapormapel'); ?></h4>
                                        <h6 class="text-muted m-b-0">Mata Pelajaran</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-clipboard f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
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
            <?php foreach($data_walikelas as $walikelas){ ?> <?php } ?>
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
                            <div class="row justify-content-between mt-2">
                                <div class="col-4">
                                <h6 class="mb-0">Nama</h6>
                                    <p class="mb-0 m-t-2"><?php echo $walikelas->nama_guru ?></p>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0">Wali Kelas</h6>
                                    <p class="mb-0 m-t-2"><?php echo $walikelas->kelas ?></p>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-0">Lihat Rombel</h6>
                                    <p class="mb-0 m-t-2"><a href="<?php echo base_url() ?>walikelas/dashboard/datarombel/<?php echo $walikelas->kelas ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-search"></i></a></p>
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
                        <h3 class="mt-3">Selamat Datang Di <span class="text-primary">Pegasus Yogyakarta</span><sup>v<?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?></sup></h3>
                    </div>
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active" data-interval="50000">
                            <img src="<?php echo base_url() ?>assets/images/model/pegasus.jpg" class="wid-250 my-4" alt="images">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                <p class="f-16"><strong>Pegasus Yogyakarta <?php echo $ver->version ?></strong> Terus Dalam Penyempurnaan.</p>
                                    <p class="f-16"> Aplikasi Pegasus Yogyakarta - Aplikasi ini dikembangkan untuk menjadikan integrasi data yang tersusun dalam data center agar memudahkan pencarian dan manajemen data.</p>
                                    <div class="row justify-content-center text-left">
                                        <div class="col-md-10">
                                            <h4 class="mb-3">Fitur Yang Tersedia</h4>
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> CMS - Content Manajement Sistem</p>
                                            <!--<p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Administasian Siswa</p>
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Administasian Sarpras</p>
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Manajemen Rapor</p>                                            
                                            <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i> Pengelolaan Data</p> -->
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


