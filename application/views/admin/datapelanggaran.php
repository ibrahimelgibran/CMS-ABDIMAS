<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Pelanggaran</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Bk</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Pelanggaran</a></li>
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
                        <h5>Daftar Pelanggaran </h5>
                        
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
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Pelanggaran</button>
                                <a href="<?php echo base_url() ?>index.php/master/cetak_pelanggaran" class="btn btn-dark btn-sm btn-round has-ripple" ><i class="fa fa-download"></i> Download Laporan</a>
                            </div>
                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Keterangan</th>
                                        <th>Poin</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($kasus as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><img src="<?php echo base_url() ?>resources/images/pengguna/nophoto.jpg" class="img-radius" width="30px" height="30px"></td>
                                        <td><?php echo $res->nama_lengkap ?></td>
                                        <td class="text-center"><?php echo $res->siswa_kelas ?></td>
                                        <td class="text-left"><?php echo $res->nama_kasus ?></td>
                                        <td class="text-center"><?php echo $res->poin ?></td>
                                        <td class="text-center"><?php echo tgl_indo(date($res->tanggal));?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>master/hapuspelanggaran/<?php echo $res->id_kasus ?>"  class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
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
                <h5 class="modal-title">Tambah Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpanpelanggaran" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="siswa_id">Nama Siswa</label>
                                <select class="form-control" id="siswa_id" name="siswa_id">
                                    <?php foreach ($datasiswa as $key): ?>
                                    <option value="<?php echo $key->id_pendaftar ?>"><?php echo $key->siswa_kelas ?> | <?php echo $key->nama_lengkap ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_kasus">Pelanggaran</label>
                                <select class="form-control" id="nama_kasus" name="nama_kasus">
                                    <?php foreach ($datakategoripelanggaran as $key): ?>
                                    <option value="<?php echo $key->nama_kategorikasus ?>"><?php echo $key->nama_kategorikasus ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="poin">Poin</label>
                                <input type="text" class="form-control" name="poin" placeholder="Poin Pelanggaran" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" placeholder="tanggal Pelanggaran" autocomplete="off" required>
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


<?php 
            function tgl_indo($tanggal){
                $bulan = array (
                    1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
                $pecahkan = explode('-', $tanggal);
                
                // variabel pecahkan 0 = tanggal
                // variabel pecahkan 1 = bulan
                // variabel pecahkan 2 = tahun
            
                return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
            }
                
          
        ?>

<!-- [ Main Content ] end -->