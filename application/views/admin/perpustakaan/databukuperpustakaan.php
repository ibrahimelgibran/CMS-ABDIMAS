    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Buku Perpustakaan</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Perpustakaan</a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Buku Perpustakaan</a></li>
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
                            
                                    
                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody><?php $no = 1; foreach($databukuperpustakaan as $res){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++ ?></td>
                                            <td>                
                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0" ><?php echo $res->judulbuku ?></h6>
                                                        <p class="m-b-0"><strong style="color:grey;">ISBN :</strong> <?php echo $res->isbn ?> | <strong style="color:grey;">Tahun Terbit</strong> <?php echo $res->tahunterbit ?></p>
                                                        <p class="m-b-0"><strong style="color:grey;">Jumlah Buku :</strong> <?php echo $res->jumlahbuku ?></p>
                                                        <p class="m-b-0"><strong style="color:grey;">Jumlah Eksemplar :</strong> <?php echo $res->jumlaheksemplar ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><?php echo $res->pengarang ?></td>
                                            <td class="text-center"><?php echo $res->penerbit ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url() ?>master/editbuku/<?php echo $res->id_buku ?>" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_buku ?>" class="btn btn-icon btn-info btn-sm"><i class="feather icon-edit"></i></a>
                                                <a href="<?php echo base_url() ?>master/hapusbukuperpustakaan/<?php echo $res->id_buku ?>" class="btn btn-icon btn-danger btn-sm tombol-hapus"><i class="feather icon-trash-2"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                                    

                                    <div class="modal fade" id="modal-report2<?php echo $res->id_buku ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Buku Perpustakaan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatebukuperpustakaan" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="judulbuku">Nama / Judul Buku</label>
                                                                    <input type="text" class="form-control" id="judulbuku" name="judulbuku" value="<?php echo $res->judulbuku ?>" autocomplete="off">
                                                                    <input type="hidden" class="form-control" name="id_buku" value="<?php echo $res->id_buku ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="isbn">ISBN</label>
                                                                    <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $res->isbn ?>" autocomplete="off">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="tahunterbit">Tahun Terbit</label>
                                                                    <input type="number" class="form-control" id="tahunterbit" name="tahunterbit" value="<?php echo $res->tahunterbit ?>" autocomplete="off">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="pengarang">Pengarang</label>
                                                                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $res->pengarang ?>" autocomplete="off">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="penerbit">Penerbit</label>
                                                                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $res->penerbit ?>" autocomplete="off">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="jumlahbuku">Jumlah Buku</label>
                                                                    <input type="number" class="form-control" id="jumlahbuku" name="jumlahbuku" value="<?php echo $res->jumlahbuku ?>" autocomplete="off">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="jumlaheksemplar">Jumlah Eksemplar</label>
                                                                    <input type="number" class="form-control" id="jumlaheksemplar" name="jumlaheksemplar" value="<?php echo $res->jumlaheksemplar ?>" autocomplete="off">
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
                        <h5 class="modal-title">Tambah Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>index.php/master/simpanbuku" method="post" enctype="multipart/form-data" enctype="multipart/form-data" role="form">
                            <div class="row">
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="nama_buku">Nama Buku</label>
                                        <input type="text" class="form-control" id="nama_buku" name="nama_buku" placeholder="Judul Buku" autocomplete="off">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="kategori">Kategori Buku</label>
                                        <select class="form-control" id="kategori" name="kategori">
                                            <option value="Buku Umum">Buku Umum</option>
                                            <option value="Buku Agama">Buku PAI</option>
                                            <option value="Buku Guru">Buku Guru</option>
                                            <option value="Modul">Modul</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="kelas_buku">Kelas</label>
                                        <select class="form-control" id="kelas_buku" name="kelas_buku">
                                            <option value="Semua Kelas">Semua</option>
                                            <?php foreach ($datakelas as $key): ?>
                                            <option value="<?php echo $key->nama_kelas ?>"><?php echo $key->nama_kelas ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="file_buku">File Buku</label>
                                        <input type="file" class="form-control-file"  name="file_buku" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="foto_buku">Cover Buku <style(File harus berupa .png)</label>
                                        <input type="file" class="form-control-file"  name="foto_buku" autocomplete="off">
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