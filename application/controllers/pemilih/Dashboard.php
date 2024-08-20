<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model Pemilih
        $this->load->model('pemilih');
        //cek session dan level user
        if($this->pemilih->is_role() != "pemilih"){
            redirect("loginpemilih");
        }
    }

    public function index()
    {
        $this->load->model('pemilih');
        $data = array(
          'setting'         => $this->pemilih->setup()->result(),
          'dataprofil'      => $this->pemilih->get_profil()->result(),
          'datacalonosis'   => $this->pemilih->get_calonosis()->result(),
          'data_profil'     => $this->pemilih->get_profil()->result()
        );
        $data['log_login'] = $this->db->query("SELECT * FROM log_login ORDER BY id DESC LIMIT 13");
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu_pemilih', $data);
        $this->load->view('pemilih/dashboard', $data);       
        $this->load->view('_partials/footer');
    }
    






    public function simpanvote()
	{
		$this->form_validation->set_rules('vote', 'Vote','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('id_pemilih', 'Anda','trim|required|is_unique[vote_pemilihan.id_pemilih]');
		if ($this->form_validation->run()==true)
	   	{
			$vote                   = $this->input->post('vote');
			$id_pemilih 			= $this->input->post('id_pemilih');
			$this->pemilih->simpan_vote($vote,$id_pemilih);
			$this->session->set_flashdata('success_register','<div class="alert alert-info" style="margin-top: 3px">
			<p class="text-black"><b><i class="fa fa-exclamation-circle"></i> </b> <strong>Anda telah berhasil memilih pasangan calon</strong></div></p>');
			redirect('pemilih/dashboard');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('pemilih/dashboard');
		}
	}




    public function simpanvote2()
    {
        $this->load->model('pemilih');
        {
            
        $data['id_pemilih']   = $this->input->post('id_pemilih');
        $data['vote']         = $this->input->post('vote');
        $this->load->view('pemilih/dashboard',$data);
        }
        $this->pemilih->simpan_vote($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Anda Berhasil Memilih Pasangan Calon');
        redirect('pemilih/dashboard');
    } 



    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('beranda');
    }
    
  



}