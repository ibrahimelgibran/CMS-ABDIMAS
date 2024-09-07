<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                                <div class="card">
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <!-- <p class="text-dark m-b-0"><img src="<?php echo base_url() ?>/assets/images/logokelulusan.png" alt="Logo For Kids"> <span><strong>Layanan Manjemen Sekolah Berbasis Digital Versi <?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?></strong></span></p> -->
                                                <p class="text-dark m-b-0"><span><strong>Selamat Data di Dashboard Pegasus Yogyakarta </strong></span></p> 
                                                <!-- <?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                        <!-- [ Main Informasi ] start -->
                        <div class="row">
                        <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4 text-right">
                                                <i class="feather icon-layers f-28"></i>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="text-dark m-b-0">Tingkat</h6>
                                                <h4 class="text-dark"><?php echo $this->db->count_all_results('tingkat');?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="background-color: #FF7706;">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">Informasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4 text-right">
                                                <i class="fas fa-landmark f-28"></i>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="text-dark m-b-0">Jumlah Kelas</h6>
                                                <h4 class="text-dark"><?php echo $this->db->count_all_results('kelas');?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="background-color: #113B9C;">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">Informasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4 text-right">
                                                <i class="fas fa-user-graduate f-28"></i>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="text-dark m-b-0">Jumlah Atlet</h6>
                                                <h4 class="text-dark"><?php echo $this->db->count_all_results('pendaftar');?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="background-color: #119C2A;">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">Informasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4 text-right">
                                                <i class="fas fa-graduation-cap f-28"></i>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="text-dark m-b-0">Jumlah Coach</h6>
                                                <h4 class="text-dark"><?php echo $this->db->count_all_results('guru');?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="background-color: #147CA9;">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">Informasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Informasi-->
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <?php foreach($data_profil as $data_lembaga){ ?> <?php } ?>
            <div class="col-xl-8 col-lg-12">
                <div class="card overflow-hidden">
                    <div class="card-body pb-0" style="background-color: #0f52ba; color: #ffffff;">
                        <div class="row text-white">
                            <div class="col-auto">
                                <h6 class="m-b-5 text-white"><i class="fas fa-building"></i> <?php echo $data_lembaga->nama_lembaga ?></h6>
                            </div>
                        </div>
                        <div id="sec-ecommerce-chart-line"></div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div id="sec-ecommerce-chart-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3">
                                <h6>NPSN </h6>
                                <h6>Status </h6>
                                <h6>Alamat Lengkap </h6>
                                <h6>Kabupaten/Kota </h6>
                                <h6>Provinsi </h6>
                                <h6>Kepala Sekolah </h6>
                                <h6>NIP </h6>
                                <h6>Nomor Telp </h6>
                                <h6>Alamat Website </h6>
                                <h6>E-mail </h6>
                            </div>
                            <div class="col-md-0">
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                            </div>
                            <div class="col-8">
                                <h6><?php echo $data_lembaga->npsn ?></h6>
                                <h6><?php echo $data_lembaga->status ?></h6>
                                <h6><?php echo $data_lembaga->alamat_lembaga ?></h6>
                                <h6><?php echo $data_lembaga->kota_lembaga ?></h6>
                                <h6><?php echo $data_lembaga->provinsi_lembaga ?></h6>
                                <h6 style="color:#E3490F;"><?php echo $data_lembaga->nama_kepsek ?></h6>
                                <h6 style="color:#E3490F;"><?php echo $data_lembaga->nip_kepsek ?></h6>
                                <h6><?php echo $data_lembaga->notelp ?></h6>
                                <h6 style="color:#0C551D;"><?php echo $data_lembaga->alamatwebsite ?></h6>
                                <h6 style="color:#A90040;"><?php echo $data_lembaga->email ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    

            <div class="col-xl-4 col-lg-12">
                <div class="card overflow-hidden">
                    <div class="card-body pb-0" style="background-color: #CC1F3A; color: #ffffff;">
                        <div class="row text-white">
                            <div class="col-auto">
                                <h4 class="m-b-5 text-white"><i class="fas fa-align-justify f-28"></i> Informasi</h4>
                            </div>
                        </div>
                        <div id="sec-ecommerce-chart-line"></div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div id="sec-ecommerce-chart-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-5">
                                <h6>Versi Aplikasi </h6>
                                <h6>Versi Database </h6>
                                <h6>Versi php </h6>
                            </div>
                            <div class="col-md-0">
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                            </div>
                            <div class="col-6">
                                <h6><?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?></h6>
                                <h6><?php foreach($setting as $ver){ ?><?php echo $ver->db ?> <?php } ?></h6>
                                <h6><?php foreach($setting as $ver){ ?><?php echo $ver->php ?> <?php } ?></h6>
                            </div>
                        </div>
                    
                        <dl>
                        <!--<dt>Manual Book</dt>-->
                        <!--<dd><a href="https://exampremium.my.id/Manual-Book-SMARTSCHOOL.pdf" target="_blank">Link Panduan</a></dd>-->
                        <!--<dt>Demo Smartschool</dt>-->
                        <!--<dd><a href="https://demosmartschool.exampremium.my.id" target="_blank">Link Akun Demo</a></dd>-->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn" style="background-color: #074954; color: #ffffff;" data-toggle="modal" data-target="#exampleModal">
                        Informasi Update
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Apa Saja Yang Baru ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><img src="<?php echo base_url() ?>/assets/images/pegasus.jpg" style="height:100px" alt="Logo For Kids">
                                        <ol>
                                            <li>Penambahan Fitur Tema</li>
                                            <li>Penambahan Fitur Banner</li>
                                            <li>Penambahan Fitur Aktivasi Menu</li>
                                            <li>Penambahan Fitur SPP Dan Rekam Pembayaran</li>
                                            <li>Perbaikan Dan Penambahan Fitur Pada Sarpras</li>
                                            <li>Perbaikan Dan Penambahan Fitur Pada Coach</li>
                                            <li>Perbaikan Dan Penambahan Fitur Pada Atlet</li>
                                            <li>Perbaikan Data Kelas Yang Lebih Terstruktur</li>
                                            <li>Pemilihan Kelas Siswa Berdasarkan Kode Kelas Tingkat</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>              
        </div>



         <div class="row">
            <!-- <div class="col-xl-6 col-lg-12">
                <div class="card overflow-hidden">
                    <div class="card-body pb-0" style="background-color: #FFC300; color: #000000;">
                        <div class="row text-white">
                            <div class="col-auto">
                                <h6 class="m-b-5 text-dark"><i class="fas fa-gopuram"></i> Sarana Prasarana</h6>
                            </div>
                        </div>
                        <div id="sec-ecommerce-chart-line"></div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div id="sec-ecommerce-chart-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="table-responsive">
                                <table id="tablesarpras" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr  class="text-center">
                                            <th>No</th>
                                            <th>Nama Sarpras</th>
                                            <th>Tahun</th>
                                            <th>Jumlah</th>
                                            <th>Sumber</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach($datasarpras as $ress){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td><strong><?php echo $ress->nama_sarpras ?></strong></td>
                                            <td class="text-center"><?php echo $ress->tahun ?></td>
                                            <td class="text-center"><?php echo $ress->jumlah ?></td>
                                            <td class="text-center"><?php echo $ress->sumberdana ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

                    

            <div class="col-xl-6 col-lg-12">
                <div class="card overflow-hidden">
                    <div class="card-body pb-0" style="background-color: #581845; color: #000000;">
                        <div class="row text-white">
                            <div class="col-auto">
                                <h6 class="m-b-5 text-white"><i class="fas fa-book-reader"></i> Daftar Tamu</h6>
                            </div>
                        </div>
                        <div id="sec-ecommerce-chart-line"></div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div id="sec-ecommerce-chart-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr  class="text-center">
                                            <th>No</th>
                                            <th>Nama Tamu</th>
                                            <th>Pekerjaan</th>
                                            <th>Tujuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach($datatamu as $ress){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td><strong><?php echo $ress->nama ?></strong></td>
                                            <td class="text-center"><?php echo $ress->pekerjaan ?></td>
                                            <td class="text-center"><?php echo $ress->tujuan ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                        
         </div>







                  
        </div>
                </div>



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









