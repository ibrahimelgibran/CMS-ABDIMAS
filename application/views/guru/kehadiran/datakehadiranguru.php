


<script>

var serverClock = jQuery("#jamServer");
if (serverClock.length > 0) {
    showServerTime(serverClock, serverClock.text());
}
 
function showServerTime(obj, time) {
    var parts   = time.split(":"),
        newTime = new Date();

    newTime.setHours(parseInt(parts[0], 10));
    newTime.setMinutes(parseInt(parts[1], 10));
    newTime.setSeconds(parseInt(parts[2], 10));

    var timeDifference  = new Date().getTime() - newTime.getTime();

    var methods = { 
        displayTime: function () {
            var now = new Date(new Date().getTime() - timeDifference);
            obj.text([
                methods.leadZeros(now.getHours(), 2),
                methods.leadZeros(now.getMinutes(), 2),
                methods.leadZeros(now.getSeconds(), 2)
            ].join(":"));
            setTimeout(methods.displayTime, 500);
        },
 
        leadZeros: function (time, width) {
            while (String(time).length < width) {
                time = "0" + time;
            }
            return time;
        }
    }
    methods.displayTime();
}

</script>


<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Kehadiran Guru</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Kehadiran Guru</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Kehadiran</a></li>
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
                    <div class="card-header">
                        <h5>Daftar Kehadiran </h5>
                        <br>
                        <?php 
                        $tanggal = mktime(date('m'), date("d"), date('Y')); echo "Tanggal : <b> " . date("d-m-Y", 
                        $tanggal ) . "</b>"; date_default_timezone_set("Asia/Jakarta"); 
                        ?>

                            <!-- Menampilkan Jam (Aktif) -->
                            <b id="clock"></b>
                            <script type="text/javascript">
                            
                            function showTime() {
                                var a_p = "";
                                var today = new Date();
                                var curr_hour = today.getHours();
                                var curr_minute = today.getMinutes();
                                var curr_second = today.getSeconds();
                                if (curr_hour < 12) {
                                    a_p = "AM";
                                } else {
                                    a_p = "PM";
                                }
                                if (curr_hour == 0) {
                                    curr_hour = 24;
                                }
                                if (curr_hour > 24) {
                                    curr_hour = curr_hour - 24;
                                }
                                curr_hour = checkTime(curr_hour);
                                curr_minute = checkTime(curr_minute);
                                curr_second = checkTime(curr_second);
                            document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                                }
                            
                            function checkTime(i) {
                                if (i < 10) {
                                    i = "0" + i;
                                }
                                return i;
                            }
                            setInterval(showTime, 500);
                         
                            </script>


                    <br>



                   <?php if($this->session->flashdata('hapus_berhasil')){ ?>  
                            <div class="alert alert-danger">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('hapus_berhasil'); ?>  
                            </div>  
                          <?php } ?>  

                          <?php if($this->session->flashdata('tambah_berhasil')){ ?>  
                            <div class="alert alert-info">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('tambah_berhasil'); ?>  
                            </div>  
                          <?php } ?>  

                          
                    </div>

                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Absen Masuk</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->

            
             <!-- prject ,team member start -->

                   
    
                            

                      
                               
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Rekap Kehadiran</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Tanggal Presensi</th>
                                        <th>Presensi Masuk</th>
                                        <th>Catatan</th>
                                        <th>Presensi Pulang</th>
                                        <th>Tombol Aksi</th>
                                    </tr>
                                </thead><?php foreach($jadwalkehadiranguru as $ress){ ?><?php } ?>
                                <tbody><?php $no = 1; foreach($datakehadiranguru as $res){ ?>  
                                        
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $res->id_hari ?> - <?php echo $res->tanggalpresensi ?></td>
                                        <td class="text-center" style="color:blue;"><strong><u><?php echo $res->stempel_presensi ?></u></Strong></td>
                                        <td><strong>
                                                 <?php 
                                                    $absen = strtotime($res->stempel_presensi);
                                                    $datang = strtotime($ress->jam_masuk_akhir);
                                                    $plus = ("3600");
                                                    $diff  = $datang - $absen ;
                                                    $jam   = floor($diff / (60 * 60));
                                                    $menit = $diff - ( $jam * (60 * 60) );
                                                    $detik = $diff % 60;
                                                    echo  $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit, ' . $detik . ' detik';
                                                ?>
                                            </strong>  </td>
                                        <td class="text-center" style="color:red;"><strong><?php echo $res->out_presensi ?></strong></label></td>
                                        <td class="text-center"><a href="<?php echo base_url() ?>guru/dashboard/editkehadiranguru/<?php echo $res->id_kehadiran ?>" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_kehadiran ?>" class="btn btn-dark btn-sm"><i class="feather icon-plus"></i>Pulang</a></td>
                                    </tr>
                                </tbody>
                                
                                <div class="modal fade" id="modal-report2<?php echo $res->id_kehadiran ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Presensi Pulang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url() ?>guru/dashboard/updatekehadiranguru" method="POST">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="out_presensi">Waktu Absen</label>
                                                                <input type="text" class="form-control" name="out_presensi" value="<?php echo date("H:i:s"); ?>" readonly>
                                                                <input type="hidden" class="form-control" name="id_kehadiran" value="<?php echo $res->id_kehadiran ?>" >
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 text-center">
                                                            <button class="btn btn-primary">Absen Sekarang</button>
                                                        </div>
                                                    </div>
                                                </form>
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
            
            
            <!-- prject ,team member start -->
        </div>
        <!-- [ Main Content ] end -->
    </div>

</div>









<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Presensi Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>guru/dashboard/simpankehadiranguru" method="post" enctype="multipart/form-data" role="form">
                <input type="hidden" class="form-control" id="id_siswa" name="id_siswa" value="<?php echo $this->session->userdata('user_id'); ?>" >

                    <div class="row">
                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nama_guru">Nama</label>
                                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $this->session->userdata("user_nama") ?>" readonly>
                                <input type="hidden" class="form-control" id="status_presensi" name="status_presensi" value="Hadir">
                              
                                
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="tanggalpresensi">Tanggal</label>
                                <input type="hidden" class="form-control" id="stempel_presensi" name="stempel_presensi" value="<?php echo  date("H:i:s"); ?>" readonly>
                                <input type="text" class="form-control" id="tanggalpresensi" name="tanggalpresensi" value="<?php echo date("d-m-Y"); ?>" readonly>
                                <input type="hidden" class="form-control" id="id_hari" name="id_hari" value="<?php
                                    $tanggal = '2017-01-31';
                                    $hari   = date('l', microtime($tanggal));
                                    $hari_indonesia = array('Monday'  => 'SENIN',
                                        'Tuesday'  => 'SELASA',
                                        'Wednesday' => 'RABU',
                                        'Thursday' => 'KAMIS',
                                        'Friday' => 'JUMAT',
                                        'Saturday' => 'SABTU',
                                        'Sunday' => 'MINGGU');
                                    echo $hari_indonesia[$hari];
                                    // Tanggal 2017-01-31 adalah hari Senin
                                    ?>
                                " readonly>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="jenis_presensi">Jenis Presensi</label>
                                <select class="form-control" id="jenis_presensi" name="jenis_presensi">
                                    <option>WFO</option>
                                    <option>WFH</option>
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


