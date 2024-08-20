<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Mata Pelajaran</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Rapor</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Mata Pelajaran</a></li>
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
                        <div class="col-sm-12 text-left">
                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Mapel</button>
                        </div>
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
                                        <th>Nama Mata Pelajaran</th>
                                        <th>KKM</th>
                                        <th>Kelompok</th>
                                        <th>Nomor Urut</th>
                                        <th>Download Template</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datarapormapel as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-left"><?php echo $res->nama_mapel ?></td>
                                        <td class="text-center"><?php echo $res->kkm ?></td>
                                        <td class="text-center"><strong style="color:green;"><?php echo $res->kelompok_mapel ?></strong></td>
                                        <td class="text-center"><strong><?php echo $res->no_urut ?></strong></td>
                                        <td class="text-center"> 
                                            <a href="<?php echo base_url() ?>master/expormapel/<?php echo $res->id_rapormapel ?>" class="btn btn-icon btn-warning btn-sm"><br><i class="feather icon-download"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>master/editdatarapormapel/<?php echo $res->id_rapormapel ?>" data-toggle="modal" data-target="#modal-report<?php echo $res->id_rapormapel ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>master/hapusdatarapormapel/<?php echo $res->id_rapormapel ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                </tbody>


                                <div class="modal fade" id="modal-report<?php echo $res->id_rapormapel ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Pelajaran</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatedatarapormapel" method="POST">
                                                        <div class="row">

        

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_mapel">Nama Mata Pelajaran</label>
                                                                    <input type="text" class="form-control" name="nama_mapel" value="<?php echo $res->nama_mapel ?>" >
                                                                    <input type="hidden" class="form-control" name="id_rapormapel" value="<?php echo $res->id_rapormapel ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_mapel">Kode Mata Pelajaran</label>
                                                                    <input type="text" class="form-control" name="kode_mapel" value="<?php echo $res->kode_mapel ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="nama_mapel">No Urut Mapel</label>
                                                                    <select class="form-control" id="no_urut" name="no_urut">
                                                                        <option value="<?php echo $res->no_urut ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $res->no_urut ?>)</span></option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="16">16</option>
                                                                        <option value="17">17</option>
                                                                        <option value="18">18</option>
                                                                        <option value="19">19</option>
                                                                        <option value="20">20</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="nama_mapel">Kelompok Mapel</label>
                                                                    <select class="form-control" id="kelompok_mapel" name="kelompok_mapel">
                                                                        <option value="<?php echo $res->kelompok_mapel ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $res->kelompok_mapel ?>)</span></option>
                                                                        <option value="Kelompok A">Kelompok A (UMUM)</option>
                                                                        <option value="Kelompok B">Kelompok B (Umum)</option>
                                                                        <option value="Kelompok C">Kelompok C (Peminatan)</option>
                                                                    </select>
                                                                </div>
                                                            </div>



                                                            </div>
                                                            

                                                            <div class="col-sm-12">
                                                                <button class="btn btn-primary">Update Data</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
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
                <h5 class="modal-title">Tambah Mapel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpandatarapormapel" method="post" enctype="multipart/form-data" role="form">

                    <div class="row">
                        <div class="col-12">
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="floating-label" for="nama_mapel">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" placeholder="Matematika" required>
                                <input type="hidden" class="form-control" id="id_role" name="id_role" value="pengguna">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="kkm">KKM</label>
                                <input type="number" class="form-control" id="kkm" name="kkm" placeholder="80" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="kode_mapel">Kode Mata Pelajaran</label>
                                <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" value="<?php echo random_string('alnum',35); ?>" placeholder="Kode Mapel" readonly>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="no_urut">No Urut Di Rapot</label>
                                <select class="mb-3 form-control" name="no_urut" id="no_urut">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="kelompok_mapel">Kelompok Mapel</label>
                                <select class="mb-3 form-control" name="kelompok_mapel" id="kelompok_mapel">
                                        <option value="Kelompok A">Kelompok A (Umum)</option>
                                        <option value="Kelompok B">Kelompok B (Umum)</option>
                                        <option value="Kelompok C">Kelompok C (Peminatan)</option>
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