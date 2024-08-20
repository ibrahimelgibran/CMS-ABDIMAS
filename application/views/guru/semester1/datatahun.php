<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Daftar Tahun </h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Tahun</a></li>
                            <li class="breadcrumb-item"><a href="#!">Semester 1</a></li>
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
                    <div class="card-body">
                    
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Tahun</th>
                                        <th>Lihat</th>
                                      
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datatahun as $res){ ?>
                                    <tr class="text-center">
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $res->tahun ?></td>
                                        <td class="text-center"><a href="<?php echo base_url() ?>guru/dashboard/datakelasmengajarsmt1/<?php echo $res->tahun ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-search"></i></a></td>
                                        
                                    </tr>

                                    <!-- [ Form Edit Data Jurusan ] Start -->
                                    <div class="modal fade" id="modal-edittahun<?php echo $res->id_raportahun ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Tahun</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>guru/dashboard/updateraportahun" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="tahun">Tahun</label>
                                                                    <input type="number" class="form-control" name="tahun" value="<?php echo $res->tahun ?>" required>
                                                                    <input type="hidden" class="form-control" name="id_raportahun" value="<?php echo $res->id_raportahun ?>" >
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





<div class="modal fade" id="modal-tambahjenispembayaran" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tahun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>guru/dashboard/simpantahunajaran" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="tahun">Tahun Ajaran</label>
                                <input type="number" class="form-control" name="tahun" placeholder=" " required>
                                <input type="hidden" class="form-control" id="nip_guru" name="nip_guru" value="<?php echo $this->session->userdata('user_nip'); ?>">
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



<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Data Siswa </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() ?>bendahara/dashboard/uploadjenispembayaransiswa" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <h5>Masukkan Template Pembayaran Siswa</h5>
                        </div>
                    
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon"></label>
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