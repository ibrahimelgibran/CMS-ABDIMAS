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


<h3 style="text-align: center; font-weight: bold;">DATA NILAI PESERTA DIDIK</h3>


<br><br>
    <table border="0" style="width: 100%">
            <tr>
                <td style="width: 35%;">
                        <li><?php foreach($datarapormapela as $tahunajaran1a){ ?> <?php }?>
                            <table border="1">
                                <tr>
                                    <td rowspan="3" style="width: 8%; text-align: center;">No</td>
                                    <td rowspan="3" style="width: 61%; text-align: center;">MATA PELAJARAN</td>
                                    <td colspan="2" style="width: 34%; text-align: center;"><?php echo $tahunajaran1a->tahun_ajaran ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">semester 1</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">Pengetahuan</td>
                                    <td style="text-align: center;">Keterampilan</td>
                                </tr>

                                
                                <!-- kelompok A -->
                                <?php $no = 1; foreach($datarapormapela as $datarapormapela){ ?>
                                <tr> 
                                    <td style="text-align: center;"><?php echo $no++ ?></td>
                                    <td style="text-align: left;"> <?php echo $datarapormapela->nama_mapel ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapela->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapela->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                <!-- kelompok B -->
                                <?php foreach($datarapormapelb as $datarapormapelb){ ?>
                                <tr> 
                                    <td style="text-align: center;"><?php echo $no++ ?></td>
                                    <td style="text-align: left;"> <?php echo $datarapormapelb->nama_mapel ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapelb->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapelb->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                <!-- kelompok C -->
                                <?php foreach($datarapormapelc as $datarapormapelc){ ?>
                                <tr> 
                                    <td style="text-align: center;"><?php echo $no++ ?></td>
                                    <td style="text-align: left;"> <?php echo $datarapormapelc->nama_mapel ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapelc->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapelc->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>
                            </table>


                           <br><br>
                           <span><strong>Ekstrakurikuler</strong></span><br>
                            <table border="1">
                                <tr style="text-align: center;">
                                    <td style="width: 8%;">No</td>
                                    <td style="width: 61%;">Nama Ekstrakurikuler</td>
                                    <td style="width: 17%;">Nilai</td>
                                </tr>
                                <?php $no = 1; foreach($dataraporekstra as $dataraporekstra){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $no++ ?></td>
                                    <td> <?php echo $dataraporekstra->nama_ekstra ?></td>
                                    <td style="text-align: center;"> <?php echo $dataraporekstra->nilai ?></td>
                                </tr>
                                <?php }?>
                            </table>

                      






                        </li>   
                        
                      
                </td>

                <td style="width: 11%;">
                        <li><?php foreach($datarapormapel2a as $tahunajaran2a){ ?> <?php }?>
                            <table border="1">
                                <tr>
                                    <td colspan="2" style="width: 110%; text-align: center;"><?php echo $tahunajaran2a->tahun_ajaran ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">semester 2</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">Pengetahuan</td>
                                    <td style="text-align: center;">Keterampilan</td>
                                </tr>


                                 <!-- kelompok A -->
                                 <?php foreach($datarapormapel2a as $datarapormapel2a){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel2a->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel2a->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                <!-- kelompok B -->
                                <?php foreach($datarapormapel2b as $datarapormapel2b){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel2b->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel2b->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                 <!-- kelompok C -->
                                 <?php foreach($datarapormapel2c as $datarapormapel2c){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel2c->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel2c->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                            </table>
                        </li>
                </td>
                          
                <td style="width: 11%;">
                        <li><?php foreach($datarapormapel3a as $tahunajaran3a){ ?> <?php }?>
                            <table border="1">
                                <tr>
                                    <td colspan="2" style="width: 110%; text-align: center;"><?php echo $tahunajaran3a->tahun_ajaran ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">semester 3</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">Pengetahuan</td>
                                    <td style="text-align: center;">Keterampilan</td>
                                </tr>

                                 <!-- kelompok A -->
                                 <?php foreach($datarapormapel3a as $datarapormapel3a){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel3a->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel3a->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                  <!-- kelompok B -->
                                  <?php foreach($datarapormapel3b as $datarapormapel3b){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel3b->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel3b->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                 <!-- kelompok C -->
                                 <?php foreach($datarapormapel3c as $datarapormapel3c){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel3c->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel3c->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>
                            </table>
                        </li>
                </td>             
            
            
                <td style="width: 12%;">
                        <li><?php foreach($datarapormapel4a as $tahunajaran4a){ ?> <?php }?>
                            <table border="1" style="width: 109%;">
                                <tr>
                                    <td colspan="2" style="text-align: center;"><?php echo $tahunajaran4a->tahun_ajaran ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">semester 4</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">Pengetahuan</td>
                                    <td style="text-align: center;">Keterampilan</td>
                                </tr>
                                 <!-- kelompok A -->
                                 <?php foreach($datarapormapel4a as $datarapormapel4a){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel4a->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel4a->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                 <!-- kelompok B -->
                                 <?php foreach($datarapormapel4b as $datarapormapel4b){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel4b->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel4b->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                 <!-- kelompok C -->
                                 <?php foreach($datarapormapel4c as $datarapormapel4c){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel4c->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel4c->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>
                            </table>
                        </li>
                </td>    
            
            
                <td style="width: 12%;">
                        <li><?php foreach($datarapormapel5a as $tahunajaran5a){ ?> <?php }?>
                            <table border="1" style="width: 109%;">
                                <tr>
                                    <td colspan="2" style="text-align: center;"><?php echo $tahunajaran5a->tahun_ajaran ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">semester 5</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">Pengetahuan</td>
                                    <td style="text-align: center;">Keterampilan</td>
                                </tr>
                                 <!-- kelompok A -->
                                 <?php foreach($datarapormapel5a as $datarapormapel5a){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel5a->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel5a->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                 <!-- kelompok B -->
                                 <?php foreach($datarapormapel5b as $datarapormapel5b){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel5b->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel5b->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                 <!-- kelompok C -->
                                 <?php foreach($datarapormapel5c as $datarapormapel5c){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel5c->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel5c->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>
                            </table>
                        </li>
                </td>    
            
            
                <td style="width: 12%;">
                        <li><?php foreach($datarapormapel6a as $tahunajaran6a){ ?> <?php }?>
                            <table border="1" style="width: 109%;">
                                <tr>
                                    <td colspan="2" style="text-align: center;"><?php echo $tahunajaran6a->tahun_ajaran ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">semester 6</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">Pengetahuan</td>
                                    <td style="text-align: center;">Keterampilan</td>
                                </tr>
                                 <!-- kelompok A -->
                                 <?php foreach($datarapormapel6a as $datarapormapel6a){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel6a->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel6a->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                  <!-- kelompok B -->
                                  <?php foreach($datarapormapel6b as $datarapormapel6b){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel6b->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel6b->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>

                                  <!-- kelompok C -->
                                  <?php foreach($datarapormapel6c as $datarapormapel6c){ ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $datarapormapel6c->nilaipengetahuan ?></td>
                                    <td style="text-align: center;"><?php echo $datarapormapel6c->nilaiketerampilan ?></td>
                                </tr>
                                <?php }?>
                            </table>
                        </li>
                </td>  



            </tr>


           
                
                    

      

 












   
               
             
                

        
        
 


</body>
</html>

