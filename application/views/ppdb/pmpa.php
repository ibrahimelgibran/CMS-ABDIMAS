<!DOCTYPE html>
<html lang="en">
<head>
<?php foreach($data_profil as $res){ ?>  <?php } ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">

    <link rel="icon" href="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" type="image/x-icon" />
    <title>PPDB Online <?php echo $res->nama_lembaga ?></title>
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link href="<?php echo base_url() ?>assets/ppdb/kitkat/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/ppdb/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/ppdb/kitkat/assets/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/ppdb/kitkat/assets/css/ui.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/ppdb/kitkat/assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/font-awesome-animation/font-awesome-animation.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/ppdb/kitkat/assets/input/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE STYLE -->
    <link href="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/step-form-wizard/css/step-form-wizard.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
 
 <style>
    #pesan_komentar{font-style: italic;color:red;}
  </style>
  <body class="fixed-topbar theme-sdtl color-green  sidebar-hover">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>

      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar" style="background-color:#2B589C;color:#fff;">
          <div class="header-left">
            <div class="col-sm-12">
              <div style="margin-top:-8px;">
              <h2>
								<strong class="text-primary">
									<a href=""><img src="<?php echo base_url() ?>upload/<?php echo $res->logo; ?>" alt="Logo" width="30" style="position:absolute;margin-top:-8px;"> <span style="margin-left:35px;color:#fff;">PPDB Online</span></a>
								</strong>
							</h>
              </div>
            </div>

          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="language-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <span style="color:#ddd;">PPDB Tahun Ajaran <b class="text-danger" style="color:#fff;">2022-2023</b></span>
                </a>
              </li>
            </ul>
          </div>

          <!-- header-right -->
        </div>

        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-wizard">

          <div class="header" style="margin-top:-20px;">
            <h2>Form Pendaftaran PPDB Online <strong> <?php echo $res->nama_lembaga ?></strong></h2>
            <hr style="margin-top:5px;">

          </div>
          <div class="row" style="margin-top:-30px;">
            <div class="col-lg-12">
              <div class="tabs tabs-linetriangle">
                <div class="tab-content">
                  <div class="tab-pane active" id="style">
                                        <div class="wizard-div current wizard-sea" id="register">
                      <form role="form" class="wizard wizard-validation" data-style="sea" role="form" action="" enctype="multipart/form-data"  method="post">
  <fieldset>
         <legend>Ketentuan</legend>
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="panel panel-primary">
  <div class="panel-heading">
    <h2>Kententuan PPDB <strong class="text-success" style="color:#eee;"><?php echo $res->nama_lembaga ?></strong></h2>
    <span style="font-size:18px;"><b>HARAP DIBACA DENGAN SEKSAMA KETENTUAN DIBAWAH INI !</b></span>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <ol style="color:#333;">
      <?php $no = 1; foreach($data_ketentuanppdb as $res){ ?>
      <li><?php echo $res->keterangan ?></li>
      <?php } ?>
    </ol>

  </div>
</div>
             <div class="col-md-12" >
                 <span class="text-primary" style="font-size:18px;color:#222;"><strong>Apakah anda setuju dengan ketentuan diatas ?</strong></span>
                 <div class="form-group" style="padding-bottom:30px;">
                    <div class="radio bg-success" style="padding-top:10px;padding-bottom:10px;border-radius:3px;color:#222;" >
                       <label>
                         <input type="radio" value="cek" name="cek" data-parsley-group="block0" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-ck"]' required> <b>Ya, Saya setuju</b>
                       </label>
                       <div id="condition-ck" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                    </div>
                </div>
             </div>
         </div>
         <div class="col-md-2"></div>
  </fieldset>

        <fieldset>
      <legend>Data Siswa</legend>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Siswa</strong></h2>
  </div>
  <div class="panel-body">

    <div class="col-md-12">
      <div class="form-group" style="padding-bottom:30px;">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="nama_lengkap" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue" placeholder="Nama lengkap Calon Siswa" maxlength="100" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
            <i class="fa fa-user" style="margin-left:15px;"></i>
            <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            <div id="pesan_komentar">*Sesuai dengan ijazah</div>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:-3px">Jenis Kelamin <span class="text-danger">*</span></label>
          <div class="col-sm-9">

          <div class="radio" style="margin-top:3px;margin-left:-20px;">
              <label>
              <input type="radio" value="Laki-Laki" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-male"></i> &nbsp;Laki-laki
              </label>
            </div>
            <div class="radio" style="margin-left:-20px;">
              <label>
              <input type="radio" value="Perempuan" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-female"></i> &nbsp;Perempuan
              </label>
            </div>
            <div id="condition-error" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
          <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.S.N <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
            <input type="text" name="nisn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" onkeyup="cek_data('nisn');" min="10" maxlength="30" placeholder="Nomor Induk Siswa Nasional" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nisn"]' required>
            <i class="fa fa-users" style="margin-left:15px;"></i>
            <b id="cek_nisn" style="color:blue;"></b>
            <div id="error-nisn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            <div id="pesan_komentar">*Sesuai dengan data dari web  http://nisn.data.kemdikbud.go.id</div>
          </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
          <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.K <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
            <input type="text" name="nik" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" onkeyup="cek_data('nik');" min="16" maxlength="30" placeholder="NIK" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nik"]' required>
            <i class="fa fa-users" style="margin-left:15px;"></i>
            <b id="cek_nik" style="color:blue;"></b>
            <div id="error-nik" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga (KK)</div>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon" >
            <input type="text" name="tempat_lahir" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Tempat Kelahiran Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tempat_lahir"]' required>
            <i class="fa fa-building" style="margin-left:15px;"></i>
            <div id="error-tempat_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>

       <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
            <div class="col-sm-4" style="padding:0px">
               <select class="form-control bg-blue class"  name="tgl_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tgl_lahir"]' required>
                    <option value="" selected>Pilih Tanggal</option>
                                          <option value="01">01</option>
                                          <option value="02">02</option>
                                          <option value="03">03</option>
                                          <option value="04">04</option>
                                          <option value="05">05</option>
                                          <option value="06">06</option>
                                          <option value="07">07</option>
                                          <option value="08">08</option>
                                          <option value="09">09</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                          <option value="15">15</option>
                                          <option value="16">16</option>
                                          <option value="17">17</option>
                                          <option value="18">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                          <option value="21">21</option>
                                          <option value="22">22</option>
                                          <option value="23">23</option>
                                          <option value="24">24</option>
                                          <option value="25">25</option>
                                          <option value="26">26</option>
                                          <option value="27">27</option>
                                          <option value="28">28</option>
                                          <option value="29">29</option>
                                          <option value="30">30</option>
                                          <option value="31">31</option>
                                   </select>
               <div id="error-tgl_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-4"  style="padding-left:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-bln_lahir"]' required>
                    <option value="" selected>Pilih Bulan</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
               </select>
              <div id="error-bln_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-4" style="margin-left:-27px;">

               <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-thn_lahir"]' required>
                <option value="" selected>Pilih Tahun Lahir</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                               </select>
                <div id="error-thn_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

          </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No Registrasi Akta Kelahiran <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="no_reg_akta" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue" placeholder="No Registrasi Akta Kelahiran" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_reg_akta"]' required>
            <i class="fa fa-user" style="margin-left:15px;"></i>
            <div id="error-no_reg_akta" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            <div id="pesan_komentar">*No registrasi yg dimaksud umumnya tercantum di bagian tengah atas lembar kutipan akta kelahiran </div>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Agama <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
            <select class="form-control bg-blue class" data-placeholder="Pilih Agama yang dianut" name="agama" data-parsley-group="block1" data-parsley-errors-container='div[id="error-agama"]' required>
                    <option value="">Pilih Agama yang dianut</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="lainnya">Lainnya</option>
            </select>
            <div id="error-agama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kewarganegaraan <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
            <select class="form-control bg-blue class" data-placeholder="Pilih Kewarganegaraan" name="kewarganegaraan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-kewarganegaraan"]' required>
                    <option value="">Pilih Kewarganegaraan</option>
                    <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                    <option value="Warga Negara Asing">Warga Negara Asing</option>
            </select>
            <div id="error-kewarganegaraan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>
    </div>

    <div class="col-md-12">
  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Berkebutuhan Khusus <span class="text-danger">*</span></label>
      <div class="col-sm-4" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Berkebutuhan Khusus" onchange="cek_berkebutuhan_khusus()" name="berkebutuhan_khusus0" data-parsley-group="block1" data-parsley-errors-container='div[id="error-berkebutuhan_khusus0"]' required>
                <option value="">Pilih Berkebutuhan Khusus</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
        </select>
        <div id="error-berkebutuhan_khusus0" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
      <div class="col-sm-5" style="margin-top:3px;">
        <div id="aksi_berkebutuhan_khusus">
          <input type="text" name="berkebutuhan_khusus" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Isi jenis kebutuhan khusus Anda" data-parsley-group="block1" data-parsley-errors-container='div[id="error-berkebutuhan_khusus"]' required>
          <div id="error-berkebutuhan_khusus" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </div>
      </div>
  </div>
</div>

    <div class="col-md-12">
  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status dalam Keluarga <span class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Status dalam Keluarga" name="status_dlm_keluarga" data-parsley-group="block1" data-parsley-errors-container='div[id="error-status_dlm_keluarga"]' required>
                <option value="">Pilih Status dalam Keluarga</option>
                <option value="Anak Kandung">Anak Kandung</option>
                <option value="Anak Angkat">Anak Angkat</option>
        </select>
        <div id="error-status_dlm_keluarga" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>
</div>

    <div class="col-md-12">
  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Anak Keberapa <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
        <input type="text" name="anak_keberapa" class="form-control bg-blue class" maxlength="2" onkeypress="return hanyaAngka(this);" placeholder="Anak Keberapa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-anak_keberapa"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-anak_keberapa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>
