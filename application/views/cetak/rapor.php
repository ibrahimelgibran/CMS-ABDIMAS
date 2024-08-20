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
        <tr><?php foreach($datasiswa as $datasiswa){ ?><?php } ?>
            <td><br>(Laporan Hasil Belajar Siswa Semester <?php echo $datasiswa->semester ?>)</td>
        </tr>
    </table><br><br>



    <table border="0" >
        <tr>
            <td style="width: 15%;">Nama</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->nama_siswa ?></td>
            <td style="width: 15%;">Kelas / No.Absen</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->nama_kelas ?> / <?php echo $datasiswa->nomor_absen ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">NISN</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->nisn ?></td>
            <td style="width: 15%;">Semester</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->semester ?></td>

        </tr>
        <tr>
            <td style="width: 15%;">NO INDUK/NIS</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->nis ?></td>
            <td style="width: 15%;">Tahun Ajaran</td>
            <td style="width: 2%;">:</td>
            <td style="width: 40%;"><?php echo $datasiswa->tahun_ajaran ?></td>
        </tr>
    </table>
    
    
    <p></p><p></p>
         
         
    <table border="1" style="width: 100%;">
        <tr>
            <td rowspan="2" style="width: 5%; text-align: center;">No</td>
            <td rowspan="2" style="width: 30%; text-align: center;">MATA PELAJARAN</td> 
            <td rowspan="2" style="width: 7%; text-align: center;">KKM</td>
            <td colspan="2" style="width: 35%; text-align: center;">Nilai</td>
            <td style="width: 20%; text-align: center;">Deskripsi</td>

        </tr>
         
        <tr>
            <td style="text-align: center;">PENGETAHUAN</td>
            <td style="text-align: center;">KETERAMPILAN</td>
        </tr>

        <tr> 
            <td colspan="6"><b>Kelompok  A</b></td>
        </tr>

        <?php $no = 1; foreach($datarapormapela as $resss){ ?>
        <tr> 
            <td style="width: 5%; text-align: center;"><?php echo $no++ ?></td>
            <td style="text-align: left;"><?php echo $resss->nama_mapel ?></td>
            <td style="text-align: center;"><?php echo $resss->kkm ?></td>
            <td style="text-align: center;"><?php echo $resss->nilaipengetahuan ?></td>
            <td style="text-align: center;"><?php echo $resss->nilaiketerampilan ?></td> 
            <td style="text-align: center;"><?php echo $resss->deskripsi ?></td> 
        </tr>
        <?php } ?>

        
        <tr> 
            <td colspan="6"><b>Kelompok B</b></td>
        </tr>

        <?php $no = 1; foreach($datarapormapelb as $resss){ ?>
        <tr> 
            <td style="width: 5%; text-align: center;"><?php echo $no++ ?></td>
            <td style="text-align: left;"><?php echo $resss->nama_mapel ?></td>
            <td style="text-align: center;"><?php echo $resss->kkm ?></td>
            <td style="text-align: center;"><?php echo $resss->nilaipengetahuan ?></td>
            <td style="text-align: center;"><?php echo $resss->nilaiketerampilan ?></td> 
            <td style="text-align: center;"><?php echo $resss->deskripsi ?></td> 
        </tr>
        <?php } ?>

        <tr> 
            <td colspan="6"><b>Kelompok C</b></td>
        </tr>

        <?php $no = 1; foreach($datarapormapelc as $resss){ ?>
        <tr> 
            <td style="width: 5%; text-align: center;"><?php echo $no++ ?></td>
            <td style="text-align: left;"><?php echo $resss->nama_mapel ?></td>
            <td style="text-align: center;"><?php echo $resss->kkm ?></td>
            <td style="text-align: center;"><?php echo $resss->nilaipengetahuan ?></td>
            <td style="text-align: center;"><?php echo $resss->nilaiketerampilan ?></td> 
            <td style="text-align: center;"><?php echo $resss->deskripsi ?></td> 
        </tr>
        <?php } ?>


    </table>



<p></p>

    <table border="1" style="width: 100%;">
    <tr>
            <td colspan="1" style="width: 30%; text-align: center;"><b>Ekstrakurikuler</b></td>
            <td style="width: 30%; text-align: center;"><b>Keterangan</b></td>
            
        </tr>
    <?php $no = 1; foreach($dataraporekstra as $resss){ ?>
        <tr>
            <td style="width: 5%; text-align: center;"><?php echo $no++ ?></td>
            <td style="width: 25%; text-align: left;"><?php echo $resss->ekstra ?></td>
            <td style="width: 30%; text-align: center;"><?php echo $resss->nilai ?></td>
        </tr>
        <?php } ?>
    </table>
    
    
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

