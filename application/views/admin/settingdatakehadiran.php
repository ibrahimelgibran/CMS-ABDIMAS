


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
                            <h5 class="m-b-10">Setting Jadwal Absen</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Jadwal</a></li>
                            <li class="breadcrumb-item"><a href="#!">Jadwal Presensi</a></li>
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
                        <h5>Waktu Saat ini </h5>
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
                            <div class="col-xl-6 alert alert-danger">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('hapus_berhasil'); ?>  
                            </div>  
                          <?php } ?>  

                          <?php if($this->session->flashdata('tambah_berhasil')){ ?>  
                            <div class="col-xl-6 alert alert-info">  
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
                                <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Jadwal</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- subscribe end -->

            
             <!-- prject ,team member start -->
             <div class="col-xl-4 col-md-12">
                <div class="card table-card">
                    <div class="card-header"> 
                        <h5>Keterangan Jam Kerja (Work Code): </h5>
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
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="4" class="bg-danger text-white">Pemberitahuan</th>

                                    </tr>
                                </thead>

                                <tbody  class="text-left">
                                    <tr>
      
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Jadwal Presensi</h5>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Hari</th>
                                        <th>Absen Masuk Awal</th>
                                        <th>Absen Masuk Akhir</th>
                                        <th>Absen Pulang Awal</th>
                                        <th>Absen Pulang Akhir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($settingdatakehadiran as $res)
                                    { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $res->hari ?></td>
                                        <td class="text-center" style="color:green;"><Strong><?php echo $res->jam_masuk_awal ?></Strong></td>
                                        <td class="text-center" style="color:green;"><strong><?php echo $res->jam_masuk_akhir ?></strong></label></td>
                                        <td class="text-center" style="color:blue;"><strong><?php echo $res->jam_pulang_awal ?></strong></label></td>
                                        <td class="text-center" style="color:blue;"><strong><?php echo $res->jam_pulang_akhir ?></strong></label></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>master/hapussettingkehadiran/<?php echo $res->id_jadwal ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                
                                   
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
                <h5 class="modal-title">Tambah Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpan_settingkehadiran" method="post" enctype="multipart/form-data" role="form">
                <input type="hidden" class="form-control" id="id_jadwal" name="id_jadwal" >

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="hari">Hari</label>
                                <select class="form-control" id="hari" name="hari">
                                    <option>SENIN</option>
                                    <option>SELASA</option>
                                    <option>RABU</option>
                                    <option>KAMIS</option>
                                    <option>JUMAT</option>
                                    <option>SABTU</option>
                                    <option>MINGGU</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="jam_masuk_awal">Absen Masuk Awal</label>
                                <input type="text" class="form-control" id="jam_masuk_awal" name="jam_masuk_awal" placeholder="06:00:00">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="jam_masuk_akhir">Absen Masuk Akhir</label>
                                <input type="text" class="form-control" id="jam_masuk_akhir" name="jam_masuk_akhir" placeholder="07:00:00">
                            </div>
                        </div>

                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="jam_pulang_awal">Absen Masuk Awal</label>
                                <input type="text" class="form-control" id="jam_pulang_awal" name="jam_pulang_awal" placeholder="14:00:00">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="jam_pulang_akhir">Absen Masuk Akhir</label>
                                <input type="text" class="form-control" id="jam_pulang_akhir" name="jam_pulang_akhir" placeholder="15:00:00">
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


