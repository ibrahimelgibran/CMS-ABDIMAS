    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tema Smartschool</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Setting</a></li>
                                <li class="breadcrumb-item"><a href="#!">Tema Bawaan</a></li>
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
                            <h5>Daftar Tema </h5>
                            <img style="width:60px;30px;" src="<?php echo base_url() ?>image/tema/1.png">
                            <img style="width:60px;30px;" src="<?php echo base_url() ?>image/tema/2.png">
                            <img style="width:60px;30px;" src="<?php echo base_url() ?>image/tema/3.png">
                            <img style="width:60px;30px;" src="<?php echo base_url() ?>image/tema/4.png">
                            <img style="width:60px;30px;" src="<?php echo base_url() ?>image/tema/5.png">
                            <img style="width:60px;30px;" src="<?php echo base_url() ?>image/tema/6.png">
                        </div>

                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-sm-12 text-right">
                                </div>
                            </div>
                                    
                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0"">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Tema</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($datatema as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td>
                                                <div class="col-sm-3">
                                                    <div class="doc-img background-color flat">
                                                        <a href="#!" data-value="background-<?php echo $res->style ?>"><span></span><span></span></a>
                                                    </div>
                                                </div>
                                            </td>    
                                            <td class="text-center"><?php echo $res->status ?></td>        
                                            <td class="text-center">
                                                <a href="<?php echo base_url() ?>pengaturan/edittema/<?php echo $res->id_tema ?>" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_tema ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                                    
                                    <!-- Update Data Pengguna Start -->  
                                    <div class="modal fade" id="modal-report2<?php echo $res->id_tema ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tema</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>pengaturan/updatetema" method="POST">
                                                        <div class="row">
                                                            
                                                            <input type="hidden" class="form-control" name="id_tema" value="<?php echo $res->id_tema ?>" >
                                                            <div class="col-xl-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="style">Tema</label>
                                                                    <select class="mb-3 form-control" name="style" id="style">
                                                                        <option value="red">Merah</option>
                                                                        <option value="blue">Biru</option>
                                                                        <option value="purple">Ungu</option>
                                                                        <option value="info">Biru Patel</option>
                                                                        <option value="green">Hijau</option>
                                                                        <option value="dark">Gelap</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <button class="btn btn-info">Terapkan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Update Data Pengguna End -->
                                    <?php } ?>
                                </table>
                            </div>
                        </div>      
                    </div>
                </div>
                
            </div>



            <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>pengaturan/simpanpengguna" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                            <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $this->session->userdata('user_id'); ?>" >
                            <div class="row">
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="nama_user">Nama</label>
                                        <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama Pengguna">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="password">Password</label>
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="notelp">No Telp</label>
                                        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Nomor Telp">
                                    </div>
                                </div>


                                <div class="col-xl-12 col-md-6 mb-5">
                                <div class="form-group">
                                <label class="floating-label" for="role">Role</label>
                                    <select class="mb-3 form-control" name="role" id="role">
                                            <option value="admin">ADMIN</option>
                                            <option value="operator">OPERATOR</option>
                                            <option value="bendaharabos">BENDAHARA BOS</option>
                                            <option value="bk">BAGIAN BK</option>
                                            <option value="sarpras">BAGIAN SARPRAS</option>
                                            <option value="resepsionis">RESEPSIONIS</option>
                                            <option value="perpustakaan">PERPUSTAKAAN</option>
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