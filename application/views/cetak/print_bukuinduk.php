<html>
    <head>
        <style>
            body {
                font-size: 10px;
            }
            
            .title {
                font-weight: bold;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>

    <h3 style="text-align: center; font-weight: bold;">DATA PESERTA DIDIK</h3>

    <table border="0" style="width: 100%">
        <tr>
            <td style="width: 15%;">NOMOR INDUK SEKOLAH</td>
            <td style="width: 1%;">:</td>
            <td style="width: 25%;"><?php echo $row->nis; ?></td>
        </tr>
        <tr>

            <td style="width: 15%;">NOMOR INDUK NASIONAL </td>
            <td style="width: 1%;">:</td>
            <td style="width: 25%;"><?php echo $row->nisn; ?></td>
        </tr>
    </table>
    <hr><br>


        <table border="0" style="width: 100%">
            <tr><br>
                <td style="width: 40%;">
                    <ol type="A">
                        <li>
                            <span class="title">KETERANGAN TENTANG DIRI PESERTA DIDIK</span> <br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">1.</td>
                                    <td style="width: 40%;">Nama Lengkap Peserta Didik</td>
                                    <td style="width: 53%;">: <?php echo $row->nama_lengkap; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">2.</td>
                                    <td style="width: 40%;">Jenis Kelamin</td>
                                    <td style="width: 53%;">: <?php echo $row->jeniskelamin; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">3.</td>
                                    <td style="width: 40%;">Tempat / Tanggal lahir</td>
                                    <td style="width: 53%;">: <?php echo $row->tempatlahir." , ".$row->tanggallahir; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">4.</td>
                                    <td style="width: 40%;">Agama</td>
                                    <td style="width: 53%;">: <?php echo $row->agama; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">5.</td>
                                    <td style="width: 40%;">Kewarganegaraan</td>
                                    <td style="width: 53%;">: <?php echo $row->kewarganegaraan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">6.</td>
                                    <td style="width: 40%;">Anak Ke</td>
                                    <td style="width: 53%;">: <?php echo $row->anakke; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">7.</td>
                                    <td style="width: 40%;">Jumlah Saudara</td>
                                    <td style="width: 53%;">: <?php echo $row->jumlahsaudara; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">8.</td>
                                    <td style="width: 40%;">Yatim/Piatu/Yatim Piatu</td>
                                    <td style="width: 53%;">: <?php echo $row->status_anakyatim; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">9.</td>
                                    <td style="width: 40%;">Bahasa Sehari-Hari</td>
                                    <td style="width: 53%;">:  <?php echo $row->bahasa; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">10.</td>
                                    <td style="width: 40%;">Hobi</td>
                                    <td style="width: 53%;">:  <?php echo $row->hobi; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">11.</td>
                                    <td style="width: 40%;">Cita - Cita</td>
                                    <td style="width: 53%;">:  <?php echo $row->citacita; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">12.</td>
                                    <td style="width: 40%;">No Telepon / No HP</td>
                                    <td style="width: 53%;">: <?php echo $row->siswa_nohp; ?></td>
                                </tr>
                            </table>
                        </li>
                        
                        <li>
                            <span class="title">KETERANGAN TEMPAT TINGGAL</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">13.</td>
                                    <td style="width: 40%;">Alamat</td>
                                    <td style="width: 3%;">:</td>
                                    <td style="width: 58%;"><?php echo $row->siswa_alamat; ?>, <?php echo $row->siswa_desakel; ?>, <?php echo $row->siswa_kecamatan; ?> <?php echo $row->siswa_kabupaten; ?>, <?php echo $row->siswa_provinsi; ?>,<?php echo $row->siswa_kodepos; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;"></td>
                                    <td style="width: 53%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">14.</td>
                                    <td style="width: 40%;">Jarak Tempat Tinggal ke Sekolah</td>
                                    <td style="width: 53%;">: <?php echo $row->jarakkesekolah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">15.</td>
                                    <td style="width: 40%;">Transportasi</td>
                                    <td style="width: 53%;">: <?php echo $row->transportasi; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">16.</td>
                                    <td style="width: 40%;">Tinggal Di</td>
                                    <td style="width: 53%;">: <?php echo $row->siswa_tinggal; ?></td>
                                </tr>
                            </table>
                        </li>
                        
                        <li>
                            <span class="title">KETERANGAN KESEHATAN</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">17.</td>
                                    <td style="width: 40%;">Golongan Darah</td>
                                    <td style="width: 53%;">: <?php echo $row->pendukung_golongandarah; ?></td>
                                </tr>  
                                <tr>
                                    <td style="width: 6%;">18.</td>
                                    <td style="width: 40%;">Penyakit yang pernah diderita</td>
                                    <td style="width: 53%;">: <?php echo $row->pendukung_penyakit; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">19.</td>
                                    <td style="width: 40%;">Kelainan Jasmani</td>
                                    <td style="width: 53%;">: <?php echo $row->pendukung_kelainanjasmani; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">20.</td>
                                    <td style="width: 40%;">Tinggi dan berat badan</td>
                                    <td style="width: 53%;">: <?php echo $row->pendukung_tinggibadan; ?> Cm , <?php echo $row->pendukung_beratbadan; ?> Kg</td>
                                </tr>
                            </table>
                         </li>
                         <li>
                            <span class="title">PENDIDIKAN SEBELUMNYA</span><br>
                                <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">21.</td>
                                    <td style="width: 40%;">Pendidikan Sebelumnya</td>
                                    <td style="width: 53%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Tamatan dari</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_sekolah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Nomor Ijazah</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_noijazah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">c. Nomor STL/SKHUN</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_noskhu; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">d. Tanggal Lulus</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_tanggal; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">22.</td>
                                    <td style="width: 40%;">Pindahan</td>
                                    <td style="width: 53%;">: </td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Dari Sekolah</td>
                                    <td style="width: 53%;">: <?php echo $row->pindahan_asalsekolah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Alasan</td>
                                    <td style="width: 53%;">: <?php echo $row->pindahan_alasan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">c. Tanggal</td>
                                    <td style="width: 53%;">: <?php echo $row->pindahan_tanggal; ?></td>
                                </tr>

                            </table>
                        </li>
                        
                        <li>
                            <span class="title">KETERANGAN TENTANG AYAH KANDUNG</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">23.</td>
                                    <td style="width: 40%;">Nama</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_nama; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">24.</td>
                                    <td style="width: 40%;">Tempat dan Tanggal Lahir</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_tempatlahir; ?>, <?php echo $row->ayah_tanggallahir; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">25.</td>
                                    <td style="width: 40%;">Agama</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_agama; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;">26.</td>
                                    <td style="width: 40%;">Kewarganegaraan</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_kewarganegaraan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">27.</td>
                                    <td style="width: 40%;">Pendidikan</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_pendidikan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">28.</td>
                                    <td style="width: 40%;">Pekerjaan</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">29.</td>
                                    <td style="width: 40%;">Pendapatan Perbulan</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_penghasilan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">30.</td>
                                    <td style="width: 40%;">Alamat Rumah / No Hp</td>
                                    <td style="width: 3%;">: </td>
                                    <td style="width: 53%;"><?php echo $row->ayah_alamat; ?>, <?php echo $row->ayah_desakel; ?>, <?php echo $row->ayah_kecamatan; ?>, <?php echo $row->ayah_kabupaten; ?>, <?php echo $row->ayah_provinsi; ?> - <?php echo $row->ayah_kodepos; ?> / <?php echo $row->ayah_nohp; ?></td>
                                </tr>                
                                <tr>
                                    <td style="width: 6%;">31.</td>
                                    <td style="width: 40%;">Masih Hidup/Meninggal Dunia</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_status; ?></td>
                                </tr>

                            </table>
                        </li>
                    </ol>
                </td>












                
                <td style="width: 50%;">

                    
                    <ol type="A" start="6">
                   
                        <li>
                            <span class="title">KETERANGAN TENTANG IBU KANDUNG</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">32.</td>
                                    <td style="width: 40%;">NIK</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_nik; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">33.</td>
                                    <td style="width: 40%;">Nama</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_nama; ?></td>
                                </tr>

                                <tr>
                                    <td style="width: 6%;">34.</td>
                                    <td style="width: 40%;">Tempat dan Tanggal Lahir</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_tempatlahir; ?>, <?php echo $row->ibu_tanggallahir; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">35.</td>
                                    <td style="width: 40%;">Agama</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_agama; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;">36.</td>
                                    <td style="width: 40%;">Kewarganegaraan</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_kewarganegaraan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">37.</td>
                                    <td style="width: 40%;">Pendidikan</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_pendidikan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">38.</td>
                                    <td style="width: 40%;">Pekerjaan</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">39.</td>
                                    <td style="width: 40%;">Pendapatan Perbulan</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_penghasilan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">40.</td>
                                    <td style="width: 40%;">Alamat Rumah / No Hp</td>
                                    <td style="width: 2%;">:</td>
                                    <td style="width: 53%;"><?php echo $row->ibu_alamat; ?>, <?php echo $row->ibu_desakel; ?>, <?php echo $row->ibu_kecamatan; ?>, <?php echo $row->ibu_kabupaten; ?>, <?php echo $row->ibu_provinsi; ?> - <?php echo $row->ibu_kodepos; ?> / <?php echo $row->ibu_nohp; ?></td>
                                </tr>                
                                <tr>
                                    <td style="width: 6%;">41.</td>
                                    <td style="width: 40%;">Masih Hidup/Meninggal Dunia</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_status; ?></td>
                                </tr>
            
                            </table>
                        </li>


                        <li>
                            <span class="title">KETERANGAN TENTANG WALI</span><br>
                            <table border="0" style="width: 100%;">
                            <tr>
                                    <td style="width: 6%;">42.</td>
                                    <td style="width: 40%;">Nik</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_nik; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">43.</td>
                                    <td style="width: 40%;">Nama</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_nama; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">44.</td>
                                    <td style="width: 40%;">Tempat dan Tanggal Lahir</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_tempatlahir; ?>, <?php echo $row->wali_tanggallahir; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">45.</td>
                                    <td style="width: 40%;">Agama</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_agama; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;">46.</td>
                                    <td style="width: 40%;">Kewarganegaraan</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_kewarganegaraan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">47.</td>
                                    <td style="width: 40%;">Pendidikan</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_pendidikan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">48.</td>
                                    <td style="width: 40%;">Pekerjaan</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">49.</td>
                                    <td style="width: 40%;">Pendapatan Perbulan</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_penghasilan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">50.</td>
                                    <td style="width: 40%;">Alamat Rumah / No HP</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_alamat; ?>, <?php echo $row->wali_nohp; ?></td>
                                </tr>       
                                <tr>
                                    <td style="width: 6%;">51.</td>
                                    <td style="width: 40%;">Masih Hidup/Meninggal Dunia</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_status; ?></td>
                                </tr>         
                            </table>
                        </li>
                        <li>
                            <span class="title">KEGEMARAN PESERTA DIDIK</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">52.</td>
                                    <td style="width: 40%;">Kesenian</td>
                                    <td style="width: 53%;">: <?php echo $row->kegemaran_kesenian; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">53.</td>
                                    <td style="width: 40%;">Olah Raga</td>
                                    <td style="width: 53%;">: <?php echo $row->kegemaran_olahraga; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">54.</td>
                                    <td style="width: 40%;">Kemasyarakatan/Organisasi</td>
                                    <td style="width: 53%;">: <?php echo $row->kegemaran_organisasi; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;">55.</td>
                                    <td style="width: 40%;">Lain-lain</td>
                                    <td style="width: 53%;">: <?php echo $row->kegemaran_lainlain; ?></td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <span class="title">KETERANGAN PERKEMBANGAN PESERTA DIDIK</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">56.</td>
                                    <td style="width: 40%;">Menerima Beasiswa</td>
                                    <td style="width: 53%;">: <?php echo $row->beasiswa_nama; ?> </td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;"></td>
                                    <td style="width: 53%;">  Tahun <?php echo $row->beasiswa_tahun; ?> / Nominal <?php echo $row->beasiswa_nominal; ?></td>
                                </tr>
                              
                                <tr>
                                    <td style="width: 6%;">57.</td>
                                    <td style="width: 40%;">Meninggalkan Sekolah ini</td>
                                    <td style="width: 53%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Tanggal meninggalkan sekolah</td>
                                    <td style="width: 53%;">: </td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Alasan</td>
                                    <td style="width: 53%;">: </td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">58.</td>
                                    <td style="width: 40%;">Akhir Pendidikan</td>
                                    <td style="width: 53%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Lulus</td>
                                    <td style="width: 53%;">: <?php echo $row->lulus_tahun; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Nomor/Tanggal Ijazah</td>
                                    <td style="width: 53%;">: <?php echo $row->lulus_noijazah; ?> / <?php echo $row->lulus_tanggalijazah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">c. Nomor/Tanggal SKHU</td>
                                    <td style="width: 53%;">: <?php echo $row->lulus_noskhu; ?> / <?php echo $row->lulus_tanggalskhu; ?></td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <span class="title">KETERANGAN SETELAH SELESAI PENDIDIKAN</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">59.</td>
                                    <td style="width: 40%;">Melanjutkan ke</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_nama; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">60.</td>
                                    <td style="width: 40%;">Bekerja di</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_bekerja; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Tanggal mulai bekerja</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_bekerjamulai; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Nama Perusahaan/Lembaga</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_bekerjaperusahaan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">c. Penghasilan</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_penghasilan; ?></td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                </td>
                

                
                <td style="width: 0%;">
                    
                    <table border="0"> 
                        <tr>
                            <td> <br><br><br> <br><br><br> <br><br><br></td>
                        </tr>

                    </table>

                    <table border="1">
                        <tr>
                            <td style="text-align: center;">
                                <br><br><br><br>
                                Pas Photo
                                <br><br><br>
                                3 x 4
                                <br><br><br><br>
                            </td>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <td style="text-align: center;">Waktu diterima disekolah ini</td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                    </table>
                    <table border="1">
                        <tr>
                            <td style="text-align: center;">
                                <br><br><br><br>
                                Pas Photo
                                <br><br><br>
                                3 x 4
                                <br><br><br><br>
                            </td>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <td style="text-align: center;">Waktu meninggalkan sekolah ini</td>
                        </tr>
                    </table>
                </td>
            </tr>










        </table>
        
    </body>
</html>