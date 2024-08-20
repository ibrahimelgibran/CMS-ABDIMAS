


<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Pemilih Osis</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Pemilih</a></li>
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
                            <div class="col-sm-12 text-right">
                              <!-- <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Siswa</button>end -->  
                              <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Calon</button>
                            </div>
                        
                            <?php if($this->session->flashdata('hapus_berhasil')){ ?>  
                                <div class="col-xl-6 alert alert-danger">  
                                <a href="#" class="close" data-dismiss="alert">&times;</a>  
                                <strong></strong> <?php echo $this->session->flashdata('hapus_berhasil'); ?>  
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

                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Calon Ketua</th>
                                        <th>Calon Wakil</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datacalonosis as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>file/fotocalonosis/<?php echo $res->foto ?>" alt="user image" class="img align-top m-r-15" style="width:60px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_ketua ?></h6>
												</div>
											</div>
                                        </td>

                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>file/fotocalonosiswakil/<?php echo $res->fotowakil ?>" alt="user image" class="img align-top m-r-15" style="width:60px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_wakil ?></h6>
												</div>
											</div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report<?php echo $res->id_calonosis ?>">Visi</button>
                                            <div class="modal fade" id="modal-report<?php echo $res->id_calonosis ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Visi Calon Osis (<?php echo $res->nama_ketua ?> - <?php echo $res->nama_wakil ?>)</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php echo $res->visi ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-misi">Misi</button>
                                            <div class="modal fade" id="modal-misi" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Misi Calon Osis (<?php echo $res->nama_ketua ?> - <?php echo $res->nama_wakil ?>)</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php echo $res->misi ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>index.php/master/hapuscalonosis/<?php echo $res->id_calonosis ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div id="loading" class="overlay"></div>
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
                <h5 class="modal-title">Tambah Calon Ketua OSIS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpancalonosis" method="post" enctype="multipart/form-data" role="form">

                    <div class="row">
                       
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_ketua">Nama Calon Ketua OSIS</label>
                                <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" placeholder="Nama Calon Ketua Osis">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_wakil">Nama Calon Wakil Ketua OSIS</label>
                                <input type="text" class="form-control" id="nama_wakil" name="nama_wakil" placeholder="Nama Calon Wakil Ketua Osis">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control-file" name="foto" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control-file" name="fotowakil" autocomplete="off">
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea id="classic-editor-visi" name="visi" placeholder="Visi " rows="3"></textarea>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea id="classic-editor-misi" name="misi" placeholder="Misi "  rows="3"></textarea>
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