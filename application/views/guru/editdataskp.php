    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data SKP</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Guru</a></li>
                                <li class="breadcrumb-item"><a href="#!">Data E-SKP</a></li>
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
                                            <th>Deskripsi Kegiatan</th>
                                            <th>Tahun</th>
                                            <th>Id E-Kinerja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($data_skp as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td class="text-center"><?php echo $res->nama_kegiatan ?></td> 
                                            <td class="text-center"><?php echo $res->ekinerja ?></td> 
                                            <td class="text-center">
                                                <a href="<?php echo base_url() ?>guru/dashboard/hapusskp/<?php echo $res->id_skp ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
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
                        <h5 class="modal-title">Tambah Data E-SKP</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>guru/dashboard/simpanskp" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                            <div class="row">
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $this->session->userdata('user_id'); ?>">
                                        <input type="hidden" class="form-control" id="ekinerja" name="ekinerja" value="<?php foreach($data_ekinerja as $kinerja){ ?> <?php echo $kinerja->id_ekinerja ?> <?php } ?>">
                                    </div>
                                </div>
                                

                              

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="nama_kegiatan">Kegiatan Tahunan</label>
                                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="targetkuantitas">Target Kuantitas</label>
                                        <input type="number" class="form-control" id="targetkuantitas" name="targetkuantitas" autocomplete="off" required="" oninvalid="this.setCustomValidity('Niali Harus diisi')" oninput="setCustomValidity('')">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="kuantitaswaktu">Kuantitas Waktu</label>
                                        <select class="form-control" id="kuantitaswaktu" name="kuantitaswaktu">
                                            <option value="1">1 Hari</option>
                                            <option value="7">1 Minggu</option>
                                            <option value="30">1 Bulan</option>
                                            <option value="360">1 Tahun</option>
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