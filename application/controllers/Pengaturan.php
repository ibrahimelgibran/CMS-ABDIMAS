<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form'); 
        $this->load->library('form_validation');
        $this->load->model('admin');
        if($this->admin->is_role() != "admin"){
            redirect("login");
        }
    }

    // MENU LAYANAN SISWA ---------------------------------------------------------------------
    public function menulayanansiswa()
    {
        $this->load->model('m_pengaturan');
        $data = array(
        'setting'       => $this->m_pengaturan->setup()->result(),
        'dataprofil'    => $this->m_pengaturan->get_profil()->result(),
        'datatema'      => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result(),
        'datamenusiswa' => $this->m_pengaturan->get_menusiswa()->result(),
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu', $data);
        $this->load->view('admin/setting/menu_siswa', $data);
        $this->load->view('_partials/footer');
    }

    // UPDATE MENU LAYANAN SISWA ---------------------------------------------------------------------
    public function updatemenusiswa()
    {
        $this->load->model('m_pengaturan');
        $id_menu['id_menu']   = $this->input->post("id_menu");
        $status            = $this->input->post('status');
        $data                 = array(
        'status' =>$status,
        );
        $this->m_pengaturan->update_menusiswa($data, $id_menu);
        redirect('pengaturan/menulayanansiswa');
    }
  
    
    // TEMA LAYANAN SISWA ---------------------------------------------------------------------
    public function tema()
    {
        $this->load->model('m_pengaturan');
        $data = array(
        'setting'       => $this->m_pengaturan->setup()->result(),
        'dataprofil'    => $this->m_pengaturan->get_profil()->result(),
        'datatema'      => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu', $data);
        $this->load->view('admin/setting/datatema', $data);
        $this->load->view('_partials/footer');
    }

    // UPDATE TEMA ---------------------------------------------------------------------
    public function updatetema()
    {
        $this->load->model('m_pengaturan');
        $id_tema['id_tema']   = $this->input->post("id_tema");
        $style                = $this->input->post('style');
        $data                 = array(
        'style' =>$style,
        );
        $this->m_pengaturan->update_tema($data, $id_tema);
        redirect('pengaturan/tema');
    }

    // BANNER BERANDA ---------------------------------------------------------------------
    public function gambarberanda($id_banner)
    {
        $this->load->model('m_pengaturan');
        $data = array(
        'setting'       => $this->m_pengaturan->setup()->result(),
        'dataprofil'    => $this->m_pengaturan->get_profil()->result(),
        'banner'        => $this->m_pengaturan->edit_pengaturan($id_banner),
        'datatema'      => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu', $data);
        $this->load->view('admin/setting/datagambarbanner', $data);
        $this->load->view('_partials/footer');
    }


    public function updatingprofil_banner()
    {
      $where['id_banner'] = 1;

        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'jpg|png';
        $config['encrypt_name']     = TRUE;
        $config['remove_spaces']    = TRUE;
        $config['max_size']         = '0';
        $config['max_width']        = '0';
        $config['max_height']       = '0';

      $this->load->library('upload', $config);


      if(!empty($_FILES['gambarbanner']['name'])) {
        if($this->upload->do_upload("gambarbanner")) {
          $data	 	= $this->upload->data();
          $in['gambarbanner'] = $data['file_name'];	
          $this->db->update("setting_banner", $in, $where);
          @unlink("./upload/".$this->input->post("logo_lama"));
          $this->session->set_flashdata("success","Update Identitas Sekolah Berhasil");
          redirect("pengaturan/gambarberanda/1");	
        } else {
          $this->session->set_flashdata("error",$this->upload->display_errors());
          redirect("pengaturan/gambarberanda/1");	
        }
      } else {
        $this->db->update("setting_banner", $in, $where);
        $this->session->set_flashdata('pemberitahuan_berhasil','<i class="feather icon-check-circle mr-2"></i> Data Lembaga Berhasil Diperbaharui');
        redirect("pengaturan/gambarberanda/1");
      }
    
    }

}
