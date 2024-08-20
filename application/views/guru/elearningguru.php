


        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Dashboard Tugas </h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Guru</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Daftar Tugas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->

                <!-- [ Main Content ] start -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-lock mr-1"></i>Dashboard Tugas</h5>
                        </div>
                        <div class="card-body topic-name">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="d-inline-block mb-0">Tugas Terbaru</h4>
                                </div>
                            </div>
                        </div>

                        <div class="bg-light p-3">
                            <div class="row align-items-center">
                                <div class="col-md-12 btn-page">
                                    <button type="button" class="btn btn-secondary text-uppercase" data-toggle="modal" data-target="#modal-report"><i class="mr-2 feather icon-plus"></i>Tambah Tugas</button>
                                </div>
                            </div>
                        </div>

                        <?php $no = 1; foreach($dataelearningtugas as $res) { ?>
                        <div class="card-body hd-detail hdd-admin border-bottom">
                            <div class="row">
                                <div class="col-auto text-center">
                                    <img class="media-object wid-60 img-radius mb-2" src="<?php echo base_url() ?>resources/images/pengguna/default.png" alt="Generic placeholder image ">  
                                </div>

                                <div class="col">
                                    <div class="comment-top">
                                        <h4><?php echo $res->nama_guru ?> <small class="text-muted f-w-400"><?php echo $res->tugas_nama ?> (<?php echo $res->nama_kelas ?>) - Durasi Waktu <?php echo $res->tugas_waktu ?> Menit</small></h4>
                                        <p><?php echo $res->tugas_create ?></p>
                                    </div>
                                   


                               
                                    <div class="card">
                                        <blockquote class="blockquote mb-0 card-body">
                                        <p><?php echo $res->tugas_keterangan ?></p>
                                            <footer class="blockquote-footer">
                                                <small class="text-muted">Lembar Tugas E-Learning<cite title="Source Title"></cite></small>
                                            </footer>
                                        </blockquote>
                                    </div>
                                        


                                </div>

                                <div class="col-auto pl-0 col-right">
                                    <div class="card-body text-center">
                                        <ul class="list-unstyled mb-0">
                                      
                                            <li class="d-inline-block f-20"><a href="<?php echo base_url() ?>guru/dashboard/hapusdatatugas/<?php echo $res->id_elearningtugas ?>"><i class="feather icon-trash-2 "></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>








                <div class="col-lg-4">
                    <div class="card hdd-right-inner">
                        <div class="card-header">
                            <h5>Ticket Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success d-block text-center text-uppercase"><i class="feather icon-check-circle mr-2"></i>Verified Purchase</div>
                            <div class="select-block">
                                <select class="js-status-multiple col-sm-12">
                                    <option></option>
                                    <option>Open</option>
                                    <option>Close</option>
                                    <option>CLosed Forever</option>
                                </select>
                                <select class="js-assigned-multiple col-sm-12">
                                    <option></option>
                                    <option value="avatar-5">Jack Pall</option>
                                    <option value="avatar-4">Liza Mac</option>
                                    <option value="avatar-3">Lina Hop</option>
                                    <option value="avatar-2">Sam Hunk</option>
                                    <option value="avatar-1">Jhon White</option>
                                </select>
                                <select class="js-category-multiple col-sm-12">
                                    <option></option>
                                    <option value="prod-1">Able Admin</option>
                                    <option value="prod-2">Guru Dash</option>
                                    <option value="prod-3">Able pro</option>
                                    <option value="prod-4">Able Dash</option>
                                    <option value="prod-5">Dash Able</option>
                                </select>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <label class="mb-0 wid-100">Customer</label>
                                    <div class="media-body">
                                        <p class="mb-0"><img src="assets/images/user/avatar-5.jpg" alt="" class="wid-20 rounded mr-1 img-fluid"><a href="#">Jack Pall</a></p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <label class="mb-0 wid-100">Contact</label>
                                    <div class="media-body">
                                        <p class="mb-0"><i class="feather icon-mail mr-1"></i><a href="#">mail@mail.com</a></p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <label class="mb-0 wid-100">Category</label>
                                    <div class="media-body">
                                        <p class="mb-0"><img src="assets/images/ticket/p1.jpg" alt="" class="wid-20 rounded mr-1 img-fluid"><a href="#">Alpha pro</a></p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <label class="mb-0 wid-100">Assigned</label>
                                    <div class="media-body">
                                        <p class="mb-0"><img src="assets/images/user/avatar-4.jpg" alt="" class="wid-20 rounded mr-1 img-fluid"><a href="#">Lina Hop</a></p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <label class="mb-0 wid-100">Created</label>
                                    <div class="media-body">
                                        <p class="mb-0"><i class="feather icon-calendar mr-1"></i><label class="mb-0">Date</label></p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <label class="mb-0 wid-100">Response</label>
                                    <div class="media-body">
                                        <p class="mb-0"><i class="feather icon-clock mr-1"></i><label class="mb-0">Time</label></p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3">
                                <button type="button" class="btn btn-primary"><i class="m-r-5 feather icon-thumbs-up"></i>Make Private</button>
                                <button type="button" class="btn btn-danger"><i class="m-r-5 feather icon-trash-2"></i>Delete</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <!-- [ Main Content ] end -->




            <!-- [ Start Modal Tambah ]  -->
            <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Tugas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="<?php echo base_url() ?>guru/dashboard/simpandatatugas" method="post" enctype="multipart/form-data" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tugas_nama">Judul Tugas</label>
                                        <input type="text" class="form-control" id="tugas_nama" name="tugas_nama" placeholder="Tugas Aljabar">
                                       
                                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $this->session->userdata('user_id'); ?>">
                                        <input type="hidden" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $this->session->userdata('user_nama'); ?>">
                                        <input type="hidden" class="form-control" id="tugas_create" name="tugas_create" value="<?php function 
                                        tgl_indo($tanggal){
                                            $bulan = array (
                                                1 =>   'Januari',
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
                                        } echo tgl_indo(date('Y-m-d')); ?> | <?php echo date("h:i:s"); ?>">
                                    </div>
                                </div>



                                <div class="col-xl-4 col-md-6 mb-5">
                                    <label class="floating-label" for="kelas">Tugas Untuk Kelas</label>
                                    <select class="form-control" id="kelas" name="kelas">
                                        <?php foreach ($datakelas as $key): ?>
                                        <option value="<?php echo $key->kode_kelas ?>"><?php echo $key->nama_kelas ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>


                   


                                <div class="col-md-12">
                                <div class="form-group">
                                       <label for="exampleFormControlTextarea1">Keterangan Tugas</label>
                                    <textarea name="tugas_keterangan" id="classic-editor">
                                            <p>Tulis Keterangan anda disini.......</p>
                                         
                                    </textarea>
                                    </div>
                                </div>


                              

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Waktu Tugas</label>
                                        <input type="number" class="form-control" id="tugas_waktu" name="tugas_waktu" placeholder="Dalam Menit ">
                                    </div>
                                </div>


            
                                <div class="col-sm-12">
                                    <button class="btn btn-info" id="pnotify-success">Simpan</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





