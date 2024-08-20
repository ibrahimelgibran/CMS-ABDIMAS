<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model resepsionis
        $this->load->model('resepsionis');
        //cek session dan level user
        if($this->resepsionis->is_role() != "resepsionis"){
            redirect("loginresepsionis");
        }
    }

    public function index()
    {
        $this->load->model('resepsionis');
        $data = array(
          'setting'     => $this->resepsionis->setup()->result(),
          'dataprofil'  => $this->resepsionis->get_profil()->result(),
          'data_profil' => $this->resepsionis->get_profil()->result()
        );
        $data['log_login'] = $this->db->query("SELECT * FROM log_login ORDER BY id DESC LIMIT 13");
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menuresepsionis', $data);
        $this->load->view('resepsionis/dashboard', $data);       
        $this->load->view('_partials/footer');
    }
    

    public function dataresepsionis()
    {
        $this->load->model('resepsionis');
        $data = array(
            'setting'    => $this->resepsionis->setup()->result(),
            'dataprofil'  => $this->resepsionis->get_profil()->result(),
            'datatamu'   => $this->resepsionis->get_datatamu()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menuresepsionis', $data);
        $this->load->view('resepsionis/datatamu', $data);
        $this->load->view('_partials/footer');
    }

   

    public function simpantamu()
    {
       $this->load->model('resepsionis');
       {
        $data['nama']           = $this->input->post('nama');
        $data['alamat']         = $this->input->post('alamat');
        $data['pekerjaan']      = $this->input->post('pekerjaan');
        $data['tujuan']         = $this->input->post('tujuan');
        $data['tanggal']        = $this->input->post('tanggal');
        $data['jam']            = $this->input->post('jam');
    
       $this->load->view('resepsionis/dashboard',$data);
       }
       $this->resepsionis->simpan_tamu($data);
       redirect('resepsionis/dashboard/dataresepsionis');
    } 

    public function hapustamu($id_tamu)
    {
      $this->load->model('resepsionis');
    
       $id['id_tamu'] = $this->uri->segment(4);
       $this->resepsionis->hapus_tamu($id);
       redirect('resepsionis/dashboard/dataresepsionis');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginresepsionis');
    }
    
  



}
