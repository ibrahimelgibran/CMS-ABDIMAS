    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Buku Digital</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Guru</a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Buku Digital</a></li>
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
                                    <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-tambahbuku"><i class="feather icon-plus"></i> Tambah</button>
                                </div>
                            </div>
                                    
                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Judul Buku</th>
                                            <th>Target SKP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($databukudigital as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td class="text-center"><Strong style="color:green;"><?php echo $res->nama_buku ?></strong></td>   
                                            <td class="text-center"><a href="<?php echo base_url() ?>guru/dashboard/editskp/"><button type="button" class="btn btn-info has-ripple"><i class="feather icon-file-plus"></i><span class="ripple ripple-animate" style="height: 48.8594px; width: 48.8594px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: 4.6328px; left: 6.5703px;"></span></button></a></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url() ?>guru/dashboard/hapusekinerja/<?php echo $res->id_ekinerja ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                            
                                            </td>
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



            <div class="modal fade" id="modal-tambahbuku" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Buku Digital</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>guru/dashboard/simpandatabuku" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                            <div class="row">
                            
                                <div class="col-sm-12">
                                    <div class="floating-label">
                                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $this->session->userdata('user_id'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label">Nama Buku</label>
                                        <input type="text" class="form-control" id="dari" name="dari" placeholder="Nama Buku" autocomplete="off" required="" oninvalid="this.setCustomValidity('Tanggal Mulai Target SKP Harus Diisi')" oninput="setCustomValidity('')">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="kelas_guru">Untuk Kelas</label>
                                        <select class="form-control" id="kelas_guru" name="kelas_guru">
                                            <?php foreach ($datakelas as $key): ?>
                                            <option value="<?php echo $key->kode_kelas?>"><?php echo $key->nama_kelas ?></option>
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