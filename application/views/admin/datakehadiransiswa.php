

        <script>
            var serverClock           = jQuery("#jamServer");
            if (serverClock.length > 0) {
                showServerTime(serverClock, serverClock.text());
            }
            
            function showServerTime(obj, time) {
                var parts             = time.split(":"),
                    newTime           = new Date();

                newTime.setHours(parseInt(parts[0], 10));
                newTime.setMinutes(parseInt(parts[1], 10));
                newTime.setSeconds(parseInt(parts[2], 10));

                var timeDifference    = new Date().getTime() - newTime.getTime();

                var methods = { 
                    displayTime: function () {
                        var now       = new Date(new Date().getTime() - timeDifference);
                        obj.text([
                            methods.leadZeros(now.getHours(), 2),
                            methods.leadZeros(now.getMinutes(), 2),
                            methods.leadZeros(now.getSeconds(), 2)
                        ].join(":"));
                        setTimeout(methods.displayTime, 500);
                    },
            
                    leadZeros: function (time, width) {
                        while (String(time).length < width) {
                            time      = "0" + time;
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
                                    <h5 class="m-b-10">Data Kehadiran Siswa</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Kehadiran Siswa</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Data Kehadiran</a></li>
                                </ul>
                            </div>
                        </div>        
                    </div>
                </div>


                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Daftar Kehadiran </h5>
                                <br>
                                <?php $tanggal = mktime(date('m'), date("d"), date('Y')); echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>"; date_default_timezone_set("Asia/Jakarta"); ?>
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
                                <div class="col-sm-12 text-right">
                                    <a href="<?php echo base_url() ?>master/exportpresensisiswa" class="btn btn-dark btn-sm btn-round has-ripple" ><i class="fa fa-download"></i> Export Presensi</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Hari</th>
                                                <th>Tanggal Presensi</th>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Nomor Absen</th>
                                                <th>Status Presensi</th>
                                                <th>Jenis Presensi</th>
                                                <th>Masuk</th>
                                                <th>Pulang</th>
                                                <th>Cepat / Terlambat (-)</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead> <?php foreach($jadwalkehadiransiswa as $ress){ ?> <?php } ?>
                                        
                                        <tbody>
                                            <?php $no = 1; foreach($datakehadiransiswa as $res){ ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++ ?></td>
                                                <td><?php echo $res->id_hari ?></td>
                                                <td class="text-center" style="color:red"><?php echo $res->tanggalpresensi ?></td>
                                                <td><?php echo $res->nama_siswa ?></td>
                                                <td class="text-center"><?php echo $res->kelas ?></td>
                                                <td class="text-center"><?php echo $res->nomorabsen ?></td>
                                                <td class="text-center" style="color:green"><strong><?php echo $res->status_presensi ?></strong></td>
                                                <td class="text-center"><strong><?php echo $res->jenis_presensi ?></strong></td>
                                                <td class="text-center" style="color:blue"><?php echo $res->stempel_presensi ?></td>
                                                <td class="text-center" style="color:blue"><?php echo $res->out_presensi ?></td>
                                                <td class="text-center">
                                                    <strong>
                                                        <?php 
                                                            $absen = strtotime($res->stempel_presensi);
                                                            $datang = strtotime($ress->jam_masuk_akhir);
                                                            $plus = ("3600");
                                                            $diff  = $datang - $absen + $plus;
                                                            $jam   = floor($diff / (60 * 60));
                                                            $menit = $diff - ( $jam * (60 * 60) );
                                                            $detik = $diff % 60;
                                                            echo  $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit, ' . $detik . ' detik';
                                                        ?>
                                                    </strong>                                               
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url() ?>master/hapuskehadiransiswa/<?php echo $res->id_kehadiran ?>" data-type="inverse" data-animation-in="animated fadeInDown" data-animation-out="animated flipOutX" class="btn btn-icon notifications btn-danger btn-sm" onclick="notify()"><i class="feather icon-trash-2"></i></a>
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
