
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Pembayaran</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administrasi</a></li>
                            <li class="breadcrumb-item"><a href="#!">Pembayaran</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-3 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-0">
                            <label class="floating-label" for="filterserch"><i class="feather icon-search"></i> Search here</label>
                            <input type="text" class="form-control" id="filterserch">
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-9 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div id="filters" class="button-group">
                            <button class="button btn btn-outline-secondary my-1 active" data-filter="*">Data Pembayaran</button>
                      
                        </div>
                    </div>
                </div>







                    <div class="grid row">
                        <div class="col-lg-12 col-md-6 element-item realestate sponsored" data-category="realestate">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center">
                                            <a href="#"><i class="feather icon-edit f-36 mr-3" title="XRP"></i></a>
                                        </div>

                                        <div>
                                            <h4 class="m-0 text-bold">Data Administrasi Pembayaran</h4>
                                            <div class="m-0 text-bold">
                                                <!-- [ Tempat Tombol ] end -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <div class="table-responsive">
                                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th rowspan="2">No</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Pembayaran</th>
                                                    <th>Tagihan</th>
                                                    <th>Dibayar</th>
                                                    <th>Sisa</th>
                                                    <th>Rekam</th>
                                                </tr>

                                            </thead>
                                            <tbody><?php $no = 1; foreach($data_pendaftar as $res){ ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++ ?></td>
                                                    <td><?php echo $res->nama_siswa ?></td>
                                                    <td class="text-center"><div class="badge badge-pill" style="background-color: #0f52ba; color: #ffffff;"><?php echo $res->nama_jenispembayaran ?> <?php echo $res->tahun_jenispembayaran ?></div></td>
                                                    <td class="text-center"><div class="badge badge-pill" style="background-color: #075935; color: #ffffff;">Rp.<?php echo number_format($res->biaya_jenispembayaran) ?></div></td>
                                                    <td class="text-center"><div class="badge badge-pill" style="background-color: #0B85BA; color: #ffffff;">Rp.<?php echo number_format($res->bayar1+$res->bayar2+$res->bayar3+$res->bayar4+$res->bayar5+$res->bayar6+$res->bayar7+$res->bayar8+$res->bayar9+$res->bayar10+$res->bayar11+$res->bayar12) ?> </div></td>
                                                    <td class="text-center"><div class="badge badge-pill" style="background-color: #ED5D27; color: #ffffff;">Rp.<?php echo number_format(($res->biaya_jenispembayaran)-($res->bayar1+$res->bayar2+$res->bayar3+$res->bayar4+$res->bayar5+$res->bayar6+$res->bayar7+$res->bayar8+$res->bayar9+$res->bayar10+$res->bayar11+$res->bayar12)) ?></div></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#modal-pembayaranspp<?php echo $res->id_sppdatasiswa ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-credit-card"></i></a></td>
                                                </tr>
                                                
                                                <!-- [ Form  Data  ] Start -->
                                                <div class="modal fade" id="modal-pembayaranspp<?php echo $res->id_sppdatasiswa ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><div class="badge badge-pill" style="background-color: #0f52ba; color: #ffffff;">Rekam Transaksi Pembayaran <?php echo $res->nama_jenispembayaran ?> <?php echo $res->tahun_jenispembayaran ?></div></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="#" method="POST">
                                                                    <div class="row">

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar1">Januari</label>
                                                                                <input type="number" class="form-control" name="bayar1" value="<?php echo $res->bayar1 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar2">Februari</label>
                                                                                <input type="number" class="form-control" name="bayar2" value="<?php echo $res->bayar2 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar3">Maret</label>
                                                                                <input type="number" class="form-control" name="bayar3" value="<?php echo $res->bayar3 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar4">April</label>
                                                                                <input type="number" class="form-control" name="bayar4" value="<?php echo $res->bayar4 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar5">Mei</label>
                                                                                <input type="number" class="form-control" name="bayar5" value="<?php echo $res->bayar5 ?>" readonly>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar6">Juni</label>
                                                                                <input type="number" class="form-control" name="bayar6" value="<?php echo $res->bayar6 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar7">Juli</label>
                                                                                <input type="number" class="form-control" name="bayar7" value="<?php echo $res->bayar7 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar8">Agustus</label>
                                                                                <input type="number" class="form-control" name="bayar8" value="<?php echo $res->bayar8 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar9">September</label>
                                                                                <input type="number" class="form-control" name="bayar9" value="<?php echo $res->bayar9 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar10">Oktober</label>
                                                                                <input type="number" class="form-control" name="bayar10" value="<?php echo $res->bayar10 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar11">November</label>
                                                                                <input type="number" class="form-control" name="bayar11" value="<?php echo $res->bayar11 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="floating-label" for="bayar12">Desember</label>
                                                                                <input type="number" class="form-control" name="bayar12" value="<?php echo $res->bayar12 ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- [ Form Data ] End --> 
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





        </div>
        <!-- [ Main Content ] end -->


        <div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() ?>import/uploadnilaismt1" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <h5>Masukkan Template anda</h5>
                        </div>
                      
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Template-Siswa.xls</label>
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



