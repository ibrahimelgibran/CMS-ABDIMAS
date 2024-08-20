    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Kelas Mengajar</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Guru</a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Kelas Mengajar</a></li>
                            </ul>
                        </div>
                    </div>        
                </div>
            </div>



            <div class="row">
                <div class="col-md-12">
                    <!-- Pemberitahuan Berhasil atau gagal import nilai siswa -->     
                    <?php if($this->session->flashdata('import_berhasil')){ ?>  
                        <div class="alert alert-info">  
                        <a href="#" class="close" data-dismiss="alert">&times;</a>  
                        <strong></strong> <?php echo $this->session->flashdata('import_berhasil'); ?>  
                        </div>  
                    <?php } ?> 
                    <div class="card">
                    
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahkelasmengajar"><i class="feather icon-plus"></i> Kelas</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Download Template</th>
                                            <th>Upload Nilai</th>
                                            
                                            <th>Lihat Nilai</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($datakelasmengajar as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            
                                            <td class="text-center"><Strong><?php echo $res->nama_kelas ?></strong></td>     
                                            <td class="text-center"><?php echo $res->nama_semester ?></td>
                                            <td class="text-center"><?php echo $res->nama_mapel ?></td> 
                                            <td class="text-center"><a href="<?php echo base_url() ?>guru/dashboard/downloadtemplatemapel/<?php echo $res->id_rapormapel ?>/<?php echo $res->kode_kelas ?>" class="btn btn-icon btn-warning btn-sm"><br><i class="feather icon-download"></i></a></td>
                                            <td class="text-center"><a href="#" class="btn btn-primary btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-import"><i class="fa fa-upload"></i> Impor Nilai</a></td>  

                                            <td class="text-center"><a href="<?php echo base_url() ?>guru/dashboard/nilaismt1/<?php echo $res->kode_mapel ?>/<?php echo $res->kode_kelas ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-search"></i></a></td>
                                         
                                        </tr>
                                    </tbody>
                                                    

                                    <div class="modal fade" id="modal-report2<?php echo $res->id_pengajar ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data E-Kinerja</h5>
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



            <div class="modal fade" id="modal-tambahkelasmengajar" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>guru/dashboard/simpankelasmengajar" method="post" enctype="multipart/form-data" role="form">
                            <div class="row">
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="nip_guru" name="nip_guru" value="<?php echo $this->session->userdata('user_nip'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="kelas_guru">Kelas Mengajar</label>
                                    <select class="form-control" id="kelas_guru" name="kelas_guru">
                                        <?php foreach ($datakelas as $key): ?>
                                        <option value="<?php echo $key->kode_kelas?>"><?php echo $key->nama_kelas ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="mapel_guru">Mata Pelajaran</label>
                                    <select class="form-control" id="mapel_guru" name="mapel_guru">
                                        <?php foreach ($datamapel as $key): ?>
                                        <option value="<?php echo $key->kode_mapel?>"><?php echo $key->nama_mapel ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="semester_guru">Semester</label>
                                    <select class="form-control" id="semester_guru" name="semester_guru">
                                        <?php foreach ($datasemester as $key): ?>
                                        <option value="<?php echo $key->kode_semester?>"><?php echo $key->nama_semester ?></option>
                                        <?php endforeach ?>
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


    
<?php function tgl_indo($tanggal){
    $bulan = array (
        1 =>   
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
    
?>





<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Nilai </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() ?>guru/dashboard/uploadnilaismt1" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <h5>Masukkan Template Nilai</h5>
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