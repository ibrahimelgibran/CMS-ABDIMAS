<html>
<head>
    <style>
        body {
            font-size: 10px;
        }
    </style>
</head>

<body>
<?php ini_set('display_errors','off'); ?>
    <?php foreach($data_profil as $data_lembaga){ ?>
    <table border="0" style="text-align: center;">
        <tr>
            <td rowspan="2" style="width: 15%;"><img style="width:150px;150px;" class="center-block" src="<?php echo base_url(); ?>upload/<?php echo $data_lembaga->logo ?>" class="img-responsive" /></td>
            <td style="width: 80%;"><h2 style="text-align: center; font-weight: bold; text-transform:uppercase">PEMERINTAH <?php echo $data_lembaga->pemerintah ?> <?php echo $data_lembaga->pemerintahkop ?></h2></td>
        </tr>

        
        <tr>
            <td><h2 style="text-align: center; font-weight: bold;"><?php echo $data_lembaga->nama_lembaganaungan ?><br><?php echo $data_lembaga->nama_lembaga ?></h2>
            
                <p style="text-align: center;">Alamat : <?php echo $data_lembaga->alamat_lembaga ?>, <?php echo $data_lembaga->kota_lembaga ?> - <?php echo $data_lembaga->provinsi_lembaga ?> 
                <br>Telp/Fax : <?php echo $data_lembaga->notelp ?> , E-mail : <?php echo $data_lembaga->email ?> 
                </p>
            </td>
        </tr>
    </table>
    <?php } ?><p><hr></p>


    <table border="0" style="text-align: center;">
        <tr><?php foreach($row as $datasiswa){ ?><?php } ?>
            <td><h2>SURAT KETERANGAN</h2><br>Nomor :<?php echo $datasiswa->nosurat ?></td>
        </tr>
        
    </table><br><br>



    <table border="0" style="text-align: left;">
      <tr>
          <td>Yang Bertanda tangan dibawah ini Kepala <strong><?php echo $data_lembaga->nama_lembaga ?></strong> dengan ini Menerangkan bahwa :</td>
      </tr>
    </table>
    <br><br>

    <table border="0" >
        <tr>
            <td style="width: 25%;">Nama</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->nama_lengkap ?></td>
        </tr>
        <tr>
            <td style="width: 25%;">Tempat Tgl.Lahir</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->tempatlahir ?>,<?php echo tgl_indo2(date($datasiswa->tanggallahir)) ?></td>
        </tr>
        <tr>
            <td style="width: 25%;">NIS / NISN</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->nis ?> / <?php echo $datasiswa->nisn ?></td>
        </tr>
        <tr>
            <td style="width: 25%;">Ayah</td>
            <td style="width: 2%;">:</td>
            <td style="width: 25%;"><?php echo $datasiswa->ayah_nama ?></td>
        </tr>
        <tr>
            <td style="width: 25%;">Alamat</td>
            <td style="width: 2%;">:</td>
            <td style="width: 45%;"><?php echo $datasiswa->siswa_alamat ?>, <?php echo $datasiswa->siswa_desakel ?> <?php echo $datasiswa->siswa_kecamatan ?></td>
        </tr>
       
    </table>
    <p>
        Benar siswa tersebut diatas terdaftar sebagai peserta didik kelas <strong><?php echo $datasiswa->siswa_kelas ?></strong> di <strong><?php echo $data_lembaga->nama_lembaga ?></strong><br>
        Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.
 
    </p><p></p>
         
  
  
    <table border="0" style="text-align: left;">
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"><?php echo $data_lembaga->kota_lembaga ?>,
                            <?php function tgl_indo3($tanggal2){
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
                                $pecahkan = explode('-', $tanggal2);
                                
                                // variabel pecahkan 0 = tanggal
                                // variabel pecahkan 1 = bulan
                                // variabel pecahkan 2 = tahun
                            
                                return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                }
                                echo tgl_indo3(date('Y-m-d')); 
                            ?></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;">Mengetahui</td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;">Kepala <?php echo $data_lembaga->nama_lembaga ?></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"><?php echo $data_lembaga->nama_kepsek ?></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;">NIP : <?php echo $data_lembaga->nip_kepsek ?></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"></td>
      </tr>
      <tr>
        <td style="width: 50%;"></td>
        <td style="width: 40%;"></td>
      </tr>
    </table>
  
               
                

        <table border="0" style="width: 100%;">
                        <tr>
                            <td style="width: 10%;">Tercetak</td>
                            <td style="width: 2%;">:</td>
                            <td style="width: 50%;"> 
                            <?php function tgl_indo($tanggal){
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
                                }
                                echo tgl_indo(date('Y-m-d')); 
                            ?></td>
                        </tr>

                            <?php function tgl_indo2($tanggal){
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
                                $pecahkan = explode('/', $tanggal);
                                
                                // variabel pecahkan 0 = tanggal
                                // variabel pecahkan 1 = bulan
                                // variabel pecahkan 2 = tahun
                            
                                return $pecahkan[0] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[2];
                                }
                            ?>

                        <tr><td></td></tr>
                      
                 
                    

      

 












   
               
             
                

        
        
 


</body>
</html>

