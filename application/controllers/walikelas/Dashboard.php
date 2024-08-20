<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('walikelas');
        //cek session dan level user
        if($this->walikelas->is_role() != "walikelas"){
        redirect("loginwalikelas");
        }
    }

    public function index()
    {
        $this->load->model('Walikelas');
        $data = array(
            'data_profil'    => $this->Walikelas->get_profil()->result(),
            'data_walikelas' => $this->Walikelas->get_datawalikelas()->result()
        );
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu_walikelas', $data);
        $this->load->view('walikelas/dashboard', $data);       
        $this->load->view('_partials/footer');
    }


    //Data Rombel
    public function datarombel()

    {
        $this->load->model('Walikelas');
        $data = array(
            'data_rombel'    => $this->Walikelas->get_rombel()->result(),
            'data_walikelas' => $this->Walikelas->get_datawalikelas()->result()
        );
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu_walikelas', $data);
        $this->load->view('walikelas/datasiswa', $data);       
        $this->load->view('_partials/footer');
    }

    // EDIT SISWA ---------------------------------------------------------------------
    public function editsiswa($id_pendaftar)
    {
        $this->load->model('Walikelas');
        $id_pendaftar = $this->uri->segment(4);
        $data         = array(
        'data_walikelas' => $this->walikelas->get_datawalikelas()->result(),
        'setting'        => $this->walikelas->setup()->result(),
        'data_siswa'     => $this->walikelas->edit_siswa($id_pendaftar)

        );
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu_walikelas', $data);
        $this->load->view('walikelas/editsiswa', $data);  
        $this->load->view('_partials/footer');
    }

    //Logout Session
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginwalikelas');
    }
    



}

