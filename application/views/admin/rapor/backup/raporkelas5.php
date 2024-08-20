<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Rapor</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Rapor Semester 2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-3 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-0">
                            <label class="floating-label" for="filterserch"><i class="feather icon-search"></i> Search here</label>
                            <input type="text" class="form-control" id="filterserch">
                            
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-xl-9 col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Kelas</th>
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
												</div>
											</div>
                                    </td>
                                    <td class="text-center">
                                    <a href="<?php echo base_url() ?>master/nilairapor5/<?php echo $res->nama_kelas ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-search"></i></a>  
                                    </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
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
                                <input type="file" name="userfile" class="form-control" id="Icon" placeholder="sdf">
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

