<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Ekstrakurikuler</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Rapor</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Ekstrakurikuler</a></li>
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
                        <h5>Daftar Ekstrakurikuler </h5>
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#tambah-ekstraurikuler"><i class="feather icon-plus"></i> Tambah Ekstra</button>
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
                                        <th>Nama Ekstra Kurikuler</th>
                                        <th>Kelompok</th>
                                        <th>Download Template</th>
                                        <th>Semester 1</th>
                                        <th>Semester 2</th>
                                        <th>Semester 3</th>
                                        <th>Semester 4</th>
                                        <th>Semester 5</th>
                                        <th>Semester 6</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datarapoekstra as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-left"><?php echo $res->nama_ekstra ?></td>
                                        <td class="text-center"><strong style="color:green;"><?php echo $res->kelompok_ekstra ?></strong></td>
                                        <td class="text-center"> 
                                            <a href="<?php echo base_url() ?>master/exporekstra/<?php echo $res->id_raporekstra ?>" class="btn btn-icon btn-warning btn-sm"><br><i class="feather icon-download"></i></a>
                                        </td>
                                        <td class="text-center"><button class="btn btn-icon btn-success btn-sm" data-toggle="modal" data-target="#import-ekstra1"><i class="feather icon-upload"></i></button></td>
                                        <td class="text-center"><button class="btn btn-icon btn-success btn-sm" data-toggle="modal" data-target="#import-ekstra2"><i class="feather icon-upload"></i></button></td>
                                        <td class="text-center"><button class="btn btn-icon btn-success btn-sm" data-toggle="modal" data-target="#import-ekstra3"><i class="feather icon-upload"></i></button></td>
                                        <td class="text-center"><button class="btn btn-icon btn-success btn-sm" data-toggle="modal" data-target="#import-ekstra4"><i class="feather icon-upload"></i></button></td>
                                        <td class="text-center"><button class="btn btn-icon btn-success btn-sm" data-toggle="modal" data-target="#import-ekstra5"><i class="feather icon-upload"></i></button></td>
                                        <td class="text-center"><button class="btn btn-icon btn-success btn-sm" data-toggle="modal" data-target="#import-ekstra6"><i class="feather icon-upload"></i></button></td>
                                        
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>master/editdataraporekstra/<?php echo $res->id_raporekstra ?>" data-toggle="modal" data-target="#modal-report<?php echo $res->id_raporekstra ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>master/hapusdataraporekstra/<?php echo $res->id_raporekstra ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                </tbody>


                                <div class="modal fade" id="modal-report<?php echo $res->id_raporekstra ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Ekstra Kurikuler</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatedataraporekstra" method="POST">
                                                        <div class="row">

        

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="nama_ekstra">Nama Ekstra Kurikuler</label>
                                                                    <input type="text" class="form-control" name="nama_ekstra" value="<?php echo $res->nama_ekstra ?>" >
                                                                    <input type="hidden" class="form-control" name="id_raporekstra" value="<?php echo $res->id_raporekstra ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="kode_ekstra">Kode Ekstra</label>
                                                                    <input type="text" class="form-control" name="kode_ekstra" value="<?php echo $res->kode_ekstra ?>" readonly>
                                                                </div>
                                                            </div>

                                                           
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="kode_ekstra">Kelompok</label>
                                                                    <input type="text" class="form-control" name="kelompok_ekstra" value="<?php echo $res->kelompok_ekstra ?>" readonly>
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





<div class="modal fade" id="tambah-ekstraurikuler" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Ekstra Kurikuler</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpandataraporekstra" method="post" enctype="multipart/form-data" role="form">

                    <div class="row">
                        <div class="col-12">
                            
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="nama_ekstra">Nama Ekstra Kurikuler</label>
                                <input type="text" class="form-control" id="nama_ekstra" name="nama_ekstra" placeholder="Nama Ekstra Kurikuler">
                                <input type="hidden" class="form-control" id="id_role" name="id_role" value="pengguna">
                                <input type="hidden" class="form-control" id="kelompok_ekstra" name="kelompok_ekstra" value="EKSTRAKURIKULER">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="kode_ekstra">Kode Ekstra Kurikuler</label>
                                <input type="text" class="form-control" id="kode_ekstra" name="kode_ekstra" value="<?php echo random_string('alnum',35); ?>" readonly>
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