<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Sarpras</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sarpras</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Sarpras</a></li>
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
                        <button class="btn btn-sm btn-round has-ripple" style="background-color: #0f52ba; color: #ffffff;" data-toggle="modal" data-target="#modal-tambahkategorisarpras"><i class="feather icon-plus"></i> Sarpras</button>
                        <a href="<?php echo base_url() ?>master/hapussemuasarpras" class="btn btn-sm btn-round has-ripple" style="background-color: #FF0000; color: #ffffff;"><i class="feather icon-trash-2"></i> Kosongkan</a>
                        
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

                          <?php if($this->session->flashdata('import_berhasil')){ ?>  
                            <div class="col-xl-6 alert alert-info">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong>Proses Selesai </strong> <?php echo $this->session->flashdata('import_berhasil'); ?>  
                            </div>  
                          <?php } ?>  
                    </div>

                    <div class="card-body">


           
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Sarpras</th>
                                        <th>Kategori</th>
                                        <th>Digunakan / Disimpan</th>
                                        <th>Jumlah</th>
                                        <th>Sumber Dana</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datasarpras as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                            <a href="#!" class="text-body">
                                                <h6 class="mb-1"><?php echo $res->nama_sarpras ?></h6>
                                            </a>
                                            <p class="text-muted mb-1"><i class="fas fa-qrcode"></i> <?php echo $res->kodebarang ?></p>
                                            <p class="text-muted mb-1"><i class="fas fa-pencil-alt"></i> Tercatat Tahun <?php echo $res->tahun ?></p>
                                        </td>
                                        <td class="text-center"><?php echo $res->nama_kategorisarpras ?></td>
                                        <td class="text-center"><?php echo $res->tempat ?></td>
                                        <td class="text-center"><?php echo $res->jumlah ?> <?php echo $res->satuan ?></td>
                                        <td class="text-center"><?php echo $res->sumberdana ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url() ?>master/editsarpras/<?php echo $res->id_sarpras ?>" data-toggle="modal" data-target="#modal-report2<?php echo $res->id_sarpras ?>" class="btn btn-icon btn-sm" style="background-color: #01605A; color: #ffffff;"><i class="feather icon-edit"></i></a>
                                            <a href="<?php echo base_url() ?>master/hapussarpras/<?php echo $res->id_sarpras ?>"  class="btn btn-icon btn-danger btn-sm tombol-hapus" style="background-color: #FF0000; color: #ffffff;"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>

                                    <!-- Update Data Pengguna Start -->  
                                    <div class="modal fade" id="modal-report2<?php echo $res->id_sarpras ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Sarpras</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="<?php echo base_url() ?>master/updatesarpras" method="POST">
                                                        <div class="row">
                                                            
                                                            

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="nama_sarpras">Nama Sarpras</label>
                                                                    <input type="text" class="form-control" name="nama_sarpras" value="<?php echo $res->nama_sarpras ?>" oninput="this.value = this.value.toUpperCase()" >
                                                                    <input type="hidden" class="form-control" name="id_sarpras" value="<?php echo $res->id_sarpras ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="tahun">Tahun Sarpras</label>
                                                                    <input type="text" class="form-control" name="tahun" value="<?php echo $res->tahun ?>" oninput="this.value = this.value.toUpperCase()" >
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="jumlah">Jumlah</label>
                                                                    <input type="number" class="form-control" name="jumlah" value="<?php echo $res->jumlah ?>" >
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="satuan">Satuan</label>
                                                                    <select class="form-control" id="satuan" name="satuan">
                                                                        <option value="<?php echo $res->satuan ?>">-- <?php echo $res->satuan ?> --</option>
                                                                        <option value="Batang">Batang</option>
                                                                        <option value="Buah">Buah</option>
                                                                        <option value="Ruang">Ruang</option>    
                                                                        <option value="Unit">Unit</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="kode_kategorisarpras">Kategori Sarpras</label>
                                                                    <select class="mb-3 form-control" name="kode_kategorisarpras" id="kode_kategorisarpras">
                                                                        <?php foreach ($datakategorisarpras as $key): ?>
                                                                        <option value="<?php echo $key->id_kategorisarpras ?>"><?php echo $key->nama_kategorisarpras ?> </option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="tempat">Tempat</label>
                                                                    <input type="text" class="form-control" name="tempat" value="<?php echo $res->tempat ?>" oninput="this.value = this.value.toUpperCase()">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="kodebarang">Kode Barang</label>
                                                                    <input type="text" class="form-control" name="kodebarang" value="<?php echo $res->kodebarang ?>" oninput="this.value = this.value.toUpperCase()">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label class="floating-label" for="sumberdana">Sumber Dana</label>
                                                                    <input type="text" class="form-control" name="sumberdana" value="<?php echo $res->sumberdana ?>" oninput="this.value = this.value.toUpperCase()">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <button class="btn" style="background-color: #037823; color: #ffffff;">Perbaharui</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Update Data Pengguna End -->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>





<div class="modal fade" id="modal-tambahkategorisarpras" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Sarpras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>master/simpansarpras" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="nama_sarpras">Nama Sarpras</label>
                                <input type="text" class="form-control" name="nama_sarpras" placeholder="Nama Sarpras" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="tahun">Tahun</label>
                                <input type="number" class="form-control" name="tahun" placeholder="2022" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="jumlah">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="satuan">Satuan</label>
                                <select class="form-control" id="satuan" name="satuan">
                                    <option value="Batang">Batang</option>
                                    <option value="Buah">Buah</option>
                                    <option value="Ruang">Ruang</option>    
                                    <option value="Unit">Unit</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="kode_kategorisarpras">Kategori Sarpras</label>
                                <select class="form-control" id="kode_kategorisarpras" name="kode_kategorisarpras">
                                    <?php foreach ($datakategorisarpras as $key): ?>
                                    <option value="<?php echo $key->id_kategorisarpras ?>"><?php echo $key->nama_kategorisarpras ?> </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="tempat">Tempat</label>
                                <input type="text" class="form-control" name="tempat" placeholder="Tempat" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="kodebarang">Kode Barang</label>
                                <input type="text" class="form-control" name="kodebarang" placeholder=" " oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="sumberdana">Sumber Dana</label>
                                <input type="text" class="form-control" name="sumberdana" placeholder="Dana Bos" oninput="this.value = this.value.toUpperCase()" autocomplete="off" required>
                            </div>
                        </div>

                        
                        <div class="col-sm-12">
                            <button class="btn" style="background-color: #037823; color: #ffffff;" id="pnotify-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- [ Main Content ] end -->