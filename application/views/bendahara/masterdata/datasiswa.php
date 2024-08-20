<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Daftar Siswa</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Siswa</a></li>
                            <li class="breadcrumb-item"><a href="#!">Pembayaran</a></li>
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
                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahsiswa"><i class="feather icon-plus"></i> Tambah</button>
                            <a href="<?php echo base_url() ?>bendahara/dashboard/templatesiswaspp" class="btn btn-danger btn-sm btn-round has-ripple" ><i class="fa fa-download"></i> Download Template</a>
                        </div>
                    </div>

                    <div class="card-body">
                    
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead class="color-info">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>Jenis Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datasiswa as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td><?php echo $res->nama_lengkap ?></td>
                                        <td><?php echo $res->nama_kelas ?></td>
                                        <td class="text-center"><span class="badge badge-info"><?php echo $res->nama_jenispembayaran ?> <?php echo $res->tahun_jenispembayaran ?></span></td>
                                        <td class="text-center">
                                        <a href="#" data-toggle="modal" data-target="#modal-editsiswa<?php echo $res->id_sppdatasiswa ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>bendahara/dashboard/hapussiswa/<?php echo $res->id_sppdatasiswa ?>"  class="btn btn-icon btn-danger btn-sm tombol-hapus" ><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-editsiswa<?php echo $res->id_sppdatasiswa ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Siswa</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>bendahara/dashboard/updatesiswa" method="POST">
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_siswa">Nama Siswa</label>
                                                                    <input type="text" class="form-control" name="nama_siswa" value="<?php echo $res->nama_siswa ?>" oninput="this.value = this.value.toUpperCase()" autocomplete="off">
                                                                    <input type="hidden" class="form-control" name="id_sppdatasiswa" value="<?php echo $res->id_sppdatasiswa ?>">
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nisn">NISN / Nomor Induk</label>
                                                                    <input type="text" class="form-control" name="nisn" value="<?php echo $res->nisn ?>" oninput="this.value = this.value.toUpperCase()" autocomplete="off">
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="kelas">Kelas</label>
                                                                    <select class="form-control" id="kelas" name="kelas">
                                                                        <option value="<?php echo $res->id_sppdatakelas ?>"><?php echo $res->nama_kelas ?></option>
                                                                        <option value="<?php echo $res->id_sppdatakelas ?>">----------</option>
                                                                        <?php foreach ($datakelas as $key): ?>
                                                                        <option value="<?php echo $key->id_sppdatakelas ?>"><?php echo $key->nama_kelas ?> </option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="kode_pembayaran">Jenis Pembayaran</label>
                                                                    <select class="form-control" id="kode_pembayaran" name="kode_pembayaran">
                                                                        <option value="<?php echo $res->kode_pembayaran ?>"><?php echo $res->nama_jenispembayaran ?> | <?php echo $res->tahun_jenispembayaran ?></option>
                                                                        <?php foreach ($datajenispembayaran as $key): ?>
                                                                        <option value="<?php echo $key->kode_jenispembayaran ?>"><?php echo $key->nama_jenispembayaran ?> | <?php echo $key->tahun_jenispembayaran ?> </option>
                                                                        <?php endforeach ?>
                                                                    </select>
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





<div class="modal fade" id="modal-tambahsiswa" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>bendahara/dashboard/simpansiswa" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_siswa">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap" oninput="this.value = this.value.toUpperCase()" autocomplete="off">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nisn">NISN / Nomor Induk</label>
                                <input type="text" class="form-control" name="nisn" placeholder="NISN" autocomplete="off">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="kode_pembayaran">Jenis Pembayaran</label>
                                <select class="form-control" id="kode_pembayaran" name="kode_pembayaran">
                                    <?php foreach ($datajenispembayaran as $key): ?>
                                    <option value="<?php echo $key->kode_jenispembayaran ?>"><?php echo $key->nama_jenispembayaran ?> | <?php echo $key->tahun_jenispembayaran ?></option>
                                    <?php endforeach ?>
                                </select>
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