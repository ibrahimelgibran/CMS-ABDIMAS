<!-- [ Main Content ] start --> <?php foreach($data_profil as $data_lembaga){ ?> <?php } ?>
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
                            <li class="breadcrumb-item"><a href="#!">Dashboard Perpustakaan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- support-section start -->
                <div class="row">
                        <div class="col-sm-3">
                        <div class="card social-card bg-c-black">
                                <div class="card-body">
                                    <div class="row align-items-center text-black">
                                        <div class="col-auto">
                                            <i class="fas fa-bookmark f-34 text-c-blue social-icon"></i>
                                        </div>
                                        <div class="col text-black">
                                            <h6 class="m-b-0 text-black">Judul Buku</h6>
                                            <p style="color:black;"><?php echo $this->db->count_all_results('bukuperpustakaan'); ?> Judul Buku</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>

                        <div class="col-sm-3">
                        <div class="card social-card bg-c-black">
                                <div class="card-body">
                                    <div class="row align-items-center text-black">
                                        <div class="col-auto">
                                            <i class="fas fa-book f-34 text-c-green social-icon"></i>
                                        </div>
                                        <div class="col text-black">
                                            <h6 class="m-b-0 text-black">Jumlah Buku</h6>
                                            <p style="color:black;"><?php echo ($totalbuku);?> Buku</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>

                        <div class="col-sm-3">
                        <div class="card social-card bg-c-black">
                                <div class="card-body">
                                    <div class="row align-items-center text-black">
                                        <div class="col-auto">
                                            <i class="fas fa-book-open f-34 text-c-yellow social-icon"></i>
                                        </div>
                                        <div class="col text-black">
                                            <h6 class="m-b-0 text-black">Jumlah Eksemplar</h6>
                                            <p style="color:black;"><?php echo ($totaleksemplar);?> Eksemplar</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                    
                            <div class="card-body">
                                <div class="row align-items-center m-l-0">
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahbuku"><i class="feather icon-plus"></i> Tambah Buku</button>
                                    </div>
                                </div>
                                        
                                <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama Buku</th>
                                                <th>Pengarang</th>
                                                <th>Penerbit</th>
                                                <th>Jumlah Buku</th>
                                                <th>Jumlah Eksemplar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody><?php $no = 1; foreach($data_buku as $res){ ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++ ?></td>
                                                <td>                
                                                    <div class="d-inline-block align-middle">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0"><?php echo $res->judulbuku ?></h6>
                                                            <p class="m-b-0">ISBN : <?php echo $res->isbn ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                    
                                                <td class="text-center"><?php echo $res->pengarang ?></td> 
                                                <td class="text-center"><?php echo $res->penerbit ?></td> 
                                                <td class="text-center"><?php echo $res->jumlahbuku ?></td>
                                                <td class="text-center"><?php echo $res->jumlaheksemplar ?></td>    
                                                <td class="text-center">
                                                    <a href="<?php echo base_url() ?>perpustakaan/dashboard/editbuku/<?php echo $res->id_buku ?>" data-toggle="modal" data-target="#modal-editbuku<?php echo $res->id_buku ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                                    <a href="<?php echo base_url() ?>perpustakaan/dashboard/hapusbuku/<?php echo $res->id_buku ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                                        

                                        <div class="modal fade" id="modal-editbuku<?php echo $res->id_buku ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Data Buku</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url() ?>perpustakaan/dashboard/updatebuku" method="POST">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="floating-label" for="judulbuku">Nama / Judul Buku</label>
                                                                        <input type="text" class="form-control" id="judulbuku" name="judulbuku" value="<?php echo $res->judulbuku ?>" autocomplete="off">
                                                                        <input type="hidden" class="form-control" name="id_buku" value="<?php echo $res->id_buku ?>" >
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="floating-label" for="pengarang">Pengarang</label>
                                                                        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $res->pengarang ?>" autocomplete="off">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="floating-label" for="penerbit">Penerbit</label>
                                                                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $res->penerbit ?>" autocomplete="off">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="floating-label" for="tahunterbit">Tahun Terbit</label>
                                                                        <input type="text" class="form-control" id="tahunterbit" name="tahunterbit" value="<?php echo $res->tahunterbit ?>" autocomplete="off">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="floating-label" for="isbn">ISBN</label>
                                                                        <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $res->isbn ?>" autocomplete="off">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="floating-label" for="jumlahbuku">Jumlah Buku</label>
                                                                        <input type="number" class="form-control" id="jumlahbuku" name="jumlahbuku" value="<?php echo $res->jumlahbuku ?>" autocomplete="off">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="floating-label" for="jumlaheksemplar">Jumlah Eksemplar</label>
                                                                        <input type="number" class="form-control" id="jumlaheksemplar" name="jumlaheksemplar" value="<?php echo $res->jumlaheksemplar ?>" autocomplete="off">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12 text-center">
                                                                    <button class="btn btn-danger">Perbaharui</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal fade" id="modal-play<?php echo $res->id_buku ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><?php echo $res->nama_buku ?> Kelas <?php echo $res->kelas_buku ?></h5>
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
                                    </table>
                                </div>
                            </div>   
                        </div> 
                    </div> 
                </div>
                <!-- support-section end -->
            </div>
            <div class="col-lg-5 col-md-12">
                <!-- page statustic card start -->
                <div class="row"></div>
                <!-- page statustic card end -->
            </div>
           
           
            
            <!-- prject ,team member start -->




            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- Button trigger modal -->









<div class="modal fade" id="modal-tambahbuku" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Input Data Buku Perpustakaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>perpustakaan/dashboard/simpanbuku" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                            <div class="row">
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="nama_buku">Nama Buku</label>
                                        <input type="text" class="form-control" id="judulbuku" name="judulbuku" placeholder="Judul Buku" autocomplete="off">
                                        <input type="hidden" class="form-control" id="diinput" value="<?php $tgl=date('Y-m-d'); echo $tgl; ?>" name="diinput" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="pengarang">Pengarang</label>
                                        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang Buku">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="penerbit">Penerbit</label>
                                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="tahunterbit">Tahun Terbit</label>
                                        <input type="text" class="form-control" id="tahunterbit" name="tahunterbit" placeholder="2020">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="isbn">ISBN</label>
                                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="978-979-107-882-5">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="jumlahbuku">Jumlah Buku</label>
                                        <input type="number" class="form-control" id="jumlahbuku" name="jumlahbuku" placeholder="Jumlah Buku" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="jumlaheksemplar">Jumlah Eksemplar</label>
                                        <input type="number" class="form-control" id="jumlaheksemplar" name="jumlaheksemplar" placeholder="Jumlah Eksemplar" autocomplete="off">
                                    </div>
                                </div>
                              
                                <div class="col-sm-12">
                                    <button class="btn btn-primary text-center" id="pnotify-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

















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