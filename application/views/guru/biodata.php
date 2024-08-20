<?php foreach($data_biodata as $data_profil){ ?><?php } ?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Biodata Guru</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Guru</a></li>
                            <li class="breadcrumb-item"><a href="#!">Profil Biodata</a></li>
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
                    <h5><i class="feather icon-home mr-1"></i>Identitas Guru</h5>
                  </div>

                    <div class="card-body">
                    <form role="form" action="<?php echo base_url() ?>guru/dashboard/updatebiodata" novalidate method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">Nama</label>
                                    <input type="text" class="form-control" name="nama_guru"  value="<?php echo $data_profil->nama_guru ?>" placeholder="Nama Lengkap">
                                    <input type="hidden" class="form-control" name="id_guru"  value="<?php echo $data_profil->id_guru ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">NIP</label>
                                    <input type="text" class="form-control" name="nip" value="<?php echo $data_profil->nip ?>" placeholder="NIP">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">Jenis Kelamin</label>
                                    <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                            <option value="<?php echo $data_profil->jeniskelamin ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_profil->jeniskelamin ?>)</span></option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $data_profil->alamat ?>" placeholder="Alamat Lengkap">
                                </div>
                            </div>    

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="status_guru">Status</label>
                                    <select class="form-control" id="status_guru" name="status_guru">
                                        <option value="<?php echo $data_profil->status_guru ?>">Pilihan Saat ini <?php echo $data_profil->status_guru ?></option>
                                        <option value="ASN">ASN</option>
                                        <option value="HONORER">HONORER</option>
                                        <option value="P3K">P3K</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">Pangkat Golongan</label>
                                    <select class="form-control" id="golongan" name="golongan">
                                        <option value="<?php echo $data_profil->golongan ?>">Pilihan Saat ini <?php echo $data_profil->golongan ?></option>
                                        <option value="">Tidak Memiliki</option>
                                        <option value="II/a">II/a</option>
                                        <option value="II/b">II/b</option>
                                        <option value="II/c">II/c</option>
                                        <option value="II/d">II/d</option>
                                        <option value="III/a">III/a</option>
                                        <option value="III/b">III/b</option>
                                        <option value="III/c">III/c</option>
                                        <option value="III/d">III/d</option>
                                        <option value="IV/a">IV/a</option>
                                        <option value="IV/b">IV/b</option>
                                        <option value="IV/c">IV/c</option>
                                        <option value="IV/d">IV/d</option>
                                        <option value="IV/e">IV/e</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">Jenis Jabatan</label>
                                    <select class="form-control" id="jenisjabatan" name="jenisjabatan">
                                        <option value="<?php echo $data_profil->jenisjabatan ?>">Pilihan Saat ini <?php echo $data_profil->jenisjabatan ?></option>
                                        <option value="Fungsional">Fungsional</option>
                                        <option value="Strukturan">Strukturan</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">E-Mail</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $data_profil->email ?>" placeholder="Email">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">No Telp/WA</label>
                                    <input type="number" class="form-control" name="notelp" value="<?php echo $data_profil->notelp ?>" placeholder="No Telp">
                                </div>
                            </div>
                            
                           
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bolder">Mengajar Mapel</label>
                                    <input type="text" class="form-control" name="namamapel" value="<?php echo $data_profil->namamapel ?>" placeholder="Mengajar Mapel">
                                </div>
                            </div>   

                        </div>
                      <button type="submit" class="btn btn-info" id="pnotify-info"><i class="feather icon-save"></i> Simpan</button>
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
            </div>


        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>