<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginpemilih extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
        //load Helper for Form
        $this->load->helper('url', 'form'); 
        //load library form validasi
        $this->load->library('form_validation');
        //load model pengguna
        $this->load->model('pemilih');
        $this->load->model('m_beranda');
    }



    public function index()
    {
        $data = array(
            'data_profil'           => $this->m_beranda->get_profil()->result()
            
        );
        
            if($this->pemilih->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("pemilih/dashboard");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'username', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '
                    <div class="alert alert-danger" style="margin-top: 3px">
                    <p class="kartumerah"><b> {field}</b> harus diisi</div></p>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = ($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->pemilih->check_login('pemilihosis', array('username' => $username), array('password' => $password));
                

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'user_id'       => $apps->id_pemilih,
                            'user_username' => $apps->username,
                            'user_pass'     => $apps->password,
                            'user_nama'     => $apps->nama_pemilih,
                            'role'          => $apps->role
                         
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                         //fugnsi pencatatan Log User Login
                        $log['username'] = $session_data['user_nama'];
                        $log['ipaddress'] = $_SERVER['REMOTE_ADDR'];
                        $log['hak_akses'] = $session_data['role'];
                        $this->db->insert("log_login",$log);

                        //redirect berdasarkan level user
                        if($this->session->userdata("role") == "pemilih"){
                            redirect('pemilih/dashboard/');
                        }else{
                            redirect('user/dashboard/');
                        }
                        

                    }
                }else
                

                {

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <p class="kartumerah"><b><i class="fa fa-exclamation-circle"></i> </b> <strong>username atau password salah !</strong></div></p>';

                  
                       
                        
         
                        $this->load->view('loginpemilih', $data);
                }

            }else{

                
                $this->load->view('loginpemilih', $data);
            }

        }

    }
    


  





    


}