</div>

    <div class="col-md-12">
  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jumlah Saudara Kandung<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
        <input type="text" name="jumlah_saudara_kandung" class="form-control bg-blue class" maxlength="2" onkeypress="return hanyaAngka(this);" placeholder="Jumlah Saudara Kandung" data-parsley-group="block1" data-parsley-errors-container='div[id="error-jumlah_saudara_kandung"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-jumlah_saudara_kandung" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>
</div>

    <div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Desa <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" onkeyup="this.value = this.value.toUpperCase()" name="nama_desa" class="form-control bg-blue class" placeholder="Nama Desa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nama_desa"]' required>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-nama_desa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="alamat_siswa" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Alamat Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-alamat_siswa"]' required>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-alamat_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-3" style="margin-top:3px;">
              <input type="text" name="rt_siswa" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="RT" data-parsley-group="block1" data-parsley-errors-container='div[id="error-rt_siswa"]' required>
              <div id="error-rt_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-3" style="margin-top:3px;">
              <input type="text" name="rw_siswa" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="RW" data-parsley-group="block1" data-parsley-errors-container='div[id="error-rw_siswa"]' required>
              <div id="error-rw_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-3" style="margin-top:3px;">
              <input type="text" name="kode_pos" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Kode POS" data-parsley-group="block1" data-parsley-errors-container='div[id="error-kode_pos"]' required>
              <div id="error-kode_pos" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-4" style="margin-top:3px;">
              <input type="text" name="kec_siswa" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Kecamantan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-kec_siswa"]' required>
              <div id="error-kec_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-5" style="margin-top:3px;">
              <input type="text" name="kab_siswa" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Kabupaten" data-parsley-group="block1" data-parsley-errors-container='div[id="error-kab_siswa"]' required>
              <div id="error-kab_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>


    <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penerima PKH/KKS <span class="text-danger">*</span></label>
        <div class="col-sm-4" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Pilih Penerima PKH/KKS" onchange="cek_kks()" name="penerima_kks" data-parsley-group="block1" data-parsley-errors-container='div[id="error-penerima_kks"]' required>
                  <option value="">Pilih Penerima PKH/KKS</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
          </select>
          <div id="error-penerima_kks" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          <div id="pesan_komentar">*Kartu Keluarga Sejahtera</div>
        </div>
        <div class="col-sm-5" style="margin-top:3px;">
          <div id="aksi_kks">
            <input type="text" name="penerima_kks2" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Isi Nomor KKS" data-parsley-group="block1" data-parsley-errors-container='div[id="error-penerima_kks2"]' required>
            <div id="error-penerima_kks2" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
        </div>
    </div>
</div>

    <div class="col-md-12">
    <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penerima PIP <span class="text-danger">*</span></label>
        <div class="col-sm-4" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Pilih Penerima PIP" onchange="cek_pip()" name="penerima_pip" data-parsley-group="block1" data-parsley-errors-container='div[id="error-penerima_pip"]' required>
                  <option value="">Pilih Penerima PIP</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
          </select>
          <div id="error-penerima_pip" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          <div id="pesan_komentar">*Program Indonesia Pintar</div>
        </div>
        <div class="col-sm-5" style="margin-top:3px;">
          <div id="aksi_pip">
            <input type="text" name="penerima_pip2" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Isi Nomor PIP" data-parsley-group="block1" data-parsley-errors-container='div[id="error-penerima_pip2"]' required>
            <div id="error-penerima_pip2" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
        </div>
    </div>
</div>

    <div class="col-md-12">
  <div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pilihan Jurusan <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilihan Jurusan" name="pilihan_jurusan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-pilihan_jurusan"]' required>
              <option value="">Pilih Pilihan Jurusan</option>
              <option value="IPA">IPA</option>
              <option value="IPS">IPS</option>
      </select>
      <div id="error-pilihan_jurusan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      <div id="pesan_komentar">*Pilihan program juga akan ditentukan dari hasil Tes Potensi Akademik</div>
    </div>
  </div>

  <div class="form-group" >
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
        <input type="text" name="no_hp_siswa" class="form-control bg-blue class" maxlength="14" onkeypress="return hanyaAngka(this);" placeholder="No. Handphone Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-no_hp_siswa"]' required>
        <i class="fa fa-phone" style="margin-left:15px;"></i>
        <div id="error-no_hp_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>
</div>

    <div class="col-md-12">
            <div class="form-group">
                <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pas foto <span class="text-danger">*</span></label>
                <div class="col-sm-9" style="margin-top:3px;height:100px;">
                  <input type="file" id="foto" name="foto" class="form-control bg-green class"  data-parsley-group="block1" data-min-file-count="1" data-parsley-errors-container='div[id="error-ft"]' required>
                  <div id="errorBlock" class="help-block" style="pading-left:30px;"></div>
                  <div id="error-ft" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                  <div id="pesan_komentar">*Pas foto berwarna, format JPG/JPEG, ukuran tidak boleh melebihi 2 MB</div>
                </div>
            </div>
    </div>

  </div>
</div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
  <hr>
<div>

<script type="text/javascript">
var aksi_berkebutuhan_khusus = document.getElementById("aksi_berkebutuhan_khusus");
aksi_berkebutuhan_khusus.style.display = "none";
var aksi_kks = document.getElementById("aksi_kks");
aksi_kks.style.display = "none";
var aksi_pip = document.getElementById("aksi_pip");
aksi_pip.style.display = "none";

  function cek_berkebutuhan_khusus()
  {
    bk0  = $('[name="berkebutuhan_khusus0"]');
    bk   = $('[name="berkebutuhan_khusus"]');
    if (bk0.val() == 'Ya') {
      bk.val('');
      // aksi_bk0.show();
      aksi_berkebutuhan_khusus.style.display = "block";
      bk.focus();
    }else {
      bk.val('Tidak');
      // aksi_bk0.hide();
      aksi_berkebutuhan_khusus.style.display = "none";
    }
  }

  function cek_kks()
  {
    kks  = $('[name="penerima_kks"]');
    kks2 = $('[name="penerima_kks2"]');
    if (kks.val() == 'Ya') {
      kks2.val('');
      // aksi_kks.show();
      aksi_kks.style.display = "block";
      kks2.focus();
    }else {
      kks2.val('Tidak');
      // aksi_kks.hide();
      aksi_kks.style.display = "none";
    }
  }

  function cek_pip()
  {
    pip  = $('[name="penerima_pip"]');
    pip2 = $('[name="penerima_pip2"]');
    if (pip.val() == 'Ya') {
      pip2.val('');
      // aksi_pip.show();
      aksi_pip.style.display = "block";
      pip2.focus();
    }else {
      pip2.val('Tidak');
      // pipi_kks.hide();
      aksi_pip.style.display = "none";
    }
  }

  function cek_data(aksi)
  {
    var nisn = $('[name="nisn"]').val();
    var nik  = $('[name="nik"]').val();

    var Url1 = 'action=cari&jalur=pmpa&nisn='+nisn+'&nik='+nik;
    $.ajax({
      type : 'POST',
      data : Url1,
      url  : 'web/cek_data/'+aksi,
      cache: false,
      dataType: "JSON",
      beforeSend: function() {
        if (aksi=='nisn') {
          $('#cek_nisn').text('Cek NISN...');
        }else if (aksi=='nik') {
          $('#cek_nik').text('Cek NIK...');
        }
      },
      success: function(data){ // Get the result and asign to each cases
         if(data.status=='1'){
           $('#cek_nisn').text('*N.I.S.N sudah ada! Maaf Anda tidak bisa melanjutkan Pendaftaran');
           $('.sf-btn-next').removeClass('next-btn');
           $('.sf-btn-next').hide();
           $('.sf-btn-next').attr('href', 'javascript:void(0)');
         }else if(data.status=='2'){
           $('#cek_nik').text('*N.I.K sudah ada! Maaf Anda tidak bisa melanjutkan Pendaftaran');
           $('.sf-btn-next').removeClass('next-btn');
           $('.sf-btn-next').hide();
           $('.sf-btn-next').attr('href', 'javascript:void(0)');
         }else{
           if (aksi=='nisn') {
             $('#cek_nisn').text('');
           }else if(aksi=='nik'){
             $('#cek_nik').text('');
           }
         }
         if ($('#cek_nisn').text()=='' && $('#cek_nik').text()=='') {
           $('.sf-btn-next').addClass('next-btn');
           $('.sf-btn-next').show();
         }
      }
    });
  }

  // setInterval(function(){
  //    $("#cek_nisn").toggle();
  //    $("#cek_nik").toggle();
  // },500);
</script>
        </div>
      </div>
      <div class="col-lg-12"></div>
    </fieldset>
      <fieldset>
      <legend>Data Ortu / Wali</legend>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Ayah</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nama_ayah" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue" placeholder="Nama lengkap Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_ayah"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-nama_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.K <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
              <input type="text" name="nik_ayah" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="NIK" data-parsley-group="block2" data-parsley-errors-container='div[id="error-nik_ayah"]' required>
              <i class="fa fa-users" style="margin-left:15px;"></i>
              <div id="error-nik_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

