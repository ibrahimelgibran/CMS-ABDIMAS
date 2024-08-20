<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapot extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form'); 
        $this->load->model('admin');
        $this->load->model('m_master');
        $this->load->model('m_pengaturan');
        $this->load->model('m_rapot');
        if($this->admin->is_role() != "admin"){
            redirect("login");
        }
    }


    public function settingguru()
    {
        $data        = array(
            'setting'           => $this->m_master->setup()->result(),
            'dataprofil'        => $this->m_master->get_profil()->result(),
            'datatema'          => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
            'datakelas'         => $this->m_rapot->get_datakelas()->result(),
            'datamapel'         => $this->m_rapot->get_datamapel()->result(),
            'dataguru'          => $this->m_rapot->get_dataguru()->result(),
            'datasettingguru'   => $this->m_rapot->get_datasettingguru()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/rapot/pengaturanguru', $data);
        $this->load->view('_partials/footer');
    }

    public function simpansettingguru()
    {
          {
          $data['nip_guru']          = $this->input->post('nip_guru');
          $data['kelas_guru']        = $this->input->post('kelas_guru');
          $data['mapel_guru']        = $this->input->post('mapel_guru');
		      $this->load->view('admin/rapot/pengaturanguru', $data);
	  }
          $this->m_rapot->simpan_settingguru($data);
          $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
          redirect('rapot/settingguru');
    } 

    public function hapussettingguru($id_dataguru)
    {
          $id['id_dataguru'] = $this->uri->segment(3);
          $this->m_rapot->hapus_settingguru($id);
          redirect('rapot/settingguru');
    }



}
