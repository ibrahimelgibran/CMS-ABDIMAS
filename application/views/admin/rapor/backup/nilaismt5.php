
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Rapor</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Rapor</a></li>
                            <li class="breadcrumb-item"><a href="#!">Semester 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->







        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-2 col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <div class="form-group mb-0"><?php foreach($nilai_smt5 as $res){ ?>  <?php } ?>
                            <a href="<?php echo base_url() ?>master/hapussemuanilaismt5/<?php echo $res->kode_mapel ?>" class="btn btn-danger btn-sm btn-round has-ripple" ><i class="fa fa-download"></i>Kosongkan Nilai</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Semester</th>
                                    <th>KKM</th>
                                    <th>Pengetahuan</th>
                                    <th>Keterampilan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $no = 1; foreach($nilai_smt5 as $res){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td>
                                        <div class="d-inline-block align-middle">
                                            <img src="<?php echo base_url() ?>resources/images/nilai.png" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            <div class="d-inline-block">
                                                <h6 class="m-b-0"><?php echo $res->nama_siswa ?></h6>
                                                <p class="m-b-0"><strong><?php echo $res->kelas ?> / <?php echo $res->nomor_absen ?></strong> - <?php echo $res->mapel ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><strong><?php echo $res->tahun_ajaran ?></strong></td>
                                    <td class="text-center"><strong><?php echo $res->semester ?></strong></td>
                                    <td class="text-center"><strong style="color:green;"><?php echo $res->kkm ?></strong></td>
                                    <td class="text-center"><?php echo $res->nilaipengetahuan ?></td>
                                    <td class="text-center"><?php echo $res->nilaiketerampilan ?></td>
                                    
                                    <td class="text-center">
                                    <a href="#" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_user ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit-2"></i></a>
                                    <a href="<?php echo base_url() ?>master/hapusnilaismt5/<?php echo $res->id_rapor ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="modal-report2<?php echo $res->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Nilai</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updaterapor5" method="POST">
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="tahun_ajaran">Tahun Ajaran</label>
                                                                    <input type="text" class="form-control" name="tahun_ajaran" value="<?php echo $res->tahun_ajaran ?>" readonly>
                                                                    <input type="hidden" class="form-control" name="id_rapor" value="<?php echo $res->id_rapor ?>" >
                                                                    <input name="redirect" type="hidden" value="<?= $this->uri->uri_string() ?>" />
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="kkm">KKM</label>
                                                                    <input type="text" class="form-control" name="kkm" value="<?php echo $res->kkm ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="nilaipengetahuan">Pengetahuan</label>
                                                                    <input type="text" class="form-control" name="nilaipengetahuan" value="<?php echo $res->nilaipengetahuan ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="nilaiketerampilan">Keterampilan</label>
                                                                    <input type="text" class="form-control" name="nilaiketerampilan" value="<?php echo $res->nilaiketerampilan ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="deskripsi">Deskripsi</label>
                                                                    <input type="text" class="form-control" name="deskripsi" value="<?php echo $res->deskripsi ?>">
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
        </div>
        <!-- [ Main Content ] end -->

    </div>
</div>





