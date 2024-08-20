<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Undangan Orang Tua </h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Undangan Orang Tua </a></li>
                        </ul>
                    </div>
                </div>        
            </div>
        </div>


        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Daftar Undangan Orang Tua  </h5>
                        
                        <?php if($this->session->flashdata('hapus_berhasil')){ ?>  
                            <div class="col-xl-6 alert alert-danger">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('hapus_berhasil'); ?>  
                            </div>  
                          <?php } ?>  

                          <?php if($this->session->flashdata('tambah_berhasil')){ ?>  
                            <div class="col-xl-6 alert alert-info">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('tambah_berhasil'); ?>  
                            </div>  
                          <?php } ?>  

                          <?php if($this->session->flashdata('import_berhasil')){ ?>  
                            <div class="col-xl-6 alert alert-info">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong>Proses Selesai </strong> <?php echo $this->session->flashdata('import_berhasil'); ?>  
                            </div>  
                          <?php } ?>  
                    </div>

                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="fas fa-plus-circle"></i> Tambah</button>
                            </div>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nomor Surat</th>
                                        <th>Ruang Pertemuan</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($dataundanganortu as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>resources/images/pengguna/default.png" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_lengkap ?></h6>
													<p class="m-b-0"></p> 
												</div>
											</div>
                                        </td>
                                        <td class="text-center"><?php echo $res->nosurat ?></td>
										<td class="text-center"><?php echo $res->ruang ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>bk/dashboard/print_undanganortu/<?php echo $res->id_siswa ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-printer"></i></a>
                                            <a href="<?php echo base_url() ?>bk/dashboard/hapusundanganortu/<?php echo $res->id_undanganortu ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>



                                    <?php } ?>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>





<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Undangan Orang Tua</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>bk/dashboard/simpanundanganortu" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">




                        <div class="col-sm-8 text-black mb-3">
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
                                        <td class="text-center"><input type="checkbox" id="id_siswa" name="id_siswa" value="<?php echo $key->id_pendaftar?>"></td>
                                        <td><?php echo $key->nama_lengkap ?> </td>
                                    </tr><?php } ?>
                                </tbody>
                            </table>

                            </div>
                        </div>


                        
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="nosurat">Nomor Surat</label>
                                <input type="text" name="nosurat" id="nosurat" class="form-control" placeholder="Nomor Surat">
                            </div>

                            <div class="form-group">
                                <label class="floating-label" for="tanggal">Tanggal Undangan</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="tanggal">
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




<!-- [ Main Content ] end -->
