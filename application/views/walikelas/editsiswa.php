<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<!-- profile header start -->
		<div class="user-profile user-card mb-4">
			<div class="card-header border-0 p-0 pb-0">
				<div class="cover-img-block">
					<!-- <img src="assets/images/profile/cover.jpg" alt="" class="img-fluid"> -->
					<div class="overlay"></div>
					<div class="change-cover">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon feather icon-camera"></i></a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>upload new</a>
								<a class="dropdown-item" href="#"><i class="feather icon-image mr-2"></i>from photos</a>
								<a class="dropdown-item" href="#"><i class="feather icon-film mr-2"></i> upload video</a>
								<a class="dropdown-item" href="#"><i class="feather icon-trash-2 mr-2"></i>remove</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body py-0">
				<div class="user-about-block m-0">
					<div class="row">
						<div class="col-md-4 text-center mt-n5">
							<div class="change-profile text-center">
								<div class="dropdown w-auto d-inline-block">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="profile-dp">
											<div class="position-relative d-inline-block">
												<img class="img-radius img-fluid wid-100" src="<?php echo base_url() ?>resources/images/pengguna/nophoto.jpg" alt="User image">
											</div>
											<div class="overlay">
												<span>change</span>
											</div>
										</div>
										<div class="certificated-badge">
											<i class="fas fa-certificate text-c-blue bg-icon"></i>
											<i class="fas fa-check front-icon text-white"></i>
										</div>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>upload new</a>
										<a class="dropdown-item" href="#"><i class="feather icon-image mr-2"></i>from photos</a>
										<a class="dropdown-item" href="#"><i class="feather icon-shield mr-2"></i>Protact</a>
										<a class="dropdown-item" href="#"><i class="feather icon-trash-2 mr-2"></i>remove</a>
									</div>
								</div>
							</div>

                           
							<h5 class="mb-1"><?php echo $data_siswa->nama_lengkap ?></h5>
							<p class="mb-2 text-muted"><?php echo $data_siswa->siswa_kelas ?></p>
                           
						</div>
						<div class="col-md-8 mt-md-4">
							<div class="row">
								<div class="col-md-6">
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-globe mr-2 f-18"></i>exampremium.co.id</a>
									<div class="clearfix"></div>
									<a href="mailto:demo@domain.com" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail mr-2 f-18"></i><?php echo $data_siswa->email ?></a>
									<div class="clearfix"></div>
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone mr-2 f-18"></i><?php echo $data_siswa->siswa_nohp ?></a>
								</div>
								<div class="col-md-6">
									<div class="media">
										<i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
										<div class="media-body">
											<p class="mb-0 text-muted"><?php echo $data_siswa->siswa_alamat ?>, <?php echo $data_siswa->siswa_desakel ?>, <?php echo $data_siswa->siswa_kecamatan ?>, <?php echo $data_siswa->siswa_kabupaten ?>, <?php echo $data_siswa->siswa_provinsi?> <?php echo $data_siswa->siswa_kodepos ?></p>
										</div>
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">

								<li class="nav-item">
									<a class="nav-link text-reset" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="feather icon-user mr-2"></i>DATA PRIBADI</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="orangtua-tab" data-toggle="tab" href="#orangtua" role="tab" aria-controls="orangtua" aria-selected="false"><i class="feather icon-user mr-2"></i>DATA ORANG TUA</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link text-reset" id="asalsekolah-tab" data-toggle="tab" href="#asalsekolah" role="tab" aria-controls="asalsekolah" aria-selected="false"><i class="feather icon-activity mr-2"></i>DATA SEKOLAH ASAL</a>
								</li>

						


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile header end -->

		<!-- profile body start -->
		<div class="row">
			<div class="col-md-8 order-md-2">
				<div class="tab-content" id="myTabContent">
					
					<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="card card-border-c-green">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Data Pribadi</h5>
								
							</div>
							
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
								<form>

									<div class="card alert-primary ">
										<h6>Data Siswa  </h6>
									</div>
                                	<div class="form row">
										<label class="col-sm-3 font-weight-bolder">NIS Lokal</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->nis ?>
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">NISN</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->nisn ?>
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">No NIK /  KTP</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->nik ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nomor KK</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->nik ?>
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nama Lengkap</label>
										<div class="col-sm-9">:
                                        <?php echo $data_siswa->nama_lengkap ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Tempat, Tanggal Lahir</label>
										<div class="col-sm-9">:
                                        <?php echo $data_siswa->tempatlahir ?>, <?php echo $data_siswa->tanggallahir ?>
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">Jenis Kelamin</label>
										<div class="col-sm-9">:
                                        <?php echo $data_siswa->jeniskelamin ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Agama</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->agama ?>
										</div>
									</div> 
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Hobi</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->hobi ?>
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Cita - Cita</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->citacita ?>
										</div>
									</div>     
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Anak Ke</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->anakke ?>
										</div>
									</div>  
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">Jumlah Saudara</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->jumlahsaudara ?>
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Anak Yatim</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->status_anakyatim ?>
										</div>
									</div>  
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">Jarak Rumah Ke Sekolah</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->jarakkesekolah ?>
										</div>
									</div>  
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">Transportasi</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->transportasi ?>
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Alamat Lengkap</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->siswa_alamat ?>, <?php echo $data_siswa->siswa_desakel ?>, <?php echo $data_siswa->siswa_kecamatan ?> <?php echo $data_siswa->siswa_kabupaten ?>,<?php echo $data_siswa->siswa_provinsi ?> - <?php echo $data_siswa->siswa_kodepos ?>
										</div>
									</div>    
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Tinggal Bersama</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->siswa_tinggal ?>
										</div>
									</div>  
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">No HP</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->siswa_nohp ?>
										</div>
									</div>     
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">E-mail</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->email ?>
										</div>
									</div>       
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Kewarganegaraan</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->kewarganegaraan ?>
										</div>
									</div> 
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Username</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->username ?>
										</div>
									</div>     
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Password</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->password ?>
										</div>
									</div>     
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">Peran</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->role ?>
										</div>
									</div>     
									<div class="card alert-primary ">
										<h6>Informasi Kelas</h6>
									</div>
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">Kelas</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->siswa_kelas ?>
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nomor Absen</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->siswa_nomorabsen ?>
										</div>
									</div>

									<div class="card alert-danger ">
										<h6>Informasi Kegemaran</h6>
									</div>

									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Bidang Kesenian</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->kegemaran_kesenian ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Bidang Olahraga</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->kegemaran_olahraga ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Kemasyarakatan / Organisasi</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->kegemaran_organisasi ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Lain - Lain</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->kegemaran_lainlain ?>
										</div>
									</div>




									<div class="card alert-danger ">
										<h6>Informasi Perkembangan Peserta Didik</h6>
									</div>

									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nama Beasiswa</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->beasiswa_nama ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Tahun Perolehan</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->beasiswa_tahun ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nominal</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->beasiswa_nominal ?>
										</div>
									</div>


									<div class="card alert-warning ">
										<h6>Informasi Kelulusan Akhir</h6>
									</div>

									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Lulus Tahun</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->lulus_tahun ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Tanggal / Nomor Ijazah</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->lulus_tanggalijazah ?> / <?php echo $data_siswa->lulus_noijazah ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Tanggal / Nomor SKHU</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->lulus_tanggalskhu ?> / <?php echo $data_siswa->lulus_noskhu ?>
										</div>
									</div>





									<div class="card alert-warning ">
										<h6>Informasi Setelah Menempuh Pendidikan</h6>
									</div>

									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Bekeinginan Melanjutkan Di</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->lanjut_nama ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Bekerja Di Kota</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->lanjut_bekerja ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Mulai Akan Bekerja</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->lanjut_bekerjamulai ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nama Tempat Bekerja</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->lanjut_bekerjaperusahaan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Jumlah Penghasilan</label>
										<div class="col-md-9">:
                                        <?php echo $data_siswa->lanjut_penghasilan ?>
										</div>
									</div>
									
								</form>
							</div>


							<!-- Edit data pribadi siswa-->
							<div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">
								<form action="<?php echo base_url() ?>admin/dashboard/updatesiswa" method="POST">
                  					<div class="form row">
										<label class="col-sm-3">NIS Lokal</label>
										<div class="col-sm-9">
											<input type="text" name="nis" class="form-control" value="<?php echo $data_siswa->nis ?>">
											<input type="hidden" name="id_pendaftar" value="<?php echo $data_siswa->id_pendaftar ?>">
										</div>
									</div>         
                  					<div class="form row">
										<label class="col-sm-3">NISN</label>
										<div class="col-sm-9">
											<input type="text" name="nisn" class="form-control" value="<?php echo $data_siswa->nisn ?>">
										</div>
									</div>  
                                    <div class="form row">
										<label class="col-sm-3">Nomor NIK</label>
										<div class="col-sm-9">
											<input type="text" name="nik" class="form-control" value="<?php echo $data_siswa->nik ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Nomor KK</label>
										<div class="col-sm-9">
											<input type="text" name="nokk" class="form-control" value="<?php echo $data_siswa->nokk ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Nama Lengkap</label>
										<div class="col-sm-9">
											<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data_siswa->nama_lengkap ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="tempatlahir" class="form-control" value="<?php echo $data_siswa->tempatlahir ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="tanggallahir" class="form-control" value="<?php echo $data_siswa->tanggallahir ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Jenis Kelamin</label>
										<div class="col-sm-9">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline1" name="jeniskelamin" class="custom-control-input" value="L"<?php echo ($data_siswa->jeniskelamin == 'L' ? ' checked' : ''); ?> >
												<label class="custom-control-label" for="customRadioInline1">LAKI-LAKI</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline2" name="jeniskelamin" class="custom-control-input" value="P"<?php echo ($data_siswa->jeniskelamin == 'P' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="customRadioInline2">PEREMPUAN</label>
											</div>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Agama</label>
										<div class="col-sm-9">
											<select class="form-control" id="agama" name="agama">
												<option value="<?php echo $data_siswa->agama ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->agama ?>)</span></option>
												<option value="Islam" class="font-weight-bolder">Islam</option>
												<option value="Kristen" class="font-weight-bolder">Kristen</option>
                                                <option value="Katholik" class="font-weight-bolder">Katholik</option>
                                                <option value="Hindu" class="font-weight-bolder">Hindu</option>
                                                <option value="Budha" class="font-weight-bolder">Budha</option>
                                                <option value="Konghucu" class="font-weight-bolder">Konghucu</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Hobi</label>
										<div class="col-sm-9">
											<select class="form-control" id="hobi" name="hobi">
												<option value="<?php echo $data_siswa->hobi ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->hobi ?>)</span></option>
												<option value="Olahraga" class="font-weight-bolder">Olahraga</option>
												<option value="Kesenian" class="font-weight-bolder">Kesenian</option>
                                                <option value="Membaca" class="font-weight-bolder">Membaca</option>
                                                <option value="Menulis" class="font-weight-bolder">Menulis</option>
                                                <option value="Traveling" class="font-weight-bolder">Traveling</option>
												<option value="Lainnya" class="font-weight-bolder">Lainnya</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Cita-Cita</label>
										<div class="col-sm-9">
											<select class="form-control" id="citacita" name="citacita">
												<option value="<?php echo $data_siswa->citacita ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->citacita ?>)</span></option>
												<option value="PNS" class="font-weight-bolder">PNS</option>
												<option value="TNI/Polri" class="font-weight-bolder">TNI/Polri</option>
                                                <option value="DGuru/Dosen1" class="font-weight-bolder">Guru/Dosen</option>
                                                <option value="Dokter" class="font-weight-bolder">Dokter</option>
                                                <option value="Politikus" class="font-weight-bolder">Politikus</option>
												<option value="Wiraswasta" class="font-weight-bolder">Wiraswasta</option>
												<option value="Seni/Lukis/Artis/Sejenis" class="font-weight-bolder">Seni/Lukis/Artis/Sejenis</option>
												<option value="Lainnya" class="font-weight-bolder">Lainnya</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Anak Ke</label>
										<div class="col-sm-9">
											<input type="number" name="anakke" class="form-control" value="<?php echo $data_siswa->anakke ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Jumlah Saudara</label>
										<div class="col-sm-9">
											<input type="number" name="jumlahsaudara" class="form-control" value="<?php echo $data_siswa->jumlahsaudara ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3">Jarak Dari Rumah Ke Sekolah</label>
										<div class="col-sm-9">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="1km" name="jarakkesekolah" class="custom-control-input" value="< 1 km"<?php echo ($data_siswa->jarakkesekolah == '< 1 km' ? ' checked' : ''); ?> >
												<label class="custom-control-label" for="1km">< 1 km</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="3km" name="jarakkesekolah" class="custom-control-input" value="1-3 km"<?php echo ($data_siswa->jarakkesekolah == '1-3 km' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="3km">1-3 km</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="5km" name="jarakkesekolah" class="custom-control-input" value="3-5 km"<?php echo ($data_siswa->jarakkesekolah == '3-5 km' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="5km">3-5 km</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="10km" name="jarakkesekolah" class="custom-control-input" value="5-10 km"<?php echo ($data_siswa->jarakkesekolah == '5-10 km' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="10km">5-10 km</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="over10" name="jarakkesekolah" class="custom-control-input" value=">10 km"<?php echo ($data_siswa->jarakkesekolah == '>10 km' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="over10">>10 km</label>
											</div>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Transportasi</label>
										<div class="col-sm-9">
											<select class="form-control" id="transportasi" name="transportasi">
												<option value="<?php echo $data_siswa->transportasi ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->transportasi ?>)</span></option>
												<option value="Jalan Kaki" class="font-weight-bolder">Jalan Kaki</option>
												<option value="Sepeda" class="font-weight-bolder">Sepeda</option>
                                                <option value="Sepeda Motor" class="font-weight-bolder">Sepeda Motor</option>
                                                <option value="Mobil Pribadi" class="font-weight-bolder">Mobil Pribadi</option>
                                                <option value="Antar Jemput Sekolah" class="font-weight-bolder">Antar Jemput Sekolah</option>
												<option value="Angkutan Umum" class="font-weight-bolder">Angkutan Umum</option>
												<option value="Lainnya" class="font-weight-bolder">Lainnya</option>
											</select>
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">Alamat dan RT/RW</label>
										<div class="col-sm-9">
											<input type="text" name="siswa_alamat" class="form-control" value="<?php echo $data_siswa->siswa_alamat ?>">
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">Kelurahan / Desa</label>
										<div class="col-sm-9">
											<input type="text" name="siswa_desakel" class="form-control" value="<?php echo $data_siswa->siswa_desakel ?>">
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">Kecamatan</label>
										<div class="col-sm-9">
											<input type="text" name="siswa_kecamatan" class="form-control" value="<?php echo $data_siswa->siswa_kecamatan ?>">
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">Kabupaten</label>
										<div class="col-sm-9">
											<input type="text" name="siswa_kabupaten" class="form-control" value="<?php echo $data_siswa->siswa_kabupaten ?>">
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">Provinsi</label>
										<div class="col-sm-9">
											<input type="text" name="siswa_provinsi" class="form-control" value="<?php echo $data_siswa->siswa_provinsi ?>">
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">Kode Pos</label>
										<div class="col-sm-9">
											<input type="text" name="siswa_kodepos" class="form-control" value="<?php echo $data_siswa->siswa_kodepos ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Tinggal Di</label>
										<div class="col-sm-9">
											<select class="form-control" id="siswa_tinggal" name="siswa_tinggal">
												<option value="<?php echo $data_siswa->siswa_tinggal ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->siswa_tinggal ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="Rumah Orang Tua" class="font-weight-bolder">Rumah Orang Tua</option>
                                                <option value="Rumah Saudara / Kerabat" class="font-weight-bolder">Rumah Saudara / Kerabat</option>
                                                <option value="Asrama" class="font-weight-bolder">Asrama</option>
                                                <option value="Rumah Sewa / Kos" class="font-weight-bolder">Rumah Sewa / Kos</option>
											</select>
										</div>
									</div>




                                    <div class="form row">
										<label class="col-sm-3">No HP</label>
										<div class="col-sm-9">
											<input type="number" name="siswa_nohp" class="form-control" value="<?php echo $data_siswa->siswa_nohp ?>">
										</div>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">E-mail</label>
										<div class="col-sm-9">
											<input type="text" name="email" class="form-control" value="<?php echo $data_siswa->email ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Kewarganegaraan</label>
										<div class="col-sm-9">
											<input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $data_siswa->kewarganegaraan ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3">Status Anak Yatim</label>
										<div class="col-sm-9">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="tidak" name="status_anakyatim" class="custom-control-input" value="-"<?php echo ($data_siswa->status_anakyatim == '-' ? ' checked' : ''); ?> >
												<label class="custom-control-label" for="tidak">Tidak</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="yatim" name="status_anakyatim" class="custom-control-input" value="Yatim"<?php echo ($data_siswa->status_anakyatim == 'Yatim' ? ' checked' : ''); ?> >
												<label class="custom-control-label" for="yatim">Yatim</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="piatu" name="status_anakyatim" class="custom-control-input" value="Piatu"<?php echo ($data_siswa->status_anakyatim == 'Piatu' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="piatu">Piatu</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="yatimpiatu" name="status_anakyatim" class="custom-control-input" value="Yatim Piatu"<?php echo ($data_siswa->status_anakyatim == 'Yatim Piatu' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="yatimpiatu">Yatim Piatu</label>
											</div>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Username</label>
										<div class="col-sm-9">
											<input type="text" name="username" class="form-control" value="<?php echo $data_siswa->username ?>">
										</div>
									</div> 
                  					<div class="form row">
										<label class="col-sm-3">Password</label>
										<div class="col-sm-9">
											<input type="text" name="password" class="form-control" value="<?php echo $data_siswa->password ?>">
										</div>
									</div> 
									<div class="card alert-primary ">
										<h6>Informasi Kesehatan</h6>
										<span></span>
									</div>
									<div class="form row">
										<label class="col-sm-3">Golongan Darah</label>
										<div class="col-sm-9">
											<select class="form-control" id="pendukung_golongandarah" name="pendukung_golongandarah">
												<option value="<?php echo $data_siswa->pendukung_golongandarah ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->pendukung_golongandarah ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="A" class="font-weight-bolder">A</option>
                                                <option value="B" class="font-weight-bolder">B</option>
												<option value="AB" class="font-weight-bolder">AB</option>
												<option value="O" class="font-weight-bolder">O</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Penyakit Yang Pernah Diderita</label>
										<div class="col-sm-9">
											<input type="text" name="pendukung_penyakit" class="form-control" value="<?php echo $data_siswa->pendukung_penyakit ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Kelainin Jasmani</label>
										<div class="col-sm-9">
											<select class="form-control" id="pendukung_kelainanjasmani" name="pendukung_kelainanjasmani">
												<option value="<?php echo $data_siswa->pendukung_kelainanjasmani ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->pendukung_kelainanjasmani ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="Ya" class="font-weight-bolder">Ya</option>
                                                <option value="Tidak" class="font-weight-bolder">Tidak</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Tinggi Badan</label>
										<div class="col-sm-9">
											<input type="number" name="pendukung_tinggibadan" class="form-control" value="<?php echo $data_siswa->pendukung_tinggibadan ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Berat Badan</label>
										<div class="col-sm-9">
											<input type="number" name="pendukung_beratbadan" class="form-control" value="<?php echo $data_siswa->pendukung_beratbadan ?>">
										</div>
									</div>










									<div class="card alert-primary ">
										<h6>Informasi Kelas</h6>
										<span></span>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">Kelas</label>
										<div class="col-sm-9">
											<input type="text" name="siswa_kelas" class="form-control" value="<?php echo $data_siswa->siswa_kelas ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Nomor Absen</label>
										<div class="col-sm-9">
											<input type="number" name="siswa_nomorabsen" class="form-control" value="<?php echo $data_siswa->siswa_nomorabsen ?>">
										</div>
									</div>
							



									<div class="card alert-danger ">
										<h6>Informasi Kegemaran</h6>
										<span></span>
									</div>
                                    <div class="form row">
										<label class="col-sm-3">Bidang Kesenian</label>
										<div class="col-sm-9">
											<input type="text" name="kegemaran_kesenian" class="form-control" value="<?php echo $data_siswa->kegemaran_kesenian ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Bidang Olahraga</label>
										<div class="col-sm-9">
											<input type="text" name="kegemaran_olahraga" class="form-control" value="<?php echo $data_siswa->kegemaran_olahraga ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Kemasyarakatan / Organisasi</label>
										<div class="col-sm-9">
											<input type="text" name="kegemaran_organisasi" class="form-control" value="<?php echo $data_siswa->kegemaran_organisasi ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Lainnya</label>
										<div class="col-sm-9">
											<input type="text" name="kegemaran_lainlain" class="form-control" value="<?php echo $data_siswa->kegemaran_lainlain ?>">
										</div>
									</div>


									<div class="card alert-danger ">
										<h6>Informasi Perkembangan</h6>
										<span></span>
									</div>
									
                                    <div class="form row">
										<label class="col-sm-3"><strong>Menerima Beasiswa</strong></label>
										<div class="col-sm-9">
											<input type="text" name="beasiswa_nama" class="form-control" value="<?php echo $data_siswa->beasiswa_nama ?>">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Tahun</strong></label>
										<div class="col-sm-9">
											<input type="text" name="beasiswa_tahun" class="form-control" value="<?php echo $data_siswa->beasiswa_tahun ?>">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Nominal</strong></label>
										<div class="col-sm-9">
											<input type="text" id="rupiah4" name="beasiswa_nominal" class="form-control" value="<?php echo $data_siswa->beasiswa_nominal ?>">
										</div>
									</div>



									<div class="card alert-warning ">
										<h6>Informasi Kelulusan Akhir</h6>
										<span></span>
									</div>
									
                                    <div class="form row">
										<label class="col-sm-3"><strong>Tahun Lulus</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lulus_tahun" class="form-control" value="<?php echo $data_siswa->lulus_tahun ?>">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Tanggal Ijazah</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lulus_tanggalijazah" class="form-control" value="<?php echo $data_siswa->lulus_tanggalijazah ?>">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Nomor Ijazah</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lulus_noijazah" class="form-control" value="<?php echo $data_siswa->lulus_noijazah ?>">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Tanggal SKHU</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lulus_tanggalskhu" class="form-control" value="<?php echo $data_siswa->lulus_tanggalskhu ?>">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Nomor SKHU</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lulus_noskhu" class="form-control" value="<?php echo $data_siswa->lulus_noskhu ?>">
										</div>
									</div>


									<div class="card alert-warning ">
										<h6>Informasi Melanjutkan Pendidikan</h6>
										<span></span>
									</div>
									
                                    <div class="form row">
										<label class="col-sm-3"><strong>Ingin Melanjutkan Ke</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lanjut_nama" class="form-control" value="<?php echo $data_siswa->lanjut_nama ?>" placeholder="Nama Jenjang Pendidikan Selanjutnya">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Bekerja Di</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lanjut_bekerja" class="form-control" value="<?php echo $data_siswa->lanjut_bekerja ?>" placeholder="isi data ini bila melanjutkan untuk bekerja (Nama Kota Tempat Bekerja)">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Tanggal Mulai Bekerja</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lanjut_bekerjamulai" class="form-control" value="<?php echo $data_siswa->lanjut_bekerjamulai ?>" placeholder="Tanggal Akan Mulai Bekerja">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Nama Perusahaan</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lanjut_bekerjaperusahaan" class="form-control" value="<?php echo $data_siswa->lanjut_bekerjaperusahaan ?>"placeholder="Nama Perusahaan">
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3"><strong>Penghasilan</strong></label>
										<div class="col-sm-9">
											<input type="text" name="lanjut_penghasilan" class="form-control" value="<?php echo $data_siswa->lanjut_penghasilan ?>" placeholder="isi data ini bila melanjutkan untuk bekerja">
										</div>
									</div>




									<div class="form row">
										<label class="col-sm-9 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info">Simpan</button>
										</div>
									</div>





								</form>
							</div>
							<!-- End Edit data pribadi siswa-->
						</div>
					</div>




					<!-- [ panel data orang tua ] -->
					<div class="tab-pane fade show" id="orangtua" role="tabpanel" aria-labelledby="orangtua-tab">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Data Orang Tua</h5>
								<button type="button" class="btn btn-info btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-3 pro-det-edit-4">
									<i class="feather icon-edit"></i>Edit Data
								</button>
							</div>
							<!-- [ form view data orang tua ] -->	
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-3">		
								<form>
									<div class="card alert-primary ">
										<h6>Data Ayah Kandung </h6>
									</div>
									<div class="form row">
										<label class="col-sm-2">NIK</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ayah_nik ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Nama</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ayah_nama ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Alamat</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ayah_alamat ?>, <?php echo $data_siswa->ayah_desakel ?>, <?php echo $data_siswa->ayah_kecamatan ?>, <?php echo $data_siswa->ayah_kabupaten ?> <?php echo $data_siswa->ayah_provinsi ?> - <?php echo $data_siswa->ayah_kodepos ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Tempat Tanggal Lahir</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ayah_tempatlahir ?>, <?php echo $data_siswa->ayah_tanggallahir ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Agama</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ayah_agama ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Kewarganegaraan</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ayah_kewarganegaraan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Pendidikan</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ayah_pendidikan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Pekerjaan</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->ayah_pekerjaan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Penghasilan</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->ayah_penghasilan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">No Hp</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->ayah_nohp ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Masih Hidup / Meninggal Dunia</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->ayah_status ?>
										</div>
									</div>
									<div class="card alert-primary ">
										<h6>Data ibu Kandung </h6>
									</div>
									<div class="form row">
										<label class="col-sm-2">NIK</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ibu_nik ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Nama </label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ibu_nama ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Pendidikan</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->ibu_pendidikan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Pekerjaan</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->ibu_pekerjaan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Penghasilan</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->ibu_penghasilan ?>
										</div>
									</div>
									<div class="card alert-primary ">
										<h6>Data Wali </h6>
									</div>
									<div class="form row">
										<label class="col-sm-2">NIK</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->wali_nik ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Nama </label>
										<div class="col-md-9">:
										<?php echo $data_siswa->wali_nama ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Pendidikan</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->wali_pendidikan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Pekerjaan</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->wali_pekerjaan ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-2">Penghasilan</label>
										<div class="col-sm-9">:
										<?php echo $data_siswa->wali_penghasilan ?>
										</div>
									</div>
								</form>
							</div>

							<!-- Edit data pribadi siswa-->
							<div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-4">
								<form action="<?php echo base_url() ?>admin/dashboard/updateorangtua" method="POST">
									<div class="card alert-primary ">
										<h6>Data Ayah Kandung </h6>
									</div>
									<div class="form row">
										<label class="col-sm-3">Nik</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_nik" class="form-control" value="<?php echo $data_siswa->ayah_nik ?>">
											<input type="hidden" name="id_pendaftar" value="<?php echo $data_siswa->id_pendaftar ?>">
										</div>
									</div>  
                  					<div class="form row">
										<label class="col-sm-3">Nama</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_nama" class="form-control" value="<?php echo $data_siswa->ayah_nama ?>">
										</div>
									</div>    
									
									
									<div class="form row">
										<label class="col-sm-3">Alamat Lengkap</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_alamat" class="form-control" value="<?php echo $data_siswa->ayah_alamat ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Desa / Kelurahan</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_desakel" class="form-control" value="<?php echo $data_siswa->ayah_desakel ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Kecamatan</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_kecamatan" class="form-control" value="<?php echo $data_siswa->ayah_kecamatan ?>">
										</div>
									</div> 
									<div class="form row">
										<label class="col-sm-3">Kabupaten</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_kabupaten" class="form-control" value="<?php echo $data_siswa->ayah_kabupaten ?>">
										</div>
									</div>   
									<div class="form row">
										<label class="col-sm-3">Provinsi</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_provinsi" class="form-control" value="<?php echo $data_siswa->ayah_provinsi ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Kode Pos</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_kodepos" class="form-control" value="<?php echo $data_siswa->ayah_kodepos ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_tempatlahir" class="form-control" value="<?php echo $data_siswa->ayah_tempatlahir ?>">
										</div>
									</div>    
									<div class="form row">
										<label class="col-sm-3">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_tanggallahir" class="form-control" value="<?php echo $data_siswa->ayah_tanggallahir ?>">
										</div>
									</div>   
									<div class="form row">
										<label class="col-sm-3">Agama</label>
										<div class="col-sm-9">
											<select class="form-control" id="ayah_agama" name="ayah_agama">
												<option value="<?php echo $data_siswa->ayah_agama ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->ayah_agama ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="Islam" class="font-weight-bolder">Islam</option>
                                                <option value="Kristen" class="font-weight-bolder">Kristen</option>
                                                <option value="Katholik" class="font-weight-bolder">Katholik</option>
                                                <option value="Hindu" class="font-weight-bolder">Hindu</option>
												<option value="Budha" class="font-weight-bolder">Budha</option>
												<option value="Konghucu" class="font-weight-bolder">Konghucu</option>
											</select>
										</div>
									</div> 
									<div class="form row">
										<label class="col-sm-3">Kewarganegaraan</label>
										<div class="col-sm-9">
											<select class="form-control" id="ayah_kewarganegaraan" name="ayah_kewarganegaraan">
												<option value="<?php echo $data_siswa->ayah_kewarganegaraan ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->ayah_kewarganegaraan ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="WNA" class="font-weight-bolder">WNA (Warga Negara Asing)</option>
                                                <option value="WNI" class="font-weight-bolder">WNI (Warga Negara Indonesia)</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Pendidikan</label>
										<div class="col-sm-9">
											<select class="form-control" id="ayah_pendidikan" name="ayah_pendidikan">
												<option value="<?php echo $data_siswa->ayah_pendidikan ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->ayah_pendidikan ?>)</span></option>
												<option value="SLTP" class="font-weight-bolder">SLTP</option>
												<option value="SLTA" class="font-weight-bolder">SLTA</option>
                                                <option value="D1" class="font-weight-bolder">D1</option>
                                                <option value="D2" class="font-weight-bolder">D2</option>
                                                <option value="D3" class="font-weight-bolder">D3</option>
												<option value="D4" class="font-weight-bolder">D4</option>
												<option value="S1" class="font-weight-bolder">S1</option>
												<option value="S2" class="font-weight-bolder">S2</option>
											</select>
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3">Pekerjaan</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_pekerjaan" class="form-control" value="<?php echo $data_siswa->ayah_pekerjaan ?>">
										</div>
									</div>     
									<div class="form row">
										<label class="col-sm-3">Penghasilan</label>
										<div class="col-sm-9">
											<input type="text" id="rupiah" name="ayah_penghasilan" class="form-control" value="<?php echo $data_siswa->ayah_penghasilan ?>">
										</div>
									</div>   
									<div class="form row">
										<label class="col-sm-3">Nomor HP</label>
										<div class="col-sm-9">
											<input type="text" name="ayah_nohp" class="form-control" value="<?php echo $data_siswa->ayah_nohp ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Apakah Masih Hidup</label>
										<div class="col-sm-9">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline3" name="ayah_status" class="custom-control-input" value="Masih Hidup"<?php echo ($data_siswa->ayah_status == 'Masih Hidup' ? ' checked' : ''); ?> >
												<label class="custom-control-label" for="customRadioInline3">YA</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline4" name="ayah_status" class="custom-control-input" value="Sudah Meninggal"<?php echo ($data_siswa->ayah_status == 'Sudah Meninggal' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="customRadioInline4">TIDAK</label>
											</div>
										</div>
									</div>
									<div class="card alert-primary ">
										<h6>Data Ibu Kandung </h6>
									</div>
									<div class="form row">
										<label class="col-sm-3">Nik</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_nik" class="form-control" value="<?php echo $data_siswa->ibu_nik ?>">
										</div>
									</div>  
                  					<div class="form row">
										<label class="col-sm-3">Nama</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_nama" class="form-control" value="<?php echo $data_siswa->ibu_nama ?>">
										</div>
									</div>        
									<div class="form row">
										<label class="col-sm-3">Alamat Lengkap</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_alamat" class="form-control" value="<?php echo $data_siswa->ibu_alamat ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Desa / Kelurahan</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_desakel" class="form-control" value="<?php echo $data_siswa->ibu_desakel ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Kecamatan</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_kecamatan" class="form-control" value="<?php echo $data_siswa->ibu_kecamatan ?>">
										</div>
									</div> 
									<div class="form row">
										<label class="col-sm-3">Kabupaten</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_kabupaten" class="form-control" value="<?php echo $data_siswa->ibu_kabupaten ?>">
										</div>
									</div>   
									<div class="form row">
										<label class="col-sm-3">Provinsi</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_provinsi" class="form-control" value="<?php echo $data_siswa->ibu_provinsi ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Kode Pos</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_kodepos" class="form-control" value="<?php echo $data_siswa->ibu_kodepos ?>">
										</div>
									</div>  
									<div class="form row">
										<label class="col-sm-3">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_tempatlahir" class="form-control" value="<?php echo $data_siswa->ibu_tempatlahir ?>">
										</div>
									</div>    
									<div class="form row">
										<label class="col-sm-3">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_tanggallahir" class="form-control" value="<?php echo $data_siswa->ibu_tanggallahir ?>">
										</div>
									</div>   
									<div class="form row">
										<label class="col-sm-3">Agama</label>
										<div class="col-sm-9">
											<select class="form-control" id="ibu_agama" name="ibu_agama">
												<option value="<?php echo $data_siswa->ibu_agama ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->ibu_agama ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="Islam" class="font-weight-bolder">Islam</option>
                                                <option value="Kristen" class="font-weight-bolder">Kristen</option>
                                                <option value="Katholik" class="font-weight-bolder">Katholik</option>
                                                <option value="Hindu" class="font-weight-bolder">Hindu</option>
												<option value="Budha" class="font-weight-bolder">Budha</option>
												<option value="Konghucu" class="font-weight-bolder">Konghucu</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Kewarganegaraan</label>
										<div class="col-sm-9">
											<select class="form-control" id="ibu_kewarganegaraan" name="ibu_kewarganegaraan">
												<option value="<?php echo $data_siswa->ibu_kewarganegaraan ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->ibu_kewarganegaraan ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="WNA" class="font-weight-bolder">WNA (Warga Negara Asing)</option>
                                                <option value="WNI" class="font-weight-bolder">WNI (Warga Negara Indonesia)</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Pendidikan</label>
										<div class="col-sm-9">
											<select class="form-control" id="ibu_pendidikan" name="ibu_pendidikan">
												<option value="<?php echo $data_siswa->ibu_pendidikan ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->ibu_pendidikan ?>)</span></option>
												<option value="SLTP" class="font-weight-bolder"><= SLTP</option>
												<option value="SLTA" class="font-weight-bolder">SLTA</option>
                                                <option value="D1" class="font-weight-bolder">D1</option>
                                                <option value="D2" class="font-weight-bolder">D2</option>
                                                <option value="D3" class="font-weight-bolder">D3</option>
												<option value="D4" class="font-weight-bolder">D4</option>
												<option value="S1" class="font-weight-bolder">S1</option>
												<option value="S2" class="font-weight-bolder">S2</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Pekerjaan</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_pekerjaan" class="form-control" value="<?php echo $data_siswa->ibu_pekerjaan ?>">
										</div>
									</div>     
									<div class="form row">
										<label class="col-sm-3">Penghasilan</label>
										<div class="col-sm-9">
											<input type="text" id="rupiah2" name="ibu_penghasilan" class="form-control" value="<?php echo $data_siswa->ibu_penghasilan ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Nomor HP</label>
										<div class="col-sm-9">
											<input type="text" name="ibu_nohp" class="form-control" value="<?php echo $data_siswa->ibu_nohp ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Apakah Masih Hidup</label>
										<div class="col-sm-9">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline5" name="ibu_status" class="custom-control-input" value="Masih Hidup"<?php echo ($data_siswa->ibu_status == 'Masih Hidup' ? ' checked' : ''); ?> >
												<label class="custom-control-label" for="customRadioInline5">YA</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline6" name="ibu_status" class="custom-control-input" value="Sudah Meninggal"<?php echo ($data_siswa->ibu_status == 'Sudah Meninggal' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="customRadioInline6">TIDAK</label>
											</div>
										</div>
									</div>
									<div class="card alert-primary ">
										<h6>Data Wali </h6>
									</div>
									<div class="form row">
										<label class="col-sm-3">Nik</label>
										<div class="col-sm-9">
											<input type="text" name="wali_nik" class="form-control" value="<?php echo $data_siswa->wali_nik ?>">
										</div>
									</div>  
                  					<div class="form row">
										<label class="col-sm-3">Nama</label>
										<div class="col-sm-9">
											<input type="text" name="wali_nama" class="form-control" value="<?php echo $data_siswa->wali_nama ?>">
										</div>
									</div>     
									<div class="form row">
										<label class="col-sm-3">Alamat</label>
										<div class="col-sm-9">
											<input type="text" name="wali_alamat" class="form-control" value="<?php echo $data_siswa->wali_alamat ?>">
										</div>
									</div>      
									<div class="form row">
										<label class="col-sm-3">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="wali_tempatlahir" class="form-control" value="<?php echo $data_siswa->wali_tempatlahir ?>">
										</div>
									</div>    
									<div class="form row">
										<label class="col-sm-3">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="wali_tanggallahir" class="form-control" value="<?php echo $data_siswa->wali_tanggallahir ?>">
										</div>
									</div>   
									<div class="form row">
										<label class="col-sm-3">Agama</label>
										<div class="col-sm-9">
											<select class="form-control" id="wali_agama" name="wali_agama">
												<option value="<?php echo $data_siswa->wali_agama ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->wali_agama ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="Islam" class="font-weight-bolder">Islam</option>
                                                <option value="Kristen" class="font-weight-bolder">Kristen</option>
                                                <option value="Katholik" class="font-weight-bolder">Katholik</option>
                                                <option value="Hindu" class="font-weight-bolder">Hindu</option>
												<option value="Budha" class="font-weight-bolder">Budha</option>
												<option value="Konghucu" class="font-weight-bolder">Konghucu</option>
											</select>
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3">Kewarganegaraan</label>
										<div class="col-sm-9">
											<select class="form-control" id="wali_kewarganegaraan" name="wali_kewarganegaraan">
												<option value="<?php echo $data_siswa->wali_kewarganegaraan ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->wali_kewarganegaraan ?>)</span></option>
												<option value="" class="font-weight-bolder"></option>
												<option value="WNA" class="font-weight-bolder">WNA (Warga Negara Asing)</option>
                                                <option value="WNI" class="font-weight-bolder">WNI (Warga Negara Indonesia)</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Pendidikan</label>
										<div class="col-sm-9">
											<select class="form-control" id="wali_pendidikan" name="wali_pendidikan">
												<option value="<?php echo $data_siswa->wali_pendidikan ?>">Pilihan Saat ini <span class="font-weight-bolder">(<?php echo $data_siswa->wali_pendidikan ?>)</span></option>
												<option value="SLTP" class="font-weight-bolder"><= SLTP</option>
												<option value="SLTA" class="font-weight-bolder">SLTA</option>
                                                <option value="D1" class="font-weight-bolder">D1</option>
                                                <option value="D2" class="font-weight-bolder">D2</option>
                                                <option value="D3" class="font-weight-bolder">D3</option>
												<option value="D4" class="font-weight-bolder">D4</option>
												<option value="S1" class="font-weight-bolder">S1</option>
												<option value="S2" class="font-weight-bolder">S2</option>
											</select>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Pekerjaan</label>
										<div class="col-sm-9">
											<input type="text" name="wali_pekerjaan" class="form-control" value="<?php echo $data_siswa->wali_pekerjaan ?>">
										</div>
									</div>     
									<div class="form row">
										<label class="col-sm-3">Penghasilan</label>
										<div class="col-sm-9">
											<input type="text" id="rupiah3" name="wali_penghasilan" class="form-control" value="<?php echo $data_siswa->wali_penghasilan ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Nomor HP</label>
										<div class="col-sm-9">
											<input type="text" name="wali_nohp" class="form-control" value="<?php echo $data_siswa->wali_nohp ?>">
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3">Apakah Masih Hidup</label>
										<div class="col-sm-9">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline7" name="wali_status" class="custom-control-input" value="Masih Hidup"<?php echo ($data_siswa->wali_status == 'Masih Hidup' ? ' checked' : ''); ?> >
												<label class="custom-control-label" for="customRadioInline7">YA</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline8" name="wali_status" class="custom-control-input" value="Sudah Meninggal"<?php echo ($data_siswa->wali_status == 'Sudah Meninggal' ? ' checked' : ''); ?>>
												<label class="custom-control-label" for="customRadioInline8">TIDAK</label>
											</div>
										</div>
									</div>


									<div class="form row">
										<label class="col-sm-9 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info">Simpan</button>
										</div>
									</div>
								</form>
							</div>
							<!-- End Edit data pribadi siswa-->
						</div> 
					</div>




























                    <div class="tab-pane fade show" id="asalsekolah" role="tabpanel" aria-labelledby="asalsekolah-tab">
						<div class="card card-border-c-green">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Sekolah Asal</h5>
								<button type="button" class="btn btn-info btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-5 pro-det-edit-6">
									<i class="feather icon-edit"></i>Edit Data
								</button>
							</div>
							<!-- [ form view data Sekolah asal ] -->	
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-5">
								<form>
									<div class="card alert-primary ">
										<h6>Data Pendidikan Sebelumnya </h6>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Asal Sekolah</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->asal_sekolah ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nomor SKHU</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->asal_noskhu ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nomor Ijazah</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->asal_noijazah ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Nilai UN</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->asal_nilaiun ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Tanggal Lulus</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->asal_tanggal ?>
										</div>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Lama Belajar</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->asal_lamapendidikan ?>
										</div>
									</div>

									<div class="card alert-primary ">
										<h6>Data Siswa Pindahan </h6>
									</div>
									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Pindah Dari Sekolah</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->pindahan_asalsekolah ?>
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Alasan Pindah</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->pindahan_alasan ?>
										</div>
									</div>

									<div class="form row">
										<label class="col-sm-3 font-weight-bolder">Tanggal Pindah</label>
										<div class="col-md-9">:
										<?php echo $data_siswa->pindahan_tanggal ?>
										</div>
									</div>

								</form>
							</div>

							<!-- Edit data pribadi siswa-->
							<div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-6">
								<form action="<?php echo base_url() ?>admin/dashboard/updateasalsekolah" method="POST">
									
									<div class="card alert-primary ">
										<h6>Data Sekolah Asal </h6>
									</div>

									<div class="form row">
										<label class="col-sm-3">Sekolah Asal</label>
										<div class="col-sm-9">
											<input type="text" name="asal_sekolah" class="form-control" value="<?php echo $data_siswa->asal_sekolah ?>">
											<input type="hidden" name="id_pendaftar" value="<?php echo $data_siswa->id_pendaftar ?>">
										</div>
									</div>  
                  					<div class="form row">
										<label class="col-sm-3">Nomor SKHU</label>
										<div class="col-sm-9">
											<input type="text" name="asal_noskhu" class="form-control" value="<?php echo $data_siswa->asal_noskhu ?>">
										</div>
									</div>      
									<div class="form row">
										<label class="col-sm-3">Nomor Ijazah</label>
										<div class="col-sm-9">
											<input type="text" name="asal_noijazah" class="form-control" value="<?php echo $data_siswa->asal_noijazah ?>">
										</div>
									</div>      
									<div class="form row">
										<label class="col-sm-3">Total Nilai UN</label>
										<div class="col-sm-9">
											<input type="text" name="asal_nilaiun" class="form-control" value="<?php echo $data_siswa->asal_nilaiun ?>">
										</div>
									</div>      
									<div class="form row">
										<label class="col-sm-3">Tanggal Kelulusan</label>
										<div class="col-sm-9">
											<input type="text" name="asal_tanggal" class="form-control" value="<?php echo $data_siswa->asal_tanggal ?>">
										</div>
									</div>   
									<div class="form row">
										<label class="col-sm-3">Lama Belajar</label>
										<div class="col-sm-3">
											<input type="number" name="asal_lamapendidikan" class="form-control" value="<?php echo $data_siswa->asal_lamapendidikan ?>">
										</div>
									</div>   
									
									
									<div class="card alert-primary ">
										<h6>Data Siswa Pindahan </h6>
									</div>

									<div class="form row">
										<label class="col-sm-3">Dari Sekolah</label>
										<div class="col-sm-9">
											<input type="text" name="pindahan_asalsekolah" class="form-control" value="<?php echo $data_siswa->pindahan_asalsekolah ?>">
										</div>
									</div>      
									<div class="form row">
										<label class="col-sm-3">Alasan Pindah</label>
										<div class="col-sm-9">
											<input type="text" name="pindahan_alasan" class="form-control" value="<?php echo $data_siswa->pindahan_alasan ?>">
										</div>
									</div>   
									<div class="form row">
										<label class="col-sm-3">Tanggal Pindah</label>
										<div class="col-sm-9">
											<input type="text" name="pindahan_tanggal" class="form-control" value="<?php echo $data_siswa->pindahan_tanggal ?>">
										</div>
									</div>  

									<div class="form row">
										<label class="col-sm-9 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info">Simpan</button>
										</div>
									</div>
								</form>
							</div>
							<!-- End Edit data pribadi siswa-->

					</div>
				</div>
	



				
				</div>
			</div>






			<div class="col-md-4 order-md-1">
				<div class="card card-border-c-blue">
					<div class="card-header d-flex align-items-center justify-content-between">
						<h5 class="mb-0">Informasi Akun</h5>
						<span class="badge badge-light-primary float-right"><?php echo $data_siswa->role ?></span>
					</div>
					<div class="card-body">
                        <div class="form row">
                            <label class="col-sm-3 col-form-label font-weight-bolder">Username</label>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" value="<?php echo $data_siswa->username ?>" readonly>
                            </div>
                        </div>
                        <div class="form row">
                            <label class="col-sm-3 col-form-label font-weight-bolder">Password</label>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" value="<?php echo $data_siswa->password ?>" readonly>
                            </div>
                        </div>
                        <p class="mb-0 text-muted">*Silahkan Hubungi Administrator Untuk Pergantian Password</p>
					</div>
				</div>



				<div class="card new-cust-card card-border-c-red">
					<div class="card-header">
						<h5>Informasi Sekolah Asal</h5>
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



					<div class="cust-scroll" style="position:relative;">
						<div class="card-body p-b-0">
                       
                        <div class="row form">
                            <div class="col-sm-4">
                                <label class="col-form-label">Asal sekolah</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" readonly  class="form-control-plaintext mob_no" value=": <?php echo $data_siswa->asal_sekolah ?>">
                            </div>
                        </div>

                        <div class="row form">
                            <div class="col-sm-4">
                                <label class="col-form-label">Nomor SKHU</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext mob_no" value=": <?php echo $data_siswa->asal_noskhu ?>">
                            </div>
                        </div>

                        <div class="row form">
                            <div class="col-sm-4">
                                <label class="col-form-label">Nomor Seri Ijazah</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext mob_no" value=": <?php echo $data_siswa->asal_noijazah ?>">
                            </div>
                        </div>

                        <div class="row form">
                            <div class="col-sm-4">
                                <label class="col-form-label">Total nilai UN</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext mob_no" value=": <?php echo $data_siswa->asal_nilaiun ?>">
                            </div>
                        </div>

                        <div class="row form">
                            <div class="col-sm-4">
                                <label class="col-form-label">Tanggal Kelulusan</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext mob_no" value=": <?php echo $data_siswa->asal_tanggal ?>">
                            </div>
                        </div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- profile body end -->