<div class="col-md-12">
        <div class="form-group" >
           <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
           <div class="col-sm-9" style="margin-top:3px;">
             <div class="col-sm-4" style="padding:0px">
                <select class="form-control bg-blue class"  name="tgl_lahir_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-tgl_lahir_ayah"]' required>
                     <option value="" selected>Pilih Tanggal</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                     </select>
                <div id="error-tgl_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
             <div class="col-sm-4"  style="padding-left:12px;">
               <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-bln_lahir_ayah"]' required>
                     <option value="" selected>Pilih Bulan</option>
                     <option value="01">Januari</option>
                     <option value="02">Februari</option>
                     <option value="03">Maret</option>
                     <option value="04">April</option>
                     <option value="05">Mei</option>
                     <option value="06">Juni</option>
                     <option value="07">Juli</option>
                     <option value="08">Agustus</option>
                     <option value="09">September</option>
                     <option value="10">Oktober</option>
                     <option value="11">November</option>
                     <option value="12">Desember</option>
                </select>
               <div id="error-bln_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
             <div class="col-sm-4" style="padding-left:0px;">
                  <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-thn_lahir_ayah"]' required>
                   <option value="" selected>Pilih Tahun Lahir</option>
                                      <option value="1950">1950</option>
                                      <option value="1951">1951</option>
                                      <option value="1952">1952</option>
                                      <option value="1953">1953</option>
                                      <option value="1954">1954</option>
                                      <option value="1955">1955</option>
                                      <option value="1956">1956</option>
                                      <option value="1957">1957</option>
                                      <option value="1958">1958</option>
                                      <option value="1959">1959</option>
                                      <option value="1960">1960</option>
                                      <option value="1961">1961</option>
                                      <option value="1962">1962</option>
                                      <option value="1963">1963</option>
                                      <option value="1964">1964</option>
                                      <option value="1965">1965</option>
                                      <option value="1966">1966</option>
                                      <option value="1967">1967</option>
                                      <option value="1968">1968</option>
                                      <option value="1969">1969</option>
                                      <option value="1970">1970</option>
                                      <option value="1971">1971</option>
                                      <option value="1972">1972</option>
                                      <option value="1973">1973</option>
                                      <option value="1974">1974</option>
                                      <option value="1975">1975</option>
                                      <option value="1976">1976</option>
                                      <option value="1977">1977</option>
                                      <option value="1978">1978</option>
                                      <option value="1979">1979</option>
                                      <option value="1980">1980</option>
                                      <option value="1981">1981</option>
                                      <option value="1982">1982</option>
                                      <option value="1983">1983</option>
                                      <option value="1984">1984</option>
                                      <option value="1985">1985</option>
                                      <option value="1986">1986</option>
                                      <option value="1987">1987</option>
                                      <option value="1988">1988</option>
                                      <option value="1989">1989</option>
                                      <option value="1990">1990</option>
                                      <option value="1991">1991</option>
                                      <option value="1992">1992</option>
                                      <option value="1993">1993</option>
                                      <option value="1994">1994</option>
                                      <option value="1995">1995</option>
                                      <option value="1996">1996</option>
                                      <option value="1997">1997</option>
                                      <option value="1998">1998</option>
                                      <option value="1999">1999</option>
                                      <option value="2000">2000</option>
                                      <option value="2001">2001</option>
                                      <option value="2002">2002</option>
                                      <option value="2003">2003</option>
                                      <option value="2004">2004</option>
                                      <option value="2005">2005</option>
                                      <option value="2006">2006</option>
                                      <option value="2007">2007</option>
                                      <option value="2008">2008</option>
                                      <option value="2009">2009</option>
                                      <option value="2010">2010</option>
                                      <option value="2011">2011</option>
                                      <option value="2012">2012</option>
                                     </select>
                   <div id="error-thn_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
           </div>
       </div>
</div>

<div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Ayah" name="pdd_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pdd_ayah"]' required>
                  <option value="">Pilih Pendidikan Ayah</option>
                                      <option value="Tdk Sekolah">Tdk Sekolah</option>
                                      <option value="SD/MI">SD/MI</option>
                                      <option value="SMP/MTs">SMP/MTs</option>
                                      <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                      <option value="DIPLOMA">DIPLOMA</option>
                                      <option value="S1">S1</option>
                                      <option value="S2">S2</option>
                                      <option value="S3">S3</option>
                                </select>
              <div id="error-pdd_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ayah" name="pekerjaan_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pekerjaan_ayah"]' required>
                  <option value="">Pilih Pekerjaan Ayah</option>
                                      <option value="Buruh">Buruh</option>
                                      <option value="Petani">Petani</option>
                                      <option value="Wiraswasta">Wiraswasta</option>
                                      <option value="PNS Guru ">PNS Guru </option>
                                      <option value="PNS Non Guru ">PNS Non Guru </option>
                                      <option value="TNI">TNI</option>
                                      <option value="POLISI">POLISI</option>
                                      <option value="Kepala Desa">Kepala Desa</option>
                                      <option value="Dokter">Dokter</option>
                                      <option value="Guru Honorer">Guru Honorer</option>
                                      <option value="Pedagang">Pedagang</option>
                                      <option value="Lain - Lain ">Lain - Lain </option>
                                      <option value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
              <div id="error-pekerjaan_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ayah" name="penghasilan_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-penghasilan_ayah"]' required>
                  <option value="">Pilih Penghasilan Ayah</option>
                                      <option value="< Rp. 500.000">< Rp. 500.000</option>
                                      <option value="Rp.500.000 - Rp.1.000.000">Rp.500.000 - Rp.1.000.000</option>
                                      <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                      <option value="Rp.2.000.000 - Rp.4.000.000">Rp.2.000.000 - Rp.4.000.000</option>
                                      <option value="Rp.4.000.000 - Rp.6.000.000">Rp.4.000.000 - Rp.6.000.000</option>
                                      <option value="Rp.6.000.000 - Rp.8.000.000">Rp.6.000.000 - Rp.8.000.000</option>
                                      <option value="Rp.8.000.000 - Rp.10.000.000">Rp.8.000.000 - Rp.10.000.000</option>
                                      <option value="> Rp.10.000.000">> Rp.10.000.000</option>
                                      <option value="Rp. 0">Rp. 0</option>
                                </select>
              <div id="error-penghasilan_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_ayah" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-no_hp_ayah"]' required>
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
            <select class="form-control bg-blue class" data-placeholder="Pilih Status" name="status_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-status_ayah"]' required>
                    <option value="">Pilih Status</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Sudah Meninggal">Sudah Meninggal</option>
            </select>
            <div id="error-status_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
        </div>

</div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Ibu</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nama_ibu" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue" placeholder="Nama lengkap Ibu"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_ibu"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-nama_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.K <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
              <input type="text" name="nik_ibu" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="NIK" data-parsley-group="block2" data-parsley-errors-container='div[id="error-nik_ibu"]' required>
              <i class="fa fa-users" style="margin-left:15px;"></i>
              <div id="error-nik_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

<div class="col-md-12">
        <div class="form-group" >
           <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
           <div class="col-sm-9" style="margin-top:3px;">
             <div class="col-sm-4" style="padding:0px">
                <select class="form-control bg-blue class"  name="tgl_lahir_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-tgl_lahir_ibu"]' required>
                     <option value="" selected>Pilih Tanggal</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                     </select>
                <div id="error-tgl_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
             <div class="col-sm-4"  style="padding-left:12px;">
               <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-bln_lahir_ibu"]' required>
                     <option value="" selected>Pilih Bulan</option>
                     <option value="01">Januari</option>
                     <option value="02">Februari</option>
                     <option value="03">Maret</option>
                     <option value="04">April</option>
                     <option value="05">Mei</option>
                     <option value="06">Juni</option>
                     <option value="07">Juli</option>
                     <option value="08">Agustus</option>
                     <option value="09">September</option>
                     <option value="10">Oktober</option>
                     <option value="11">November</option>
                     <option value="12">Desember</option>
                </select>
               <div id="error-bln_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
             <div class="col-sm-4" style="padding-left:0px;">
                  <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-thn_lahir_ibu"]' required>
                   <option value="" selected>Pilih Tahun Lahir</option>
                                      <option value="1950">1950</option>
                                      <option value="1951">1951</option>
                                      <option value="1952">1952</option>
                                      <option value="1953">1953</option>
                                      <option value="1954">1954</option>
                                      <option value="1955">1955</option>
                                      <option value="1956">1956</option>
                                      <option value="1957">1957</option>
                                      <option value="1958">1958</option>
                                      <option value="1959">1959</option>
                                      <option value="1960">1960</option>
                                      <option value="1961">1961</option>
                                      <option value="1962">1962</option>
                                      <option value="1963">1963</option>
                                      <option value="1964">1964</option>
                                      <option value="1965">1965</option>
                                      <option value="1966">1966</option>
                                      <option value="1967">1967</option>
                                      <option value="1968">1968</option>
                                      <option value="1969">1969</option>
                                      <option value="1970">1970</option>
                                      <option value="1971">1971</option>
                                      <option value="1972">1972</option>
                                      <option value="1973">1973</option>
                                      <option value="1974">1974</option>
                                      <option value="1975">1975</option>
                                      <option value="1976">1976</option>
                                      <option value="1977">1977</option>
                                      <option value="1978">1978</option>
                                      <option value="1979">1979</option>
                                      <option value="1980">1980</option>
                                      <option value="1981">1981</option>
                                      <option value="1982">1982</option>
                                      <option value="1983">1983</option>
                                      <option value="1984">1984</option>
                                      <option value="1985">1985</option>
                                      <option value="1986">1986</option>
                                      <option value="1987">1987</option>
                                      <option value="1988">1988</option>
                                      <option value="1989">1989</option>
                                      <option value="1990">1990</option>
                                      <option value="1991">1991</option>
                                      <option value="1992">1992</option>
                                      <option value="1993">1993</option>
                                      <option value="1994">1994</option>
                                      <option value="1995">1995</option>
                                      <option value="1996">1996</option>
                                      <option value="1997">1997</option>
                                      <option value="1998">1998</option>
                                      <option value="1999">1999</option>
                                      <option value="2000">2000</option>
                                      <option value="2001">2001</option>
                                      <option value="2002">2002</option>
                                      <option value="2003">2003</option>
                                      <option value="2004">2004</option>
                                      <option value="2005">2005</option>
                                      <option value="2006">2006</option>
                                      <option value="2007">2007</option>
                                      <option value="2008">2008</option>
                                      <option value="2009">2009</option>
                                      <option value="2010">2010</option>
                                      <option value="2011">2011</option>
                                      <option value="2012">2012</option>
                                     </select>
                   <div id="error-thn_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
           </div>
       </div>
