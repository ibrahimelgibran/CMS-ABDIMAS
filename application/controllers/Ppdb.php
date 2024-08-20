<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->model('m_master');
        $this->load->model('m_beranda');
	}

    public function index()
    {
        $this->load->model('m_beranda');
        $data = array(
            'setting'           => $this->m_beranda->setup()->result(),
            'data_profil'       => $this->m_beranda->get_profil()->result(),
            'data_profilppdb'   => $this->m_beranda->get_profilppdb()->result(),
            'data_jalurppdb'   => $this->m_beranda->get_datajalurppdb()->result(),
        );
        $this->load->view('ppdb/dashboard', $data);
    }


    //PORTAL PMPA
    public function pmpa()
    {
        $this->load->model('m_beranda');
        $data = array(
            'setting'           => $this->m_beranda->setup()->result(),
            'data_profil'       => $this->m_beranda->get_profil()->result(),
            'data_profilppdb'   => $this->m_beranda->get_profilppdb()->result(),
            'data_ketentuanppdb'   => $this->m_beranda->get_dataketentuanppdb()->result(),
        );
        $this->load->view('ppdb/pmpa', $data);
    }




}



