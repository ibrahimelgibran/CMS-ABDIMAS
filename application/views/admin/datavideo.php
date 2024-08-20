    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Video Pembelajaran</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Video Pembelajaran</a></li>
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
                                    <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Tambah Video Pembelajaran</button>
                                </div>
                            </div>         
                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0"">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Video Pembelajaran</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($datavideo as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td>                
                                                <div class="d-inline-block align-middle" >
                                                    <img src="https://i.ytimg.com/vi/<?php echo $res->file_video ?>/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&amp;rs=AOn4CLA5PEVmcxHxTYeVmRLNJBg0cn-gxA" alt="user image" style="width:130px;">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0"><?php echo $res->nama_video ?></h6>
                                                        <p class="m-b-0">Untuk Kelas : <?php echo $res->kelas_video ?></p>
                                                    </div>
                                                </div>
                                            </td> 
                                            <td class="text-center"><a class="btn btn-danger" href="<?php echo $res->file_video ?>" data-toggle="modal" data-target="#modal-play<?php echo $res->id_video ?>" role="button">Putar Video</a></a></td> 
                                            <td class="text-center">
                                                <a href="<?php echo base_url() ?>master/editvideo/<?php echo $res->id_video ?>" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_video ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                                <a href="<?php echo base_url() ?>master/hapusvideo/<?php echo $res->id_video ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                                    

                                    <div class="modal fade" id="modal-report2<?php echo $res->id_video ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Video Pembelajaran</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatevideo" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_video">Nama</label>
                                                                    <input type="text" class="form-control" id="nama_video" name="nama_video" value="<?php echo $res->nama_video ?>">
                                                                    <input type="hidden" class="form-control" name="id_video" value="<?php echo $res->id_video ?>" >
                                                                </div>
                                                            </div>
                                                   
                                                            <div class="col-xl-6 col-md-6 mb-5">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="Kelas">Kelas</label>
                                                                    <select class="form-control" id="kelas_video" name="kelas_video">
                                                                        <option value="<?php echo $res->kelas_video ?>">Untuk Kelas <span class="font-weight-bolder">(<?php echo $res->kelas_video ?>)</span></option>
                                                                        <option value="Semua Kelas">Semua Kelas</option>
                                                                        <?php foreach ($datakelas as $key): ?>
                                                                        <option value="<?php echo $key->nama_kelas ?>"><?php echo $key->nama_kelas ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="Kategori">Kategori</label>
                                                                    <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $res->kategori ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="Link">Url / Link</label>
                                                                    <input type="text" class="form-control" id="file_video" name="file_video" value="<?php echo $res->file_video ?>">
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


                                    <div class="modal fade" id="modal-play<?php echo $res->id_video ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><?php echo $res->nama_video ?> Kelas <?php echo $res->kelas_video ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                <iframe src="https://www.youtube.com/embed/<?php echo $res->file_video ?>" width="840" height="680" allow="autoplay"></iframe>
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



            <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Video Pembelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>index.php/master/simpanvideo" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                            <div class="row">
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="nama_video">Nama Video Pembelajaran</label>
                                        <input type="text" class="form-control" id="nama_video" name="nama_video" placeholder="Judul Video Pembelajaran" autocomplete="off">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="kategori">Kategori Video</label>
                                        <select class="form-control" id="kategori" name="kategori">
                                            <option value="Video Pembelajaran">Video Pembelajaran</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="kelas_video">Kelas</label>
                                        <select class="form-control" id="kelas_kelas_videobuku" name="kelas_video">
                                            <option value="Semua Kelas">Semua</option>
                                            <?php foreach ($datakelas as $key): ?>
                                            <option value="<?php echo $key->nama_kelas ?>"><?php echo $key->nama_kelas ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="file_video">Link Video</label>
                                        <input type="text" class="form-control" id="file_video" name="file_video" placeholder="Tautkan Link Setelah watch?v= (v9UN3fHEB5k)" autocomplete="off">
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

