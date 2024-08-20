<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('kelulusan');
        //cek session dan level user
        if ($this->kelulusan->is_role() != "pengguna") {
            redirect("beranda/kelulusan");
        }
    }

    public function index()
    {
        $this->load->model('Kelulusan');
        $data = array(
            'setting'          => $this->kelulusan->setup()->result(),
            'data_pendaftar'   => $this->kelulusan->get_pendaftar()->result(),
            'data_kelulusan'   => $this->kelulusan->get_kelulusan()->result()

        );
        $this->load->model('kelulusan');
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu_kelulusan', $data);
        $this->load->view('kelulusan/123', $data);
        $this->load->view('_partials/footer');
    }


    public function logout()
    {

        $this->session->sess_destroy();
        redirect('beranda/kelulusan');
    }




}
