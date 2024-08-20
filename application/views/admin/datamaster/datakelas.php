<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Kelas</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Kelas</a></li>
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
                        <button class="btn btn-sm btn-round has-ripple" style="background-color: #0f52ba; color: #ffffff;" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Kelas</button>
                        <a href="<?php echo base_url() ?>master/hapussemuakelas" class="btn btn-sm btn-round has-ripple" style="background-color: #FF0000; color: #ffffff;"><i class="fa fa-download"></i>Kosongkan Kelas</a>
                        
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
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tingkat</th>
                                        <th>Kode Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datakelas as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>resources/images/pengguna/kelas.png" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_kelas ?></h6>
													<p class="m-b-0"></p> 
												</div>
											</div>
                                        </td>
                                        <td class="text-center"><?php echo $res->tingkat_kelas ?></td>
                                        <td class="text-center"><?php echo $res->kode_kelas ?></td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#modal-editkelas<?php echo $res->id_kelas ?>" class="btn btn-icon btn-sm" style="background-color: #01605A; color: #ffffff;"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>master/hapuskelas/<?php echo $res->id_kelas ?>" class="btn btn-icon btn-sm tombol-hapus" style="background-color: #FF0000; color: #ffffff;"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>



                                    <div class="modal fade" id="modal-editkelas<?php echo $res->id_kelas ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Kelas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatekelas" method="POST">
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_kelas">Nama Kelas</label>
                                                                    <input type="text" class="form-control" name="nama_kelas" value="<?php echo $res->nama_kelas ?>">
                                                                    <input type="hidden" class="form-control" name="id_kelas" value="<?php echo $res->id_kelas ?>" placeholder="XII-A">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="tingkat_kelas">Tingkat Kelas</label>
                                                                    <select class="form-control" id="tingkat_kelas" name="tingkat_kelas">
                                                                        <?php foreach ($datatingkat as $key): ?>
                                                                        <option value="<?php echo $key->nama_tingkat?>"><?php echo $key->nama_tingkat ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <button class="btn" style="background-color: #037823; color: #ffffff;">Perbaharui</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
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
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpankelas" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_kelas">Nama Kelas</label>
                                <input type="hidden" class="form-control" name="kode_kelas" value="<?php echo random_string('alnum',15); ?>" autocomplete="off" readonly>
                                <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas" oninput="this.value = this.value.toUpperCase()" autocomplete="off">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="tingkat_kelas">Tingkat Kelas</label>
                                <select class="form-control" id="tingkat_kelas" name="tingkat_kelas">
                                    <?php foreach ($datatingkat as $key): ?>
                                    <option value="<?php echo $key->nama_tingkat?>"><?php echo $key->nama_tingkat ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <button class="btn" style="background-color: #037823; color: #ffffff;" id="pnotify-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- [ Main Content ] end -->