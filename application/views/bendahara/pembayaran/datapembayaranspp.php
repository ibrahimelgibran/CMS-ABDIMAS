<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Pembayaran</a></li>
                        </ul>
                    </div>
                </div>        
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
                <!-- page statustic card start -->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h5 class="text-dark">Total Penerimaan</h5>
                                        <span class="text-black m-b-0"><strong><?php echo "Rp. ". number_format($bayar1+$bayar2+$bayar3+$bayar4+$bayar5+$bayar6+$bayar7+$bayar8+$bayar9+$bayar10+$bayar11+$bayar12);?></strong></span>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-bar-chart-2 f-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-default">
                                <div class="row align-items-center">
                                   
                                    <div class="col-3 text-right">
                                        <i class="feather icon-upload-cloud text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                             
                            </div>
                            <div class="card-footer bg-default">
                                <div class="row align-items-center">
                                   
                                    <div class="col-3 text-right">
                                        <i class="feather icon-upload-cloud text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page statustic card end -->
            </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        


                        <div class="col-sm-12 text-left">
                            <!-- <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahsiswa"><i class="feather icon-plus"></i> Tambah</button> -->
                        </div>
                    </div>

                    <div class="card-body">

                       
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr class="text-center" style="">
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Jenis Pembayaran</th>
                                        <th>Tagihan</th>
                                        <th>Dibayar</th>
                                        <th>Tunggakan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datapembayaransiswa as $res){ ?>
                                    <tr class="text-center">
                                        <td><?php echo $no++ ?></td>
                                        <td class="text-left">
                                            <u><strong><?php echo $res->nama_siswa ?></strong></u>
                                            <p>NISN : <?php echo $res->nisn ?></p>
                                        </td>
                                        <td><?php echo $res->nama_kelas ?></td>
                                        <td class="text-center"><div class="badge badge-pill" style="background-color: #0f52ba; color: #ffffff;"><?php echo $res->nama_jenispembayaran ?> <?php echo $res->tahun_jenispembayaran ?></div></td>
                                        <td><div class="badge badge-pill" style="background-color: #075935; color: #ffffff;">Rp.<?php echo number_format($res->biaya_jenispembayaran) ?></div></td>
                                        <td><div class="badge badge-pill" style="background-color: #0B85BA; color: #ffffff;">Rp.<?php echo number_format($res->bayar1+$res->bayar2+$res->bayar3+$res->bayar4+$res->bayar5+$res->bayar6+$res->bayar7+$res->bayar8+$res->bayar9+$res->bayar10+$res->bayar11+$res->bayar12) ?> </div></td>
                                        <td><div class="badge badge-pill" style="background-color: #001936; color: #ffffff;">Rp.<?php echo number_format(($res->biaya_jenispembayaran)-($res->bayar1+$res->bayar2+$res->bayar3+$res->bayar4+$res->bayar5+$res->bayar6+$res->bayar7+$res->bayar8+$res->bayar9+$res->bayar10+$res->bayar11+$res->bayar12)) ?></div></td>
                                        <td><a href="#" data-toggle="modal" data-target="#modal-pembayaranspp<?php echo $res->id_sppdatasiswa ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-credit-card"></i></a></td>
                                    </tr>

                                    <!-- [ Form Edit Data Jurusan ] Start -->
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
                                                    <form action="<?php echo base_url() ?>bendahara/dashboard/bayarspp" method="POST">
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar1">Januari <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar1" value="<?php echo $res->bayar1 ?>">
                                                                    <input type="hidden" class="form-control" name="id_sppdatasiswa" value="<?php echo $res->id_sppdatasiswa ?>" >
                                                                    <input type="hidden" class="form-control" name="kode_pembayaran" value="<?php echo $res->kode_pembayaran ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar2">Februari <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar2" value="<?php echo $res->bayar2 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar3">Maret <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar3" value="<?php echo $res->bayar3 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar4">April <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar4" value="<?php echo $res->bayar4 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar5">Mei <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar5" value="<?php echo $res->bayar5 ?>">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar6">Juni <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar6" value="<?php echo $res->bayar6 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar7">Juli <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar7" value="<?php echo $res->bayar7 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar8">Agustus <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar8" value="<?php echo $res->bayar8 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar9">September <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar9" value="<?php echo $res->bayar9 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar10">Oktober <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar10" value="<?php echo $res->bayar10 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar11">November <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar11" value="<?php echo $res->bayar11 ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="bayar12">Desember <?php echo $res->tahun_jenispembayaran ?> </label>
                                                                    <input type="number" class="form-control" name="bayar12" value="<?php echo $res->bayar12 ?>">
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







           

<!-- [ Main Content ] end -->