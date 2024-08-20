<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginperpustakaan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load Helper for Form
        $this->load->helper('url', 'form'); 
        //load library form validasi
        $this->load->library('form_validation');
        //load model perpustakaan
        $this->load->model('perpustakaan');
        $this->load->model('m_beranda');
    }



    public function index()
    {
        $data = array(
            'data_profil' => $this->m_beranda->get_profil()->result()
        );
        if($this->perpustakaan->is_logged_in())
        {
            
            //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
            redirect("perpustakaan/dashboard");

        }else{

            //jika session belum terdaftar
            //set form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            //set message form validation
            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px"><p class="kartumerah"><b> {field}</b> harus diisi</div></p>');

            //cek validasi
            if ($this->form_validation->run() == TRUE) {

            //get data dari FORM
            $username = $this->input->post("username", TRUE);
            $password = MD5($this->input->post('password', TRUE));

            //checking data via model
            $checking = $this->perpustakaan->check_login('tbl_users', array('username' => $username), array('password' => $password));

            //jika ditemukan, maka create session
            if ($checking != FALSE) {
                foreach ($checking as $apps) {

                    $session_data = array(
                        'user_id'       => $apps->id_user,
                        'user_name'     => $apps->username,
                        'user_pass'     => $apps->password,
                        'user_nama'     => $apps->nama_user,
                        'user_email'    => $apps->email,
                        'user_sekolah'  => $apps->instansi,
                        'user_npsn'     => $apps->npsn,
                        'user_alamat'   => $apps->alamat,
                        'role'          => $apps->role
                        );
                    $this->session->set_userdata($session_data);
                
                    //fugnsi pencatatan Log User Login
                    $log['username'] = $session_data['user_nama'];
                    $log['ipaddress'] = $_SERVER['REMOTE_ADDR'];
                    $log['hak_akses'] = $session_data['role'];
                    $this->db->insert("log_login",$log);
                        
                    //redirect berdasarkan level user
                    if($this->session->userdata("role") == "perpustakaan"){
                        redirect('perpustakaan/dashboard/');

                    }elseif  ( $this->session->userdata("role") == "bk"){ redirect('bk/dashboard/');
                    }else{
                        redirect('perpustakaan/dashboard/');
                    }

                }
            }else{
                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px"><p class="kartumerah"><b><i class="fa fa-exclamation-circle"></i> </b> <strong>username atau password salah !</strong></div></p>';
                    $this->load->view('perpustakaan/beranda', $data);
                }

            }else{
                    $this->load->view('perpustakaan/beranda',  $data);
            }

        }
        

        

    }
    

 
    
}