</div>

<div class="col-md-12">

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Ibu" name="pdd_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pdd_ibu"]' required>
                  <option value="">Pilih Pendidikan Ibu</option>
                                      <option value="Tdk Sekolah">Tdk Sekolah</option>
                                      <option value="SD/MI">SD/MI</option>
                                      <option value="SMP/MTs">SMP/MTs</option>
                                      <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                      <option value="DIPLOMA">DIPLOMA</option>
                                      <option value="S1">S1</option>
                                      <option value="S2">S2</option>
                                      <option value="S3">S3</option>
                                </select>
              <div id="error-pdd_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ibu" name="pekerjaan_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pekerjaan_ibu"]' required>
                  <option value="">Pilih Pekerjaan Ibu</option>
                                      <option value="Tidak Bekerja">Tidak Bekerja</option>
                                      <option value="Ibu Rumah Tangga
">Ibu Rumah Tangga
</option>
                                      <option value="Buruh">Buruh</option>
                                      <option value="Petani">Petani</option>
                                      <option value="Wiraswasta">Wiraswasta</option>
                                      <option value="PNS Guru">PNS Guru</option>
                                      <option value="PNS Non Guru">PNS Non Guru</option>
                                      <option value="TNI">TNI</option>
                                      <option value="POLISI">POLISI</option>
                                      <option value="Kepala Desa">Kepala Desa</option>
                                      <option value="Bidan">Bidan</option>
                                      <option value="Dokter">Dokter</option>
                                      <option value="Guru Honorer">Guru Honorer</option>
                                      <option value="Pedagang">Pedagang</option>
                                      <option value="Lain - Lain ">Lain - Lain </option>
                                </select>
              <div id="error-pekerjaan_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ibu" name="penghasilan_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-penghasilan_ibu"]' required>
                  <option value="">Pilih Penghasilan Ibu</option>
                                      <option value="< Rp. 500.000">< Rp. 500.000</option>
                                      <option value="Rp.500.000 - Rp.1.000.000">Rp.500.000 - Rp.1.000.000</option>
                                      <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                      <option value="Rp.2.000.000 - Rp.4.000.000">Rp.2.000.000 - Rp.4.000.000</option>
                                      <option value="Rp.4.000.000 - Rp.6.000.000">Rp.4.000.000 - Rp.6.000.000</option>
                                      <option value="Rp.6.000.000 - Rp.8.000.000">Rp.6.000.000 - Rp.8.000.000</option>
                                      <option value="Rp.8.000.000 - Rp.10.000.000">Rp.8.000.000 - Rp.10.000.000</option>
                                      <option value="> Rp.10.000.000">> Rp.10.000.000</option>
                                      <option value="Rp. 0">Rp. 0</option>
                                </select>
              <div id="error-penghasilan_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_ibu" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-no_hp_ibu"]' required>
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
            <select class="form-control bg-blue class" data-placeholder="Pilih Status" name="status_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-status_ibu"]' required>
                    <option value="">Pilih Status</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Sudah Meninggal">Sudah Meninggal</option>
            </select>
            <div id="error-status_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
        </div>
</div>

    </div>
</div>

<!-- <div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Wali</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger"></span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nama_wali" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue" placeholder="Nama lengkap Wali"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue">
              <i class="fa fa-user" style="margin-left:15px;"></i>
            </div>
        </div>

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.K <span class="text-danger"></span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
              <input type="text" name="nik_wali" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="NIK" data-parsley-group="block2">
              <i class="fa fa-users" style="margin-left:15px;"></i>
            </div>
        </div>

<div class="col-md-12">
        <div class="form-group" >
           <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger"></span></label>
           <div class="col-sm-9" style="margin-top:3px;">
             <div class="col-sm-4" style="padding:0px">
                <select class="form-control bg-blue class"  name="tgl_lahir_wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-tgl_lahir_wali"]' required>
                     <option value="" selected>Pilih Tanggal</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                     </select>
                <div id="error-tgl_lahir_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
             <div class="col-sm-4"  style="padding-left:12px;">
               <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir_wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-bln_lahir_wali"]' required>
                     <option value="" selected>Pilih Bulan</option>
                     <option value="01">Januari</option>
                     <option value="02">Februari</option>
                     <option value="03">Maret</option>
                     <option value="04">April</option>
                     <option value="05">Mei</option>
                     <option value="06">Juni</option>
                     <option value="07">Juli</option>
                     <option value="08">Agustus</option>
                     <option value="09">September</option>
                     <option value="10">Oktober</option>
                     <option value="11">November</option>
                     <option value="12">Desember</option>
                </select>
               <div id="error-bln_lahir_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
             <div class="col-sm-4" style="padding-left:0px;">
                  <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir_wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-thn_lahir_wali"]' required>
                   <option value="" selected>Pilih Tahun Lahir</option>
                                      <option value="1950">1950</option>
                                      <option value="1951">1951</option>
                                      <option value="1952">1952</option>
                                      <option value="1953">1953</option>
                                      <option value="1954">1954</option>
                                      <option value="1955">1955</option>
                                      <option value="1956">1956</option>
                                      <option value="1957">1957</option>
                                      <option value="1958">1958</option>
                                      <option value="1959">1959</option>
                                      <option value="1960">1960</option>
                                      <option value="1961">1961</option>
                                      <option value="1962">1962</option>
                                      <option value="1963">1963</option>
                                      <option value="1964">1964</option>
                                      <option value="1965">1965</option>
                                      <option value="1966">1966</option>
                                      <option value="1967">1967</option>
                                      <option value="1968">1968</option>
                                      <option value="1969">1969</option>
                                      <option value="1970">1970</option>
                                      <option value="1971">1971</option>
                                      <option value="1972">1972</option>
                                      <option value="1973">1973</option>
                                      <option value="1974">1974</option>
                                      <option value="1975">1975</option>
                                      <option value="1976">1976</option>
                                      <option value="1977">1977</option>
                                      <option value="1978">1978</option>
                                      <option value="1979">1979</option>
                                      <option value="1980">1980</option>
                                      <option value="1981">1981</option>
                                      <option value="1982">1982</option>
                                      <option value="1983">1983</option>
                                      <option value="1984">1984</option>
                                      <option value="1985">1985</option>
                                      <option value="1986">1986</option>
                                      <option value="1987">1987</option>
                                      <option value="1988">1988</option>
                                      <option value="1989">1989</option>
                                      <option value="1990">1990</option>
                                      <option value="1991">1991</option>
                                      <option value="1992">1992</option>
                                      <option value="1993">1993</option>
                                      <option value="1994">1994</option>
                                      <option value="1995">1995</option>
                                      <option value="1996">1996</option>
                                      <option value="1997">1997</option>
                                      <option value="1998">1998</option>
                                      <option value="1999">1999</option>
                                      <option value="2000">2000</option>
                                      <option value="2001">2001</option>
                                      <option value="2002">2002</option>
                                      <option value="2003">2003</option>
                                      <option value="2004">2004</option>
                                      <option value="2005">2005</option>
                                      <option value="2006">2006</option>
                                      <option value="2007">2007</option>
                                      <option value="2008">2008</option>
                                      <option value="2009">2009</option>
                                      <option value="2010">2010</option>
                                      <option value="2011">2011</option>
                                      <option value="2012">2012</option>
                                     </select>
                   <div id="error-thn_lahir_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
             </div>
           </div>
       </div>
</div>

<div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Wali" name="pdd_wali" data-parsley-group="block2">
                  <option value="">Pilih Pendidikan Wali</option>
                                      <option value="Tdk Sekolah">Tdk Sekolah</option>
                                      <option value="SD/MI">SD/MI</option>
                                      <option value="SMP/MTs">SMP/MTs</option>
                                      <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                      <option value="DIPLOMA">DIPLOMA</option>
                                      <option value="S1">S1</option>
                                      <option value="S2">S2</option>
                                      <option value="S3">S3</option>
                                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Wali" name="pekerjaan_wali" data-parsley-group="block2">
                  <option value="">Pilih Pekerjaan Wali</option>
                                      <option value="Buruh">Buruh</option>
                                      <option value="Petani">Petani</option>
                                      <option value="Wiraswasta">Wiraswasta</option>
                                      <option value="PNS Guru ">PNS Guru </option>
                                      <option value="PNS Non Guru ">PNS Non Guru </option>
                                      <option value="TNI">TNI</option>
                                      <option value="POLISI">POLISI</option>
                                      <option value="Kepala Desa">Kepala Desa</option>
                                      <option value="Ibu Rumah Tangga
">Ibu Rumah Tangga
</option>
                                      <option value="Bidan">Bidan</option>
                                      <option value="Dokter">Dokter</option>
                                      <option value="Guru Honorer">Guru Honorer</option>
                                      <option value="Pedagang">Pedagang</option>
                                      <option value="Lain - Lain ">Lain - Lain </option>
                                      <option value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Wali" name="penghasilan_wali" data-parsley-group="block2">
                  <option value="">Pilih Penghasilan Wali</option>
                                      <option value="< Rp. 500.000">< Rp. 500.000</option>
                                      <option value="Rp.500.000 - Rp.1.000.000">Rp.500.000 - Rp.1.000.000</option>
                                      <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                      <option value="Rp.2.000.000 - Rp.4.000.000">Rp.2.000.000 - Rp.4.000.000</option>
                                      <option value="Rp.4.000.000 - Rp.6.000.000">Rp.4.000.000 - Rp.6.000.000</option>
                                      <option value="Rp.6.000.000 - Rp.8.000.000">Rp.6.000.000 - Rp.8.000.000</option>
                                      <option value="Rp.8.000.000 - Rp.10.000.000">Rp.8.000.000 - Rp.10.000.000</option>
                                      <option value="> Rp.10.000.000">> Rp.10.000.000</option>
                                      <option value="Rp. 0">Rp. 0</option>
                                </select>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger"></span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_wali" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Wali" data-parsley-group="block2">
              <i class="fa fa-phone" style="margin-left:15px;"></i>
            </div>
        </div>
