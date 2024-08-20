<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Kategori Pelanggaran</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Bk</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Kategori Pelanggaran</a></li>
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
                        <h5>Daftar Kategori Pelanggaran </h5>
                        
                        <?php if($this->session->flashdata('hapus_berhasil')){ ?>  
                            <div class="alert alert-danger">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('hapus_berhasil'); ?>  
                            </div>  
                          <?php } ?>  

                          <?php if($this->session->flashdata('tambah_berhasil')){ ?>  
                            <div class="alert alert-info">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('tambah_berhasil'); ?>  
                            </div>  
                          <?php } ?>  

                          <?php if($this->session->flashdata('import_berhasil')){ ?>  
                            <div class="alert alert-info">  
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
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahkategoripelanggaran"><i class="feather icon-plus"></i> Tambah Pelanggaran</button>
                            </div>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Pelanggaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datakategoripelanggaran as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td><?php echo $res->nama_kategorikasus ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>master/editkategoripelanggaran/<?php echo $res->id_kategorikasus ?>" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_kategorikasus ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>master/hapuskategoripelanggaran/<?php echo $res->id_kategorikasus ?>"  class="btn btn-icon btn-danger btn-sm tombol-hapus" ><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>



                                    <div class="modal fade" id="modal-report2<?php echo $res->id_kategorikasus ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Kategori Kasus</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatekategoripelanggaran" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_kategorikasus">Kategori Kasus</label>
                                                                    <input type="text" class="form-control" id="nama_kategorikasus" name="nama_kategorikasus" value="<?php echo $res->nama_kategorikasus ?>" autocomplete="off">
                                                                    <input type="hidden" class="form-control" name="id_kategorikasus" value="<?php echo $res->id_kategorikasus ?>" >
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





<div class="modal fade" id="modal-tambahkategoripelanggaran" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kategori Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpankategoripelanggaran" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="nama_kategorikasus">Nama Kategori Pelanggaran</label>
                                <input type="text" class="form-control" name="nama_kategorikasus" placeholder="Nama Kategori Pelanggaran" autocomplete="off">
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