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
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahbuku"><i class="feather icon-plus"></i> Tambah Jurnal</button>
                                </div>
                            </div>
                                    
                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Jam Ke</th>
                                            <th>Kelas</th>
                                            <th>Mapel</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($data_jurnalguru as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td class="text-center"><?php echo $res->hari_jadwal ?> / <?php echo $res->tanggal_jurnal ?></td>   
                                            <td class="text-center"><?php echo $res->awaljam_jadwal ?> - <?php echo $res->akhirjam_jadwal ?></td>  
                                            <td class="text-center"><?php echo $res->kelas_jadwal ?></td>
                                            <td class="text-center"><?php echo $res->mapel_jadwal ?></td>
                                            <td class="text-left"><?php echo $res->deskripsijurnal ?></td>
                                           
                                            <td class="text-center">
                                                <a href="<?php echo base_url() ?>guru/dashboard/editjadwalmengajar/<?php echo $res->id_jurnal ?>" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_pengajar ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                                <a href="<?php echo base_url() ?>guru/dashboard/print_jurnalguru/<?php echo $res->id_jurnal ?>" class="btn btn-icon btn-success btn-sm"><i class="feather icon-printer"></i></a>
                                                <a href="<?php echo base_url() ?>guru/dashboard/hapusjurnalguru/<?php echo $res->id_jurnal ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                                    

                                    <div class="modal fade" id="modal-report2<?php echo $res->id_pengajar ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Jurnal Mengajar</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>guru/dashboard/updatejurnalguru" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="mapel_jadwal">Mata Pelajaran</label>
                                                                    <input type="text" class="form-control" id="mapel_jadwal" name="mapel_jadwal" value="<?php echo $res->mapel_jadwal ?>" autocomplete="off" readonly>
                                                                    <input type="hidden" class="form-control" name="id_jurnal" value="<?php echo $res->id_jurnal ?>" >
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xl-12">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="hari_jadwal">Hari</label>
                                                                <input type="text" class="form-control" id="hari_jadwal" name="hari_jadwal" value="<?php echo $res->hari_jadwal ?>" autocomplete="off" readonly>
                                                                </div>
                                                            </div>

                                                   
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="kelas_jadwal">Kelas</label>
                                                                <input type="text" class="form-control" id="kelas_jadwal" name="kelas_jadwal" value="<?php echo $res->kelas_jadwal ?>" autocomplete="off" readonly>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                <label class="floating-label">Jam Ke</label>
                                                                <input type="text" class="form-control" value="<?php echo $res->awaljam_jadwal ?> - <?php echo $res->akhirjam_jadwal ?>" autocomplete="off" readonly>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            <div class="col-xl-12">
                                                                <div class="form-group">
                                                                <label class="floating-label" for="deskripsijurnal">Deskripsi</label>
                                                                <textarea class="form-control" name="deskripsijurnal" aria-label="With textarea" placeholder="Deskripsi Materi Mengajar"><?php echo $res->deskripsijurnal ?></textarea>
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



            <div class="modal fade" id="modal-tambahbuku" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Jurnal Mengajar Guru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>guru/dashboard/simpanjurnalguru" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                            <div class="row">
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $this->session->userdata('user_id'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="tanggalpresensi">Tanggal</label>
                                        <input type="text" class="form-control" id="tanggal_jurnal" name="tanggal_jurnal" value="<?php echo date("d-m-Y"); ?>" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="id_jurnalguru">Kelas</label>
                                        <select class="form-control" id="id_jurnalguru" name="id_jurnalguru">
                                            <?php foreach ($data_jadwalmengajar as $key): ?>
                                            <option value="<?php echo $key->id_pengajar ?>"> <?php echo $key->mapel_jadwal ?> - Jam (<?php echo $key->awaljam_jadwal ?> -<?php echo $key->akhirjam_jadwal ?>) - <?php echo $key->kelas_jadwal ?> | <?php echo $key->hari_jadwal ?>  </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                
                                 
                                
                                
                                <div class="col-xl-12">
                                    <div class="form-group">
                                    <label class="floating-label" for="deskripsijurnal">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsijurnal" aria-label="With textarea" placeholder="Deskripsi Materi Mengajar"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="bulan">Bulan</label>
                                        <select class="form-control" id="bulan" name="bulan">
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="tahun">Tahun</label>
                                        <select class="form-control" id="tahun" name="tahun">
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            
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
        </div>
    </div>
    <!-- [ Main Content ] end -->