</div>

  </div>
</div> -->

<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
        </div>
      </div>
      <div class="col-lg-12"></div>
    </fieldset>
      <fieldset>
      <legend>Data Sekolah</legend>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data SMP/Mts asal</strong></h2>
  </div>
  <div class="panel-body">

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">NPSN Sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="npsn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="NPSN Sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-npsn"]' required>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-npsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_sekolah" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue" placeholder="Nama Sekolah" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_sekolah"]' required>
        <i class="fa fa-university" style="margin-left:15px;"></i>
        <div id="error-nama_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Contoh : SMP NEGERI 1 BELITANG MADANG RAYA (TIDAK DISINGKAT SMPN 1 BMR)</div>
      </div>
  </div>


<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status Sekolah <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Status Sekolah" name="status_sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-status_sekolah"]' required>
              <option value="">Pilih Status Sekolah</option>
              <option value="NEGERI">NEGERI</option>
              <option value="SWASTA">SWASTA</option>
      </select>
      <div id="error-status_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Model Ujian Nasional <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Model Ujian Nasional" name="model_un" data-parsley-group="block3" data-parsley-errors-container='div[id="error-model_un"]' required>
              <option value="">Pilih Model Ujian Nasional</option>
              <option value="UNBK">UNBK</option>
              <option value="UNKP">UNKP</option>
      </select>
      <div id="error-model_un" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      <div id="pesan_komentar">*Tetap diisi seperti rencana awal sekolah sebelum ada Covid 19</div>
    </div>
</div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat Sekolah <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="alamat_sekolah" onkeyup="this.value = this.value.toUpperCase()" class="form-control bg-blue class" placeholder="Alamat Sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-alamat_sekolah"]' required>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-alamat_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tahun Lulus <span class="text-danger">*</span></label>
            <div class="col-sm-4 prepend-icon" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lulus" name="thn_lulus" data-parsley-group="block3" data-parsley-errors-container='div[id="error-thn_lulus"]' required>
               <option value="" selected>Pilih Tahun Lulus...</option>
                              <option value="2027">2027</option>
                              <option value="2026">2026</option>
                              <option value="2025">2025</option>
                              <option value="2024">2024</option>
                              <option value="2023">2023</option>
                              <option value="2022">2022</option>
                              <option value="2021">2021</option>
                              <option value="2020">2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                             </select>
              <div id="error-thn_lulus" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-5"></div>
        </div>

      </div>
    </div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
        </div>
      </div>
      <div class="col-lg-12"></div>
    </fieldset>
      <fieldset>
      <legend>Nilai Rapor</legend>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <style>
  #tbl_input{width:50px;text-align: center;}
  #tbl_input2{width:100px;text-align: center;}
  #th_center > th {text-align: center;}
</style>


<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Nilai Rapor</strong></h2>
  </div>
  <div class="panel-body">

  <div class="table-responsive">
    <table class="table table-bordered table-striped" width="100%" border="1">
      <tr id="th_center">
        <th rowspan="2">Mata Pelajaran</th>
        <th colspan="5" width="25">Semester</th>
        <th rowspan="2">Rata-Rata Nilai</th>
      </tr>
      <tr id="th_center">
        <th width="5">1</th>
        <th width="5">2</th>
        <th width="5">3</th>
        <th width="5">4</th>
        <th width="5">5</th>
      </tr>
      <tr>
        <td>Ilmu Pengetahuan Sosial (IPS)</td>
                <td>
          <input type="text" name="ips1" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ips1"]' required>
          <div id="error-ips1" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ips2" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ips2"]' required>
          <div id="error-ips2" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ips3" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ips3"]' required>
          <div id="error-ips3" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ips4" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ips4"]' required>
          <div id="error-ips4" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ips5" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ips5"]' required>
          <div id="error-ips5" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <b id="nilai_ips">0,00</b>
          <input type="hidden" name="nilai_ips" value="0,00">
        </td>
      </tr>
      <tr>
        <td>Ilmu Pengetahuan Alam (IPA)</td>
                <td>
          <input type="text" name="ipa1" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ipa1"]' required>
          <div id="error-ipa1" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ipa2" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ipa2"]' required>
          <div id="error-ipa2" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ipa3" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ipa3"]' required>
          <div id="error-ipa3" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ipa4" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ipa4"]' required>
          <div id="error-ipa4" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ipa5" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ipa5"]' required>
          <div id="error-ipa5" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <b id="nilai_ipa">0,00</b>
          <input type="hidden" name="nilai_ipa" value="0,00">
        </td>
      </tr>
      <tr>
        <td>Matematika </td>
                <td>
          <input type="text" name="mtk1" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-mtk1"]' required>
          <div id="error-mtk1" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="mtk2" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-mtk2"]' required>
          <div id="error-mtk2" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="mtk3" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-mtk3"]' required>
          <div id="error-mtk3" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="mtk4" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-mtk4"]' required>
          <div id="error-mtk4" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="mtk5" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-mtk5"]' required>
          <div id="error-mtk5" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <b id="nilai_mtk">0,00</b>
          <input type="hidden" name="nilai_mtk" value="0,00">
        </td>
      </tr>
      <tr>
        <td>Bahasa Indonesia </td>
                <td>
          <input type="text" name="ind1" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ind1"]' required>
          <div id="error-ind1" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ind2" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ind2"]' required>
          <div id="error-ind2" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ind3" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ind3"]' required>
          <div id="error-ind3" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ind4" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ind4"]' required>
          <div id="error-ind4" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ind5" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ind5"]' required>
          <div id="error-ind5" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <b id="nilai_ind">0,00</b>
          <input type="hidden" name="nilai_ind" value="0,00">
        </td>
      </tr>
      <tr>
        <td>Bahasa Inggris </td>
                <td>
          <input type="text" name="ing1" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ing1"]' required>
          <div id="error-ing1" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ing2" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ing2"]' required>
          <div id="error-ing2" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ing3" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ing3"]' required>
          <div id="error-ing3" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ing4" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ing4"]' required>
          <div id="error-ing4" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <input type="text" name="ing5" placeholder="0-100" value="" onkeyup="hitung();" id="tbl_input" maxlength="6" data-parsley-group="block4" data-parsley-errors-container='div[id="error-ing5"]' required>
          <div id="error-ing5" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
                <td>
          <b id="nilai_ing">0,00</b>
          <input type="hidden" name="nilai_ing" value="0,00">
        </td>
      </tr>
      <tr id="th_center">
        <th colspan="6">Rata-Rata Rapor</th>
        <td><center><b id="total_nilai">0,00</b></center></td>
        <input type="hidden" name="total_nilai" value="0,00">
      </tr>
      <tr>
        <th colspan="7">
          <div class="msg_error">

          </div>
          <!-- <center>
            Jika hasil Rata - rata rapor < 75 ADA PERINGATAN <b style="color:red;">"MAAF ANDA TIDAK BISA MELANJUTKAN PENDAFTARAN"</b> dan secara otomatis tidak bisa mendaftar
          </center> -->
        </th>
      </tr>
    </table>
  </div>
  </div>
</div>

<div class="col-md-12">
  <hr>
  <blockquote>
    <p>
      <b>CATATAN:</b> <br>
      <ol>
        <li>Semua Nilai <span class="text-danger "></span><b class="text-danger">wajib diisi</b>.</li>
      </ol>
    </p>
  </blockquote>
<div>

<script type="text/javascript">
// $('.msg_error').html('');
var jml       = '0,00';
var rata_rata = '0,00';

