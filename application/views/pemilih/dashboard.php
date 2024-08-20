


<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Calon Osis</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Calon</a></li>
                        </ul>
                    </div>
                </div>        
            </div>
        </div>
        

        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <?php 
                    if($this->session->flashdata('error') !='')
                    {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }
                    ?>
                    
                  
                    </div>

                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>

                        </div>
                       
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Calon Ketua</th>
                                        <th>Calon Wakil</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Vote</th>
                                    </tr>
                                </thead>
                                <tbody><?php $no = 1; foreach($datacalonosis as $res){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>file/fotocalonosis/<?php echo $res->foto ?>" alt="user image" class="align-top m-r-15" style="width:70px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_ketua ?></h6>
												</div>
											</div>
                                        </td>

                                        <td>
                                        <div class="d-inline-block align-middle">
												<img src="<?php echo base_url() ?>file/fotocalonosiswakil/<?php echo $res->fotowakil ?>" alt="user image" class="align-top m-r-15" style="width:70px;">
												<div class="d-inline-block">
													<h6 class="m-b-0"><?php echo $res->nama_wakil ?></h6>
												</div>
											</div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report<?php echo $res->id_calonosis ?>">Visi</button>
                                            <div class="modal fade" id="modal-report<?php echo $res->id_calonosis ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Visi Calon Osis (<?php echo $res->nama_ketua ?> - <?php echo $res->nama_wakil ?>)</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php echo $res->visi ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-misi">Misi</button>
                                            <div class="modal fade" id="modal-misi" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Misi Calon Osis (<?php echo $res->nama_ketua ?> - <?php echo $res->nama_wakil ?>)</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php echo $res->misi ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <form action="<?php echo base_url() ?>index.php/pemilih/dashboard/simpanvote" method="post" enctype="multipart/form-data"  role="form">
                                                <input type="hidden" class="form-control" name="id_pemilih" value="<?php echo $this->session->userdata('user_id'); ?>" >
                                                <input type="hidden" class="form-control" name="vote" value="<?php echo $res->id_calonosis ?>" >
                                                <button class="btn btn-primary" id="pnotify-success">Vote Calon</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div id="loading" class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

