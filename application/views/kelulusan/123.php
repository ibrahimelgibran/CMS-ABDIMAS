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
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>pengguna/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>pengguna/dashboard">Dashboard Kelulusan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->



        
    

            <?php foreach($data_pendaftar as $data_lengkap){ ?>
            <div class="col-xl-12 col-md-4"> 
                <div class="card client-map">
                    <div class="card-body">
                        <div class="client-detail">

                          

                            <div class="client-profile">
                                <img src="<?php echo base_url() ?>resources/images/pengguna/nophoto.jpg" alt="">
                            </div>
                            <div class="client-contain">
                                <h5><?php echo $data_lengkap->nama_lengkap ?></h5>
                                <a href="#!" class="text-muted"><h6>Nomor Absen : (<?php echo $data_lengkap->siswa_nomorabsen ?>)</h6></a>

                                

                            </div>
                        </div>
                        <div class="">
                            <div class="client-card-box">
                                <div class="row">
                                    <div class="col-6 text-center client-border p-10">
                                        <p class="text-muted m-0 font-weight-bolder"></p>
                                    </div>
                                    <div class="col-6 text-center p-10">
                                        <p class="text-muted m-0 font-weight-bolder"></p>
                                    </div>
                                </div>
                                <div class="col-sm-12 client-border-card p-t-10">
                                    <p>Data Kelulusan</p>

                                    
                                    <div class="table-responsive">
                                        <table id="report-table" class="table table-bordered table-striped mb-0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Status Kelulusan</th>
                                                    <th>Nilai Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($data_kelulusan as $data_kelulusansiswa){ ?>
                                                <tr>
                                                    <td class="text-center"><strong><?php echo $data_kelulusansiswa->statuslulus ?></strong></td>
                                                    <td class="text-center"><strong style="color:blue;"><?php echo $data_kelulusansiswa->nilai ?></strong></td> 
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>






                                </div>
                                <div id="client-map-3" style="height:70px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- prject ,team member start -->



<?php } ?>
                 
              
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