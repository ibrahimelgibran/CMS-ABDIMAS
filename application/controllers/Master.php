<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form'); 
        $this->load->model('Exportdataalumni');
        $this->load->model('Exportdatasiswa');
        $this->load->model('Exportdatalulus');
        $this->load->model('Exportdatatemplaterapor');
        $this->load->model('Exportdatatemplate');
        $this->load->library('form_validation');
        $this->load->model('admin');
        $this->load->model('m_pengaturan');
        if($this->admin->is_role() != "admin"){
            redirect("login");
        }
    }


// DATA TAHUN E-RAPOR --------------------------------------------------------------------------------DIVERIFIKASI
public function tahunrapor()
{
    $this->load->model('m_master');
    $data = array(
    'setting'      => $this->m_master->setup()->result(),
    'dataprofil'   => $this->m_master->get_profil()->result(),
    'datatema'     => $this->m_pengaturan->get_tema()->result(),
    'temaaktif'    => $this->m_pengaturan->get_temaaktif()->result(),
    'datatahun'    => $this->m_master->get_tahunrapor()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu.php', $data);
    $this->load->view('admin/rapor/datatahun', $data);
    $this->load->view('_partials/footer');
}

public function simpantahunrapor()
{
  $this->load->model('m_master');
    {
      $data['tahun']     = $this->input->post('tahun');
      $this->load->view('admin/rapor/datatahun',$data);
    }
      $this->m_master->simpan_tahunrapor($data);
      $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
      redirect('master/tahunrapor');
} 

public function updateraportahun()
{
  $this->load->model('m_master');
  $id_raportahun['id_raportahun']   = $this->input->post("id_raportahun");
  $tahun                            = $this->input->post('tahun');
  $data = array(
    'tahun'          =>$tahun
  );
  $this->m_master->update_raportahun($data, $id_raportahun);
  redirect('master/tahunrapor');
}

public function hapustahunrapor($id_raportahun)
{
      $this->load->model('m_master');
      $id['id_raportahun'] = $this->uri->segment(3);
      $this->m_master->hapus_tahunrapor($id);
      redirect('master/tahunrapor');
}

//  ---------------------------------------------------------------------------------------------------



    public function datarapormapel()
    {
          $this->load->model('m_master');
          $data = array(
            'setting'        => $this->m_master->setup()->result(),
            'dataprofil'     => $this->m_master->get_profil()->result(),
            'datatema'       => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'      => $this->m_pengaturan->get_temaaktif()->result(),
            'datarapormapel' => $this->m_master->get_datarapormapel()->result()
          );
          $this->load->view('_partials/header', $data);
          $this->load->view('_partials/menu/menu.php', $data);
          $this->load->view('admin/rapor/datarapormapel', $data);
          $this->load->view('_partials/footer');
    }


    public function editdatarapormapel($editdatarapormapel)
    {
        $this->load->model('m_master');
        $id_rapormapel = $this->uri->segment(3);
        $data         = array(
            'data_rapormapel'     => $this->m_master->edit_rapormapel($id_rapormapel)
        );
      
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu');
        $this->load->view('admin/datarapormapel', $data);
        $this->load->view('_partials/footer');
    }

    public function updatedatarapormapel()
    {
        $this->load->model('m_master');
        
        $id_rapormapel['id_rapormapel']   = $this->input->post("id_rapormapel");
        $nama_mapel                       = $this->input->post('nama_mapel');
        $kode_mapel                       = $this->input->post('kode_mapel');
        $kelompok_mapel                   = $this->input->post('kelompok_mapel');
        $no_urut                          = $this->input->post('no_urut');
        $data = array(
            'nama_mapel'          =>$nama_mapel,
            'kode_mapel'          =>$kode_mapel,
            'kelompok_mapel'      =>$kelompok_mapel,
            'no_urut'             =>$no_urut
        
        );
        
        $this->m_master->update_datarapormapel($data, $id_rapormapel);
        
        redirect('master/datarapormapel');
    }

    public function simpandatarapormapel()
    {
          $this->load->model('m_master');
          {
          $data['nama_mapel']     = $this->input->post('nama_mapel');
          $data['kkm']            = $this->input->post('kkm');
          $data['kode_mapel']     = $this->input->post('kode_mapel');
          $data['kelompok_mapel'] = $this->input->post('kelompok_mapel');
          $data['no_urut']        = $this->input->post('no_urut');
          $data['id_role']        = $this->input->post('id_role');

		      $this->load->view('admin/rapor/datarapormapel',$data);
	  }
          $this->m_master->simpan_datarapormapel($data);
          $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
          redirect('master/datarapormapel');
    } 

    public function hapusdatarapormapel($id_rapormapel)
    {
          $this->load->model('m_master');
          $id['id_rapormapel'] = $this->uri->segment(3);
          $this->m_master->hapus_datarapormapel($id);
          redirect('master/datarapormapel');
    }

    //-----------------------------------------------------------------------------------------------------


    // MENU LAYANAN SISWA ---------------------------------------------------------------------DIVERIFIKASI
    public function menulayanansiswa()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'       => $this->m_master->setup()->result(),
        'dataprofil'    => $this->m_master->get_profil()->result(),
        'datamenusiswa' => $this->m_master->get_menusiswa()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/setting/menu_siswa', $data);
        $this->load->view('_partials/footer');
    }

    // UPDATE MENU LAYANAN SISWA ---------------------------------------------------------------------DIVERIFIKASI
    public function updatemenusiswa()
    {
        $this->load->model('m_master');
        $id_menu['id_menu']   = $this->input->post("id_menu");
        $status            = $this->input->post('status');
        $data                 = array(
        'status' =>$status,
        );
        $this->m_master->update_menusiswa($data, $id_menu);
        redirect('master/menulayanansiswa');
    }
  
    
    // DATA PENGGUNA --------------------------------------------------------------------------------DIVERIFIKASI
    public function datapengguna()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'      => $this->m_master->setup()->result(),
        'dataprofil'   => $this->m_master->get_profil()->result(),
        'datatema'     => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'    => $this->m_pengaturan->get_temaaktif()->result(),
        'datapengguna' => $this->m_master->get_pengguna()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/kelembagaan/datapengguna', $data);
        $this->load->view('_partials/footer');
    }


    // SIMPAN PENGGUNA --------------------------------------------------------------------------------DIVERIFIKASI


    public function simpanpengguna()
    {
        $this->load->model('m_master'); 
        {
          $data['nama_user']    = $this->input->post('nama_user');
          $data['username']     = $this->input->post('username');
          $data['password']     = md5($this->input->post('password'));
          $data['email']         = $this->input->post('email');
          $data['notelp']         = $this->input->post('notelp');
          $data['role']         = $this->input->post('role');
          $this->load->view('admin/kelembagaan/datapengguna',$data);
	      }

        $this->m_master->simpan_pengguna($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
        redirect('master/datapengguna');
    } 


    // UPDATE PENGGUNA --------------------------------------------------------------------------------DIVERIFIKASI
    public function updatepengguna()
    {
        $this->load->model('m_master');
        $id_user['id_user']   = $this->input->post("id_user");
        $nama_user            = $this->input->post('nama_user');
        $username             = $this->input->post('username');
        $role                 = $this->input->post('role');
        $email                = $this->input->post('email');
        $notelp               = $this->input->post('notelp');
        $data                 = array(
        'nama_user' =>$nama_user,
        'username'  =>$username,
        'role'      =>$role,
        'email'     =>$email,
        'notelp'    =>$notelp,
        );
        $this->m_master->update_pengguna($data, $id_user);
        redirect('master/datapengguna');
    }


    // HAPUS PENGGUNA --------------------------------------------------------------------------------DIVERIFIKASI
    public function hapuspengguna($id_user)
    {
        $this->load->model('m_master');
        $id['id_user'] = $this->uri->segment(3);
        $this->m_master->hapus_pengguna($id);
        redirect('master/datapengguna');
    }
    
    
    




    // DATA SISWA --------------------------------------------------------------------------------DIVERIFIKASI
    public function datasiswa()
    {
        $this->load->model('m_master');
        $data        = array(
        'setting'     => $this->m_master->setup()->result(),
        'dataprofil'  => $this->m_master->get_profil()->result(),
        'datatema'    => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
        'datasiswa'   => $this->m_master->get_datasiswa()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datamaster/datasiswa', $data);
        $this->load->view('_partials/footer');
    }


    // EDIT SISWA --------------------------------------------------------------------------------DIVERIFIKASI
    public function editsiswa($id_pendaftar)
    {
        $this->load->model('m_master');
        $id_pendaftar = $this->uri->segment(3);
        $data         = array(
        'setting'     => $this->m_master->setup()->result(),
        'dataprofil'  => $this->m_master->get_profil()->result(),
        'datatema'    => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
		    'datatingkat' => $this->m_master->get_datatingkat()->result(),
		    'datakelas'   => $this->m_master->get_datakelas()->result(),
        'data_siswa'  => $this->m_master->edit_siswa($id_pendaftar)
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datamaster/editsiswa', $data);
        $this->load->view('_partials/footer');
    }


    // HAPUS SISWA ---------------------------------------------------------------------
    public function hapussiswa($id_pendaftar)
    {
        $this->load->model('m_master');
        $id['id_pendaftar'] = $this->uri->segment(3);
        $this->m_master->hapus_siswa($id);
        redirect('master/datasiswa');
    }


    // HAPUS SEMUA SISWA ---------------------------------------------------------------------
    public function hapussemuasiswa()
    {
        $this->load->model('m_master');
        $this->m_master->hapus_semuasiswa();
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
        redirect('master/datasiswa');
    }

        // HAPUS SEMUA SISWA ---------------------------------------------------------------------
        public function hapussemuakelulusan()
        {
            $this->load->model('m_master');
            $this->m_master->hapus_semuakelulusan();
            $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
            redirect('master/datakelulusan');
        }
    

    // DOWNLOAD TEMPLATE SISWA ---------------------------------------------------------------------
    public function download_templatesiswa(){				
    force_download('resources/template/Template-siswa.xlsx',NULL);
    }	
  
  







    // DATA CALON OSIS ---------------------------------------------------------------------
    public function monitorosis()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'       => $this->m_master->setup()->result(),
        'dataprofil'    => $this->m_master->get_profil()->result(),
        'datacalonosis' => $this->m_master->get_calonosis()->result(),
        'datatema'      => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result(),
        'datavote'      => $this->m_master->get_vote()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/osis/monitorosis', $data);
        $this->load->view('_partials/footer');
    }


    // DATA CALON OSIS ---------------------------------------------------------------------
    public function datacalonosis()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'       => $this->m_master->setup()->result(),
        'dataprofil'    => $this->m_master->get_profil()->result(),
        'datatema'      => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result(),
        'datacalonosis' => $this->m_master->get_calonosis()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/osis/datacalonosis', $data);
        $this->load->view('_partials/footer');
    }

    // SIMPAN Calon  Osis ---------------------------------------------------------------------
    public function simpancalonosis()
    {
        $this->load->model('m_master');
        {

        // upload wakil 
        $ses                        = $this->session->userdata('user_id');
        $config['upload_path']      = './file/fotocalonosiswakil/'; 
        $config['allowed_types']    = 'jpg'; 
        $now = date('d-m-Y-H-i-s').-($ses. $date); 
        $config['file_name']        = $now. '.jpg'; 


        $this->load->library('upload', $config); 
        $this->upload->initialize($config); 
        if ( ! $this->upload->do_upload('fotowakil')) { 
          $error = array('error' => $this->upload->display_errors()); 
          print_r($error); 
        } else { 
          $data = array('upload_data' => $this->upload->data()); 
        } 

        // upload  
        $config2['upload_path']      = './file/fotocalonosis/'; 
        $config2['allowed_types']    = 'jpg'; 
        $now = date('d-m-Y-H-i-s').-($ses. $date); 
        $config2['file_name']        = $now. '.jpg'; 


        $this->load->library('upload', $config2); 
        $this->upload->initialize($config2); 
        if ( ! $this->upload->do_upload('foto')) { 
          $error = array('error' => $this->upload->display_errors()); 
          print_r($error); 
        } else { 
          $data = array('upload_data' => $this->upload->data()); 
        } 
        
        $pet   = $config['file_name'];
        $pet2  = $config2['file_name'];
        // print_r($pet); 
        // exit;
        //end upload file area 
        $data = [ 
        "nama_ketua"    => $this->input->post('nama_ketua'), 
        "nama_wakil"    => $this->input->post('nama_wakil'), 
        "visi"          => $this->input->post('visi'),
        "misi"          => $this->input->post('misi'), 
        "foto"          => $pet2,
        "fotowakil"     => $pet
        ]; 
        $this->m_master->simpan_calonosis($data); 
        redirect('master/datacalonosis'); 
        } 

    }

    // HAPUS CALON OSIS ---------------------------------------------------------------------
    public function hapuscalonosis($id_calonosis)
    {
        $this->load->model('m_master');
        $id['id_calonosis'] = $this->uri->segment(3);
        $this->m_master->hapus_calonosis($id);
        redirect('master/datacalonosis');
    }



    // DATA PEMILIH OSIS ---------------------------------------------------------------------
    public function datapemilihosis()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'         => $this->m_master->setup()->result(),
        'dataprofil'      => $this->m_master->get_profil()->result(),
        'datatema'        => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'       => $this->m_pengaturan->get_temaaktif()->result(),
        'datapemilihosis' => $this->m_master->get_pemilihosis()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/osis/datapemilihosis', $data);
        $this->load->view('_partials/footer');
    }

    // DOWNLOAD TEMPLATE PEMILIHAN OSIS ---------------------------------------------------------------------
    public function download_templatepemilih(){				
    force_download('resources/template/Template-Pemilih-Osis.xlsx',NULL);
    }	
  

    // HAPUS SEMUA SISWA ---------------------------------------------------------------------
    public function hapussemuapemilih()
    {
      $this->load->model('m_master');
      $this->m_master->hapus_semuapemilih();
      $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
      redirect('master/datapemilihosis');
    }


    // HAPUS SEMUA SISWA ---------------------------------------------------------------------
    public function hapussemuavote()
    {
      $this->load->model('m_master');
      $this->m_master->hapus_semuavote();
      $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
      redirect('master/monitorosis');
    }




    // DATA ALUMNI ---------------------------------------------------------------------
    public function dataalumni()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'     => $this->m_master->setup()->result(),
        'dataprofil'  => $this->m_master->get_profil()->result(),
        'datatema'    => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
        'dataalumni'  => $this->m_master->get_alumni()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/alumni/dataalumni', $data);
        $this->load->view('_partials/footer');
    }

    // HAPUS ALUMNI ---------------------------------------------------------------------
    public function hapusalumni($id_alumni)
    {
        $this->load->model('m_master');
        $id['id_alumni'] = $this->uri->segment(3);
        $this->m_master->hapus_alumni($id);
        redirect('master/dataalumni');
    }

      // SETIING KELULUSAN ---------------------------------------------------------------------


      public function settingkelulusan(){

        $this->load->model('m_master');
        $data = array(
          'setting'              => $this->m_master->setup()->result(),
          'dataprofil'           => $this->m_master->get_profil()->result(),
          'datatema'             => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'            => $this->m_pengaturan->get_temaaktif()->result(),
          'pengaturankelulusan'  => $this->m_master->get_settingkelulusan()->result()
          );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/kelulusan/settingkelulusan', $data);
        $this->load->view('_partials/footer');
      }

    // UPDATE Status Kelulusan ---------------------------------------------------------------------
    public function updatestatuskelulusan()
    {
        $this->load->model('m_master');
        $id_settingkelulusan['id_settingkelulusan']      = $this->input->post("id_settingkelulusan");
        $status_kelulusan        = $this->input->post('status_kelulusan');
        $data                    = array(
        'status_kelulusan'       =>$status_kelulusan,
        );
        $this->m_master->update_statuskelulusan($data, $id_settingkelulusan);
        redirect('master/settingkelulusan');
    }



    // DATA KELULUSAN ---------------------------------------------------------------------
    public function datakelulusan()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'        => $this->m_master->setup()->result(),
        'dataprofil'     => $this->m_master->get_profil()->result(),
        'datatema'       => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'      => $this->m_pengaturan->get_temaaktif()->result(),
        'datakelulusan'  => $this->m_master->get_kelulusan()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/kelulusan/datakelulusan', $data);
        $this->load->view('_partials/footer');
    }



    // DATA SURAT KETERANGAN AKTIF ---------------------------------------------------------------------
    public function suratketeranganaktifsiswa()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'                        => $this->m_master->setup()->result(),
        'dataprofil'                     => $this->m_master->get_profil()->result(),
        'datatema'                       => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'                      => $this->m_pengaturan->get_temaaktif()->result(),
        'datasiswa'                      => $this->m_master->get_datasiswa()->result(),
        'datasuratketeranganaktifsiswa'  => $this->m_master->get_suratketeranganaktifsiswa()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/persuratan/datasuratketeranganaktifsiswa', $data);
        $this->load->view('_partials/footer');
    }

    // SIMPAN SURAT KETERANGAN AKTIF ---------------------------------------------------------------------
    public function simpansuratketeranganaktif()
    {
        $this->load->model('m_master'); 
        {
          $data['nosurat']    = $this->input->post('nosurat');
          $data['id_siswa']   = $this->input->post('id_siswa');
          $data['tanggal']    = $this->input->post('tanggal');
        $this->load->view('admin/persuratan/datasuratketeranganaktifsiswa',$data);
        }
        $this->m_master->simpan_suratketeranganaktif($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
        redirect('master/suratketeranganaktifsiswa');
    } 

    // HAPUS SURAT KETERANGAN AKTIF ---------------------------------------------------------------------
    public function hapussuratketeranganaktifsiswa($id_suratketeranganaktifsiswa)
    {
        $this->load->model('m_master');
        $id['id_suratketeranganaktifsiswa'] = $this->uri->segment(3);
        $this->m_master->hapus_suratketeranganaktifsiswa($id);
        redirect('master/suratketeranganaktifsiswa');
    }





    // DATA UNDANGAN ORTU ---------------------------------------------------------------------
    public function dataundanganortu()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'           => $this->m_master->setup()->result(),
        'dataprofil'        => $this->m_master->get_profil()->result(),
        'datatema'          => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
        'datasiswa'         => $this->m_master->get_datasiswa()->result(),
        'dataundanganortu'  => $this->m_master->get_undanganortu()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/persuratan/dataundanganortu', $data);
        $this->load->view('_partials/footer');
    }


    public function time()
    {
      $tanggal_start =$this->input->post('start');
      $waktu_start = $this->input->post('waktu_start');
      $s = strtotime("$waktu_start $tanggal_start");
      $start =array('waktu'=>date('Y:m:d H:i:s', $s));
      $result = $this->m_master->time($start);
      if($result == true){
      redirect(site_url('master/settingkelulusan'));
      }
      else{
      redirect(site_url());
      }
    }






    public function simpanundanganortu()
    {
        $this->load->model('m_master'); 
        {
          $data['nosurat']   = $this->input->post('nosurat');
          $data['id_siswa']   = $this->input->post('id_siswa');
          $data['tanggal']    = $this->input->post('tanggal');
        $this->load->view('admin/persuratan/dataundanganortu',$data);
        }
        $this->m_master->simpan_undanganortu($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
        redirect('master/dataundanganortu');
    } 

    public function hapusundanganortu($id_undanganortu)
    {
      $this->load->model('m_master');
        $id['id_undanganortu'] = $this->uri->segment(3);
      $this->m_master->hapus_undanganortu($id);
      echo 'Deleted successfully.';
      redirect('master/dataundanganortu');
    }



public function print_undanganortu()
  {
      $this->load->model('m_master');
      $this->load->model('m_beranda');
      $this->load->library('tcpdf_gen');
      $pdf = new TCPDF('P', 'pt', ['format' => 'A4', 'Rotate' => 260]);
      $pdf->SetTitle('Surat Panggilan');
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $id_siswa     = $this->uri->segment(3);
      $id_user      = $this->uri->segment(3);
      $data = array(
        'data_profil'     => $this->m_beranda->get_profil()->result(),
        'row'             => $this->m_master->get_undanganortu($id_siswa)->result(),
        'datasiswa'       => $this->m_master->get_datasiswa($id_user)->result(), 
      );
      $html = $this->load->view('cetak/print_undanganortu', $data, true);
      $pdf->writeHtml($html, true, false, true, false, '');    
      $pdf->lastPage();
      $pdf->output();
  }





// DATA UNDANGAN ORTU ---------------------------------------------------------------------
public function dataundanganwalimurid()
{
  $this->load->model('m_master');
  $data = array(
  'setting'                 => $this->m_master->setup()->result(),
  'dataprofil'              => $this->m_master->get_profil()->result(),
  'datatema'                => $this->m_pengaturan->get_tema()->result(),
  'temaaktif'               => $this->m_pengaturan->get_temaaktif()->result(),
  'datatingkat'             => $this->m_master->get_datatingkat()->result(),
  'dataundanganwalimurid'   => $this->m_master->get_undanganwalimurid()->result()
  );
  $this->load->view('_partials/header', $data);
  $this->load->view('_partials/menu/menu.php', $data);
  $this->load->view('admin/persuratan/dataundanganwalimurid', $data);
  $this->load->view('_partials/footer');
}

// SIMPAN UNDANGAN ORTU ---------------------------------------------------------------------
public function simpanundanganwalimurid()
{
  $this->load->model('m_master'); 
  {
    $data['nosurat']   = $this->input->post('nosurat');
    $data['tingkat']   = $this->input->post('tingkat');
    $data['tanggal']    = $this->input->post('tanggal');
  $this->load->view('admin/persuratan/dataundanganwalimurid',$data);
  }
  $this->m_master->simpan_undanganwalimurid($data);
  $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
  redirect('master/dataundanganwalimurid');
} 

 // HAPUS MUTASI SISWA ---------------------------------------------------------------------
 public function hapusundanganwalimurid($id_undanganwalimurid)
 {
   $this->load->model('m_master');
     $id['id_undanganwalimurid'] = $this->uri->segment(3);
   $this->m_master->hapus_undanganwalimurid($id);
   redirect('master/dataundanganwalimurid');
 }












    // DATA MUTASI SISWA ---------------------------------------------------------------------
    public function datamutasisiswa()
    {
        $this->load->model('m_master');
          $data        = array(
          'setting'          => $this->m_master->setup()->result(),
          'dataprofil'       => $this->m_master->get_profil()->result(),
          'datatema'         => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'        => $this->m_pengaturan->get_temaaktif()->result(),
          'datasiswa'        => $this->m_master->get_datasiswa()->result(),
          'datamutasisiswa'  => $this->m_master->get_datamutasisiswa()->result()
          );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datamutasisiswa', $data);
        $this->load->view('_partials/footer');
    }

    
    // SIMPAN MUTASI SISWA ---------------------------------------------------------------------
    public function simpanmutasisiswa()
    {
        $this->load->model('m_master'); 
        {
          $data['id_siswa']   = $this->input->post('id_siswa');
          $data['status']     = $this->input->post('status');
          $data['nosurat']     = $this->input->post('nosurat');
          $data['tanggal']    = $this->input->post('tanggal');
          $data['catatan']    = $this->input->post('catatan');
          $data['alasan']     = $this->input->post('alasan');
          $this->load->view('admin/datamutasisiswa',$data);
	      }
        $this->m_master->simpan_mutasisiswa($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
        redirect('master/datamutasisiswa');
    } 

    // HAPUS MUTASI SISWA ---------------------------------------------------------------------
    public function hapusmutasisiswa($id_mutasisiswa)
    {
      $this->load->model('m_master');
        $id['id_mutasisiswa'] = $this->uri->segment(3);
      $this->m_master->hapus_mutasisiswakeluar($id);
      redirect('master/datamutasisiswa');
    }


    public function print_undanganwalimurid()
{
    $this->load->model('m_master');
    $this->load->model('m_beranda');
    $this->load->library('tcpdf_gen');
    $pdf = new TCPDF('P', 'pt', ['format' => 'A4', 'Rotate' => 260]);
    $pdf->SetTitle('Surat Undangan Wali Murid');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->addPage();
    $tingkat           = $this->uri->segment(3);
    $data = array(
      'data_profil'       => $this->m_beranda->get_profil()->result(),
      'row'               => $this->m_master->get_cetakundanganwalimurid($tingkat)->result(),
    );
    $html = $this->load->view('cetak/print_undanganwalimurid', $data, true);
    $pdf->writeHtml($html, true, false, true, false, '');    
    $pdf->lastPage();
    $pdf->output();
}
    
    // CETAK MUTASI SISWA ---------------------------------------------------------------------
    public function cetak_mutasi()
    {
        $this->load->model('m_master');
        $this->load->model('m_beranda');
        $this->load->library('tcpdf_gen');
        $pdf = new TCPDF('P', 'pt', ['format' => 'A4', 'Rotate' => 260]);
        $pdf->SetTitle('Mutasi Siswa');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->addPage();
        $id_siswa = $this->uri->segment(3);
        $id_user      = $this->uri->segment(3);
        $data = array(
          'data_profil'     => $this->m_beranda->get_profil()->result(),
          'row'             => $this->m_master->get_cetakmutasi($id_siswa)->result(),
          'datasiswa'       => $this->m_master->get_datasiswa($id_user)->result(), 
        );
        $html = $this->load->view('cetak/print_mutasisiswa', $data, true);
        $pdf->writeHtml($html, true, false, true, false, '');    
        $pdf->lastPage();
        $pdf->output();
    }


//--------------------------------------------------------------------------------------------------------------------------------------------
// DATA SARPRAS
public function datasarpras()
{
    $this->load->model('m_master');
    $data = array(
        'setting'             => $this->m_master->setup()->result(),
        'dataprofil'          => $this->m_master->get_profil()->result(),
        'datasarpras'         => $this->m_master->get_datasarpras()->result(),
        'datatema'            => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'           => $this->m_pengaturan->get_temaaktif()->result(),
        'datakategorisarpras' => $this->m_master->get_datakategorisarpras()->result()
    );

    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu.php', $data);
    $this->load->view('admin/kelembagaan/datasarpras', $data);
    $this->load->view('_partials/footer');
}

// SIMPAN SARPRAS
public function simpansarpras()
{
    $this->load->model('m_master');
    {
    $data['nama_sarpras']           = $this->input->post('nama_sarpras');
    $data['tahun']                  = $this->input->post('tahun');
    $data['kode_kategorisarpras']   = $this->input->post('kode_kategorisarpras');
    $data['jumlah']                 = $this->input->post('jumlah');
    $data['satuan']                 = $this->input->post('satuan');
    $data['tempat']                 = $this->input->post('tempat');
    $data['kodebarang']             = $this->input->post('kodebarang');
    $data['sumberdana']             = $this->input->post('sumberdana');

    $this->load->view('admin/kelembagaan/datasarpras',$data);
    }
    $this->m_master->simpan_sarpras($data);
    redirect('master/datasarpras');
}

// EDIT SARPRAS
public function updatesarpras()
{
    $this->load->model('m_master');
    
    $id_sarpras['id_sarpras'] = $this->input->post("id_sarpras");
    $nama_sarpras             = $this->input->post('nama_sarpras');
    $tahun                    = $this->input->post('tahun');
    $jumlah                   = $this->input->post('jumlah');
    $satuan                   = $this->input->post('satuan');
    $kode_kategorisarpras     = $this->input->post('kode_kategorisarpras');
    $sumberdana               = $this->input->post('sumberdana');
    $sumberdana               = $this->input->post('sumberdana');
    $data = array(
        'nama_sarpras'          =>$nama_sarpras,
        'tahun'                 =>$tahun,
        'jumlah'                =>$jumlah,
        'satuan'                =>$satuan,
        'kode_kategorisarpras'  =>$kode_kategorisarpras,
        'kodebarang'            =>$kodebarang,
        'sumberdana'            =>$sumberdana
    );
    
    $this->m_master->update_sarpras($data, $id_sarpras);
    
    redirect('master/datasarpras');
}

// HAPUS SARPRAS
public function hapussarpras($id_sarpras)
{
  $this->load->model('m_master');

    $id['id_sarpras'] = $this->uri->segment(3);
    $this->m_master->hapus_sarpras($id);
    redirect('master/datasarpras');
}

// HAPUS SEMUA SARPRAS
public function hapussemuasarpras()
{
    $this->load->model('m_master');
    $this->m_master->hapus_semuasarpras();
    $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
    redirect('master/datasarpras');
}
//--------------------------------------------------------------------------------------------------------------------------------------------





    public function datawalikelas()
    {
        $this->load->model('m_master');
        $data = array(
          'setting'         => $this->m_master->setup()->result(),
          'dataprofil'      => $this->m_master->get_profil()->result(),
          'datawalikelas'   => $this->m_master->get_datawalikelas()->result(),
          'dataguru'        => $this->m_master->get_dataguru()->result(),
          'datatema'        => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'       => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelas'       => $this->m_master->get_datakelas()->result()
      );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datamaster/datawalikelas', $data);
        $this->load->view('_partials/footer');
    }

    public function simpanwalikelas()
    {
        $this->load->model('m_master'); 
        {
        $data['nama_walikelas'] = $this->input->post('nama_walikelas');
        $data['kelas']          = $this->input->post('kelas');
        $data['userwali']       = $this->input->post('userwali');
        $data['passwali']       = $this->input->post('passwali');
        $data['role']           = $this->input->post('role');
        $this->load->view('admin/datamaster/datawalikelas',$data);
        }
        $this->m_master->simpan_walikelas($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
        redirect('master/datawalikelas');
    } 

    public function hapuswalikelas($id_walikelas)
    {
        $this->load->model('m_master');
        $id['id_walikelas'] = $this->uri->segment(3);
        $this->m_master->hapus_walikelas($id);
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Wali Kelas Berhasil Dihapus');
        redirect('master/datawalikelas');
    }

    // HAPUS SEMUA WALI KELAS ---------------------------------------------------------------------
    public function hapussemuawalikelas()
    {
        $this->load->model('m_master');
        $this->m_master->hapus_semuawalikelas();
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
        redirect('master/datawalikelas');
    }







    // DATA BUKU TAMU ---------------------------------------------------------------------
    public function databukutamu()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'      => $this->m_master->setup()->result(),
        'dataprofil'   => $this->m_master->get_profil()->result(),
        'datatema'     => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'    => $this->m_pengaturan->get_temaaktif()->result(),
        'databukutamu' => $this->m_master->get_bukutamu()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/bukutamu/databukutamu', $data);
        $this->load->view('_partials/footer');
    }

    public function hapusbukutamu($id_tamu)
    {
        $this->load->model('m_master');
        $id['id_tamu'] = $this->uri->segment(3);
        $this->m_master->hapus_bukutamu($id);
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Tamu Berhasil Dihapus');
        redirect('master/databukutamu');
    }


    // DATA BUKU PERPUSTAKAAN ---------------------------------------------------------------------
    public function databukuperpustakaan()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'              => $this->m_master->setup()->result(),
        'dataprofil'           => $this->m_master->get_profil()->result(),
        'datatema'             => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'            => $this->m_pengaturan->get_temaaktif()->result(),
        'databukuperpustakaan' => $this->m_master->get_bukuperpustakaan()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/perpustakaan/databukuperpustakaan', $data);
        $this->load->view('_partials/footer');
    }

    // UPDATE Buku Perpustakaan ---------------------------------------------------------------------
    public function updatebukuperpustakaan()
    {
        $this->load->model('m_master');
        $id_buku['id_buku']    = $this->input->post("id_buku");
        $judulbuku             = $this->input->post('judulbuku');
        $isbn                  = $this->input->post('isbn');
        $tahunterbit           = $this->input->post('tahunterbit');
        $pengarang             = $this->input->post('pengarang');
        $penerbit              = $this->input->post('penerbit');
        $jumlahbuku            = $this->input->post('jumlahbuku');
        $jumlaheksemplar       = $this->input->post('jumlaheksemplar');
        $data                  = array(
        'judulbuku'       =>$judulbuku,
        'isbn'            =>$isbn,
        'tahunterbit'     =>$tahunterbit,
        'pengarang'       =>$pengarang,
        'penerbit'        =>$penerbit,
        'jumlahbuku'      =>$jumlahbuku,
        'jumlaheksemplar' =>$jumlaheksemplar,
       
        );
        $this->m_master->update_bukuperpustakaan($data, $id_buku);
        redirect('master/databukuperpustakaan');
    }

    public function hapusbukuperpustakaan($id_buku)
    {
      $this->load->model('m_master');
      $id['id_buku'] = $this->uri->segment(3);
      $this->m_master->hapus_bukuperpustakaan($id);
      redirect('master/databukuperpustakaan');
    }



    // fungsi dan data guru
    public function dataguru()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'     => $this->m_master->setup()->result(),
        'dataprofil'  => $this->m_master->get_profil()->result(),
        'datatema'    => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
        'dataguru'    => $this->m_master->get_dataguru()->result() );

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datamaster/dataguru', $data);
        $this->load->view('_partials/footer');
    }


    public function updateguru()
      {
      $this->load->model('m_master');
      
      $id_guru['id_guru']    = $this->input->post("id_guru");
      $nama_guru             = $this->input->post('nama_guru');
      $nip                   = $this->input->post('nip');
      $jeniskelamin          = $this->input->post('jeniskelamin');
      $notelp                = $this->input->post('notelp');
      $email                 = $this->input->post('email');
      $status_guru           = $this->input->post('status_guru');
      $golongan              = $this->input->post('golongan');
      $namamapel             = $this->input->post('namamapel');
      $data = array(
          'nama_guru'        =>$nama_guru,
          'nip'              =>$nip,
          'jeniskelamin'     =>$jeniskelamin,
          'notelp'           =>$notelp,
          'email'            =>$email,
          'status_guru'      =>$status_guru,
          'golongan'         =>$golongan,
          'namamapel'        =>$namamapel
      );
      $this->m_master->update_guru($data, $id_guru);
      redirect('master/dataguru');
    }


    public function simpanguru()
    {
        $this->load->model('m_master'); 
        {
        $data['nip']            = $this->input->post('nip');
        $data['nama_guru']      = $this->input->post('nama_guru');
        $data['notelp']         = $this->input->post('notelp');
        $data['email']          = $this->input->post('email');
        $data['status_guru']    = $this->input->post('status_guru');
        $data['golongan']       = $this->input->post('golongan');
        $data['username']       = $this->input->post('nip');
        $data['password']       = $this->input->post('password');
        $data['role']           = $this->input->post('role');
		    $this->load->view('admin/datamaster/dataguru',$data);
	      }
        $this->m_master->simpan_guru($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
        redirect('master/dataguru');
    } 

    

    public function hapusguru($id_guru)
    {
        $this->load->model('m_master');
        $id['id_guru'] = $this->uri->segment(3);
        $this->m_master->hapus_guru($id);
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
        redirect('master/dataguru');
    }

    public function hapussemuaguru()
    {
        $this->load->model('m_master');
        $this->m_master->hapus_semuaguru();
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
        redirect('master/dataguru');
    }

    public function download_templateguru(){				
      force_download('resources/template/Template-Guru.xlsx',NULL);
  }	



// fungsi data tingkat
public function datatingkat()
{
  $this->load->model('m_master');
  $data = array(
  'setting'       => $this->m_master->setup()->result(),
  'dataprofil'    => $this->m_master->get_profil()->result(),
  'datatema'      => $this->m_pengaturan->get_tema()->result(),
  'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result(),
  'datatingkat'   => $this->m_master->get_datatingkat()->result()
  );
  $this->load->view('_partials/header', $data);
  $this->load->view('_partials/menu/menu.php', $data);
  $this->load->view('admin/datamaster/datatingkat', $data);
  $this->load->view('_partials/footer');
}

// fungsi Simpan tingkat
public function simpantingkat()
{
  $this->load->model('m_master'); 
  {
  $data['nama_tingkat']     = $this->input->post('nama_tingkat');
  $this->load->view('admin/datamaster/datatingkat',$data);
  }
  $this->m_master->simpan_datatingkat($data);
  $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Tingkat Berhasil Ditambahkan');
  redirect('master/datatingkat');
} 

public function hapustingkat()
{
  $this->load->model('m_master');
  $id['id_tingkat'] = $this->uri->segment(3);
  $this->m_master->hapus_datatingkat($id);
  $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Tingkat Berhasil Dihapus');
  redirect('master/datatingkat');
}



// fungsi data kelas
public function datakelas()
{
  $this->load->model('m_master');
  $data = array(
  'setting'       => $this->m_master->setup()->result(),
  'datakelas'     => $this->m_master->get_datakelas()->result(),
  'dataprofil'   => $this->m_master->get_profil()->result(),
  'datatema'      => $this->m_pengaturan->get_tema()->result(),
  'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result(),
  'datatingkat'   => $this->m_master->get_datatingkat()->result()
  );
  $this->load->view('_partials/header', $data);
  $this->load->view('_partials/menu/menu.php', $data);
  $this->load->view('admin/datamaster/datakelas', $data);
  $this->load->view('_partials/footer');
}

public function simpankelas()
{
  $this->load->model('m_master'); 
  {
  $data['kode_kelas']     = $this->input->post('kode_kelas');
  $data['nama_kelas']     = $this->input->post('nama_kelas');
  $data['tingkat_kelas']  = $this->input->post('tingkat_kelas');
  $this->load->view('admin/datamaster/datakelas',$data);
  }
  $this->m_master->simpan_datakelas($data);
  $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Kelas Berhasil Ditambahkan');
  redirect('master/datakelas');
} 

    public function updatekelas()
    {
        $this->load->model('m_master');
        $id_kelas['id_kelas']    = $this->input->post("id_kelas");
        $nama_kelas              = $this->input->post('nama_kelas');
        $tingkat_kelas           = $this->input->post('tingkat_kelas');
        $data = array(
          'nama_kelas'        =>$nama_kelas,
          'tingkat_kelas'     =>$tingkat_kelas
        );
        $this->m_master->update_kelas($data, $id_kelas);
        redirect('master/datakelas');
    }

    public function hapuskelas($id_walikelas)
    {
        $this->load->model('m_master');
        $id['id_kelas'] = $this->uri->segment(3);
        $this->m_master->hapus_datakelas($id);
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Kelas Berhasil Dihapus');
        redirect('master/datakelas');
    }

    // HAPUS SEMUA KELAS ---------------------------------------------------------------------
    public function hapussemuakelas()
    {
        $this->load->model('m_master');
        $this->m_master->hapus_semuakelas();
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
        redirect('master/datakelas');
    }
    

    



    // fungsi dan data Setting Kehadiran
    public function settingkehadiran()
    {
        $this->load->model('m_master');
        $data = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'settingdatakehadiran' => $this->m_master->get_settingdatakehadiran()->result() );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/settingdatakehadiran', $data);
        $this->load->view('_partials/footer');
    }

    public function simpan_settingkehadiran()
    {
        $this->load->model('m_master');
        {
        $data['hari']             = $this->input->post('hari');
        $data['jam_masuk_awal']   = $this->input->post('jam_masuk_awal');
        $data['jam_masuk_akhir']  = ($this->input->post('jam_masuk_akhir'));
        $data['jam_pulang_awal']  = $this->input->post('jam_pulang_awal');
        $data['jam_pulang_akhir'] = $this->input->post('jam_pulang_akhir');
        $this->load->view('admin/settingdatakehadiran', $data);
        }
        $this->m_master->simpan_jadwalkehadiran($data);
        redirect('master/settingkehadiran');
    }

    public function hapussettingkehadiran($id_jadwal)
    {
        $this->load->model('m_master');
        $id['id_jadwal'] = $this->uri->segment(3);
        $this->m_master->hapus_settingkehadiran($id);
        redirect('master/settingkehadiran');
    }




    // fungsi dan data kehadiran guru
    public function kehadiranguru()
    {

        $this->load->model('m_master');
        $data = array(
        
        'setting'             => $this->m_master->setup()->result(),
        'dataprofil'          => $this->m_master->get_profil()->result(),
        'datakehadiranguru'   => $this->m_master->get_datakehadiranguru()->result(),
        'datatema'            => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'           => $this->m_pengaturan->get_temaaktif()->result(),
        'jadwalkehadiranguru' => $this->m_master->get_jadwalkehadiran()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datakehadiranguru', $data);
        $this->load->view('_partials/footer');
    }

    public function hapuskehadiranguru($id_kehadiran)
    {
        $this->load->model('m_master');
        $id['id_kehadiran'] = $this->uri->segment(3);
        $this->m_master->hapus_kehadiranguru($id);
        redirect('master/kehadiranguru');
    }




    // fungsi dan data kehadiran siswa
    public function kehadiransiswa()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'              => $this->m_master->setup()->result(),
        'dataprofil'           => $this->m_master->get_profil()->result(),
        'datatema'             => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'            => $this->m_pengaturan->get_temaaktif()->result(),
        'datakehadiransiswa'   => $this->m_master->get_datakehadiransiswa()->result(),
        'jadwalkehadiransiswa' => $this->m_master->get_jadwalkehadiran()->result()
        );   
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datakehadiransiswa', $data);
        $this->load->view('_partials/footer');
    }

    public function hapuskehadiransiswa($id_kehadiran)
    {
        $this->load->model('m_master');
        $id['id_kehadiran'] = $this->uri->segment(3);
        $this->m_master->hapus_kehadiransiswa($id);
        redirect('master/kehadiransiswa');
    }


















    public function datapelanggaran()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'                  => $this->m_master->setup()->result(),
        'dataprofil'               => $this->m_master->get_profil()->result(),
        'datatema'                 => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'                => $this->m_pengaturan->get_temaaktif()->result(),
        'kasus'                    => $this->m_master->get_pelanggaran()->result(),
        'datasiswa'                => $this->m_master->get_datasiswa()->result(),
        'datakategoripelanggaran'  => $this->m_master->get_datakategoripelanggaran()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datapelanggaran', $data);
        $this->load->view('_partials/footer');
    }

    public function simpanpelanggaran()
    {
        $this->load->model('m_master');
        {
        $data['siswa_id']     = $this->input->post('siswa_id');
        $data['nama_kasus']   = $this->input->post('nama_kasus');
        $data['poin']         = $this->input->post('poin');
        $data['tanggal']      = $this->input->post('tanggal');
        $this->load->view('admin/dashboard',$data);
        }
        $this->m_master->simpan_pelanggaran($data);
        redirect('master/datapelanggaran');
    } 

    public function hapuspelanggaran($id_kasus)
    {
        $this->load->model('bk');
        $id['id_kasus'] = $this->uri->segment(3);
        $this->bk->hapus_pelanggaran($id);
        redirect('master/datapelanggaran');
    }

    public function cetak_pelanggaran()
    {
        $this->load->model('m_master');
        $this->load->model('m_beranda');
        $this->load->library('tcpdf_gen');
        $pdf = new TCPDF('L', 'pt', ['format' => 'F4', 'Rotate' => 260]);
        $pdf->SetTitle('Rekap Pelanggaran');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->addPage();
        $data = array(
          'pelanggaran' => $this->m_master->get_cetakpelanggaran()->result(),
          'data_profil' => $this->m_beranda->get_profil()->result()
        );
        $html = $this->load->view('cetak/print_pelanggaran', $data, true);
        $pdf->writeHtml($html, true, false, true, false, '');    
        $pdf->lastPage();
        $pdf->output();
    }




    // DATA PRESTASI
    public function dataprestasi()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'       => $this->m_master->setup()->result(),
        'dataprofil'    => $this->m_master->get_profil()->result(),
        'datatema'      => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result(),
        'prestasi'      => $this->m_master->get_dataprestasi()->result(),
        'datasiswa'     => $this->m_master->get_datasiswa()->result(),
        'datakelas'     => $this->m_master->get_datakelas()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/dataprestasi', $data);
        $this->load->view('_partials/footer');
    }

    // SIMPAN PRESTASI
    public function simpanprestasi()
    {
        $this->load->model('m_master');
        {
        $data['nama_siswa']     = $this->input->post('nama_siswa');
        $data['nama_kelas']     = $this->input->post('nama_kelas');
        $data['nama_prestasi']  = $this->input->post('nama_prestasi');
        $data['juara']          = $this->input->post('juara');
        $data['tingkat']        = $this->input->post('tingkat');
        $data['tahun']          = $this->input->post('tahun');
        $this->load->view('admin/dataprestasi',$data);
        }
        $this->m_master->simpan_prestasi($data);
        redirect('master/dataprestasi');
    } 

    // HAPUS PRESTASI
    public function hapusprestasi($id_prestasi)
    {
        $this->load->model('m_master');
        $id['id_prestasi'] = $this->uri->segment(3);
        $this->m_master->hapus_prestasi($id);
        redirect('master/dataprestasi');
    }

    //CETAK DATA PRESTASI
    public function cetak_prestasi()
    {
        $this->load->model('m_master');
        $this->load->model('m_beranda');
        $this->load->library('tcpdf_gen');
        $pdf = new TCPDF('L', 'pt', ['format' => 'F4', 'Rotate' => 260]);
        $pdf->SetTitle('Rekap Prestasi');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->addPage();
        $data = array(
          'prestasi'    => $this->m_master->get_cetakprestasi()->result(),
          'data_profil' => $this->m_beranda->get_profil()->result()
        );
        $html = $this->load->view('cetak/print_prestasi', $data, true);
        $pdf->writeHtml($html, true, false, true, false, '');    
        $pdf->lastPage();
        $pdf->output();
    }




    // UPDATE KATEGORI PELANGGARAN
    public function datakategoripelanggaran()
    {
        $this->load->model('m_master');
        $data = array(
        'setting'                  => $this->m_master->setup()->result(),
        'dataprofil'               => $this->m_master->get_profil()->result(),
        'datatema'                 => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'                => $this->m_pengaturan->get_temaaktif()->result(),
        'datakategoripelanggaran'  => $this->m_master->get_datakategoripelanggaran()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datakategoripelanggaran', $data);
        $this->load->view('_partials/footer');
    }

    public function simpankategoripelanggaran()
    {
        $this->load->model('m_master');
        {
        $data['nama_kategorikasus'] = $this->input->post('nama_kategorikasus');
        $this->load->view('admin/datakategoripelanggaran',$data);
        }
        $this->m_master->simpan_kategoripelanggaran($data);
        redirect('master/datakategoripelanggaran');
    } 

    // UPDATE KATEGORI PELANGGARAN ---------------------------------------------------------------------
    public function updatekategoripelanggaran()
    {
        $this->load->model('m_master');
        $id_kategorikasus['id_kategorikasus']   = $this->input->post("id_kategorikasus");
        $nama_kategorikasus                     = $this->input->post('nama_kategorikasus');
        $data                 = array(
        'nama_kategorikasus' =>$nama_kategorikasus,
        );
        $this->m_master->update_kategorikasus($data, $id_kategorikasus);
        redirect('master/datakategoripelanggaran');
    }

    public function hapuskategoripelanggaran($id_kategorikasus)
    {
        $this->load->model('m_master');
        $id['id_kategorikasus'] = $this->uri->segment(3);
        $this->m_master->hapus_kategoripelanggaran($id);
        redirect('master/datakategoripelanggaran');
    }







    public function bukuinduk()
    {
        $this->load->model('m_master');
        $data        = array(
            'setting'     => $this->m_master->setup()->result(),
            'dataprofil'  => $this->m_master->get_profil()->result(),
            'datatema'    => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
            'datasiswa'   => $this->m_master->get_datasiswa()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/bukuinduk/databukuinduk', $data);
        $this->load->view('_partials/footer');
    }









    public function raporsemester2()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelas'   => $this->m_master->get_raporkelas2()->result(),

        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/raporkelas2', $data);
        $this->load->view('_partials/footer');
    }

    public function raporsemester3()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelas'   => $this->m_master->get_raporkelas3()->result(),
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/raporkelas3', $data);
        $this->load->view('_partials/footer');
    }

    public function raporsemester4()
    {
        $this->load->model('m_master');
        $data        = array(
            'setting'     => $this->m_master->setup()->result(),
            'dataprofil'  => $this->m_master->get_profil()->result(),
            'datatema'    => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
            'datakelas'   => $this->m_master->get_raporkelas4()->result(),
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/raporkelas4', $data);
        $this->load->view('_partials/footer');
    }

    public function raporsemester5()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelas'   => $this->m_master->get_raporkelas5()->result(),
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/raporkelas5', $data);
        $this->load->view('_partials/footer');
    }

    public function raporsemester6()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelas'   => $this->m_master->get_raporkelas6()->result(),
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/raporkelas6', $data);
        $this->load->view('_partials/footer');
    }





    

    public function nilairapor1($kode_kelas)
    {
        $this->load->model('m_master');
        $kode_kelas = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datasiswa'   => $this->m_master->get_dataraporkelas11($kode_kelas)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/rapot/nilairaporkelas1', $data);
        $this->load->view('_partials/footer');
    }

    public function nilairapor2($nama_kelas)
    {
        $this->load->model('m_master');
        $nama_kelas = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datasiswa'   => $this->m_master->get_dataraporkelas11($nama_kelas)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilairaporkelas2', $data);
        $this->load->view('_partials/footer');
    }

    public function nilairapor3($nama_kelas)
    {
        $this->load->model('m_master');
        $nama_kelas = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datasiswa'   => $this->m_master->get_dataraporkelas11($nama_kelas)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilairaporkelas3', $data);
        $this->load->view('_partials/footer');
    }

    public function nilairapor4($nama_kelas)
    {
        $this->load->model('m_master');
        $nama_kelas = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datasiswa'   => $this->m_master->get_dataraporkelas11($nama_kelas)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilairaporkelas4', $data);
        $this->load->view('_partials/footer');
    }


    public function nilairapor5($nama_kelas)
    {
        $this->load->model('m_master');
        $nama_kelas = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datasiswa'   => $this->m_master->get_dataraporkelas11($nama_kelas)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilairaporkelas5', $data);
        $this->load->view('_partials/footer');
    }


    public function nilairapor6($nama_kelas)
    {
        $this->load->model('m_master');
        $nama_kelas = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'datasiswa'   => $this->m_master->get_dataraporkelas11($nama_kelas)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilairaporkelas6', $data);
        $this->load->view('_partials/footer');
    }






    public function hapussemuanilaismt1($id_kodemapel)
    {
          $this->load->model('m_master');
          $id['id_kodemapel'] = $this->uri->segment(3);
          $this->m_master->hapus_semuanilaismt1($id);
          redirect("master/datarapor1");
    }




    public function nilaismt2($kode_mapel)
    {
        $this->load->model('m_master');
        $kode_mapel = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'nilai_smt2' => $this->m_master->get_datarapor2($kode_mapel)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilaismt2', $data);
        $this->load->view('_partials/footer');
    }

    public function hapussemuanilaismt2($id_kodemapel)
    {
          $this->load->model('m_master');
          $id['id_kodemapel'] = $this->uri->segment(3);
          $this->m_master->hapus_semuanilaismt2($id);
          redirect("master/datarapor2");
    }

    public function nilaismt3($kode_mapel)
    {
        $this->load->model('m_master');
        $kode_mapel = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'nilai_smt3'  => $this->m_master->get_datarapor3($kode_mapel)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilaismt3', $data);
        $this->load->view('_partials/footer');
    }

    public function hapussemuanilaismt3($id_kodemapel)
    {
          $this->load->model('m_master');
          $id['id_kodemapel'] = $this->uri->segment(3);
          $this->m_master->hapus_semuanilaismt3($id);
          redirect("master/datarapor3");
    }


    public function nilaismt4($kode_mapel)
    {
        $this->load->model('m_master');
        $kode_mapel = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'nilai_smt4'  => $this->m_master->get_datarapor4($kode_mapel)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilaismt4', $data);
        $this->load->view('_partials/footer');
    }

    public function hapussemuanilaismt4($id_kodemapel)
    {
          $this->load->model('m_master');
          $id['id_kodemapel'] = $this->uri->segment(3);
          $this->m_master->hapus_semuanilaismt4($id);
          redirect("master/datarapor4");
    }

    public function nilaismt5($kode_mapel)
    {
        $this->load->model('m_master');
        $kode_mapel = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'nilai_smt5'  => $this->m_master->get_datarapor5($kode_mapel)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilaismt5', $data);
        $this->load->view('_partials/footer');
    }

    public function hapussemuanilaismt5($id_kodemapel)
    {
          $this->load->model('m_master');
          $id['id_kodemapel'] = $this->uri->segment(3);
          $this->m_master->hapus_semuanilaismt5($id);
          redirect("master/datarapor5");
    }

    public function nilaismt6($kode_mapel)
    {
        $this->load->model('m_master');
        $kode_mapel = $this->uri->segment(3);
        $data        = array(
          'setting'     => $this->m_master->setup()->result(),
          'dataprofil'  => $this->m_master->get_profil()->result(),
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'nilai_smt6'  => $this->m_master->get_datarapor6($kode_mapel)->result()
        );
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/nilaismt6', $data);
        $this->load->view('_partials/footer');
    }

    public function hapussemuanilaismt6($id_kodemapel)
    {
          $this->load->model('m_master');
          $id['id_kodemapel'] = $this->uri->segment(3);
          $this->m_master->hapus_semuanilaismt6($id);
          redirect("master/datarapor6");
    }

    public function hapusnilaismt1($id_rapor)
    {
          $this->load->model('m_master');
          $id['id_rapor'] = $this->uri->segment(3);
          $this->m_master->hapus_datarapor1($id);
          redirect("master/datarapor1");
    }






    public function datarapor2()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'             => $this->m_master->setup()->result(),
          'dataprofil'          => $this->m_master->get_profil()->result(),
          'datatema'            => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'           => $this->m_pengaturan->get_temaaktif()->result(),
          'datarapormapelnilai' => $this->m_master->get_datarapormapelnilai()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datarapor2', $data);
        $this->load->view('_partials/footer');
    }

    public function datarapor3()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'             => $this->m_master->setup()->result(),
          'dataprofil'          => $this->m_master->get_profil()->result(),
          'datatema'            => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'           => $this->m_pengaturan->get_temaaktif()->result(),
          'datarapormapelnilai' => $this->m_master->get_datarapormapelnilai()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datarapor3', $data);
        $this->load->view('_partials/footer');
    }

    public function datarapor4()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'             => $this->m_master->setup()->result(),
          'dataprofil'          => $this->m_master->get_profil()->result(),
          'datatema'            => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'           => $this->m_pengaturan->get_temaaktif()->result(),
          'datarapormapelnilai' => $this->m_master->get_datarapormapelnilai()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datarapor4', $data);
        $this->load->view('_partials/footer');
    }

    public function datarapor5()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'             => $this->m_master->setup()->result(),
          'dataprofil'          => $this->m_master->get_profil()->result(),
          'datatema'            => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'           => $this->m_pengaturan->get_temaaktif()->result(),
          'datarapormapelnilai' => $this->m_master->get_datarapormapelnilai()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datarapor5', $data);
        $this->load->view('_partials/footer');
    }

    public function datarapor6()
    {
        $this->load->model('m_master');
        $data        = array(
          'setting'             => $this->m_master->setup()->result(),
          'dataprofil'          => $this->m_master->get_profil()->result(),
          'datatema'            => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'           => $this->m_pengaturan->get_temaaktif()->result(),
          'datarapormapelnilai' => $this->m_master->get_datarapormapelnilai()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datarapor6', $data);
        $this->load->view('_partials/footer');
    }


    





    public function updaterapor1()
    {
    $this->load->model('m_master');
    
    $id_rapor['id_rapor']    = $this->input->post("id_rapor");
    $tahun_ajaran            = $this->input->post('tahun_ajaran');
    $kkm                     = $this->input->post('kkm');
    $nilaipengetahuan        = $this->input->post('nilaipengetahuan');
    $nilaiketerampilan       = $this->input->post('nilaiketerampilan');
    $deskripsi               = $this->input->post('deskripsi');
    $data = array(
        'tahun_ajaran'        =>$tahun_ajaran,
        'kkm'                 =>$kkm,
        'nilaipengetahuan'    =>$nilaipengetahuan,
        'nilaiketerampilan'   =>$nilaiketerampilan,
        'deskripsi'           =>$deskripsi
    );
    
    $this->m_master->update_rapor1($data, $id_rapor);
    
    redirect($this->input->post('redirect'));
    }

    public function updaterapor2()
    {
    $this->load->model('m_master');
    
    $id_rapor['id_rapor']    = $this->input->post("id_rapor");
    $tahun_ajaran            = $this->input->post('tahun_ajaran');
    $kkm                     = $this->input->post('kkm');
    $nilaipengetahuan        = $this->input->post('nilaipengetahuan');
    $nilaiketerampilan       = $this->input->post('nilaiketerampilan');
    $deskripsi               = $this->input->post('deskripsi');
    $data = array(
        'tahun_ajaran'        =>$tahun_ajaran,
        'kkm'                 =>$kkm,
        'nilaipengetahuan'    =>$nilaipengetahuan,
        'nilaiketerampilan'   =>$nilaiketerampilan,
        'deskripsi'           =>$deskripsi
    );
    
    $this->m_master->update_rapor2($data, $id_rapor);
    
    redirect($this->input->post('redirect'));
    }






    public function hapusdatarapor1($id_rapor)
    {
          $this->load->model('m_master');
          $id['id_rapor'] = $this->uri->segment(3);
          $this->m_master->hapus_datarapor1($id);
          redirect('master/datarapor1', $id_rapor);
    }

    public function hapusdatarapor2($id_rapor)
    {
          $this->load->model('m_master');
          $id['id_rapor'] = $this->uri->segment(3);
          $this->m_master->hapus_datarapor2($id);
          redirect('master/datarapor2', $id_rapor);
    }











    public function dataraporekstra()
    {
          $this->load->model('m_master');
          $data = array(
            'setting'        => $this->m_master->setup()->result(),
            'dataprofil'     => $this->m_master->get_profil()->result(),
            'datatema'       => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'      => $this->m_pengaturan->get_temaaktif()->result(),
            'datarapoekstra' => $this->m_master->get_dataraporekstra()->result()
          );
          $this->load->view('_partials/header', $data);
          $this->load->view('_partials/menu/menu.php', $data);
          $this->load->view('admin/dataraporekstra1', $data);
          $this->load->view('_partials/footer');
    }

    public function hapusdataraporekstra($id_raporekstra)
    {
          $this->load->model('m_master');
          $id['id_raporekstra'] = $this->uri->segment(3);
          $this->m_master->hapus_dataraporekstra($id);
          redirect('master/dataraporekstra');
    }

    public function simpandataraporekstra()
    {
          $this->load->model('m_master');
          {
          $data['nama_ekstra']     = $this->input->post('nama_ekstra');
          $data['kode_ekstra']     = $this->input->post('kode_ekstra');
          $data['id_role']         = $this->input->post('id_role');
          $data['kelompok_ekstra']         = $this->input->post('kelompok_ekstra');
		      $this->load->view('admin/dataraporekstra1', $data);
	  }
          $this->m_master->simpan_dataraporekstra($data);
          $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
          redirect('master/dataraporekstra');
    } 



















    public function dataraporkelas()
    {
          $this->load->model('m_master');
          $data = array(
              'dataraporkelas' => $this->m_master->get_dataraporkelas()->result(),
              'datarapormapel' => $this->m_master->get_datarapormapel()->result()
          );
          $this->load->view('_partials/header');
          $this->load->view('_partials/menu/menu.php');
          $this->load->view('admin/dataraporkelas', $data);
          $this->load->view('_partials/footer');
    }



    public function simpandatarapolkelas()
    {
          $this->load->model('m_master');
          {
          $data['nama_kelas']     = $this->input->post('nama_kelas');
		
		
		      $this->load->view('admin/dataraporkelas',$data);
	  }
          $this->m_master->simpan_dataraporkelas($data);
          $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
          redirect('master/dataraporkelas');
    } 


    public function hapusdataraporkelas($id_kelas)
    {
          $this->load->model('m_master');
          $id['id_kelas'] = $this->uri->segment(3);
          $this->m_master->hapus_dataraporkelas($id);
          redirect('master/dataraporkelas');
    }





    public function settingppdb($id_profil)
    {
      $this->load->model('m_master');
      $id_profil  = $this->uri->segment(3);
      $data       = array(
         'setting'         => $this->m_master->setup()->result(),
         'data_profilppdb' => $this->m_master->edit_pengaturanppdb($id_profil)
      );
      
          $this->load->view('_partials/header');
          $this->load->view('_partials/menu/menu.php', $data);
          $this->load->view('admin/ppdb/profilppdb', $data);
          $this->load->view('_partials/footer');
    }

    // fungsi data Ketentuan PPDB
    public function ketentuanppdb()
    {
      $this->load->model('m_master');
      $data = array(
      'setting'             => $this->m_master->setup()->result(),
      'dataketentuanppdb'   => $this->m_master->get_dataketentuanppdb()->result(),
      );
      $this->load->view('_partials/header');
      $this->load->view('_partials/menu/menu.php', $data);
      $this->load->view('admin/ppdb/dataketentuanppdb', $data);
      $this->load->view('_partials/footer');
    }

    // fungsi Simpan Ketentuan ppdb
    public function simpanketentuanppdb()
    {
      $this->load->model('m_master'); 
      {
      $data['keterangan']     = $this->input->post('keterangan');
      $this->load->view('admin/ppdb/dataketentuanppdb',$data);
      }
      $this->m_master->simpan_dataketentuanppdb($data);
      $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Ketentuan Berhasil Ditambahkan');
      redirect('master/ketentuanppdb');
    } 

    
    // fungsi Hapus Ketentuan ppdb
    public function hapusketentuanppdb($id_ketentuan)
    {
      $this->load->model('m_master');
      $id['id_ketentuan'] = $this->uri->segment(3);
      $this->m_master->hapus_dataketentuanppdb($id);
      redirect('master/ketentuanppdb');
    }
    

    // fungsi data jalur PPDB
    public function jalurppdb()
    {
      $this->load->model('m_master');
      $data = array(
      'setting'         => $this->m_master->setup()->result(),
      'datajalurppdb'   => $this->m_master->get_datajalurppdb()->result(),
      );
      $this->load->view('_partials/header');
      $this->load->view('_partials/menu/menu.php', $data);
      $this->load->view('admin/ppdb/datajalurppdb', $data);
      $this->load->view('_partials/footer');
    }



    // fungsi Simpan Jalur ppdb
    public function simpanjalurppdb()
    {
      $this->load->model('m_master'); 
      {
      $data['nama_jalur']     = $this->input->post('nama_jalur');
      $data['kode_jalur']     = $this->input->post('kode_jalur');
      $data['status_jalur']   = $this->input->post('status_jalur');
      $this->load->view('admin/ppdb/datajalurppdb',$data);
      }
      $this->m_master->simpan_datajalurppdb($data);
      $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Jalur Berhasil Ditambahkan');
      redirect('master/jalurppdb');
    } 


    // fungsi Update Jalur ppdb
    public function updatejalurppdb()
    {
        $this->load->model('m_master');
        $id_jalur['id_jalur']    = $this->input->post("id_jalur");
        $nama_jalur              = $this->input->post('nama_jalur');
        $kode_jalur              = $this->input->post('kode_jalur');
        $status_jalur            = $this->input->post('status_jalur');
        $data = array(
          'nama_jalur'        =>$nama_jalur,
          'kode_jalur'        =>$kode_jalur,
          'status_jalur'      =>$status_jalur
        );
        $this->m_master->update_jalurppdb($data, $id_jalur);
        redirect('master/jalurppdb');
    }

    // fungsi Hapus Jalur ppdb
    public function hapusjalurppdb($id_jalur)
    {
      $this->load->model('m_master');
      $id['id_jalur'] = $this->uri->segment(3);
      $this->m_master->hapus_datajalurppdb($id);
      redirect('master/jalurppdb');
    }



    public function profilkelembagaan($id_profil)
    {
      $this->load->model('m_master');
      $id_profil  = $this->uri->segment(3);
      $data       = array(
         'setting'       => $this->m_master->setup()->result(),
         'data_profil'   => $this->m_master->edit_pengaturan($id_profil),
         'datatema'      => $this->m_pengaturan->get_tema()->result(),
         'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result(),
         'dataprofil'    => $this->m_master->get_profil()->result()
      );
      
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/kelembagaan/profilkelembagaan', $data);
        $this->load->view('_partials/footer');
    }

    public function updatingprofil_save()
    {
      $where['id_profil'] = 1;
        $in['pemerintah']           = $this->input->post("pemerintah");
        $in['pemerintahkop']        = $this->input->post("pemerintahkop");
        $in['nama_lembaga']         = $this->input->post("nama_lembaga");
        $in['nama_lembaganaungan']  = $this->input->post("nama_lembaganaungan");
        $in['kota_lembaga']         = $this->input->post("kota_lembaga");
        $in['provinsi_lembaga']     = $this->input->post("provinsi_lembaga");
        $in['alamat_lembaga']       = $this->input->post("alamat_lembaga");
        $in['nama_kepsek']          = $this->input->post("nama_kepsek");
        $in['nip_kepsek']           = $this->input->post("nip_kepsek");
        $in['npsn']                 = $this->input->post("npsn");
        $in['status']               = $this->input->post("status");
        $in['notelp']               = $this->input->post("notelp");
        $in['email']                = $this->input->post("email");
        $in['alamatwebsite']        = $this->input->post("alamatwebsite");
        $in['pesanberjalan']        = $this->input->post("pesanberjalan");
        $in['video_profil']         = $this->input->post("video_profil");

        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['encrypt_name']     = TRUE;
        $config['remove_spaces']    = TRUE;
        $config['max_size']         = '0';
        $config['max_width']        = '0';
        $config['max_height']       = '0';

      $this->load->library('upload', $config);


      if(!empty($_FILES['logo']['name'])) {
        if($this->upload->do_upload("logo")) {
          $data	 	= $this->upload->data();
          $in['logo'] = $data['file_name'];	
          $this->db->update("profil", $in, $where);
          @unlink("./upload/".$this->input->post("logo_lama"));
          $this->session->set_flashdata("success","Update Identitas Sekolah Berhasil");
          redirect("master/profilkelembagaan/1");	
        } else {
          $this->session->set_flashdata("error",$this->upload->display_errors());
          redirect("master/profilkelembagaan/1");	
        }
      } else {
        $this->db->update("profil", $in, $where);
        $this->session->set_flashdata('pemberitahuan_berhasil','<i class="feather icon-check-circle mr-2"></i> Data Lembaga Berhasil Diperbaharui');
        redirect("master/profilkelembagaan/1");
      }
    
    }


    public function updatingprofilppdb_save()
    {
      $where['id_profil'] = 1;
        $in['informasi']         = $this->input->post("informasi");

        $config['upload_path']      = './assets/ppdb/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['encrypt_name']     = TRUE;
        $config['remove_spaces']    = TRUE;
        $config['max_size']         = '0';
        $config['max_width']        = '0';
        $config['max_height']       = '0';

      $this->load->library('upload', $config);


      if(!empty($_FILES['background']['name'])) {
        if($this->upload->do_upload("background")) {
          $data	 	= $this->upload->data();
          $in['background'] = $data['file_name'];	
          $this->db->update("ppdb_profil", $in, $where);
          @unlink("./assets/ppdb/img/".$this->input->post("background_lama"));
          $this->session->set_flashdata("success","Update Identitas Sekolah Berhasil");
          redirect("master/settingppdb/1");	
        } else {
          $this->session->set_flashdata("error",$this->upload->display_errors());
          redirect("master/settingppdb/1");	
        }
      } else {
        $this->db->update("ppdb_profil", $in, $where);
        $this->session->set_flashdata('pemberitahuan_berhasil','<i class="feather icon-check-circle mr-2"></i> Data Lembaga Berhasil Diperbaharui');
        redirect("master/settingppdb/1");
      }
    
    }







    



    


    public function exportdatalumni(){
      // Load plugin PHPExcel nya
      include APPPATH.'third_party/PHPExcel/PHPExcel.php';
      
      // Panggil class PHPExcel nya
      $excel = new PHPExcel();
      // Settingan awal fil excel
      $excel->getProperties()->setCreator('Hainur Cahya Utama')
                    ->setLastModifiedBy('Hainur Cahya Utama')
                    ->setTitle("Data Alumni")
                    ->setSubject("Alumni")
                    ->setDescription("Rekap Data Alumni")
                    ->setKeywords("Data Alumni");
      // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
      $style_col = array(
          'font' => array('bold' => true), // Set font nya jadi bold
          'alignment'  => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
          'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders'  => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

      $gayatengah = array(
        'font' => array('bold' => false), // Set font nya jadi bold
        'alignment'  => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders'  => array(
        'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );

      // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
      $style_row      = array(
          'alignment' => array(
          'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
          'borders' => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

    
  
      // Buat header tabel nya pada baris ke 3
      $excel->setActiveSheetIndex(0)->setCellValue('A1', "NO"); // Set kolom A3 dengan tulisan "NO"
      $excel->setActiveSheetIndex(0)->setCellValue('B1', "NISN"); // Set kolom B3 dengan tulisan "NAMA"
      $excel->setActiveSheetIndex(0)->setCellValue('C1', "Nama Lengkap"); 
      $excel->setActiveSheetIndex(0)->setCellValue('D1', "Tempat Lahir"); 
      $excel->setActiveSheetIndex(0)->setCellValue('E1', "Tanggal Lahir"); 
      $excel->setActiveSheetIndex(0)->setCellValue('F1', "Jenis Kelamin"); 
      $excel->setActiveSheetIndex(0)->setCellValue('G1', "Agama"); 
      $excel->setActiveSheetIndex(0)->setCellValue('H1', "Tahun Masuk"); 
      $excel->setActiveSheetIndex(0)->setCellValue('I1', "Tahun Lulus"); 
      $excel->setActiveSheetIndex(0)->setCellValue('J1', "Bekerja Di"); 
      $excel->setActiveSheetIndex(0)->setCellValue('K1', "Bidang Usaha"); 
      $excel->setActiveSheetIndex(0)->setCellValue('L1', "Jabatan Pekerjaan");
      $excel->setActiveSheetIndex(0)->setCellValue('M1', "Ikatan Kerja"); 
      $excel->setActiveSheetIndex(0)->setCellValue('N1', "Sesuai Kompetensi");
      $excel->setActiveSheetIndex(0)->setCellValue('O1', "Penghasilan");
      $excel->setActiveSheetIndex(0)->setCellValue('P1', "Nama Perguruan Tinggi");
      $excel->setActiveSheetIndex(0)->setCellValue('Q1', "Program Studi");
      $excel->setActiveSheetIndex(0)->setCellValue('R1', "Sejak Bekerja/Berkuliah");
      $excel->setActiveSheetIndex(0)->setCellValue('S1', "Keterangan");




      // Apply style header yang telah kita buat tadi ke masing-masing kolom header
      $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('N1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('O1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('P1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('Q1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('R1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('S1')->applyFromArray($style_col);

      // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
      $siswa = $this->Exportdataalumni->view();
      $no = 1; // Untuk penomoran tabel, di awal set dengan 1
      $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
      foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_alumni);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->temapatlahir);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->tgl_lahir);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->jk);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->agama);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->thn_masuk);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->thn_lulus);
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->namaperusahaan);
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->bidangusaha);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->pekerjaan);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->ikatankerja);
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->kompetensi);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->penghasilan);
      $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->perguruantinggi);
      $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data->programstudi);
      $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data->tanggalmasuk);
      $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data->keterangan);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($gayatengah);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
      }
      // Set width kolom
      $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
      $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
      $excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); // Set width kolom C
      $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
      $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
      $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
      $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
      $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
      $excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
      $excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
      $excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
      $excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
      $excel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
      $excel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
      $excel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
      $excel->getActiveSheet()->getColumnDimension('P')->setWidth(40);
      $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
      $excel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
      $excel->getActiveSheet()->getColumnDimension('S')->setWidth(30);

      // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
      $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
      // Set orientasi kertas jadi LANDSCAPE
      $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
      // Set judul file excel nya
      $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
      $excel->setActiveSheetIndex(0);
      // Proses file excel
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="Data Alumni.xlsx"'); // Set nama file excel nya
      header('Cache-Control: max-age=0');
      $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
      $write->save('php://output');
    }





    

    


    public function templatekelulusan(){
      // Load plugin PHPExcel nya
      include APPPATH.'third_party/PHPExcel/PHPExcel.php';
      
      // Panggil class PHPExcel nya
      $excel = new PHPExcel();
      // Settingan awal fil excel
      $excel->getProperties()->setCreator('Hainur Cahya Utama')
                    ->setLastModifiedBy('Hainur Cahya Utama')
                    ->setTitle("Template Data Kelulusan")
                    ->setSubject("Siswa")
                    ->setDescription("Template Data Kelulusan")
                    ->setKeywords("Data Siswa");
      // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
      $style_col = array(
          'font' => array('bold' => true), // Set font nya jadi bold
          'alignment'  => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
          'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders'  => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

      $gayatengah = array(
        'font' => array('bold' => false), // Set font nya jadi bold
        'alignment'  => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders'  => array(
        'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );

      // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
      $style_row      = array(
          'alignment' => array(
          'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
          'borders' => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

    
  
      // Buat header tabel nya pada baris ke 3
      $excel->setActiveSheetIndex(0)->setCellValue('A1', "NO"); // Set kolom A3 dengan tulisan "NO"
      $excel->setActiveSheetIndex(0)->setCellValue('B1', "ID SISWA"); 
      $excel->setActiveSheetIndex(0)->setCellValue('C1', "NISN"); // Set kolom B3 dengan tulisan "NAMA"
      $excel->setActiveSheetIndex(0)->setCellValue('D1', "Nama Siswa");
      $excel->setActiveSheetIndex(0)->setCellValue('E1', "Kelas"); 
      $excel->setActiveSheetIndex(0)->setCellValue('F1', "Nilai"); 
      $excel->setActiveSheetIndex(0)->setCellValue('G1', "Status Lulus"); 
      // Apply style header yang telah kita buat tadi ke masing-masing kolom header
      $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);

      // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
      $siswa = $this->Exportdatalulus->view();
      $no = 1; // Untuk penomoran tabel, di awal set dengan 1
      $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
      foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->id_pendaftar);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nama_lengkap);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->siswa_kelas);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($gayatengah);
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
      }
      // Set width kolom
      $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
      $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); // Set width kolom B
      $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom C
      $excel->getActiveSheet()->getColumnDimension('D')->setWidth(45); // Set width kolom D
      $excel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
      // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
      $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
      // Set orientasi kertas jadi LANDSCAPE
      $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
      // Set judul file excel nya
      $excel->getActiveSheet(0)->setTitle("Laporan Data Kelulusan");
      $excel->setActiveSheetIndex(0);
      // Proses file excel
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="Template Kelulusan.xlsx"'); // Set nama file excel nya
      header('Cache-Control: max-age=0');
      $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
      $write->save('php://output');
    }












  public function export(){
      // Load plugin PHPExcel nya
      include APPPATH.'third_party/PHPExcel/PHPExcel.php';
      
      // Panggil class PHPExcel nya
      $excel = new PHPExcel();
      // Settingan awal fil excel
      $excel->getProperties()->setCreator('Hainur Cahya Utama')
                    ->setLastModifiedBy('Hainur Cahya Utama')
                    ->setTitle("Export Data Siswa")
                    ->setSubject("Siswa")
                    ->setDescription("Laporan Rekap Data Siswa")
                    ->setKeywords("Data Siswa");
      // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
      $style_col = array(
          'font' => array('bold' => true), // Set font nya jadi bold
          'alignment'  => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
          'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders'  => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

      $gayatengah = array(
        'font' => array('bold' => false), // Set font nya jadi bold
        'alignment'  => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders'  => array(
        'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );

      // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
      $style_row      = array(
          'alignment' => array(
          'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
          'borders' => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

    
  
      // Buat header tabel nya pada baris ke 3
      $excel->setActiveSheetIndex(0)->setCellValue('A1', "NO"); // Set kolom A3 dengan tulisan "NO"
      $excel->setActiveSheetIndex(0)->setCellValue('B1', "NIS"); // Set kolom B3 dengan tulisan "NAMA"
      $excel->setActiveSheetIndex(0)->setCellValue('C1', "NISN"); 
      $excel->setActiveSheetIndex(0)->setCellValue('D1', "Nomor Induk Kependudukan (NIK)"); 
      $excel->setActiveSheetIndex(0)->setCellValue('E1', "Nomor Kartu Keluarga (KK)"); 
      $excel->setActiveSheetIndex(0)->setCellValue('F1', "Nama Siswa"); 
      $excel->setActiveSheetIndex(0)->setCellValue('G1', "Tempat Lahir"); 
      $excel->setActiveSheetIndex(0)->setCellValue('H1', "Tanggal Lahir"); 
      $excel->setActiveSheetIndex(0)->setCellValue('I1', "Jenis Kelamin"); 
      $excel->setActiveSheetIndex(0)->setCellValue('J1', "Agama"); 
      $excel->setActiveSheetIndex(0)->setCellValue('K1', "Hobi"); 
      $excel->setActiveSheetIndex(0)->setCellValue('L1', "Cita - Cita"); 
      $excel->setActiveSheetIndex(0)->setCellValue('M1', "Anak Ke"); 
      $excel->setActiveSheetIndex(0)->setCellValue('N1', "Jumlah Saudara"); 
      $excel->setActiveSheetIndex(0)->setCellValue('O1', "Jarak Rumah Ke Sekolah"); 
      $excel->setActiveSheetIndex(0)->setCellValue('P1', "Transportasi"); 
      $excel->setActiveSheetIndex(0)->setCellValue('Q1', "Anak Yatim"); 
      $excel->setActiveSheetIndex(0)->setCellValue('R1', "Bahasa Sehari Hari"); 
      $excel->setActiveSheetIndex(0)->setCellValue('S1', "Kewarganegaraan"); 
      $excel->setActiveSheetIndex(0)->setCellValue('T1', "Tinggi Badan"); 
      $excel->setActiveSheetIndex(0)->setCellValue('U1', "Berat Badan"); 
      $excel->setActiveSheetIndex(0)->setCellValue('V1', "Golongan Darah"); 
      $excel->setActiveSheetIndex(0)->setCellValue('W1', "Penyakit Yang Diderita"); 
      $excel->setActiveSheetIndex(0)->setCellValue('X1', "Kelainan Jasmani"); 
      $excel->setActiveSheetIndex(0)->setCellValue('Y1', "Alamat"); 
      $excel->setActiveSheetIndex(0)->setCellValue('Z1', "Desa / Kelurahan"); 
      $excel->setActiveSheetIndex(0)->setCellValue('AA1', "Kecamatan"); 
      $excel->setActiveSheetIndex(0)->setCellValue('AB1', "Kabupaten / Kota"); 
      $excel->setActiveSheetIndex(0)->setCellValue('AC1', "Provinsi"); 
      $excel->setActiveSheetIndex(0)->setCellValue('AD1', "Kode Pos"); 
      $excel->setActiveSheetIndex(0)->setCellValue('AE1', "Tinggal"); 
      $excel->setActiveSheetIndex(0)->setCellValue('AF1', "Nomor HP"); 
      // Apply style header yang telah kita buat tadi ke masing-masing kolom header
      $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('N1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('O1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('P1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('Q1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('R1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('S1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('T1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('U1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('V1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('W1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('X1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('Y1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('Z1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('AA1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('AB1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('AC1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('AD1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('AE1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('AF1')->applyFromArray($style_col);

      // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
      $siswa = $this->Exportdatasiswa->view();
      $no = 1; // Untuk penomoran tabel, di awal set dengan 1
      $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
      foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nis);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nik);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->nokk);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->nama_lengkap);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->tempatlahir);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->tanggallahir);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->jeniskelamin);
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->agama);
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->hobi);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->citacita);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->anakke);
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->jumlahsaudara);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->jarakkesekolah);
      $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->transportasi);
      $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data->status_anakyatim);
      $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data->bahasa);
      $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data->kewarganegaraan);
      $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data->pendukung_tinggibadan);
      $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data->pendukung_beratbadan);
      $excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data->pendukung_golongandarah);
      $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data->pendukung_penyakit);
      $excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data->pendukung_kelainanjasmani);
      $excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data->siswa_alamat);
      $excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data->siswa_desakel);
      $excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data->siswa_kecamatan);
      $excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data->siswa_kabupaten);
      $excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $data->siswa_provinsi);
      $excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data->siswa_kodepos);
      $excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $data->siswa_tinggal);
      $excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow, $data->siswa_nohp);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('h'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('i'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('j'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('k'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($gayatengah);
      $excel->getActiveSheet()->getStyle('AF'.$numrow)->applyFromArray($gayatengah);
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
      }
      // Set width kolom
      $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
      $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); // Set width kolom B
      $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom C
      $excel->getActiveSheet()->getColumnDimension('D')->setWidth(35); // Set width kolom D
      $excel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('F')->setWidth(40);
      $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
      $excel->getActiveSheet()->getColumnDimension('P')->setWidth(15);
      $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('R')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('S')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('T')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('U')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('V')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('W')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('X')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('Y')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('Z')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('AA')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('AB')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('AC')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('AD')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('AE')->setWidth(25);
      $excel->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
      // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
      $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
      // Set orientasi kertas jadi LANDSCAPE
      $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
      // Set judul file excel nya
      $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
      $excel->setActiveSheetIndex(0);
      // Proses file excel
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="Leger Data Siswa.xlsx"'); // Set nama file excel nya
      header('Cache-Control: max-age=0');
      $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
      $write->save('php://output');
    }




   



      public function Exportrolekelas($id_kelas){
        // Load plugin PHPExcel nya
        $this->load->model('Exportrolekelas');
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Hainur Cahya Utama')
                     ->setLastModifiedBy('Hainur Cahya Utama')
                     ->setTitle("Data Siswa")
                     ->setSubject("Siswa")
                     ->setDescription("Laporan Data Siswa")
                     ->setKeywords("Data Siswa");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment'  => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders'  => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row      = array(
            'alignment' => array(
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
    
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Nama Kelas"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B1', "Nama Mapel");
        $excel->setActiveSheetIndex(0)->setCellValue('C1', "Nama Siswa");
        $excel->setActiveSheetIndex(0)->setCellValue('D1', "NIS");




        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);


        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $id_kelas = $this->uri->segment(3);
        $siswa = $this->Exportrolekelas->view($id_kelas);
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($siswa as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->siswa_kelas);
      
        $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_lengkap);
        $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nis);

        // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
        $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);

        $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(20); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(40); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
      
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Template Rapor SMT 1");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Template Role Pengguna.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }










      //Fungsi ini sudah di Validasi -- Untuk mengambil nilai Rapor Semester 1--
      public function exportdatanilairapor1(){
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        $excel = new PHPExcel();
        $excel->getProperties()->setCreator('Hainur Cahya Utama')
                     ->setLastModifiedBy('Hainur Cahya Utama')
                     ->setTitle("Data Siswa")
                     ->setSubject("Siswa")
                     ->setDescription("Laporan Data Siswa")
                     ->setKeywords("Data Siswa");
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment'  => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders'  => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
        $style_row      = array(
            'alignment' => array(
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
    
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "ID Siswa"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B1', "Kode Mapel");
        $excel->setActiveSheetIndex(0)->setCellValue('C1', "Nama Mapel");
        $excel->setActiveSheetIndex(0)->setCellValue('D1', "Kelas");
        $excel->setActiveSheetIndex(0)->setCellValue('E1', "Nomor Absen");
        $excel->setActiveSheetIndex(0)->setCellValue('F1', "Nama Siswa"); // Set kolom B3 dengan tulisan "NAMA"
        $excel->setActiveSheetIndex(0)->setCellValue('G1', "Nilai Pengetahuan");
        $excel->setActiveSheetIndex(0)->setCellValue('H1', "Nilai Keterampilan");

        $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);

        $siswa = $this->Exportdatatemplaterapor->view();
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($siswa as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->id_user);
        $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->kode_mapel);
        $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_mapel);
        $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->kelas);
        $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->nomor_absen);
        $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->nama_siswa);
        $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->nilaipengetahuan);
        $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->nilaiketerampilan);
        
        $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
        $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(10); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(45); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(45);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);

        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        $excel->getActiveSheet(0)->setTitle("Rekap Rapor Semester 1");
        $excel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Rekap Rapor Semester 1.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }



























      



      //Fungsi ini sudah di Validasi -- Untuk Download Template Rapor pada mata pelajaran per kelas--
      public function expormapel($id_rapormapel){
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Hainur Cahya Utama')
                     ->setLastModifiedBy('Hainur Cahya Utama')
                     ->setTitle("Data Siswa")
                     ->setSubject("Siswa")
                     ->setDescription("Nilai RapoT Siswa")
                     ->setKeywords("Data Siswa");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment'  => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders'  => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );

        $gayatengah = array(
          'font' => array('bold' => false), // Set font nya jadi bold
          'alignment'  => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
          'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders'  => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row      = array(
            'alignment' => array(
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
    
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Id Siswa"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B1', "Nomor Absen");
        $excel->setActiveSheetIndex(0)->setCellValue('C1', "Nama Siswa");
        $excel->setActiveSheetIndex(0)->setCellValue('D1', "Kode Kelas");
        $excel->setActiveSheetIndex(0)->setCellValue('E1', "Nama Mapel");
        $excel->setActiveSheetIndex(0)->setCellValue('F1', "Kelompok");
        $excel->setActiveSheetIndex(0)->setCellValue('G1', "KKM");
        $excel->setActiveSheetIndex(0)->setCellValue('H1', "Nilai Pengetahuan");
        $excel->setActiveSheetIndex(0)->setCellValue('I1', "Nilai Keterampilan");
        $excel->setActiveSheetIndex(0)->setCellValue('J1', "Deskripsi");
        $excel->setActiveSheetIndex(0)->setCellValue('K1', "Tahun Ajaran");
        $excel->setActiveSheetIndex(0)->setCellValue('L1', "Semester");
        $excel->setActiveSheetIndex(0)->setCellValue('M1', "Kode Mapel");


        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_col);

        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $id_rapormapel = $this->uri->segment(3);
        $siswa = $this->Exportdatatemplate->download($id_rapormapel);
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($siswa as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->id_pendaftar);
        $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->siswa_nomorabsen);
        $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_lengkap);
        $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->siswa_kelas);
        $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->nama_mapel);
        $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->kelompok_mapel);
        $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->kkm);
        $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->kode_mapel);


        // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
        $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($gayatengah);
        $numrow++; // Tambah 1 setiap kali looping
        }

        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(10); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(45);
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(40);
      
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Template Rapor SMT 1");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Template-Nilai-Rapor-SMT1.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }

 //Fungsi ini sudah di Validasi -- Untuk Download Template Rapor pada mata pelajaran per kelas--
      public function exporekstra($id_raporekstra){
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Hainur Cahya Utama')
                     ->setLastModifiedBy('Hainur Cahya Utama')
                     ->setTitle("Data Siswa")
                     ->setSubject("Siswa")
                     ->setDescription("Laporan Data Siswa")
                     ->setKeywords("Data Siswa");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment'  => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders'  => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );

        $gayatengah = array(
          'font' => array('bold' => false), // Set font nya jadi bold
          'alignment'  => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
          'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders'  => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row      = array(
            'alignment' => array(
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
    
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "ID Siswa"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B1', "Nomor Absen");
        $excel->setActiveSheetIndex(0)->setCellValue('C1', "Nama Siswa");
        $excel->setActiveSheetIndex(0)->setCellValue('D1', "Kode Kelas");
        $excel->setActiveSheetIndex(0)->setCellValue('E1', "Nama Mapel");
        $excel->setActiveSheetIndex(0)->setCellValue('F1', "Nilai");
        $excel->setActiveSheetIndex(0)->setCellValue('G1', "Kode Ekstra");


        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);

        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $id_raporekstra = $this->uri->segment(3);
        $siswa = $this->Exportdatatemplate->downloadekstra($id_raporekstra);
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($siswa as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->id_pendaftar);
        $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->siswa_nomorabsen);
        $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_lengkap);
        $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->siswa_kelas);
        $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->nama_ekstra);
        $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->kode_ekstra);


        // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
        $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($gayatengah);
        $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($gayatengah);
        $numrow++; // Tambah 1 setiap kali looping
        }

        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(10); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(45);
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(40);
      
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Template Ekstra");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Template-Nilai-Rapor-SMT1.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }
















      public function exportpresensisiswa(){

        $this->load->model('Exportabsensiswa');
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Hainur Cahya Utama')
                     ->setLastModifiedBy('Hainur Cahya Utama')
                     ->setTitle("Data Siswa")
                     ->setDescription("Laporan Presensi Siswa")
                     ->setKeywords("Data Siswa");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment'  => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders'  => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row      = array(
            'alignment' => array(
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
    
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Nama Siswa"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B1', "Kelas"); 
        $excel->setActiveSheetIndex(0)->setCellValue('C1', "Tanggal Presensi");
        $excel->setActiveSheetIndex(0)->setCellValue('D1', "Masuk");
        $excel->setActiveSheetIndex(0)->setCellValue('E1', "Pulang");



        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);


        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $siswa = $this->Exportabsensiswa->view();
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($siswa as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->nama_siswa);
        $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->kelas);
        $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->tanggalpresensi);
        $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->stempel_presensi);
        $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->out_presensi);

          

          
          // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
          $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);



          
          $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(45); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom B
  

        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Rekap Presensi");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Rekap Presensi Siswa.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }






      public function exportpresenguru(){
      $this->load->model('Exportabsenguru');
      // Load plugin PHPExcel nya
      include APPPATH.'third_party/PHPExcel/PHPExcel.php';
      
      // Panggil class PHPExcel nya
      $excel = new PHPExcel();
      // Settingan awal fil excel
      $excel->getProperties()->setCreator('Hainur Cahya Utama')
                    ->setLastModifiedBy('Hainur Cahya Utama')
                    ->setTitle("Data Presensi Guru")
                    ->setSubject("Guru")
                    ->setDescription("Laporan Presensi Guru")
                    ->setKeywords("Data Guru");
      // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
      $style_col = array(
          'font' => array('bold' => true), // Set font nya jadi bold
          'alignment'  => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
          'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders'  => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );

      // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
      $style_row      = array(
          'alignment' => array(
          'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
          'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
          'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
          'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
          'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
      );
  
      // Buat header tabel nya pada baris ke 3
      $excel->setActiveSheetIndex(0)->setCellValue('A1', "Nama Guru"); // Set kolom A3 dengan tulisan "NO"
      $excel->setActiveSheetIndex(0)->setCellValue('B1', "Hari");
      $excel->setActiveSheetIndex(0)->setCellValue('C1', "Tanggal Presensi");
      $excel->setActiveSheetIndex(0)->setCellValue('D1', "Masuk");
      $excel->setActiveSheetIndex(0)->setCellValue('E1', "Pulang");
      // Apply style header yang telah kita buat tadi ke masing-masing kolom header
      $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
      $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
      // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
      $siswa = $this->Exportabsenguru->view();
      $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
      foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->nama_guru);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->id_hari);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->tanggalpresensi);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->stempel_presensi);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->out_presensi);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $numrow++; // Tambah 1 setiap kali looping
      }
      // Set width kolom
      $excel->getActiveSheet()->getColumnDimension('A')->setWidth(45); // Set width kolom A
      $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); // Set width kolom B
      $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom C
      $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
      $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom D

      // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
      $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
      // Set orientasi kertas jadi LANDSCAPE
      $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
      // Set judul file excel nya
      $excel->getActiveSheet(0)->setTitle("Rekap Presensi");
      $excel->setActiveSheetIndex(0);
      // Proses file excel
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="Rekap Presensi Guru.xlsx"'); // Set nama file excel nya
      header('Cache-Control: max-age=0');
      $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
      $write->save('php://output');
    }


