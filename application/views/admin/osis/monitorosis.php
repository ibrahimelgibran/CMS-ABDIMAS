


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
                    <?php if($this->session->flashdata('success_register') !='') { echo '<div class="alert alert-info">'; echo $this->session->flashdata('success_register'); echo '</div>'; }?>
                    <a href="<?php echo base_url() ?>master/hapussemuavote" class="btn btn-danger btn-sm btn-round has-ripple" ><i class="feather icon-trash-2"></i>Reset Vote</a>
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
                                            <?php echo $this->db->where(['vote'=>"$res->id_calonosis"])->from("vote_pemilihan")->count_all_results();?>
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

