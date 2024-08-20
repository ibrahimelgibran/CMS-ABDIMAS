<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Resepsionis</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Resepsionis</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Tamu</a></li>
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
                        <h5>Daftar Tamu </h5>
                        
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
                           
                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Identitas</th>
                                        <th>Tujuan</th>
                                        <th>Aksi</th>
                                      
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($databukutamu as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td><?php echo format_indo(date($res->tanggal));?></td>
                                        <td>
                                            <p class="m-b-0"><strong style="color:grey:bold;">Nama :</strong> <?php echo $res->nama ?></p>
                                            <p class="m-b-0"><strong style="color:grey:bold;">Alamat :</strong> <?php echo $res->alamat ?></p>
                                            <p class="m-b-0"><strong style="color:grey:bold;">Pekerjaan :</strong> <?php echo $res->pekerjaan ?></p>
                                        </td>
                                        <td class="text-center"><?php echo $res->tujuan ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>master/hapusbukutamu/<?php echo $res->id_tamu ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
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





<div class="modal fade" id="modal-tambahtamu" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Tamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>resepsionis/dashboard/simpantamu" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="floating-label" for="nama">Nama Tamu</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Tamu" autocomplete="off">
                                <input type="hidden" class="form-control" id="formatTanggal" value="<?php $tgl=date('Y-m-d'); echo $tgl; ?>" name="tanggal" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="floating-label" for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="pekerjaan">No. HP  / Email yang bisa di hubungin</label>
                                <input type="text" class="form-control" name="pekerjaan" placeholder="Email / No.HP" autocomplete="off" required="" oninvalid="this.setCustomValidity('pekerjaan perlu diisi')" oninput="setCustomValidity('')">
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="floating-label" for="tujuan">Maksud Kunjungan</label>
                                <input type="text" class="form-control" name="tujuan" placeholder="Tujuan Berkunjung" autocomplete="off">
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