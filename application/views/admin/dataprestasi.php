<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Prestasi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Bk</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Prestasi</a></li>
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
                        <h5>Daftar Prestasi </h5>
                        
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
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Prestasi</button>
                                <a href="<?php echo base_url() ?>index.php/master/cetak_prestasi" class="btn btn-dark btn-sm btn-round has-ripple" ><i class="fa fa-download"></i> Download Laporan</a>
                            </div>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Nama Prestasi</th>
                                        <th>Juara</th>
                                        <th>Tingkat</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($prestasi as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-left"><?php echo $res->nama_siswa ?></td>
                                        <td class="text-center"><?php echo $res->nama_kelas ?></td>
                                        <td class="text-center"><?php echo $res->nama_prestasi ?></td>
                                        <td class="text-center"><?php echo $res->juara ?></td>
                                        <td class="text-center"><?php echo $res->tingkat ?></td>
                                        <td class="text-center"><?php echo $res->tahun ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>master/hapusprestasi/<?php echo $res->id_prestasi ?>"  class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
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





<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpanprestasi" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_siswa">Nama Siswa</label>
                                <select class="form-control" id="nama_siswa" name="nama_siswa">
                                    <?php foreach ($datasiswa as $key): ?>
                                    <option value="<?php echo $key->nama_lengkap ?>"><?php echo $key->siswa_kelas ?> | <?php echo $key->nama_lengkap ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_kelas">Kelas</label>
                                <select class="form-control" id="nama_kelas" name="nama_kelas">
                                    <?php foreach ($datakelas as $key): ?>
                                    <option value="<?php echo $key->nama_kelas ?>"><?php echo $key->nama_kelas ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="nama_prestasi">Nama Prestasi</label>
                                <input type="text" class="form-control" name="nama_prestasi" placeholder="Lomba Sains Tingkat Nasional" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="juara">Juara</label>
                                <input type="text" class="form-control" name="juara" placeholder="1" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="tingkat">Tingkat</label>
                                <select class="form-control" id="tingkat" name="tingkat">
                                    <option value="Kabupaten">Kabupaten</option>
                                    <option value="Provinsi">Provinsi</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="tahun">Tahun</label>
                                <input type="number" class="form-control" name="tahun" placeholder="Tahun Prestasi" autocomplete="off">
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