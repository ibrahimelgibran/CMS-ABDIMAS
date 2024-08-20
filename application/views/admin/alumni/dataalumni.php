


<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Alumni</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Alumni</a></li>
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
                                <a href="<?php echo base_url() ?>master/exportdatalumni" class="btn btn-success btn-sm btn-round has-ripple" ><i class="fa fa-download"></i> Download Data</a>
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
                                        <th>Nama Alumni</th>
                                        <th>Pekerjaan</th>
                                        <th>Kuliah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($dataalumni as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>resources/images/pengguna/nophoto.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_alumni ?></h6>
                                                    <p><?php echo $res->temapatlahir ?>, <?php echo $res->tgl_lahir ?><br>AGAMA : <?php echo $res->agama ?></p>
                                                    <p><a style="color:green;"> <?php echo $res->thn_masuk ?></a><strong> Sampai </strong><a style="color:red;"> <?php echo $res->thn_lulus ?> </a></p>
												</div>
											</div>
                                        </td>

                                        <td>
                                        <div class="d-inline-block align-middle">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->namaperusahaan ?> (<?php echo $res->bidangusaha ?>)</h6>
                                                    <p><?php echo $res->pekerjaan ?> -  KARYAWAN <?php echo $res->ikatankerja ?></p>
                                                    <p>
                                                        <a>Sesuai dengan kompetensi = <strong><?php echo $res->kompetensi ?></strong></a><br>
                                                        Penghasilan = <strong> Rp.<?php echo number_format($res->penghasilan) ?></strong>
                                                        
                                                    </p>
                                                   
												</div>
											</div>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="m-b-0"><?php echo $res->perguruantinggi ?> (<?php echo $res->programstudi ?>)</h6>
                                        </td>
                                       

                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>index.php/master/hapusalumni/<?php echo $res->id_alumni ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>  
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


