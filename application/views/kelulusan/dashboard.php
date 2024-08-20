
<html>
<head>
<title>KELULUSAN</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="/cdn-cgi/apps/head/yZcRqLnyFEjMCrfXHlj2VKQPx0g.js"></script><link rel="icon" href="https://static.ppdbjatim.net/img/fav.png" type="image/gif">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/kelulusan/css/bootstrap.min.css">
<script src="<?php echo base_url() ?>assets/kelulusan/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/kelulusan/jquery/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/kelulusan/css/ol.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/kelulusan/jquery/ol.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/kelulusan/css/style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js" integrity="sha256-ekbnNY56NMALfM+xMBTe2rJkzgVCnmvJUUsKazZQQT8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.css" integrity="sha256-zgaKkhKpXzSrPyXVfczHhygcPSHyhHD+PSWnq3LZHHs=" crossorigin="anonymous" />

<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/kelulusan/css/select2.min.css">
<script src="<?php echo base_url() ?>assets/kelulusan/jquery/select2.min.js"></script>
<script src="<?php echo base_url() ?>assets/kelulusan/jquery/kit.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/style3.css">


</head><body>

<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">

<div class="navbar-header">
<button type="button" class="navbar-toggle" style="background-color:white;" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="../beranda">
KELULUSAN <span class="tulisan-kecil-tipis"><?php foreach($data_profil as $data_lembaga){ ?><?php echo $data_lembaga->nama_lembaga ?><?php } ?></span>
</a>
</div>

<div class="collapse navbar-collapse" id="navbar">
<ul class="nav navbar-nav">








</ul>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#">
<span class="element brand place-right">
<span class="font-agak-tebel" id="date-widget"></span> |
<span class="font-tipis" id="clock-widget"></span>
</span>
</a>
</li>
</ul>
</div>
</div>


</nav><div class="container-fluid" style="margin-bottom:60px;">
<div class="row">
<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 umum">
<div class="row font">
<div class="col-md-7 col-md-border">
<h3 class="font-agak-tebel">Tata Cara Penggunaan Aplikasi Kelulusan<br> <?php foreach($data_profil as $data_lembaga){ ?><?php echo $data_lembaga->nama_lembaga ?><?php } ?></h3>
<hr />
<ol class="nice-ol">
<li>
Login ke situs KELULUSAN <strong><?php foreach($data_profil as $data_lembaga){ ?><?php echo $data_lembaga->nama_lembaga ?><?php } ?></strong> dan lakukan Login di menu <span style="color: #C70039">Kelulusan</span>
</li>
<li>
Gunakan Usename dan Password yang telah diberikan oleh Panitia Kelulusan
</li>
<li>
Jika Telah Berhasil Login,Cek Status Kelulusan Anda dan Cetak Bukti Kelulusan anda sebagai bukti anda telah mengikuti proses pengumuman kelulusan
</li>

</ol>



<?=$this->session->flashdata('success');?>


</div>

<div class="col-md-5">
<div class="panel panel-default card-1">
<div class="panel-heading panel-heading-custom">
<h3 class="tulisan-tebel font-putih" style="font-size:22pt">
LOGIN PESERTA
<span class="tulisan-kecil-tipis" style="display:block">
KELULUSAN <?php foreach($data_profil as $data_lembaga){ ?><?php echo $data_lembaga->nama_lembaga ?><?php } ?>
</span>
</h3>
</div>

<?php if(isset($error)) { echo $error; }; ?>
<div class="panel-body" style="padding: 20px 30px;">
<form action="" <?php echo base_url() ?>index.php/kelulusan" method="POST" accept-charset="utf-8"><div style="display:none">

</div> 
<div class="form-group">
<label class="tulisan-kecil-tebal-nomargin">Username</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i> </span>
<input maxlength="20" id="username" name="username" type="number" class="form-control" placeholder="Username" required>
</div>
</div>
<div class="form-group">
<label class="tulisan-kecil-tebal-nomargin">Password</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
<input maxlength="20" id="password" name="password" type="text" class="form-control" placeholder="Password" required>
</div>
</div>