function hitung()
{
      var v11 = $('[name="ips1"]').val();
    if (v11 == '') {v11 = '0,00';}
      var v12 = $('[name="ips2"]').val();
    if (v12 == '') {v12 = '0,00';}
      var v13 = $('[name="ips3"]').val();
    if (v13 == '') {v13 = '0,00';}
      var v14 = $('[name="ips4"]').val();
    if (v14 == '') {v14 = '0,00';}
      var v15 = $('[name="ips5"]').val();
    if (v15 == '') {v15 = '0,00';}
        var v21 = $('[name="ipa1"]').val();
    if (v21 == '') {v21 = '0,00';}
      var v22 = $('[name="ipa2"]').val();
    if (v22 == '') {v22 = '0,00';}
      var v23 = $('[name="ipa3"]').val();
    if (v23 == '') {v23 = '0,00';}
      var v24 = $('[name="ipa4"]').val();
    if (v24 == '') {v24 = '0,00';}
      var v25 = $('[name="ipa5"]').val();
    if (v25 == '') {v25 = '0,00';}
        var v31 = $('[name="mtk1"]').val();
    if (v31 == '') {v31 = '0,00';}
      var v32 = $('[name="mtk2"]').val();
    if (v32 == '') {v32 = '0,00';}
      var v33 = $('[name="mtk3"]').val();
    if (v33 == '') {v33 = '0,00';}
      var v34 = $('[name="mtk4"]').val();
    if (v34 == '') {v34 = '0,00';}
      var v35 = $('[name="mtk5"]').val();
    if (v35 == '') {v35 = '0,00';}
        var v41 = $('[name="ind1"]').val();
    if (v41 == '') {v41 = '0,00';}
      var v42 = $('[name="ind2"]').val();
    if (v42 == '') {v42 = '0,00';}
      var v43 = $('[name="ind3"]').val();
    if (v43 == '') {v43 = '0,00';}
      var v44 = $('[name="ind4"]').val();
    if (v44 == '') {v44 = '0,00';}
      var v45 = $('[name="ind5"]').val();
    if (v45 == '') {v45 = '0,00';}
        var v51 = $('[name="ing1"]').val();
    if (v51 == '') {v51 = '0,00';}
      var v52 = $('[name="ing2"]').val();
    if (v52 == '') {v52 = '0,00';}
      var v53 = $('[name="ing3"]').val();
    if (v53 == '') {v53 = '0,00';}
      var v54 = $('[name="ing4"]').val();
    if (v54 == '') {v54 = '0,00';}
      var v55 = $('[name="ing5"]').val();
    if (v55 == '') {v55 = '0,00';}
  
  var Url1 = 'action=hitung&jalur=pmpa&v11='+v11+'&v12='+v12+'&v13='+v13+'&v14='+v14+'&v15='+v15+'&v21='+v21+'&v22='+v22+'&v23='+v23+'&v24='+v24+'&v25='+v25+'&v31='+v31+'&v32='+v32+'&v33='+v33+'&v34='+v34+'&v35='+v35+'&v41='+v41+'&v42='+v42+'&v43='+v43+'&v44='+v44+'&v45='+v45+'&v51='+v51+'&v52='+v52+'&v53='+v53+'&v54='+v54+'&v55='+v55;
  $.ajax({
    type : 'POST',
    data : Url1,
    url  : 'hitung/rapor',
    cache: false,
    dataType: "JSON",
    beforeSend: function() {
         $('#nilai_ips').text('Menghitung...');
         $('[name="nilai_ips"]').val('0,00');

         $('#nilai_ipa').text('Menghitung...');
         $('[name="nilai_ipa"]').val('0,00');

         $('#nilai_mtk').text('Menghitung...');
         $('[name="nilai_mtk"]').val('0,00');

         $('#nilai_ind').text('Menghitung...');
         $('[name="nilai_ind"]').val('0,00');

         $('#nilai_ing').text('Menghitung...');
         $('[name="nilai_ing"]').val('0,00');

      $('#jumlah_nilai').text('Menghitung...');
      $('#total_nilai').text('Menghitung...');
    },
    success: function(data){ // Get the result and asign to each cases
       if(data.status=='sukses'){
            $('#nilai_ips').text(data.jml_1);
            $('[name="nilai_ips"]').val(data.jml_1);

            $('#nilai_ipa').text(data.jml_2);
            $('[name="nilai_ipa"]').val(data.jml_2);

            $('#nilai_mtk').text(data.jml_3);
            $('[name="nilai_mtk"]').val(data.jml_3);

            $('#nilai_ind').text(data.jml_4);
            $('[name="nilai_ind"]').val(data.jml_4);

            $('#nilai_ing').text(data.jml_5);
            $('[name="nilai_ing"]').val(data.jml_5);

         $('#total_nilai').text(data.rata_rata);
         $('[name="total_nilai"]').val(data.rata_rata);
       }
       else{
            $('#nilai_ips').text('NaN');
            $('[name="nilai_ips"]').val('0,00');

            $('#nilai_ipa').text('NaN');
            $('[name="nilai_ipa"]').val('0,00');

            $('#nilai_mtk').text('NaN');
            $('[name="nilai_mtk"]').val('0,00');

            $('#nilai_ind').text('NaN');
            $('[name="nilai_ind"]').val('0,00');

            $('#nilai_ing').text('NaN');
            $('[name="nilai_ing"]').val('0,00');

         $('#total_nilai').text('NaN');
         $('[name="total_nilai"]').val('0,00');
       }
    }
  });

}
</script>
        </div>
      </div>
      <div class="col-lg-12"></div>
    </fieldset>
      <fieldset>
      <legend>Data Prestasi</legend>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">BIDANG AKADEMIK</strong></h2>
  </div>
  <div class="panel-body">

<div class="col-md-12">

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Juara Umum <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Juara Umum" name="juara_umum" onchange="get_filenya('juara_umum');">
                  <option value="">Pilih Juara Umum</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-juara_umum" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              <div id="pesan_komentar">*Silahkan upload piagam Juara umum yang pernah anda peroleh dari semester 1 - 5 dengan menggabungkannya dalam 1 file pdf tidak lebih dari 3 MB</div>
            </div>

            <div id="get_file_juara_umum" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM PRESTASI JUARA UMUM</label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_juara_umum" name="file_juara_umum" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_juara_umum"]'>
                <div id="errorBlock_file_juara_umum" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_juara_umum" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>

        </div>
</div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">BIDANG OLIMPIADE SAINS NASIONAL  (OSN)</strong></h2>
  </div>
  <div class="panel-body">

<div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Bidang Studi <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Bidang Studi" name="bidang_studi">
                  <option value="">Pilih Bidang Studi</option>
                  <option value="IPA">IPA</option>
                  <option value="IPS">IPS</option>
                  <option value="Matematika">Matematika</option>
              </select>
              <div id="error-bidang_studi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tingkat <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Kabupaten" name="tingkat_kab_osn" onchange="get_filenya('kab_osn');">
                  <option value="">Pilihan Tingkat Kabupaten</option>
                                      <option value="Juara 1">Juara 1</option>
                                </select>
              <div id="error-tingkat_kab_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_kab_osn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_kab_osn" name="file_kab_osn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_kab_osn"]'>
                <div id="errorBlock_file_kab_osn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_kab_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Provinsi" name="tingkat_prov_osn" onchange="get_filenya('prov_osn');">
                  <option value="">Pilihan Tingkat Provinsi</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_prov_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_prov_osn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_prov_osn" name="file_prov_osn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_prov_osn"]'>
                <div id="errorBlock_file_prov_osn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_prov_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Regional" name="tingkat_reg_osn" onchange="get_filenya('reg_osn');">
                  <option value="">Pilihan Tingkat Regional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_reg_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_reg_osn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_reg_osn" name="file_reg_osn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_reg_osn"]'>
                <div id="errorBlock_file_reg_osn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_reg_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Nasional" name="tingkat_nas_osn" onchange="get_filenya('nas_osn');">
                  <option value="">Pilihan Tingkat Nasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_nas_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_nas_osn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_nas_osn" name="file_nas_osn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_nas_osn"]'>
                <div id="errorBlock_file_nas_osn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_nas_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Internasional" name="tingkat_int_osn" onchange="get_filenya('int_osn');">
                  <option value="">Pilihan Tingkat Internasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_int_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_int_osn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_int_osn" name="file_int_osn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_int_osn"]'>
                <div id="errorBlock_file_int_osn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_int_osn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                  </div>
</div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">BIDANG OLIMPIADE OLAHRAGA SISWA NASIONAL (O2SN)</strong></h2>
  </div>
  <div class="panel-body">

<div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Cabang Olahraga <span class="text-danger"></span></label>
            <div class="col-sm-4" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Cabang Olahraga" onchange="cek_Piagam_OSN()" name="cabor_o2snx">
                  <option value="">Pilih Cabang Olahraga</option>
                  <option value="Atletik">Atletik</option>
                  <option value="Renang">Renang</option>
                  <option value="Bulu Tangkis">Bulu Tangkis</option>
                  <option value="Karate">Karate</option>
                  <option value="Pencak Silat">Pencak Silat</option>
                  <option value="Lain">Cabang Olahraga Lain</option>
              </select>
              <div id="error-cabor_o2snx" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-5" style="margin-top:3px;">
              <div id="aksi_O2SN">
                <input type="text" name="cabor_o2sn" class="form-control bg-blue class" placeholder="Isi Cabang Olahraga Lainnya">
                <div id="error-cabor_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
            </div>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tingkat <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Kabupaten" name="tingkat_kab_o2sn" onchange="get_filenya('kab_o2sn');">
                  <option value="">Pilihan Tingkat Kabupaten</option>
                                      <option value="Juara 1">Juara 1</option>
                                </select>
              <div id="error-tingkat_kab_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_kab_o2sn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_kab_o2sn" name="file_kab_o2sn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_kab_o2sn"]'>
                <div id="errorBlock_file_kab_o2sn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_kab_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Provinsi" name="tingkat_prov_o2sn" onchange="get_filenya('prov_o2sn');">
                  <option value="">Pilihan Tingkat Provinsi</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_prov_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_prov_o2sn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_prov_o2sn" name="file_prov_o2sn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_prov_o2sn"]'>
                <div id="errorBlock_file_prov_o2sn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_prov_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Regional" name="tingkat_reg_o2sn" onchange="get_filenya('reg_o2sn');">
                  <option value="">Pilihan Tingkat Regional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_reg_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_reg_o2sn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_reg_o2sn" name="file_reg_o2sn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_reg_o2sn"]'>
                <div id="errorBlock_file_reg_o2sn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_reg_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Nasional" name="tingkat_nas_o2sn" onchange="get_filenya('nas_o2sn');">
                  <option value="">Pilihan Tingkat Nasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_nas_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_nas_o2sn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_nas_o2sn" name="file_nas_o2sn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_nas_o2sn"]'>
                <div id="errorBlock_file_nas_o2sn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_nas_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Internasional" name="tingkat_int_o2sn" onchange="get_filenya('int_o2sn');">
                  <option value="">Pilihan Tingkat Internasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_int_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_int_o2sn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_int_o2sn" name="file_int_o2sn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_int_o2sn"]'>
                <div id="errorBlock_file_int_o2sn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_int_o2sn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                  </div>
</div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">BIDANG FESTIVAL DAN LOMBA SENI SISWA NASIONAL (FLS2N)</strong></h2>
  </div>
  <div class="panel-body">

