<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Jalur PPDB</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Jalur PPDB</a></li>
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
                        <h5>Daftar Jalur PPDB </h5>
                        
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
                               <!-- <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahjalurppdb"><i class="feather icon-plus"></i> Tambah Jalur</button> -->
                            </div>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Jalur</th>
                                        <th>Kode Jalur</th>
                                        <th>Status Pendaftaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datajalurppdb as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $res->nama_jalur ?></td>
                                        <td class="text-center"><?php echo $res->kode_jalur ?></td>
                                        <td class="text-center"><?php echo $res->status_jalur ?></td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#modal-editjalurppdb<?php echo $res->id_jalur ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <!-- <a href="<?php echo base_url() ?>master/hapusjalurppdb/<?php echo $res->id_jalur ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a> -->
                                        </td>
                                    </tr>



                                    <div class="modal fade" id="modal-editjalurppdb<?php echo $res->id_jalur ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Jalur</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatejalurppdb" method="POST">
                                                        <div class="row">

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="nama_jalur">Nama Jalur</label>
                                                                    <input type="text" class="form-control" name="nama_jalur" value="<?php echo $res->nama_jalur ?>">
                                                                    <input type="hidden" class="form-control" name="id_jalur" value="<?php echo $res->id_jalur ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="kode_jalur">Kode Jalur</label>
                                                                    <input type="text" class="form-control" name="kode_jalur" value="<?php echo $res->kode_jalur ?>" placeholder="Tanpa Spasi">
                                                                </div>
                                                            </div>



                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                <div class="onoffswitch">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" name="status_jalur" class="custom-control-input"  id="<?php echo $res->kode_jalur ?>" checked>
                                                                        <label class="custom-control-label" for="<?php echo $res->kode_jalur ?>">Status Pendaftaran</label>
                                                                    </div>
                                                                    </div>
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





<div class="modal fade" id="modal-tambahjalurppdb" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jalur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpanjalurppdb" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="nama_jalur">Nama Jalur</label>
                                <input type="text" class="form-control" name="nama_jalur" placeholder="Jalur Prestasi" oninput="this.value = this.value.toUpperCase()" autocomplete="off">
                                <input type="hidden" class="form-control" name="status_jalur" value="on">
                            </div>
                        </div>

                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="kode_jalur">Kode Jalur</label>
                                <input type="text" class="form-control" name="kode_jalur" placeholder="Tanpa Spasi"" oninput="this.value = this.value.toUpperCase()" autocomplete="off">
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
