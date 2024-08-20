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
            <td style="width: 80%;"><h2 style="text-align: center; font-weight: bold; text-transform:uppercase">PEMERINTAH <?php echo $data_lembaga->pemerintah ?> <?php echo $data_lembaga->provinsi_lembaga ?></h2></td>
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
        <tr><?php foreach($dataguru as $data){ ?><?php } ?>
            <td><br><b>LAPORAN REALISASI KEGIATAN TUGAS JABATAN PEGAWAI</b></td>
        </tr>
    </table><br><br>



    <table border="0" >
        <tr>
            <td style="width: 15%;">Nama</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $data->nama_guru ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">NIP</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $data->nip ?></td>

        </tr>
        <tr>
            <td style="width: 15%;">Pangkat/Gol</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->golongan ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">Jenis Jabatan</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $data->jenisjabatan ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">Unit Kerja</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $data_lembaga->nama_lembaga ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">Nama Kegiatan</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->jenisjabatan ?></td>
        </tr>
        <tr><?php foreach($data_jurnalguru as $data){ ?><?php } ?>
            <td style="width: 15%;">Bulan</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $data->bulan ?> <?php echo $data->tahun ?></td>
        </tr>
    </table>
    
    
    <p></p><p></p>
         
         
    <table border="1" style="width: 100%;">
        <tr>
            <td style="width: 5%; text-align: center;">No</td>
            <td  style="width: 12%; text-align: center;">Tanggal</td> 
            <td  style="width: 25%; text-align: center;">Detail Kegiatan</td>
            <td  style="width: 10%; text-align: center;">Kelas</td>
            <td style="width: 10%; text-align: center;">Jumlah</td>
            <td style="width: 20%; text-align: center;">Ket</td>

        </tr>
         

       

        <?php $no = 1; foreach($data_jurnalguru as $resss){ ?>
        <tr> 
            <td style="width: 5%; text-align: center;"><?php echo $no++ ?></td>
            <td style="text-align: left;"><?php echo $resss->tanggal_jurnal ?></td>
            <td style="text-align: center;"><?php echo $resss->deskripsijurnal ?></td>
            <td style="text-align: center;"><?php echo $resss->kelas_jadwal ?></td>
            <td style="text-align: center;"><?php echo $resss->nilaiketerampilan ?></td> 
            <td style="text-align: center;"><?php echo $resss->deskripsi ?></td> 
        </tr>
        <?php } ?>

        
       


    </table>



<p></p>


    
    
    <p></p><p></p>






    
    
    
    
    <br><br> 


  
               
                

        <table border="0" style="width: 50%;">
                        <tr>
                            <td style="width: 70%;"></td>
                            <td style="width: 32%;"></td>
                            <td style="width: 30%;">Tercetak</td>
                            <td style="width: 4%;">:</td>
                            <td style="width: 50%;"> <?php 
                                function tgl_indo($tanggal){
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
                 
                    

      

 












   
               
             
                

        
        
 


</body>
</html>