<div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Cabang Lomba <span class="text-danger"></span></label>
            <div class="col-sm-4" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Cabang Lomba" onchange="cek_FLS2N()" name="cablom_fls2nx">
                  <option value="">Pilih Cabang Lomba</option>
                  <option value="Musik Tradisional">Musik Tradisional</option>
                  <option value="Seni Tari">Seni Tari</option>
                  <option value="Nyanyi Solo">Nyanyi Solo</option>
                  <option value="Gitar Solo">Gitar Solo</option>
                  <option value="Desain Poster">Desain Poster</option>
                  <option value="Lain">Cabang Lomba Lain</option>
              </select>
              <div id="error-cablom_fls2nx" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-5" style="margin-top:3px;">
              <div id="aksi_FLS2N">
                <input type="text" name="cablom_fls2n" class="form-control bg-blue class" placeholder="Isi Cabang Lomba Lainnya">
                <div id="error-cablom_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
            </div>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tingkat <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Kabupaten" name="tingkat_kab_fls2n" onchange="get_filenya('kab_fls2n');">
                  <option value="">Pilihan Tingkat Kabupaten</option>
                                      <option value="Juara 1">Juara 1</option>
                                </select>
              <div id="error-tingkat_kab_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_kab_fls2n" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_kab_fls2n" name="file_kab_fls2n" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_kab_fls2n"]'>
                <div id="errorBlock_file_kab_fls2n" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_kab_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Provinsi" name="tingkat_prov_fls2n" onchange="get_filenya('prov_fls2n');">
                  <option value="">Pilihan Tingkat Provinsi</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_prov_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_prov_fls2n" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_prov_fls2n" name="file_prov_fls2n" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_prov_fls2n"]'>
                <div id="errorBlock_file_prov_fls2n" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_prov_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Regional" name="tingkat_reg_fls2n" onchange="get_filenya('reg_fls2n');">
                  <option value="">Pilihan Tingkat Regional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_reg_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_reg_fls2n" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_reg_fls2n" name="file_reg_fls2n" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_reg_fls2n"]'>
                <div id="errorBlock_file_reg_fls2n" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_reg_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Nasional" name="tingkat_nas_fls2n" onchange="get_filenya('nas_fls2n');">
                  <option value="">Pilihan Tingkat Nasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_nas_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_nas_fls2n" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_nas_fls2n" name="file_nas_fls2n" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_nas_fls2n"]'>
                <div id="errorBlock_file_nas_fls2n" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_nas_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Internasional" name="tingkat_int_fls2n" onchange="get_filenya('int_fls2n');">
                  <option value="">Pilihan Tingkat Internasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_int_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_int_fls2n" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_int_fls2n" name="file_int_fls2n" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_int_fls2n"]'>
                <div id="errorBlock_file_int_fls2n" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_int_fls2n" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                  </div>
</div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">BIDANG OLIMPIADE PENELITIAN SISWA INDONESIA & Karya Ilmiah remaja (OPSI)</strong></h2>
  </div>
  <div class="panel-body">

<div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Cabang Lomba <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Cabang Lomba" name="cablom_opsi">
                  <option value="">Pilih Cabang Lomba</option>
                  <option value="IPA dan Lingkungan">IPA dan Lingkungan</option>
                  <option value="IPS, Kemanusiaan, dan Seni">IPS, Kemanusiaan, dan Seni</option>
                  <option value="Ilmu Teknologi dan Rekayasa">Ilmu Teknologi dan Rekayasa</option>
              </select>
              <div id="error-cablom_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tingkat <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Kabupaten" name="tingkat_kab_opsi" onchange="get_filenya('kab_opsi');">
                  <option value="">Pilihan Tingkat Kabupaten</option>
                                      <option value="Juara 1">Juara 1</option>
                                </select>
              <div id="error-tingkat_kab_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_kab_opsi" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_kab_opsi" name="file_kab_opsi" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_kab_opsi"]'>
                <div id="errorBlock_file_kab_opsi" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_kab_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Provinsi" name="tingkat_prov_opsi" onchange="get_filenya('prov_opsi');">
                  <option value="">Pilihan Tingkat Provinsi</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_prov_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_prov_opsi" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_prov_opsi" name="file_prov_opsi" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_prov_opsi"]'>
                <div id="errorBlock_file_prov_opsi" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_prov_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Regional" name="tingkat_reg_opsi" onchange="get_filenya('reg_opsi');">
                  <option value="">Pilihan Tingkat Regional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_reg_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_reg_opsi" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_reg_opsi" name="file_reg_opsi" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_reg_opsi"]'>
                <div id="errorBlock_file_reg_opsi" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_reg_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Nasional" name="tingkat_nas_opsi" onchange="get_filenya('nas_opsi');">
                  <option value="">Pilihan Tingkat Nasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_nas_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_nas_opsi" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_nas_opsi" name="file_nas_opsi" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_nas_opsi"]'>
                <div id="errorBlock_file_nas_opsi" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_nas_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Internasional" name="tingkat_int_opsi" onchange="get_filenya('int_opsi');">
                  <option value="">Pilihan Tingkat Internasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_int_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_int_opsi" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_int_opsi" name="file_int_opsi" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_int_opsi"]'>
                <div id="errorBlock_file_int_opsi" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_int_opsi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                  </div>
</div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">BIDANG OLIMPIADE LITERASI SISWA NASIONAL (OLSN)</strong></h2>
  </div>
  <div class="panel-body">

<div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Cabang Lomba <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Cabang Lomba" name="cablom_olsn">
                  <option value="">Pilih Cabang Lomba</option>
                  <option value="Cipta Puisi">Cipta Puisi</option>
                  <option value="Cipta Cerpen Berbahasa Indonesia">Cipta Cerpen Berbahasa Indonesia</option>
                  <option value="Story Telling">Story Telling</option>
                  <option value="Debat Berbahasa Indonesia">Debat Berbahasa Indonesia</option>
              </select>
              <div id="error-cablom_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tingkat <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Kabupaten" name="tingkat_kab_olsn" onchange="get_filenya('kab_olsn');">
                  <option value="">Pilihan Tingkat Kabupaten</option>
                                      <option value="Juara 1">Juara 1</option>
                                </select>
              <div id="error-tingkat_kab_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_kab_olsn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_kab_olsn" name="file_kab_olsn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_kab_olsn"]'>
                <div id="errorBlock_file_kab_olsn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_kab_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Provinsi" name="tingkat_prov_olsn" onchange="get_filenya('prov_olsn');">
                  <option value="">Pilihan Tingkat Provinsi</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_prov_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_prov_olsn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_prov_olsn" name="file_prov_olsn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_prov_olsn"]'>
                <div id="errorBlock_file_prov_olsn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_prov_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Regional" name="tingkat_reg_olsn" onchange="get_filenya('reg_olsn');">
                  <option value="">Pilihan Tingkat Regional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_reg_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_reg_olsn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_reg_olsn" name="file_reg_olsn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_reg_olsn"]'>
                <div id="errorBlock_file_reg_olsn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_reg_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Nasional" name="tingkat_nas_olsn" onchange="get_filenya('nas_olsn');">
                  <option value="">Pilihan Tingkat Nasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_nas_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_nas_olsn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_nas_olsn" name="file_nas_olsn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_nas_olsn"]'>
                <div id="errorBlock_file_nas_olsn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_nas_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Internasional" name="tingkat_int_olsn" onchange="get_filenya('int_olsn');">
                  <option value="">Pilihan Tingkat Internasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_int_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_int_olsn" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_int_olsn" name="file_int_olsn" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_int_olsn"]'>
                <div id="errorBlock_file_int_olsn" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_int_olsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                  </div>
</div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">BIDANG LIGA SEPAK BOLA TINGKAT SMP</strong></h2>
  </div>
  <div class="panel-body">

<div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Cabang Lomba <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Cabang Lomba" name="cablom_smp">
                  <option value="">Pilih Cabang Lomba</option>
                  <option value="Sepak Bola">Sepak Bola</option>
              </select>
              <div id="error-cablom_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tingkat <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Kabupaten" name="tingkat_kab_smp" onchange="get_filenya('kab_smp');">
                  <option value="">Pilihan Tingkat Kabupaten</option>
                                      <option value="Juara 1">Juara 1</option>
                                </select>
              <div id="error-tingkat_kab_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_kab_smp" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_kab_smp" name="file_kab_smp" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_kab_smp"]'>
                <div id="errorBlock_file_kab_smp" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_kab_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Provinsi" name="tingkat_prov_smp" onchange="get_filenya('prov_smp');">
                  <option value="">Pilihan Tingkat Provinsi</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_prov_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_prov_smp" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_prov_smp" name="file_prov_smp" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_prov_smp"]'>
                <div id="errorBlock_file_prov_smp" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_prov_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Regional" name="tingkat_reg_smp" onchange="get_filenya('reg_smp');">
                  <option value="">Pilihan Tingkat Regional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_reg_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_reg_smp" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_reg_smp" name="file_reg_smp" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_reg_smp"]'>
                <div id="errorBlock_file_reg_smp" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_reg_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Nasional" name="tingkat_nas_smp" onchange="get_filenya('nas_smp');">
                  <option value="">Pilihan Tingkat Nasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_nas_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_nas_smp" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_nas_smp" name="file_nas_smp" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_nas_smp"]'>
                <div id="errorBlock_file_nas_smp" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_nas_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilihan Tingkat Internasional" name="tingkat_int_smp" onchange="get_filenya('int_smp');">
                  <option value="">Pilihan Tingkat Internasional</option>
                                      <option value="Juara 1">Juara 1</option>
                                      <option value="Juara 2">Juara 2</option>
                                      <option value="Juara 3">Juara 3</option>
                                </select>
              <div id="error-tingkat_int_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>

            <div id="get_file_int_smp" hidden>
              <label class="col-sm-3 control-label"></label>
              <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT DALAM BENTUK PDF<span class="text-danger">*</span></label>
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9" style="margin-top:3px;height:100px;">
                <input type="file" id="file_int_smp" name="file_int_smp" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_int_smp"]'>
                <div id="errorBlock_file_int_smp" class="help-block" style="pading-left:30px;"></div>
                <div id="error-file_int_smp" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Juara anda, ukuran tidak boleh melebihi 3 MB</div>
              </div>
            </div>
                  </div>
