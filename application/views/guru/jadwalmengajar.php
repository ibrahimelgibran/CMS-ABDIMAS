    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Jadwal Mengajar</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Guru</a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Jadwal Mengajar</a></li>
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
                            <div class="row align-items-center m-l-0">
                            </div>
                                    
                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($datahari as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td class="text-center"><?php echo $res->nama_hari ?></td>  
                                           
                                            <td class="text-center">
                                                <a href="<?php echo base_url() ?>guru/dashboard/editjadwalmengajar/<?php echo $res->id_pengajar ?>" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_pengajar ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-search"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                                    

                                    <div class="modal fade" id="modal-report2<?php echo $res->id_pengajar ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Jadwal Mengajar</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>guru/dashboard/updatejadwalmengajar" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="mapel_jadwal">Mata Pelajaran</label>
                                                                    <input type="text" class="form-control" id="mapel_jadwal" name="mapel_jadwal" value="<?php echo $res->mapel_jadwal ?>" autocomplete="off" readonly>
                                                                    <input type="hidden" class="form-control" name="id_pengajar" value="<?php echo $res->id_pengajar ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="hari_jadwal">Hari</label>
                                                                <select class="form-control" id="hari_jadwal" name="hari_jadwal">
                                                                    <option value="<?php echo $res->hari_jadwal ?>"><span class="font-weight-bolder">(<?php echo $res->hari_jadwal ?>)</span></option>
                                                                    <?php foreach ($datahari as $key): ?>
                                                                    <option value="<?php echo $key->id_hari ?>"><?php echo $key->nama_hari ?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                                </div>
                                                            </div>

                                                   
                                                            <div class="col-xl-12">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="kelas_jadwal">Kelas</label>
                                                                <select class="form-control" id="kelas_jadwal" name="kelas_jadwal">
                                                                    <option value="<?php echo $res->kelas_jadwal ?>"><span class="font-weight-bolder">(<?php echo $res->kelas_jadwal ?>)</span></option>
                                                                    <?php foreach ($datakelas as $key): ?>
                                                                    <option value="<?php echo $key->nama_kelas ?>"><?php echo $key->nama_kelas ?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="awaljam_jadwal">Mulai Jam Ke -</label>
                                                                <select class="form-control" id="awaljam_jadwal" name="awaljam_jadwal">
                                                                    <option value="<?php echo $res->awaljam_jadwal ?>"><span class="font-weight-bolder">(<?php echo $res->awaljam_jadwal ?>)</span></option>
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
                                                                </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="akhirjam_jadwal">Sampai JamKe -</label>
                                                                <select class="form-control" id="akhirjam_jadwal" name="akhirjam_jadwal">
                                                                    <option value="<?php echo $res->akhirjam_jadwal ?>"><span class="font-weight-bolder">(<?php echo $res->akhirjam_jadwal ?>)</span></option>
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
                                                                </select>
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


                                    <div class="modal fade" id="modal-play<?php echo $res->id_buku ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><?php echo $res->nama_buku ?> Kelas <?php echo $res->kelas_buku ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                <iframe src="<?php echo base_url() ?>file/filebuku/<?php echo $res->file_buku ?>" width="840" height="680" allow="autoplay"></iframe>
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
    <!-- [ Main Content ] end -->