</div>
<div class="panel-footer">
<button type="submit" class="btn btn-default pull-right" style="width: 100px;" >Login</button>
<span class="clearfix"></span>
</div>
</form> </div>
</div>
</div>
 </div>
</div>
</div>
<div id="footer">

<p class="pull-left tulisan-biasa font-putih" style="margin-top: 5px; margin-left: 150px">© 2021 - <strong>KELULUSAN</strong> <?php foreach($data_profil as $data_lembaga){ ?><?php echo $data_lembaga->nama_lembaga ?><?php } ?></p>



</div>








  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel " role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
     <div class="modal-dialog ">
         <div class="modal-content">
              <div class="modal-header text-white">
                <h5 class="modal-title" id="exampleModalLabel">FORM PENDAFTARAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

             <form class="form-horizontal" action="<?php echo base_url('ambilpin/simpanpendaftar')?>" method="post" enctype="multipart/form-data" role="form">
                 <input type="hidden" class="form-control" name="id_guru" value="<?php echo $this->session->userdata('user_id'); ?>" >
              <div class="modal-body">




              <div class="form-row">
              <?=$this->session->flashdata('success');?>
         <br>
                <div class="form-group col-md-6">
                    <label class="col-lg-10">PIN</label>
                    <div class="col-lg-12"><input type="text" name="pin" class="form-control" value="<?php echo $kodeprogram;?>" readonly></div>
                    <input type="hidden" name="password" class="form-control" value="<?php echo $kodeprogram;?>"> 
                    <input type="hidden" name="role" class="form-control" value="pengguna"> 
                  </div>
          
                  <div class="form-group col-md-6">
                    <label class="col-lg-10">Jalur Pendaftaran</label>
                    
                    <div class="col-lg-12"><select class="form-control" name="jalur" required>
                          <?php foreach ($datajalurpendaftaran as $key): ?>
                        <option value="<?php echo $key->nama_jalurpendaftaran ?>"><?php echo $key->nama_jalurpendaftaran ?></option>
                    <?php endforeach ?>
                      </select></div>
                  </div> 

                </div>


                <div class="form-group col-md-6">
                <?php echo validation_errors(); ?>
                  <label class="col-lg-10">NIK</label>
                  <div class="col-lg-12"><input type="number" name="nik" class="form-control" onkeyup="this.value = this.value.toUpperCase()" required></div>
                </div>

                <div class="form-group col-md-6">
                  <label class="col-lg-10">NISN</label>
                  <div class="col-lg-12"><input type="number" name="nisn" class="form-control" onkeyup="this.value = this.value.toUpperCase()" required></div>
                </div>

                <div class="form-group col-md-6">
                  <label class="col-lg-12">Tanggal Lahir</label>
                  <div class="col-lg-12"><input id="tanggal_lahirku" name="tanggal_lahir" type="text" class="form-control" placeholder="hh-bb-tttt" value="" min="1999-07-12" max="2007-01-01" required style="padding:0px 9px"></div>
                </div>



                <div class="form-group col-md-6">
                    <label class="col-lg-10">Jenis Kelamin</label>
                      <div class="col-lg-12">
                        <select class="form-control" name="jenis_kelamin" required>
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                  </div> 



                <div class="form-group col-md-10">
                  <label class="col-lg-12">Nama Lengkap</label>
                  <div class="col-lg-12"><input type="text" name="nama_lengkap" class="form-control" onkeyup="this.value = this.value.toUpperCase()" required></div>
                </div>




                  <div class="modal-footer">
                  <button class="btn btn-success font-putih col-lg-12" type="submit" id="submit"> Simpan&nbsp;</button>
                      
                    
                  </div>
                  
                 </form>


                 
             </div>
         </div>
     </div>
 </div>
 <!-- END Modal Tambah -->    







 <script>
    $(document).ready(function () {
        $('input[id$=tanggal_lahir]').datepicker({
            defaultDate: new Date(2004, 0, 1),
            minDate: new Date(1999, 6, 12),
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('input[id$=tanggal_lahirku]').datepicker({
            defaultDate: new Date(2004, 0, 1),
            minDate: new Date(1999, 6, 12),
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
        });
    });
</script>



</body>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-99320977-1']);
    _gaq.push(['_setDomainName', 'ppdbjatim.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass('show');
        });

        return false;
    });

 
        // read the files
        var reader = new FileReader();
        reader.readAsArrayBuffer(file);
        
        reader.onload = function (event) {
            // blob stuff
            var blob = new Blob([event.target.result]); // create blob...
            window.URL = window.URL || window.webkitURL;
            var blobURL = window.URL.createObjectURL(blob); // and get it's URL

            // helper Image object
            var image = new Image();
            image.src = blobURL;
            let lebar;
            image.onload = function () {
                lebar = image.width;
                if ( lebar < 600) {
                    swal({
                        title: "Resolusi '" + file.name + "' Terlalu Kecil",
                        html: "<span class='font-reguler'>Pastikan file yang akan diunggah mempunyai lebar 600 pixel </span>",
                        type: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ulangi',
                        showLoaderOnConfirm: true
                    }).then(function() {
                        file.value="";
                        fileinput.value = "";
                        filename.value="";
                        return false;
                    });
                }else{
                    // have to wait till it's loaded
                    var resized = resizeMe(image); // send it to canvas
                    var newinput = document.createElement("input");
                    newinput.type = 'hidden';
                    if (!num_index) {
                        newinput.name = 'resized['+ img_type +']';
                    } else {
                        newinput.name = 'resized['+ (iter-1) +']';
                    }
                    newinput.value = resized; // put result from canvas into new hidden input
                    newinput.className = "img_input";
                    form.appendChild(newinput);
                }
            }
            //preview.appendChild(image); // preview commented out, I am using the canvas instead
        };
    }  

    function readfiles(fileinput, files, img_type, filename, num_index=false) {
        // remove the existing canvases and hidden inputs if user re-selects new pics
        var existinginputs = document.getElementsByName('resized['+img_type+']');
        var existingcanvases = document.getElementsByTagName('canvas');
        while (existinginputs.length > 0) { // it's a live list so removing the first element each time
            form.removeChild(existinginputs[0]);
        } 
        for (var i = 0; i < files.length; i++) {
            const res = processfile(fileinput,files[i], img_type, filename, num_index); // process each file at once
        }
        files.value = ""; //remove the original files from files
    }

    function resizeMe(img) {
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext("2d");
        var width = img.width;
        var height = img.height;
        var head = "data:image/jpeg;base64";

        canvas.width = img.width;
        canvas.height = img.height;
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

        var oriDataURL = canvas.toDataURL("image/jpeg", 0.7);

        if (Math.round((oriDataURL.length - head.length)*3/4)/1024 <= 300) {
            return oriDataURL;
        } else {
            // resize the canvas and draw the image data into it
            canvas.width = img.width * 0.5;
            canvas.height = img.height * 0.5;        
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

            var dataURL = canvas.toDataURL("image/jpeg",0.7);

            // loop while resized size still above 300 kB
            // multi-step resizing (instead of while-looping)
            // first step
            if (Math.round((dataURL.length - head.length)*3/4)/1024 > 300) {
                ctx.drawImage(canvas, 0, 0, canvas.width, canvas.height);
                dataURL = canvas.toDataURL("image/jpeg",0.7);
            }

            // second step if the image is big enough
            if (Math.round((dataURL.length - head.length)*3/4)/1024 > 300) {
                ctx.drawImage(canvas, 0, 0, canvas.width, canvas.height);
                dataURL = canvas.toDataURL("image/jpeg",0.7);
            }

            // third step if the image is really big
            if (Math.round((dataURL.length - head.length)*3/4)/1024 > 300) {
                ctx.drawImage(canvas, 0, 0, canvas.width, canvas.height);
                dataURL = canvas.toDataURL("image/jpeg",0.7);
            }

            // fourth step, is this even necessary?
            if (Math.round((dataURL.length - head.length)*3/4)/1024 > 300) {
                ctx.drawImage(canvas, 0, 0, canvas.width, canvas.height);
                dataURL = canvas.toDataURL("image/jpeg",0.7);
            }

            // preview.appendChild(canvas); // do the actual resized preview
            return dataURL; // get the data from canvas as 70% JPG (can be also PNG, etc.)
        }
    }
</script>
</html>