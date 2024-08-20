<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Siswa</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Siswa</a></li>
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
                                        <th>Tanggal Lahir</th>
                                        <th>Tempat Lahir</th>
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
                                        
                                        <td class="text-center"><?php echo $res->siswa_kelas ?></td>
                                        <td class="text-center"><?php echo $res->jeniskelamin ?></td>
                                        <td class="text-center"><?php echo $res->tanggallahir ?></td>
                                        <td class="text-center"><?php echo $res->tempatlahir ?></td>
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









<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
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
                            <button class="btn btn-info" id="pnotify-success">Impor Data</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

