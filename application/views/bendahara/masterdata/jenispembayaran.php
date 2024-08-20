<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Daftar Jenis Pembayaran</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Jenis Pembayaran</a></li>
                            <li class="breadcrumb-item"><a href="#!">Jenis Pembayaran</a></li>
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

                        <div class="col-sm-12 text-left">
                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahjenispembayaran"><i class="feather icon-plus"></i> Tambah</button>
                        </div>
                    </div>

                    <div class="card-body">
                    
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Jenis Pembayaran</th>
                                        <th>Tagihan</th>
                                        <th>Kode Pembayaran</th>
                                        <th>Tahun</th>
                                        <th>Template</th>
                                        <th>Import Siswa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datajenispembayaran as $res){ ?>
                                    <tr class="text-center">
                                        <td><?php echo $no++ ?></td>
                                        
                                        <td>
                                            <strong><span class="badge badge-primary"><?php echo $res->nama_jenispembayaran ?></span></strong>
                                            <p></p>
                                        </td>
                                        <td><strong>Rp.<?php echo number_format($res->biaya_jenispembayaran) ?></strong></td>
                                        <td><?php echo $res->kode_jenispembayaran ?></td>
                                        <td><?php echo $res->tahun_jenispembayaran ?></td>
                                        <td class="text-center"><a href="<?php echo base_url() ?>bendahara/dashboard/templatesiswaspp/<?php echo $res->id_sppjenispembayaran ?>/<?php echo $res->id_role ?>" class="btn btn-icon btn-warning btn-sm"><br><i class="feather icon-download"></i></a></td>
                                        <td class="text-center"><a href="#" class="btn btn-icon btn-primary btn-sm" data-toggle="modal" data-target="#modal-import"><br><i class="feather icon-upload"></i></a></td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#modal-editjenispembayaran<?php echo $res->id_sppjenispembayaran ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>bendahara/dashboard/hapusjenispembayaran/<?php echo $res->id_sppjenispembayaran ?>"  class="btn btn-icon btn-danger btn-sm tombol-hapus" ><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>

                                    <!-- [ Form Edit Data Jurusan ] Start -->
                                    <div class="modal fade" id="modal-editjenispembayaran<?php echo $res->id_sppjenispembayaran ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Jenis Pembayaran</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>bendahara/dashboard/updatejenispembayaran" method="POST">
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_jenispembayaran">Jenis Pembayaran</label>
                                                                    <input type="text" class="form-control" name="nama_jenispembayaran" value="<?php echo $res->nama_jenispembayaran ?>" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                                                                    <input type="hidden" class="form-control" name="id_sppjenispembayaran" value="<?php echo $res->id_sppjenispembayaran ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="biaya_jenispembayaran">Tagihan</label>
                                                                    <input type="text" class="form-control" name="biaya_jenispembayaran" value="<?php echo $res->biaya_jenispembayaran ?>" required>
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
                                    <!-- [ Form Edit Data Jurusan ] End -->
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





<div class="modal fade" id="modal-tambahjenispembayaran" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Jenis Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>bendahara/dashboard/simpanjenispembayaran" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_jenispembayaran">Jenis Pembayaran</label>
                                <input type="text" class="form-control" name="nama_jenispembayaran" placeholder="Jenis Pembayaran" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                                <input type="hidden" class="form-control" name="id_role" value="pengguna" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="biaya_jenispembayaran">Total Biaya Tagihan</label>
                                <input type="number" class="form-control" name="biaya_jenispembayaran" placeholder=" " required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="tahun_jenispembayaran">Tahun Ajaran</label>
                                <input type="number" class="form-control" name="tahun_jenispembayaran" placeholder=" " required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="kode_jenispembayaran">Kode Pembayaran</label>
                                <input type="text" class="form-control" name="kode_jenispembayaran" value="<?= $kode_pembayaran; ?>" readonly oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
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



<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Data Siswa </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() ?>bendahara/dashboard/uploadjenispembayaransiswa" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <h5>Masukkan Template Pembayaran Siswa</h5>
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

<!-- [ Main Content ] end -->