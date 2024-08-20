<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Kode Rekening</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dana BOS</a></li>
                            <li class="breadcrumb-item"><a href="#!">Daftar Kode Rekening</a></li>
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
                                <button class="btn btn-primary btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-importkoderek"><i class="feather icon-upload"></i> Import Kode Rekening</button>
                                <a href="<?php echo base_url() ?>bendaharabos/dashboard/download_templatekoderekening" class="btn btn-secondary btn-sm btn-round has-ripple" ><i class="fa fa-download"></i> Download Template Kode Rekening</a>
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahkoderek"><i class="feather icon-plus"></i> Tambah Manual</button>
                            </div>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Kode Rekening</th>
                                        <th>Uraian Kode Rekening</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datakoderek as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td><?php echo $res->koderekening ?></td>
                                        <td><?php echo $res->nama_koderekening ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>bendaharabos/dashboard/hapukoderekening/<?php echo $res->id_koderekening ?>"  class="btn btn-icon btn-danger btn-sm tombol-hapus" ><i class="feather icon-x"></i></a>
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





<div class="modal fade" id="modal-tambahkoderek" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Uraian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>bendaharabos/dashboard/simpankoderekening" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="koderekening">Kode Rekening</label>
                                <input type="text" class="form-control" name="koderekening" placeholder="5.1.02.88.88.8888" autocomplete="off">
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="nama_koderekening">Uraian Kode Rekening</label>
                                <input type="text" class="form-control" name="nama_koderekening" placeholder="Belanja Barang Dan Jasa" autocomplete="off">
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


<div class="modal fade" id="modal-importkoderek" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Kode Rekening</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() ?>bendaharabos/dashboard/uploadkoderekening" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <h5>Masukkan Template anda</h5>
                        </div>
                      
                        <div class="col-sm-12">
                            <div class="form-group fill">
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