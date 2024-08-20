<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('bk');
        //cek session dan level user
        if($this->admin->is_role() != "user"){
            redirect("loginbk");
        }
    }

    public function index()
    {
     
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu_user');
        $this->load->view("user/dashboard"); 
                $this->load->view('_partials/footer');

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginbk');
    }

}