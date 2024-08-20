<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Nilai Rapor Smt 5</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Rapor</a></li>
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
                            <div class="media align-items-center p-0">
                                <div class="text-center">
                                    <a href="#"><i class="feather icon-edit f-36 mr-3" title="XRP"></i></a>
                                </div>
                                <div>
                                    <h4 class="m-0 text-bold">Nilai Rapor</h4>
                                </div>
                            </div>
                        </div>
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
                                        <th>Kelompok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datarapormapelnilai as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                            <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>resources/images/book.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_mapel ?></h6>
													Kode Mapel : <p class="m-b-0" style="color:green;"><?php echo $res->kode_mapel ?></p>
												</div>
											</div>
                                        </td>
                                        <td class="text-center"><?php echo $res->kelompok_mapel?></td>
                                        
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>master/nilaismt5/<?php echo $res->kode_mapel ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-search"></i></a>
                                            <button class="btn btn-icon btn-success btn-sm" data-toggle="modal" data-target="#modal-import"><i class="feather icon-upload"></i></button>
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







    <div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url() ?>import/uploadnilaismt5" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <h5>Masukkan Template anda</h5>
                            </div>
                        
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Icon"></label>
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