// CETAK SURAT KETERANGAN AKTIF SISWA ---------------------------------------------------------------------
public function print_suratketeranganaktifsiswa()
{
    $this->load->model('m_master');
    $this->load->model('m_beranda');
    $this->load->library('tcpdf_gen');
    $pdf = new TCPDF('P', 'pt', ['format' => 'A4', 'Rotate' => 260]);
    $pdf->SetTitle('KETERANGAN AKTIF SISWA');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->addPage();
    $id_siswa     = $this->uri->segment(3);
    $id_user      = $this->uri->segment(3);
    $data = array(
      'data_profil'     => $this->m_beranda->get_profil()->result(),
      'dataprofil'      => $this->m_master->get_profil()->result(),
      'row'             => $this->m_master->get_cetaksuratketeranganaktifsiswa($id_siswa)->result(),
      'datasiswa'       => $this->m_master->get_datasiswa($id_user)->result(), 
    );
    $html = $this->load->view('cetak/print_suratketeranganaktifsiswa', $data, true);
    $pdf->writeHtml($html, true, false, true, false, '');    
    $pdf->lastPage();
    $pdf->output();
}


  public function cetak_buku()
  {
      $this->load->model('m_master');
      $this->load->model('m_beranda');
      $this->load->library('tcpdf_gen');
      $pdf = new TCPDF('L', 'pt', ['format' => 'A3', 'Rotate' => 260]);
      $pdf->SetTitle("Lampiran Buku Induk");
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $id_pendaftar = $this->uri->segment(3);
      $data = array(
        'row'                    => $this->m_master->get_cetakpinpendaftaran($id_pendaftar),
        'data_nilaisemester1'    => $this->m_master->get_cetakrapor1($id_pendaftar)->result(),
        'datarapormapela'        => $this->m_master->get_dataraporsmt1a($id_pendaftar)->result(),
        'datarapormapelb'        => $this->m_master->get_dataraporsmt1b($id_pendaftar)->result(),
        'datarapormapelc'        => $this->m_master->get_dataraporsmt1c($id_pendaftar)->result(),
        'datarapormapel2a'       => $this->m_master->get_dataraporsmt2a($id_pendaftar)->result(),
        'datarapormapel2b'       => $this->m_master->get_dataraporsmt2b($id_pendaftar)->result(),
        'datarapormapel2c'       => $this->m_master->get_dataraporsmt2c($id_pendaftar)->result(),
        'datarapormapel3a'       => $this->m_master->get_dataraporsmt3a($id_pendaftar)->result(),
        'datarapormapel3b'       => $this->m_master->get_dataraporsmt3b($id_pendaftar)->result(),
        'datarapormapel3c'       => $this->m_master->get_dataraporsmt3c($id_pendaftar)->result(),
        'datarapormapel4a'       => $this->m_master->get_dataraporsmt4a($id_pendaftar)->result(),
        'datarapormapel4b'       => $this->m_master->get_dataraporsmt4b($id_pendaftar)->result(),
        'datarapormapel4c'       => $this->m_master->get_dataraporsmt4c($id_pendaftar)->result(),
        'datarapormapel5a'       => $this->m_master->get_dataraporsmt5a($id_pendaftar)->result(),
        'datarapormapel5b'       => $this->m_master->get_dataraporsmt5b($id_pendaftar)->result(),
        'datarapormapel5c'       => $this->m_master->get_dataraporsmt5c($id_pendaftar)->result(),
        'datarapormapel6a'       => $this->m_master->get_dataraporsmt6a($id_pendaftar)->result(),
        'datarapormapel6b'       => $this->m_master->get_dataraporsmt6b($id_pendaftar)->result(),
        'datarapormapel6c'       => $this->m_master->get_dataraporsmt6c($id_pendaftar)->result(),
        'dataraporekstra'        => $this->m_master->get_dataraporekstra1($id_pendaftar)->result(),
        'data_profil'            => $this->m_beranda->get_profil()->result()
      );

      $html  = $this->load->view('cetak/print_bukuinduk', $data, true);
      $html2 = $this->load->view('cetak/print_bukuinduknilai', $data, true);
      $pdf->writeHtml($html, true, false, true, false, '');    
      
      $pdf->addPage();
      $pdf->lastPage();
      $pdf->writeHtml($html2, true, false, true, false, '');   
      $pdf->output();
  }



  public function cetak_rapor1()
  {
      $this->load->model('m_master');
      $this->load->model('m_beranda');
      $this->load->library('tcpdf_gen');
      $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
      $pdf->SetTitle('Rapor');
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $id_pendaftar = $this->uri->segment(3);
      $id_user      = $this->uri->segment(3);
      $data = array(
        'data_profil'      => $this->m_beranda->get_profil()->result(),
        'row'              => $this->m_master->get_cetakrapor1($id_pendaftar)->result(),
        'datarapormapela'  => $this->m_master->get_dataraporsmt1a($id_user)->result(),
        'datarapormapelb'  => $this->m_master->get_dataraporsmt1b($id_user)->result(),
        'datarapormapelc'  => $this->m_master->get_dataraporsmt1c($id_user)->result(),
        'dataraporekstra'  => $this->m_master->get_dataraporekstra1($id_user)->result(),
        'datasiswa'        => $this->m_master->get_dataraporsiswasmt1($id_user)->result(), 
      );
      $html = $this->load->view('cetak/rapor', $data, true);
      $pdf->writeHtml($html, true, false, true, false, '');    
      $pdf->lastPage();
      $pdf->output();
  }

  public function cetak_rapor2()
  {
      $this->load->model('m_master');
      $this->load->model('m_beranda');
      $this->load->library('tcpdf_gen');
      $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
      $pdf->SetTitle('Rapor');
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $id_pendaftar = $this->uri->segment(3);
      $id_user      = $this->uri->segment(3);
      $data = array(
        'data_profil'     => $this->m_beranda->get_profil()->result(),
        'row'             => $this->m_master->get_cetakrapor2($id_pendaftar)->result(),
        'datarapormapela'  => $this->m_master->get_dataraporsmt2a($id_user)->result(),
        'datarapormapelb'  => $this->m_master->get_dataraporsmt2b($id_user)->result(),
        'datarapormapelc'  => $this->m_master->get_dataraporsmt2c($id_user)->result(),
        'dataraporekstra'  => $this->m_master->get_dataraporekstra1($id_user)->result(),
        'datasiswa'       => $this->m_master->get_dataraporsiswasmt2($id_user)->result(), 
      );
      $html = $this->load->view('cetak/rapor', $data, true);
      $pdf->writeHtml($html, true, false, true, false, '');    
      $pdf->lastPage();
      $pdf->output();
  }

  public function cetak_rapor3()
  {
      $this->load->model('m_master');
      $this->load->model('m_beranda');
      $this->load->library('tcpdf_gen');
      $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
      $pdf->SetTitle('Rapor');
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $id_pendaftar = $this->uri->segment(3);
      $id_user      = $this->uri->segment(3);
      $data = array(
        'data_profil'     => $this->m_beranda->get_profil()->result(),
        'row'             => $this->m_master->get_cetakrapor3($id_pendaftar)->result(),
        'datarapormapela'  => $this->m_master->get_dataraporsmt3a($id_user)->result(),
        'datarapormapelb'  => $this->m_master->get_dataraporsmt3b($id_user)->result(),
        'datarapormapelc'  => $this->m_master->get_dataraporsmt3c($id_user)->result(),
        'dataraporekstra'  => $this->m_master->get_dataraporekstra1($id_user)->result(),
        'datasiswa'       => $this->m_master->get_dataraporsiswasmt3($id_user)->result(), 
      );
      $html = $this->load->view('cetak/rapor', $data, true);
      $pdf->writeHtml($html, true, false, true, false, '');    
      $pdf->lastPage();
      $pdf->output();
  }

  public function cetak_rapor4()
  {
      $this->load->model('m_master');
      $this->load->model('m_beranda');
      $this->load->library('tcpdf_gen');
      $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
      $pdf->SetTitle('Rapor');
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $id_pendaftar = $this->uri->segment(3);
      $id_user      = $this->uri->segment(3);
      $data = array(
        'data_profil'     => $this->m_beranda->get_profil()->result(),
        'row'             => $this->m_master->get_cetakrapor4($id_pendaftar)->result(),
        'datarapormapela'  => $this->m_master->get_dataraporsmt4a($id_user)->result(),
        'datarapormapelb'  => $this->m_master->get_dataraporsmt4b($id_user)->result(),
        'datarapormapelc'  => $this->m_master->get_dataraporsmt4c($id_user)->result(),
        'dataraporekstra'  => $this->m_master->get_dataraporekstra1($id_user)->result(),
        'datasiswa'       => $this->m_master->get_dataraporsiswasmt4($id_user)->result(), 
      );
      $html = $this->load->view('cetak/rapor', $data, true);
      $pdf->writeHtml($html, true, false, true, false, '');    
      $pdf->lastPage();
      $pdf->output();
  }

  public function cetak_rapor5()
  {
      $this->load->model('m_master');
      $this->load->model('m_beranda');
      $this->load->library('tcpdf_gen');
      $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
      $pdf->SetTitle('Rapor');
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $id_pendaftar = $this->uri->segment(3);
      $id_user      = $this->uri->segment(3);
      $data = array(
        'data_profil'     => $this->m_beranda->get_profil()->result(),
        'row'             => $this->m_master->get_cetakrapor5($id_pendaftar)->result(),
        'datarapormapela'  => $this->m_master->get_dataraporsmt5a($id_user)->result(),
        'datarapormapelb'  => $this->m_master->get_dataraporsmt5b($id_user)->result(),
        'datarapormapelc'  => $this->m_master->get_dataraporsmt5c($id_user)->result(),
        'dataraporekstra'  => $this->m_master->get_dataraporekstra1($id_user)->result(),
        'datasiswa'       => $this->m_master->get_dataraporsiswasmt5($id_user)->result(), 
      );
      $html = $this->load->view('cetak/rapor', $data, true);
      $pdf->writeHtml($html, true, false, true, false, '');    
      $pdf->lastPage();
      $pdf->output();
  }

  public function cetak_rapor6()
  {
      $this->load->model('m_master');
      $this->load->model('m_beranda');
      $this->load->library('tcpdf_gen');
      $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
      $pdf->SetTitle('Rapor');
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $id_pendaftar = $this->uri->segment(3);
      $id_user      = $this->uri->segment(3);
      $data = array(
        'data_profil'     => $this->m_beranda->get_profil()->result(),
        'row'             => $this->m_master->get_cetakrapor6($id_pendaftar)->result(),
        'datarapormapela'  => $this->m_master->get_dataraporsmt6a($id_user)->result(),
        'datarapormapelb'  => $this->m_master->get_dataraporsmt6b($id_user)->result(),
        'datarapormapelc'  => $this->m_master->get_dataraporsmt6c($id_user)->result(),
        'dataraporekstra'  => $this->m_master->get_dataraporekstra1($id_user)->result(),
        'datasiswa'       => $this->m_master->get_dataraporsiswasmt6($id_user)->result(), 
      );
      $html = $this->load->view('cetak/rapor', $data, true);
      $pdf->writeHtml($html, true, false, true, false, '');    
      $pdf->lastPage();
      $pdf->output();
  }




    public function videopembelajaran()
    {
        $this->load->model('m_master');
        $data        = array(
        'setting'     => $this->m_master->setup()->result(),
        'dataprofil'  => $this->m_master->get_profil()->result(),
        'datavideo'   => $this->m_master->get_datavideo()->result(),
        'datatema'    => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
        'datakelas'   => $this->m_master->get_datakelas()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/datavideo', $data);
        $this->load->view('_partials/footer');
    }

  public function simpanvideo()
  {
    $this->load->model('m_master');
    {
    $data['nama_video']  = $this->input->post('nama_video');
    $data['kategori']   = $this->input->post('kategori');
    $data['kelas_video'] = $this->input->post('kelas_video');
    $data['file_video']  = $this->input->post('file_video');
    $this->load->view('admin/datavideo', $data);
    }
    $this->m_master->simpan_video($data);
    redirect('master/videopembelajaran');
  }

    // UPDATE VIDEO ---------------------------------------------------------------------
    public function updatevideo()
    {
        $this->load->model('m_master');
        $id_video['id_video']   = $this->input->post("id_video");
        $nama_video             = $this->input->post('nama_video');
        $kelas_video            = $this->input->post('kelas_video');
        $file_video             = $this->input->post('file_video');
        $kategori               = $this->input->post('kategori');
        $data                 = array(
        'nama_video'   =>$nama_video,
        'kelas_video'  =>$kelas_video,
        'file_video'   =>$file_video,
        'kategori'     =>$kategori,
        );
        $this->m_master->update_video($data, $id_video);
        redirect('master/videopembelajaran');
    }

  public function hapusvideo($id_video)
  {
    $this->load->model('m_master');
    $id['id_video'] = $this->uri->segment(3);
    $this->m_master->hapus_video($id);
    redirect('master/videopembelajaran');
  }








  public function databuku()
  {
    $this->load->model('m_master');
    $data        = array(
    'setting'     => $this->m_master->setup()->result(),
    'dataprofil'  => $this->m_master->get_profil()->result(),
    'databuku'    => $this->m_master->get_databuku()->result(),
    'datatema'    => $this->m_pengaturan->get_tema()->result(),
    'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
    'datakelas'   => $this->m_master->get_datakelas()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu.php', $data);
    $this->load->view('admin/databuku', $data);
    $this->load->view('_partials/footer');
  }

     
  public function simpanbuku()
  {
      $this->load->model('m_master');
      {
          
      // upload File Buku 
      $ses                        = $this->session->userdata('user_id');
      $config['upload_path']      = './file/filebuku/'; 
      $config['allowed_types']    = 'pdf'; 
      $now = date('d-m-Y-H-i-s').-($ses. $date); 
      $config['file_name']        = $now. '.pdf'; 


      $this->load->library('upload', $config); 
      $this->upload->initialize($config); 
      if ( ! $this->upload->do_upload('file_buku')) { 
        $error = array('error' => $this->upload->display_errors()); 
        print_r($error); 
      } else { 
        $data = array('upload_data' => $this->upload->data()); 
      } 

      // upload File Cover Buku 
      $ses                         = $this->session->userdata('user_id');
      $config2['upload_path']      = './file/filecoverbuku/'; 
      $config2['allowed_types']    = 'jpg|png|jpeg'; 
      $now = date('d-m-Y-H-i-s').-($ses. $date); 
      $config2['file_name']        = $now. '.jpg'; 


      $this->load->library('upload', $config2); 
      $this->upload->initialize($config2); 
      if ( ! $this->upload->do_upload('foto_buku')) { 
        $error = array('error' => $this->upload->display_errors()); 
        print_r($error); 
      } else { 
        $data = array('upload_data' => $this->upload->data()); 
      } 
      
      $pet  = $config['file_name'];
      $pet2  = $config2['file_name'];
      // print_r($pet); 
      // exit;
      //end upload file area 
        $data = [ 
        "nama_buku"        => $this->input->post('nama_buku'), 
        "kategori"         => $this->input->post('kategori'), 
        "kelas_buku"       => $this->input->post('kelas_buku'), 
        "file_buku"        => $pet,
        "foto_buku"        => $pet2
        
        ]; 
        $this->m_master->simpan_buku($data); 
        redirect('master/databuku'); 
        } 
          
  }

  public function hapusbuku($id_buku)
  {
    $this->load->model('m_master');
    $id['id_buku'] = $this->uri->segment(3);
    $this->m_master->hapus_buku($id);
    redirect('master/databuku');
  }



    // UPDATE Buku ---------------------------------------------------------------------
    public function updatebuku()
    {
        $this->load->model('m_master');
        $id_buku['id_buku']    = $this->input->post("id_buku");
        $nama_buku             = $this->input->post('nama_buku');
        $kelas_buku            = $this->input->post('kelas_buku');
        $kategori              = $this->input->post('kategori');
        $data                  = array(
        'nama_buku'      =>$nama_buku,
        'kelas_buku'     =>$kelas_buku,
        'kategori'       =>$kategori,
        );
        $this->m_master->update_buku($data, $id_buku);
        redirect('master/databuku');
    }







  
  public function logout()
  {  
      $this->session->sess_destroy();
      redirect('login');
  }



  


}
