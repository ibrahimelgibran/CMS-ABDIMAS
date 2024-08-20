
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Kelembagaan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Kelembagaan</a></li>
                            <li class="breadcrumb-item"><a href="#!">Profil</a></li>
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
                  <div class="card-header card-border-c-yellow">
                    <h5><i class="feather icon-home mr-1"></i>Identitas Lembaga</h5>
                  </div>

                    <div class="card-body">
                    <form role="form" action="<?php echo base_url() ?>master/updatingprofil_save" novalidate method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">NPSN</label>
                                    <input type="text" class="form-control" name="npsn"  value="<?php echo $data_profil->npsn ?>" placeholder="NPSN">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">PEMERINTAH</label>
                                    <select class="form-control" id="pemerintah" name="pemerintah">
                                            <option value="<?php echo $data_profil->pemerintah ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_profil->pemerintah ?>)</span></option>
                                            <option value="KABUPATEN">KABUPATEN</option>
                                            <option value="PROVINSI">PROVINSI</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">PROVINSI/KABUPATEN</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" name="pemerintahkop" value="<?php echo $data_profil->pemerintahkop ?>" placeholder="Nama Kabupaten/Provinsi">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">NAMA LEMBAGA</label>
                                    <input type="text" class="form-control" name="nama_lembaga" value="<?php echo $data_profil->nama_lembaga ?>" placeholder="Nama Lembaga">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">LEMBAGA NAUNGAN</label>
                                    <input type="text" class="form-control" name="nama_lembaganaungan" value="<?php echo $data_profil->nama_lembaganaungan ?>" placeholder="Nama Lembaga Naungan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">STATUS LEMBAGA</label>
                                    <select class="form-control" id="status" name="status">
                                            <option value="<?php echo $data_profil->status ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_profil->status ?>)</span></option>
                                            <option value="Negeri">Negeri</option>
                                            <option value="Swasta">Swasta</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">NOMOR TELEPON</label>
                                    <input type="text" class="form-control" name="notelp" value="<?php echo $data_profil->notelp ?>" placeholder="Nomor Telp">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">ALAMAT WEBSITE</label>
                                    <input type="text" class="form-control" name="alamatwebsite" value="<?php echo $data_profil->alamatwebsite ?>" placeholder="Alamat Website">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">EMAIL</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $data_profil->email ?>" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">NAMA KEPALA SEKOLAH</label>
                                    <input type="text" class="form-control" name="nama_kepsek" value="<?php echo $data_profil->nama_kepsek ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">NIP</label>
                                    <input type="text" class="form-control" name="nip_kepsek" value="<?php echo $data_profil->nip_kepsek ?>">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">ALAMAT LEMBAGA</label>
                                </div>
                            </div>            

                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="alamat_lembaga" value="<?php echo $data_profil->alamat_lembaga ?>" placeholder="Alamat">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="kota_lembaga" value="<?php echo $data_profil->kota_lembaga ?>" placeholder="Kabupaten / Kota">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="provinsi_lembaga" value="<?php echo $data_profil->provinsi_lembaga ?>" placeholder="Provinsi">
                                </div>
                            </div>

                            <div class="input-group col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Pesan Berjalan</span>
                                </div>
                                <textarea class="form-control" name="pesanberjalan" aria-label="With textarea"><?php echo $data_profil->pesanberjalan ?></textarea>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">Link Video</label>
                                    <input type="text" class="form-control" name="video_profil" value="<?php echo $data_profil->video_profil ?>" placeholder="https://www.youtube.com/embed/yAMcC-d8ciE">
                                </div>
                            </div>  
                            

                            <div class="col-md-12">
                                <div class="form-group">
                                    <a class="btn btn-sm btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Contoh Link Video</a>
                                    <div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="mb-0">Berikut Contoh:<br><img style="width:800px;170px;" src="<?php echo base_url(); ?>resources/images/1.png" class="img-responsive img-thumbnail" /></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                         
                            
                            

                            

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">Logo Lembaga</label>
                                    <div class="card card-info">
                                      <div class="card-body">
                                        <center><img style="width:150px;150px;" src="<?php echo base_url(); ?>upload/<?php echo $data_profil->logo; ?>" class="img-responsive img-thumbnail" /></center>
                                      </div>
                                    </div>
                                </div>
                            </div>


          
                            <div class="col-md-8">
                              <label class="form-label font-weight-bolder">Pilih Logo Baru</label>
                                <div class="card card-info">
                                  <div class="card-header">
                                    <center><h5 class="card-title"><i class="fa fa-hand-o-left"></i> <strong>Ganti Logo</strong> </h5></center> 
                                  </div>
                                  <div class="input-group mt-4 mb-4">
                                    <div class="custom-file ml-4 mr-4">
                                      <input type="file" name="logo" class="custom-file-input form-control" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Cari file..</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                            
                        </div>
                      <button type="submit" class="btn" style="background-color: #037823; color: #ffffff;" id="pnotify-info"><i class="feather icon-save"></i> Simpan</button>
                    </form>
                  </div>
              
            </div>
          </div>



            <div class="col-lg-4">
                <div class="card hdd-right-inner">
                    <div class="card-header card-border-c-green">
                        <h5>Informasi Server</h5>
                    </div>
                    <div class="card-body">
                         <?php if($this->session->flashdata('pemberitahuan_berhasil')){ ?>  
                            <div class="alert alert-info">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('pemberitahuan_berhasil'); ?>  
                            </div>  
                          <?php } ?> 

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <label class="mb-0 wid-100">Memory</label>
                                <div class="media-body">
                                    <p class="mb-0"><?php echo $this->benchmark->memory_usage();?></p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <label class="mb-0 wid-100">Email</label>
                                <div class="media-body">
                                    <p class="mb-0"><i class="feather icon-mail mr-1"></i><a href="#"><?php echo $data_profil->email; ?></a></p>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <label class="mb-0 wid-100">Tanggal </label>
                                <div class="media-body">
                                    <p class="mb-0"><i class="feather icon-calendar mr-1"></i><label class="mb-0"> <?php echo date('d-m-Y'); ?></label></p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <label class="mb-0 wid-100">Waktu </label>
                                <div class="media-body">
                                    <p class="mb-0"><i class="feather icon-clock mr-1"></i><label class="mb-0"> <?php echo date('H:i:s'); ?></label></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card hdd-right-inner">
                    <div class="card-header card-border-c-green">
                        <h5>Video Profil</h5>
                    </div>
                    <div class="card-body">
                    <iframe class="w-100" height="380" src="<?php echo $data_profil->video_profil ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>