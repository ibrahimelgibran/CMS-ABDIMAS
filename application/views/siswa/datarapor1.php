
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
                            <li class="breadcrumb-item"><a href="#!">Semester 1</a></li>
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
                            <button class="button btn btn-outline-secondary my-1 active" data-filter="*">Data Rapor</button>
                      
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
                                            <h4 class="m-0 text-bold">Nilai Rapor</h4>
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
                                                    <th>Mapel</th>
                                                    <th colspan="2">Nilai</th>
                                                  
                                                </tr>
                                                <tr class="text-center">
                                                    <th></th>
                                                 
                                                    <th>Pengetahuan</th>
                                                    <th>Keterampilan</th>
                                             
                                                </tr>
                                            </thead>
                                            <tbody><?php $no = 1; foreach($datarapor1 as $res){ ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++ ?></td>
                                                    <td class="text-center"><?php echo $res->nama_mapel ?></td>
                                                    <td class="text-center"><?php echo $res->nilaipengetahuan ?></td>
                                                    <td class="text-center"><?php echo $res->nilaiketerampilan ?></td>
                                                   
                                                </tr>
                                                



                                                <div class="modal fade" id="modal-report2<?php echo $res->id_rapor ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Nilai</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?php echo base_url() ?>master/updaterapor1" method="POST">
                                                                    <div class="row">

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="nilaipengetahuan">Nilai Pengetahuan</label>
                                                                                <input type="text" class="form-control" name="nilaipengetahuan" value="<?php echo $res->nilaipengetahuan ?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="nilaiketerampilan">Nilai Keterampilan</label>
                                                                                <input type="text" class="form-control" name="nilaiketerampilan" value="<?php echo $res->nilaiketerampilan ?>">
                                                                                <input type="hidden" class="form-control" name="id_rapor" value="<?php echo $res->id_rapor ?>" >
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



