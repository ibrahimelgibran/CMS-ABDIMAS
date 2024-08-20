<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Wali Kelas</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Wali Kelas</a></li>
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
                        <h5>Daftar Wali Kelas </h5>
                        
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
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahwalikelas"><i class="feather icon-plus"></i> Tambah Wali Kelas</button>
                                <a href="<?php echo base_url() ?>master/hapussemuawalikelas" class="btn btn-danger btn-sm btn-round has-ripple" ><i class="fa fa-download"></i>Kosongkan Wali Kelas</a>
                            </div>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datawalikelas as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>

                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>resources/images/pengguna/walikelas.png" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_guru ?></h6>
													<p class="m-b-0">Wali Kelas - <?php echo $res->kelas ?></p> 
												</div>
											</div>
                                        </td>

                                        <td class="text-center"><?php echo $res->userwali ?></td>
                                        <td class="text-center"><?php echo $res->passwali ?></td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#modal-editwalikelas<?php echo $res->id_walikelas ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>master/hapuswalikelas/<?php echo $res->id_walikelas ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>



                                    <div class="modal fade" id="modal-editwalikelas<?php echo $res->id_walikelas ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Wali Kelas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatewalikelas" method="POST">
                                                        <div class="row">




                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="userwali">Username</label>
                                                                    <input type="text" class="form-control" name="userwali" value="<?php echo $res->userwali ?>">
                                                                    <input type="hidden" class="form-control" name="id_walikelas" value="<?php echo $res->id_walikelas ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="passwali">Password</label>
                                                                    <input type="text" class="form-control" name="passwali" value="<?php echo $res->passwali ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="kelas">Kelas</label>
                                                                    <select class="form-control" id="kelas" name="kelas">
                                                                        <?php foreach ($datakelas as $key): ?>
                                                                        <option value="<?php echo $key->nama_kelas?>"><?php echo $key->nama_kelas ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
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





<div class="modal fade" id="modal-tambahwalikelas" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Wali Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpanwalikelas" method="post" enctype="multipart/form-data" role="form">

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_walikelas">Nama Wali Kelas</label>
                                <select class="form-control" id="nama_walikelas" name="nama_walikelas">
                                    <?php foreach ($dataguru as $key): ?>
                                    <option value="<?php echo $key->nip?>"><?php echo $key->nama_guru ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="kelas">Kelas</label>
                                <select class="form-control" id="kelas" name="kelas">
                                    <?php foreach ($datakelas as $key): ?>
                                    <option value="<?php echo $key->nama_kelas?>"><?php echo $key->nama_kelas ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="userwali">Username</label>
                                <input type="text" class="form-control" id="userwali" name="userwali" placeholder="Username">
                                <input type="hidden" name="role" class="form-control" value="walikelas" autocomplete="off"  required >
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="passwali">Password</label>
                                <input type="text" class="form-control" id="passwali" name="passwali" placeholder="Password">
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