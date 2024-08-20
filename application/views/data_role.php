<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- dapat diisi dengan kontent  -->
    </section>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              
              

              
            
             <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                  
                <table id="datatampil" class="table table-bordered table-striped">
                      <thead>
                     <tr>
                        <th>NO</th>
                        <th>Nama Kelas</th>
                        <th>Wali Kelas</th>
                        <th>Lihat Siswa</th>
                      </tr>
                    </thead>
                    
                    
                    <tbody>
                      
                      <?php 
                        $no = 1;
                        foreach($data_kelas as $kelas){
                      ?>
    
                      <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $kelas->nama_kelas ?></td>
                          <td><?php echo $kelas->wali_kelas ?></td>
                          <td class="text-center">
                            <a href="<?php echo base_url() ?>index.php/master/editkelas/<?php echo $kelas->id_kelas ?>" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></a>
                           
                          </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                    
                      <tfoot>
                      </tfoot>
                </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

                
                

  <!-- Modal Tambah -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH KELAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             <form class="form-horizontal" action="<?php echo base_url() ?>index.php/master/simpankelas" method="post" enctype="multipart/form-data" role="form">
                 <input type="hidden" class="form-control" id="id_siswa" name="id_siswa" value="<?php echo $this->session->userdata('user_id'); ?>" >
              <div class="modal-body">
                 
                 
                <div class="form-group">
                  <label>Nama Kelas</label>
                  <input type="text" name="nama_kelas" class="form-control" onkeyup="this.value = this.value.toUpperCase()" required>
                  <div class="invalid-feedback">Tidak Boleh Kosong</div>
                </div>
                
                 <div class="form-group">
                  <label>Wali Kelas</label>
                    <select class="form-control" name="wali_kelas" required>
                        <?php foreach ($dataguru as $key): ?>
                      <option value="<?php echo $key->nama_guru ?>"><?php echo $key->nama_guru ?></option>
                   <?php endforeach ?>
                    </select>
                </div> 
 
                  
                   
                  </div>
                  <div class="modal-footer">
                      
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                      <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
                  </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- END Modal Tambah -->     
                
                
                
                
                
                   
                
                
             