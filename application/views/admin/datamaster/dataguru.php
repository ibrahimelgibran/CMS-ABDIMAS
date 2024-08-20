<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Coach</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Coach</a></li>
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

                        <!-- <button class="btn btn-sm btn-round has-ripple" style="background-color: #48336F; color: #ffffff;" data-toggle="modal" data-target="#modal-import"><i class="feather icon-upload"></i> Import Guru</button> -->
                        <button class="btn btn-sm btn-round has-ripple" style="background-color: #0f52ba; color: #ffffff;" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Coach</button>
                        <!-- <a href="<?php echo base_url() ?>master/download_templateguru" class="btn btn-sm btn-round has-ripple" style="background-color: #02304A; color: #ffffff;"><i class="fa fa-download"></i> Download Template</a> -->
                        <!-- <a href="<?php echo base_url() ?>master/hapussemuaguru" class="btn btn-sm btn-round has-ripple" style="background-color: #FF0000; color: #ffffff;"><i class="fa fa-download"></i>Kosongkan Guru</a> -->


                        <?php if ($this->session->flashdata('hapus_berhasil')) { ?>
                            <div class="col-xl-6 alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong></strong> <?php echo $this->session->flashdata('hapus_berhasil'); ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('tambah_berhasil')) { ?>
                            <div class="col-xl-6 alert alert-info">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong></strong> <?php echo $this->session->flashdata('tambah_berhasil'); ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('import_berhasil')) { ?>
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
                                        <th>Tingkat Dan Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1;
                                        foreach ($dataguru as $res) { ?>
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
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <div class="card-body">
                                                        <p></p>
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0"><?php echo $res->status_guru ?> - <?php echo $res->golongan ?></h6>
                                                            <p class="m-b-0">Coach Mapel : <?php echo $res->namamapel ?></p>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_guru ?>" class="btn btn-icon btn-info btn-sm" style="background-color: #01605A; color: #ffffff;"><i class="feather icon-edit"></i></a>
                                                <a href="<?php echo base_url() ?>master/hapusguru/<?php echo $res->id_guru ?>" class="btn btn-icon btn-sm tombol-hapus" style="background-color: #FF0000; color: #ffffff;"><i class="feather icon-trash-2"></i></a>
                                            </td>
                                        </tr>



                                        <div class="modal fade" id="modal-report2<?php echo $res->id_guru ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
                                                                        <input type="hidden" class="form-control" name="id_guru" value="<?php echo $res->id_guru ?>">
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
                                                                            <option value="ASN">PEMULA</option>
                                                                            <option value="HONORER">STANDAR</option>
                                                                            <option value="P3K">SENIOR</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="floating-label" for="golongan">Pangkat/Golongan</label>
                                                                        <select class="form-control" id="golongan" name="golongan">
                                                                            <option value="<?php echo $res->golongan ?>">Pilihan Saat ini <?php echo $res->golongan ?></option>
                                                                            <option value="-">Tidak Memiliki</option>
                                                                            <option value="II/a">KELOMPOK UMUR A</option>
                                                                            <option value="II/b">KELOMPOK UMUR B</option>
                                                                            <option value="II/c">KELOMPOK UMUR C</option>
                                                                            <option value="II/d">KELOMPOK UMUR D</option>
                                                                            <option value="III/a">Speed</option>
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
                <form action="<?php echo base_url() ?>master/simpanguru" method="post" enctype="multipart/form-data" role="form">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_guru">Nama</label>
                                <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Guru">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="notelp">Nomor Telp</label>
                                <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Nomor Telp">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip" placeholder="menjadi username & password">
                                <input type="hidden" name="username" class="form-control" required>
                                <input type="hidden" name="password" class="form-control" required>
                                <input type="hidden" name="role" class="form-control" value="guru" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="status_guru">Status</label>
                                <select class="form-control" id="status_guru" name="status_guru">
                                    <option value="-">KOSONGKAN</option>
                                    <option value="ASN">PEMULA</option>
                                    <option value="HONORER">STANDAR</option>
                                    <option value="P3K">SENIOR</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="golongan">Pangkat/Golongan</label>
                                <select class="form-control" id="golongan" name="golongan">
                                    <option value="-">Tidak Memiliki</option>
                                    <option value="II/a">KELOMPOK UMUR A</option>
                                    <option value="II/b">KELOMPOK UMUR B</option>
                                    <option value="II/c">KELOMPOK UMUR C</option>
                                    <option value="II/d">KELOMPOK UMUR D</option>
                                    <option value="III/a">Speed</option>
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