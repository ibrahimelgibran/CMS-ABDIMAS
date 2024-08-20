
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
                            <li class="breadcrumb-item"><a href="#!">Semester 6</a></li>
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
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $no = 1; foreach($datasiswa as $res){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td>
                                        <div class="d-inline-block align-middle">
                                            <img src="<?php echo base_url() ?>resources/images/nilai.png" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            <div class="d-inline-block">
                                                <h6 class="m-b-0"><?php echo $res->nama_lengkap ?></h6>
                                                <p class="m-b-0"><strong><?php echo $res->siswa_kelas ?> / <?php echo $res->siswa_nomorabsen ?></strong></p>
                                            </div>
                                        </div>
                                    </td>

                                    
                                    <td class="text-center">
                                
                                        <a href="<?php echo base_url() ?>master/cetak_rapor6/<?php echo $res->id_pendaftar ?>" class="btn btn-icon btn-primary btn-sm"><i class="feather icon-printer"></i></a>
                                    </td>
                                </tr>

                             
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





