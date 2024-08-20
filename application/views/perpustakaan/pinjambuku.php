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
                        <div class="col-sm-12">
                        <div class="card social-card bg-c-black">
                                <div class="card-body">
                                    <div class="row align-items-center text-black">
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie f-34 text-c-blue social-icon"></i>
                                        </div>
                                        <div class="col text-black">
                                            <h6 class="m-b-0 text-black">Status Peminjaman Buku</h6>
                                            <p style="color:black;"><?php echo $this->db->count_all_results('sarpras'); ?> Buku Dipinjamkan</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                </div>



                <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> 
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahbuku"><i class="feather icon-plus"></i> Transaksi</button>
                        </div>  
                    </div>
                    
                        <div class="card-body">
                            
                                    
                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Peminjam</th>
                                            <th>Judul Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($data_pinjambuku as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td><?php echo $res->nama_lengkap ?></td>    
                                            <td>                
                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0"><?php echo $res->judulbuku ?></h6>
                                                        <p class="m-b-0">Lama Pinjaman : <?php echo $res->durasi ?></p>
                                                    </div>
                                                </div>
                                            </td> 
                                           
                                            <td class="text-center">
                                               
                                                <a href="<?php echo base_url() ?>perpustakaan/dashboard/hapustransaksipeminjaman/<?php echo $res->id_pinjaman ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                                    

                                    <div class="modal fade" id="modal-report2<?php echo $res->id_pinjaman ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Buku</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatebuku" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="id_bukupinjaman">Nama / Judul Buku</label>
                                                                    <input type="text" class="form-control" id="id_bukupinjaman" name="id_bukupinjaman" value="<?php echo $res->id_bukupinjaman ?>" autocomplete="off">
                                                                    <input type="hidden" class="form-control" name="id_pinjaman" value="<?php echo $res->id_pinjaman ?>" >
                                                                </div>
                                                            </div>

                                                          

                                                            <div class="col-sm-12">
                                                                <button class="btn btn-info">Perbaharui</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                
                                    <?php } ?>
                                </table>
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
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Transaksi Peminjaman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>perpustakaan/dashboard/simpanpinjaman" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                            <div class="row">
                            
                                <div class="col-sm-6 text-black mb-2">
                                    <div class="table-responsive">
                                    <table id="report-table3" class="table table-bordered table-striped mb-0" style="width:100%">
                                        <thead>
                                            <tr class="btn-primary">
                                                <th style="width: 4S%;" class="text-center"></th>
                                                <th style="width: 25%;">Nama Siswa</th>
                                            </tr>
                                        </thead>

                                        <tbody><?php $no = 1; foreach($datasiswa as $key){ ?>
                                            <tr class="text-black">
                                                <td class="text-center"><input type="checkbox" id="id_peminjam" name="id_peminjam" value="<?php echo $key->id_pendaftar?>"></td>
                                                <td><?php echo $key->nama_lengkap ?> </td>
                                            </tr><?php } ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="col-sm-6 text-black mb-2">
                                    <table id="report-table2" class="table table-bordered table-striped mb-0" style="width:100%">
                                        <thead>
                                            <tr class="btn-primary">
                                                <th style="width: 4S%;" class="text-center"></th>
                                                <th style="width: 25%;">Judul Buku</th>
                                            </tr>
                                        </thead>

                                        <tbody><?php $no = 1; foreach($data_buku as $key){ ?>
                                            <tr class="text-black">
                                                <td class="text-center"><input type="checkbox" id="id_bukupinjaman" name="id_bukupinjaman" value="<?php echo $key->id_buku?>"></td>
                                                <td><?php echo $key->judulbuku ?> </td>
                                            </tr><?php } ?>
                                        </tbody>
                                    </table>
                                  
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















