<html>
<head>
    <style>
        body {
            font-size: 10px;
        }
    </style>
</head>



<body>

    <?php foreach($data_profil as $data_lembaga){ ?>
    <table border="0" style="text-align: center;">
        <tr>
            <td rowspan="2" style="width: 10%;"><img style="width:70px;70px;" class="center-block" src="<?php echo base_url(); ?>upload/<?php echo $data_lembaga->logo ?>" class="img-responsive" /></td>
            <td style="width: 80%;"><h2 style="text-align: center; font-weight: bold; text-transform:uppercase">PEMERINTAH  <?php echo $data_lembaga->pemerintah ?> <?php echo $data_lembaga->provinsi_lembaga ?></h2></td>
        </tr>

        
        <tr>
            <td><h2 style="text-align: center; font-weight: bold;">DINAS PENDIDIKAN DAN KEBUDAYAAN<br><?php echo $data_lembaga->nama_lembaga ?></h2>
            
                <p style="text-align: center;">Alamat : <?php echo $data_lembaga->alamat_lembaga ?>, <?php echo $data_lembaga->kota_lembaga ?> - <?php echo $data_lembaga->provinsi_lembaga ?> 
                <br>Telp/Fax : <?php echo $data_lembaga->notelp ?> , E-mail : <?php echo $data_lembaga->email ?> 
                </p>
            </td>
        </tr>
    </table>
    <?php } ?><p><hr></p>


    <table border="0" style="text-align: center;">
        <tr>
            <td><br>(LAPORAN DATA PELANGGARAN SISWA)</td>
        </tr>
    </table><br><br>


    

         
         
    <table border="1" style="width: 100%;">
        <tr>
            <td style="width: 5%; text-align: center;">No</td>
            <td style="width: 25%; text-align: center;">Nama Peserta Didik</td> 
            <td style="width: 7%; text-align: center;">Kelas</td>
            <td style="width: 5%; text-align: center;">Poin</td>
            <td style="width: 15%; text-align: center;">Tanggal</td>
            <td style="width: 40%; text-align: center;">Pelanggaran</td>

        </tr>
         
   


        <?php $no = 1; foreach($pelanggaran as $data){ ?>
        <tr> 
            <td style="width: 5%; text-align: center;"><?php echo $no++ ?></td>
            <td style="text-align: left;"><?php echo $data->nama_lengkap ?></td>
            <td style="text-align: center;"><?php echo $data->siswa_kelas ?></td>
            <td style="text-align: center;"><?php echo $data->poin ?></td>
            <td style="text-align: center;"><?php echo tgl_indo(date($data->tanggal)) ?></td>
            <td style="text-align: left;"><?php echo $data->nama_kasus ?></td> 
        </tr>
        <?php } ?>
        <tr> 
            <td colspan="6"><b>DATA BERIKUT BERASAL DARI DATABASE SMARTSCHOOL</b></td>
        </tr>
    </table><br><br> 


  
               
                

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





 

                        <tr><td></td></tr>
                    </table>
                    <img style="width:50px;50px;" class="center-block" src="<?php echo base_url(); ?>resources/images/barcode.png" class="img-responsive" />
                    

      

 












   
               
             
                

        
        
 


</body>
</html>

