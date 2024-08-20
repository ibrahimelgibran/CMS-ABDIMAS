<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginwalikelas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model pengguna
        $this->load->model('walikelas');
        $this->load->model('m_beranda');
    }
    
    

    public function index()
    {
        $data = array(
            'data_profil' => $this->m_beranda->get_profil()->result()
        );
    

            if($this->walikelas->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("walikelas/dashboard");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('userwali', 'Userwali', 'required');
                $this->form_validation->set_rules('passwali', 'Passwali', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $userwali = $this->input->post("userwali", TRUE);
                $passwali = $this->input->post("passwali", TRUE);

                //checking data via model
                $checking = $this->walikelas->check_login('walikelas', array('userwali' => $userwali), array('passwali' => $passwali));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'user_id'     => $apps->id_walikelas,
                            'user_name'   => $apps->userwali,
                            'user_pass'   => $apps->passwali,
                            'user_nama'   => $apps->nama_walikelas,
                            'user_kelas'  => $apps->kelas,
                            'role'        => $apps->role
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("role") == "walikelas"){
                            redirect('walikelas/dashboard/');
                        }else{
                            redirect('user/dashboard/');
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('loginwalikelas', $data);
                }

            }else{

                $this->load->view('loginwalikelas');
            }

        }

    }
    

 
    
}