</div>

    </div>
</div>


<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">HAFIZ AL-QURAN</strong></h2>
  </div>
  <div class="panel-body">

<div class="col-md-12">
  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Hafal <span class="text-danger"></span></label>
      <div class="col-sm-4">
        <input type="text" name="hafiz" class="form-control bg-blue" placeholder="Isi Hafalan" maxlength="2" onkeypress="return hanyaAngka(this);" onkeyup="get_filenya('hafiz');">
        <div id="error-hafiz" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*minimal hafal 2 Juz</div>
      </div>
      <label class="col-sm-5 control-label" style="text-align:left; margin-top:6px;margin-left:-25px;">Juz</label>
  </div>

  <div class="from-group col-md-12">
    <div id="get_file_hafiz" hidden>
      <label class="col-sm-3 control-label"></label>
      <label class="col-sm-9 control-label" style="text-align:left; margin-top:6px">UPLOAD PIAGAM / SERTIFIKAT</label>
      <label class="col-sm-3 control-label"></label>
      <div class="col-sm-9" style="margin-top:3px;height:100px;">
        <input type="file" id="file_hafiz" name="file_hafiz" class="form-control bg-green class" data-parsley-errors-container='div[id="error-file_hafiz"]'>
        <div id="errorBlock_file_hafiz" class="help-block" style="pading-left:30px;"></div>
        <div id="error-file_hafiz" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Silahkan upload file scan ASLI dengan format *pdf piagam / sertifikat Tahfiz atau  surat keterangan asli dari pemuka agama, ukuran tidak boleh melebihi 3 MB</div>
      </div>
    </div>
  </div>

</div>

    </div>
</div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>


<script type="text/javascript">
var aksi_O2SN = document.getElementById("aksi_O2SN");
aksi_O2SN.style.display = "none";
var aksi_FLS2N = document.getElementById("aksi_FLS2N");
aksi_FLS2N.style.display = "none";

function cek_Piagam_OSN()
{
  v1  = $('[name="cabor_o2snx"]');
  v2  = $('[name="cabor_o2sn"]');
  if (v1.val() == 'Lain') {
    v2.val('');
    aksi_O2SN.style.display = "block";
    v2.focus();
  }else {
    v2.val(v1.val());
    aksi_O2SN.style.display = "none";
  }
}

function cek_FLS2N()
{
  v1  = $('[name="cablom_fls2nx"]');
  v2  = $('[name="cablom_fls2n"]');
  if (v1.val() == 'Lain') {
    v2.val('');
    aksi_FLS2N.style.display = "block";
    v2.focus();
  }else {
    v2.val(v1.val());
    aksi_FLS2N.style.display = "none";
  }
}

function get_filenya(namanya='')
{
  if (namanya=='juara_umum' || namanya=='hafiz') {
    tingkat  = $('[name="'+namanya+'"]');
  }else {
    tingkat  = $('[name="tingkat_'+namanya+'"]');
  }
  get_file = $('#get_file_'+namanya);
  file     = $('[name="file_'+namanya+'"]');
  viewport = $('.sf-viewport');
  tingginya = viewport.css('height');
  if (tingkat.val() == '') {
    setH = parseInt(tingginya) - 140;
    get_file.hide();
    file.removeAttr('data-parsley-group');
    file.removeAttr('data-min-file-count');
    file.attr('required', false);
  }else {
    setH = parseInt(tingginya) + 140;
    get_file.show();
    file.attr('data-parsley-group', 'block5');
    file.attr('data-min-file-count', '1');
    file.attr('required', true);
  }
  viewport.css('height', setH + "px");
}
</script>
        </div>
      </div>
      <div class="col-lg-12"></div>
    </fieldset>
  
  <fieldset>
     <legend>Konfirmasi</legend>
     <div class="row">
     <div class="form-group" >
         <div class="col-md-3">
        </div>
        <div class="col-md-6 panel p-20" style="text-align:center">
        <i class="fa fa-info-circle faa-flash animated c-blue" style="font-size:97px"></i><br><br>
        <span style="font-size:15px">
           Proses PPDB Online SMA NEGERI 1 BELITANG hampir selesai. Silakan periksa kembali data-data calon siswa yang sudah anda masukkan.
           <br><br>
           <div class="col-md-12" >
                 <span class="text-primary" style="font-size:18px;"><strong>Apakah data calon siswa sudah sesuai dan lengkap?</strong></span>
                 <div class="form-group">
                    <div class="radio bg-success p-10" style="border-radius:3px;" >
                       <label>
                         <input type="radio" value="cekx" name="cekx" data-parsley-group="blockx" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-cx"]' required> <b>Ya, data sudah sesuai dan lengkap.</b>
                       </label>
                       <div class="faa-flash animated" id="condition-cx" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                    </div>
             </div>

        </span>
        </div>
        <div class="col-md-3">
        </div>
     </div>
     <div class="col-lg-12"></div>
  </fieldset>
</form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="footer">
              <div class="copyright">
                <p class="pull-left sm-pull-reset">
                  <span>Copyright &copy; <a href="#" target="_blank"><?php foreach($data_profil as $res){ ?> <?php echo $res->nama_lembaga ?> <?php } ?></a> | IT Development</span>
                </p>
                <p class="pull-right sm-pull-reset">
                  <span><a href="" class="m-r-10"><i class="fa fa-home"></i> Beranda </a> | <a href="#" class="m-l-10 m-r-10" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-legal"></i>Ketentuan & Syarat PPDB</a></span>
                </p>
              </div>
            </div>

        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->
    </div>
      <!-- END BUILDER -->
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->

    <!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN SEARCH -->

    <!-- END SEARCH -->
    <!-- BEGIN PRELOADER -->

    <!-- END PRELOADER -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="margin-top:5px;">
    <div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      	<div class="panel panel-primary">
  <div class="panel-heading">
    <h2>Kententuan PPDB <strong class="text-success" style="color:#eee;">SMA NEGERI 1 BELITANG</strong></h2>
    <span style="font-size:18px;">Jalur <b>Penelusuran Minat dan Potensi Akademik (PMPA)</b> Tahun Ajaran <b>2022-2023</b></span>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <ol style="color:#333;">

      <li>Setiap calon siswa wajib mengisi form pendaftaran dengan lengkap.</li>

      <li>Form Biodata Siswa diisi sesuai dokumen Kartu Keluarga (KK) dan AKTE kelahiran.</li>

      <li>Siapkan file pas foto berwarna dalam format JPG maksimal berukuran 2 MB yang akan di-upload melalui form pendaftaran PPDB Online.</li>

      <li>Siapkan nilai rapot semester 1 – 5  untuk pengisian kolom nilai yang akan dimasukkan dalam form isian nilai rapor pada PPDB Online Jalur PMPA.</li>

      <li>Siapkan file scan piagam atau sertifikat juara dalam format pdf untuk di upload di Data Prestasi. </li>

      <li>Untuk Juara Umum sekolah isikan Juara umum minimal 6 terakhir, jika anda Juara Umum pada setiap semester silahkan upload semua file paigam dalam 1 file pdf.</li>

      <li>Data-data yang diisikan pada form PPDB Online Jalur PMPA harus sesuai dengan data asli dan benar adanya.</li>

      <li>Calon siswa yang sudah mendaftarkan secara online akan mendapatkan Nomor Pendaftaran yang harus dicetak dan dilampirkan dalam persyaratan yang diminta oleh Panitia PPDB SMA NEGERI 1 BELITANG Jalur PMPA.</li>

      <li>Calon siswa yang sudah mendaftarkan diri melalui PPDB Online SMA NEGERI 1 BELITANG Jalur PMPA  akan mendapatkan Nomor Pendaftaran dan Password yang nantinya akan digunakan untuk akses informasi dan pengumuman hasil tes PPDB SMA NEGERI 1 BELITANG Jalur PMPA.</li>

      <li>Calon siswa yang sudah mendaftarakan diri melalui PPDB Online SMA NEGERI 1 BELITANG wajib melakukan Verifikasi dengan melampirkan  dokumen persyaratan yang sudah ditentukan oleh Panitia PPDB SMA NEGERI 1 BELITANG Jalur PMPA.</li>

      <li>Data yang sudah diberikan oleh Panitia PPDB SMA NEGERI 1 BELITANG hanya digunakan untuk keperluan penerimaan siswa baru dan <strong class="text-danger">data tidak akan dipublikasikan serta dijaga kerahasiaannya oleh Panita PPDB</strong>.</li>

    </ol>

  </div>
</div>
      </div>
    </div>
  </div>
</div>

<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/gsap/main-gsap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/translate/jqueryTranslator.min.js"></script> <!-- Translate Plugin with JSON data -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/charts-chartjs/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/multidatepicker/multidatespicker.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>
   <!-- <script src="assets/kitkat/assets/js/builder.js"></script> <!-- Theme Builder -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/js/quickview.js"></script> <!-- Chat Script -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/js/pages/search.js"></script> <!-- Search Script -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/js/cust.js"></script> <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/step-form-wizard/plugins/parsley/parsley.min.js"></script> <!-- OPTIONAL, IF YOU NEED VALIDATION -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/plugins/step-form-wizard/js/step-form-wizard.js"></script> <!-- Step Form Validation -->
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/js/pages/form_wizard.js"></script>
    <script src="<?php echo base_url() ?>assets/ppdb/kitkat/assets/input/js/fileinput.js" type="text/javascript"></script>
    <script>

            $("#foto").fileinput({
                allowedFileExtensions : ['jpg'],
                showPreview : false,
                showUpload: false,
                browseClass: "btn btn-primary",
                elErrorContainer: "#errorBlock",
                maxFileSize: 2000,
                removeLabel: "Hapus",
                removeClass: "btn btn-danger",
                removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> "
           });
    </script>

    <script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
    </script>
    <!-- END PAGE SCRIPTS -->
</body>
</html>