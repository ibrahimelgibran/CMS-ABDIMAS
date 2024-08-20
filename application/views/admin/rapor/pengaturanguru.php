<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Setting Kelas Guru</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">E-rapot</a></li>
                            <li class="breadcrumb-item"><a href="#!">Setting Data Guru</a></li>
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
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Setting Guru</button>
                            </div>
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
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datasettingguru as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                        <div class="d-inline-block align-middle">
                                        <div class="card-body">
                                        <img style="width:75px;75px;" src="<?php echo base_url(); ?>upload/fotoguru/<?php echo $res->foto_guru; ?>" class="img-responsive img-thumbnail" />
                                            <div class="d-inline-block">
                                                <h6 class="m-b-0"><?php echo $res->nama_guru ?></h6>
                                                <p class="m-b-0">NIP.<?php echo $res->nip ?></p>
                                            </div>
                                        </div>
                                        </td>
                                        <td class="text-center"><?php echo $res->nama_kelas ?></td>
                                        <td class="text-center"><?php echo $res->nama_mapel ?></td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_guru ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>rapot/hapussettingguru/<?php echo $res->id_dataguru ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>



                                    <div class="modal fade" id="modal-report2<?php echo $res->id_guru ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Guru</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updateguru" method="POST">
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_guru">Nama</label>
                                                                    <input type="text" class="form-control" name="nama_guru" value="<?php echo $res->nama_guru ?>">
                                                                    <input type="hidden" class="form-control" name="id_guru" value="<?php echo $res->id_guru ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nip">NIP</label>
                                                                    <input type="text" class="form-control" name="nip" value="<?php echo $res->nip ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="notelp">No WA</label>
                                                                    <input type="number" class="form-control" name="notelp" value="<?php echo $res->notelp ?>" placeholder="081111111111">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="email">Email</label>
                                                                    <input type="text" class="form-control" name="email" value="<?php echo $res->email ?>" placeholder="email@gmail.com">
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="jeniskelamin">Jenis Kelamin</label>
                                                                    <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                                                        <option value="<?php echo $res->jeniskelamin ?>">Pilihan Saat ini <?php echo $res->jeniskelamin ?></option>
                                                                        <option value="L">Laki-Laki</option>
                                                                        <option value="P">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="status_guru">Status</label>
                                                                    <select class="form-control" id="status_guru" name="status_guru">
                                                                        <option value="<?php echo $res->status_guru ?>">Pilihan Saat ini <?php echo $res->status_guru ?></option>
                                                                        <option value="-">KOSONGKAN</option>
                                                                        <option value="ASN">ASN</option>
                                                                        <option value="HONORER">HONORER</option>
                                                                        <option value="P3K">P3K</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="golongan">Pangkat/Golongan</label>
                                                                    <select class="form-control" id="golongan" name="golongan">
                                                                        <option value="<?php echo $res->golongan ?>">Pilihan Saat ini <?php echo $res->golongan ?></option>
                                                                        <option value="-">Tidak Memiliki</option>
                                                                        <option value="II/a">II/a</option>
                                                                        <option value="II/b">II/b</option>
                                                                        <option value="II/c">II/c</option>
                                                                        <option value="II/d">II/d</option>
                                                                        <option value="III/a">III/a</option>
                                                                        <option value="III/b">III/b</option>
                                                                        <option value="III/c">III/c</option>
                                                                        <option value="III/d">III/d</option>
                                                                        <option value="IV/a">IV/a</option>
                                                                        <option value="IV/b">IV/b</option>
                                                                        <option value="IV/c">IV/c</option>
                                                                        <option value="IV/d">IV/d</option>
                                                                        <option value="IV/e">IV/e</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="namamapel">Mengajar Mapel</label>
                                                                    <input type="text" class="form-control" name="namamapel" value="<?php echo $res->namamapel ?>" placeholder="Mengajar Mapel" oninput="this.value = this.value.toUpperCase()">
                                                                </div>
                                                            </div>




                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="card card-info">
                                                                    <div class="card-body">
                                                                        <center><img style="width:125px;125px;" src="<?php echo base_url(); ?>upload/fotoguru/<?php echo $res->foto_guru; ?>" class="img-responsive img-thumbnail" /></center>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="username">Username</label>
                                                                    <input type="text" class="form-control" name="username" value="<?php echo $res->username ?>">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="floating-label" for="password">Password</label>
                                                                    <input type="text" class="form-control" name="password" value="<?php echo $res->password ?>">
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





<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>rapot/simpansettingguru" method="post" enctype="multipart/form-data" role="form">

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nip_guru">Nama Guru</label>
                                <select class="form-control" id="nip_guru" name="nip_guru">
                                    <?php foreach ($dataguru as $key): ?>
                                    <option value="<?php echo $key->nip?>"><?php echo $key->nama_guru ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="kelas_guru">Kelas Mengajar</label>
                                <select class="form-control" id="kelas_guru" name="kelas_guru">
                                    <?php foreach ($datakelas as $key): ?>
                                    <option value="<?php echo $key->kode_kelas?>"><?php echo $key->nama_kelas ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="mapel_guru">Mata Pelajaran</label>
                                <select class="form-control" id="mapel_guru" name="mapel_guru">
                                    <?php foreach ($datamapel as $key): ?>
                                    <option value="<?php echo $key->kode_mapel?>"><?php echo $key->nama_mapel ?></option>
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




<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() ?>import/uploadguru" enctype="multipart/form-data">
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
<!-- [ Main Content ] end -->
