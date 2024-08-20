    <script type="text/javascript" src="jamServer.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-1.4.js"></script>
    <!-- Required Js -->
    <script src="<?php echo base_url() ?>assets/js/vendor-all.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ripple.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pcoded.min.js"></script>
    <!--<script src="<?php echo base_url() ?>assets/js/menu-setting.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Apex Chart -->
    <script src="<?php echo base_url() ?>assets/js/plugins/apexcharts.min.js"></script>
    <!-- custom-chart js -->
    <script src="<?php echo base_url() ?>assets/js/pages/dashboard-main.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/ac-alert.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables.responsive.min.js"></script>
    <!-- pnotify Js -->
    <script src="<?php echo base_url() ?>assets/js/plugins/PNotify.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/PNotifyButtons.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/PNotifyCallbacks.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/PNotifyDesktop.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/PNotifyConfirm.js"></script>
    <!-- prism Js -->
    <script src="<?php echo base_url() ?>assets/js/plugins/prism.js"></script>
    <!-- Lightbox Js -->
    <script src="<?php echo base_url() ?>assets/js/plugins/ekko-lightbox.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/lightbox.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/ac-lightbox.js"></script>
    <!-- select2 Js -->
    <script src="<?php echo base_url() ?>assets/js/plugins/select2.full.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/form-select-custom.js"></script>
    <!-- notification Js -->
    <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-notify.min.js"></script>
    <!-- datatable Js -->
    <script src="<?php echo base_url() ?>assets/js/plugins/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/data-export-custom.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/data-buttons-custom.js"></script>


    <!-- Fungsi Tombol Hapus dengan konfirmasi -->
    <script>
            $('.tombol-hapus').on('click', function (e) {
                e.preventDefault();
                const href = $(this).attr('href');

                Swal.fire({
                title: 'apakah anda yakin ?',
                text: "Data akan dihapus dari database",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya Hapus',
                cancelButtonText: 'Batalkan',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                    Swal.fire(
                    'Terhapus',
                    'Data Berhasil dihapus',
                    'success'  )
                }
                })
            });
        </script>



        <script>
            'use strict';
            $(document).ready(function() {
                function notify(from, align, icon, type, animIn, animOut) {
                    $.notify({
                        icon: icon,
                        title: '',
                        message: 'Data Sedang Dihapus',
                        url: ''
                    }, {
                        element: 'body',
                        type: type,
                        allow_dismiss: true,
                        placement: {
                            from: from,
                            align: align
                        },
                        offset: {
                            x: 30,
                            y: 30
                        },
                        spacing: 10,
                        z_index: 999999,
                        delay: 2500,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: false,
                        animate: {
                            enter: animIn,
                            exit: animOut
                        },
                        icon_type: 'class',
                            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                                        '<span data-notify="icon"></span> ' +
                                        '<span data-notify="title">{1}</span> ' +
                                        '<span data-notify="message">{2}</span>' +
                                        '<div class="progress" data-notify="progressbar">' +
                                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                        '</div>' +
                                        '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '</div>'
                    });
                };
                // [ notification-button ]
                $('.notifications.btn').on('click', function(e) {
                    //e.preventDefault();


                    var nFrom = $(this).attr('data-from');
                    var nAlign = $(this).attr('data-align');
                    var nIcons = $(this).attr('data-notify-icon');
                    var nType = $(this).attr('data-type');
                    var nAnimIn = $(this).attr('data-animation-in');
                    var nAnimOut = $(this).attr('data-animation-out');
                    notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
                });
            });
        </script>



        <script>
            'use strict';
            $(document).ready(function() {
            function notify(from, align, icon, type, animIn, animOut) {
                $.notify({
                    icon: icon,
                    title: '',
                    message: 'Data Sedang Disimpan',
                    url: ''
                }, {
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 30,
                        y: 30
                    },
                    spacing: 10,
                    z_index: 999999,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    icon_type: 'class',
                        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                '</div>'
                });
            };
            // [ notification-button ]
            $('.notifications2.btn').on('click', function(e) {
                //e.preventDefault();
                var nFrom = $(this).attr('data-from');
                var nAlign = $(this).attr('data-align');
                var nIcons = $(this).attr('data-notify-icon');
                var nType = $(this).attr('data-type');
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
            });
        });
        </script>


        <script type="text/javascript">
            function formatState(state) {
                if (!state.id) {
                    return state.text;
                }
                var baseUrl = "assets/images/product/";
                var $state = $(
                    '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.jpg" class="img-flag wid-20"/> ' + state.text + '</span>'
                );
                return $state;
            };
            function formatState1(state) {
                if (!state.id) {
                    return state.text;
                }
                var baseUrl = "assets/images/user/";
                var $state = $(
                    '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.jpg" class="img-flag wid-20"/> ' + state.text + '</span>'
                );
                return $state;
            };
            $(".js-status-multiple").select2({
                placeholder: "Ticket Status"
            });
            $(".js-assigned-multiple").select2({
                placeholder: "Assigned To",
                templateSelection: formatState1
            });
            $(".js-category-multiple").select2({
                placeholder: "Category",
                templateSelection: formatState
            });
        </script>


        <script>
            $(document).ready(function() {
                checkCookie();
            });
            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toGMTString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            function checkCookie() {
                var ticks = getCookie("modelopen");
                if (ticks != "") {
                    ticks++ ;
                    setCookie("modelopen", ticks, 1);
                    if (ticks == "10" || ticks == "1" || ticks == "0") {
                        $('#exampleModalCenter').modal();
                    }
                } else {
                    // user = prompt("Please enter your name:", "");
                    $('#exampleModalCenter').modal();
                    ticks = 1;
                    setCookie("modelopen", ticks, 1);
                }
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("input[name='checkAll']").click(function() {
                    var checked = $(this).attr("checked");
                    $("#myTable tr td input:checkbox").attr("checked", checked);
                });
            });
        </script>
	
	
        <script type="application/javascript">  
            /** After windod Load */  
            $(window).bind("load", function() {  
            window.setTimeout(function() {  
                $(".alert").fadeTo(5000, 0).slideUp(5000, function() {  
                $(this).remove();  
                });  
            }, 5000);  
            });  
        </script>

 

        




        <script>
            // DataTable start

            $(document).ready(function() {
                $('#report-table').DataTable();
           
            });
            // DataTable end
        </script>

        <script>
            // DataTable start

            $(document).ready(function() {
                $('#tablesarpras').DataTable(
                    {
                        pageLength : 4,
                    }
                );
                
           
            });
            // DataTable end
        </script>













        <script>
            $('#report-tableprp').DataTable(
                {
                    "pageLength": 5,
                    "dom": "lfrti"
                }
            );
        </script>

        <script>
            $('#report-table-undanganortu').DataTable(
            );
        </script>


        <script>
            // DataTable start
            $('#report-table2').DataTable(
                {
                    //"pageLength": 5
                }
            );
            // DataTable end
        </script>

        
        <script>
            // DataTable start
            $('#report-table3').DataTable();
            // DataTable end
        </script>



        <script>
            $('#pnotify-danger').on('click', function () {
                new PNotify.alert({
                    title: 'Pemberitahuan',
                    text: 'Data Sedang Dihapus',
                    type: 'error'
                });
            });
        </script>

        <script>
            $('#pnotify-success').on('click', function () {
                new PNotify.alert({
                    title: 'Pemberitahuan',
                    text: 'Data Sedang Ditambahkan',
                    type: 'success'
                });
            });
        </script>

        <script>
            $('#pnotify-info').on('click', function () {
                new PNotify.alert({
                    title: 'Pemberitahuan',
                    text: 'Data Sedang Ditambahkan',
                    type: 'info'
                });
            });
        </script>

        <script>
            // init Isotope
            var $grid = $('.grid').isotope({
                itemSelector: '.element-item',
                layoutMode: 'fitRows',
                getSortData: {
                name: '.name',
                symbol: '.symbol',
                number: '.number parseInt',
                category: '[data-category]',
            }
            });
            // bind filter button click
            $('#filters').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            $('#filters-side').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // change active class on buttons
            $('.button-group').each(function(i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'button', function() {
                    $buttonGroup.find('.active').removeClass('active');
                    $(this).addClass('active');
                });
            });
        </script>


        <!-- Ckeditor js -->
        <script src="<?php echo base_url() ?>/assets/js/plugins/ckeditor.js"></script>
        <script type="text/javascript">
            $(window).on('load', function() {
                ClassicEditor
                .create(document.querySelector('#classic-editor-visi')
                )
                .catch(error => {
                console.error(error);
                });
            });
        </script>

        <!-- Ckeditor js -->
        <script src="<?php echo base_url() ?>/assets/js/plugins/ckeditor.js"></script>
        <script type="text/javascript">
            $(window).on('load', function() {
                ClassicEditor
                .create(document.querySelector('#classic-editor-misi')
                )
                .catch(error => {
                console.error(error);
                });
            });
        </script>













        <script>
        function rupiah ($angka) {
            $hasil = 'Rp ' . number_format($angka, 2, ",", ".");
            return $hasil;
        }
        </script>

        <script type="text/javascript">      
            var rupiah = document.getElementById('rupiah');
            rupiah.addEventListener('keyup', function(e){
                // tambahkan 'Rp.' pada saat form di ketik
                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                rupiah.value = formatRupiah(this.value, 'Rp. ');
            });
    
            /* Fungsi formatRupiah */
            function formatRupiah(angka, prefix){
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split   		= number_string.split(','),
                sisa     		= split[0].length % 3,
                rupiah     		= split[0].substr(0, sisa),
                ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
    
                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                
    
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }
        </script>

        <script type="text/javascript">       
            var rupiah2 = document.getElementById('rupiah2');
            rupiah2.addEventListener('keyup', function(e){
                // tambahkan 'Rp.' pada saat form di ketik
                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                rupiah2.value = formatRupiah(this.value, 'Rp. ');
            });
    
            /* Fungsi formatRupiah */
            function formatRupiah(angka, prefix){
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split   		= number_string.split(','),
                sisa     		= split[0].length % 3,
                rupiah2     		= split[0].substr(0, sisa),
                ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
    
                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if(ribuan){
                    separator = sisa ? '.' : '';
                    rupiah2 += separator + ribuan.join('.');
                }
    
                rupiah2 = split[1] != undefined ? rupiah + ',' + split[1] : rupiah2;
                return prefix == undefined ? rupiah2 : (rupiah2 ? 'Rp. ' + rupiah2 : '');
            }
	    </script>

    
</body>
</html>