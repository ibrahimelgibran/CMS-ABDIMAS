<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginguru extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model pengguna
        $this->load->model('guru');
        $this->load->model('m_beranda');
    }
    
    

    public function index()
    {
        $data = array(
            'data_profil' => $this->m_beranda->get_profil()->result()
        );
    

            if($this->guru->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("guru/dashboard");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = ($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->guru->check_login('guru', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'user_id'   => $apps->id_guru,
                            'user_name' => $apps->username,
                            'user_pass' => $apps->password,
                            'user_nama' => $apps->nama_guru,
                            'user_nip'  => $apps->nip,
                            'user_kelasmengajar'  => $apps->kelasmengajar,
                            'user_mapelmengajar'  => $apps->namamapel,
                            'role'      => $apps->role
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("role") == "guru"){
                            redirect('guru/dashboard/');
                        }else{
                            redirect('guru/dashboard/');
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                    <p class="kartumerah"><b><i class="fa fa-exclamation-circle"></i> </b> <strong>username atau password salah !</strong></div></p>';
                    $this->load->view('loginguru', $data);
                }

            }else{

                $this->load->view('loginguru', $data);
            }

        }

    }
    

 
    
}