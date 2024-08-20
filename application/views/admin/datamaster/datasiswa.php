


<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Atlet</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Atlet</a></li>
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
                <div class="card">
                    <div class="card-header">
                              <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Siswa</button>
                                <!-- <button class="btn btn-sm btn-round has-ripple" style="background-color: #0f52ba; color: #ffffff;" data-toggle="modal" data-target="#modal-import"><i class="feather icon-upload"></i> Import Siswa</button>
                                <a href="<?php echo base_url() ?>master/export" style="background-color: #F1C40F; color: #000000;" class="btn btn-sm btn-round has-ripple" ><i class="fa fa-download"></i> Export Siswa</a>
                                <a href="<?php echo base_url() ?>master/download_templatesiswa" class="btn btn-sm btn-round has-ripple" style="background-color: #02304A; color: #ffffff;"><i class="fa fa-download"></i> Download Template</a> -->
                                <a href="<?php echo base_url() ?>master/hapussemuasiswa" class="btn btn-sm btn-round has-ripple" style="background-color: #FF0000; color: #ffffff;"><i class="fa fa-download"></i>Kosongkan Siswa</a>
                         
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
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat,Tanggal Lahir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datasiswa as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>resources/images/pengguna/nophoto.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_lengkap ?></h6>
													<p class="m-b-0"><?php echo $res->nik ?></p>
												</div>
											</div>
                                        </td>
                                        <td class="text-center"><?php echo $res->nama_kelas ?></td>
                                        <td class="text-center"><?php echo $res->jeniskelamin ?></td>
                                        <td class="text-center"><?php echo $res->tempatlahir ?>, <?php echo $res->tanggallahir ?></td>
                                        
                                        <td class="text-center">

                                            <a href="<?php echo base_url() ?>master/editsiswa/<?php echo $res->id_pendaftar ?>" class="btn btn-icon btn-sm" style="background-color: #01605A; color: #ffffff;"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>index.php/master/hapussiswa/<?php echo $res->id_pendaftar ?>" class="btn btn-icon btn-sm tombol-hapus" style="background-color: #FF0000; color: #ffffff;"><i class="feather icon-trash-2"></i></a>
                                            

                                            
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









<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() ?>import/upload" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <h5>Masukkan Template anda</h5>
                        </div>
                      
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Template-Siswa.xls</label>
                                <input type="file" name="userfile" class="form-control" id="Icon" placeholder="template">
                            </div>
                        </div>
                       
                        <div class="col-sm-12">
                            <button class="btn" style="background-color: #037823; color: #ffffff;" id="pnotify-success">Import Data</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

