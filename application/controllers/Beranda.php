<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->model('m_master');
        $this->load->model('m_beranda');
        $this->load->library("pagination");
	}

    public function index()
    {
        $this->load->model('m_beranda');
        $jumlah_data = $this->m_beranda->jumlah_data();
        $this->load->library('pagination');
         //$config['base_url'] = 'beranda/index/';
        $config['base_url'] = base_url().('beranda/smartbook/index'); //site url
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 3;
        $config['per_pagebuku'] = 3;
         // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);	
        $data = array(
            'datamenusiswa'  => $this->m_beranda->get_menusiswa()->result(),
            'setting'        => $this->m_beranda->setup()->result(),
            'data_profil'    => $this->m_beranda->get_profil()->result(),
            'banner'          => $this->m_beranda->get_banner()->result(),
            'jumlahkelamin'  => $this->m_beranda->jumlahkelamin()->result(),
            'jumlahsarpras'  => $this->m_beranda->jumlahsarpras()->result(),
            'transportasi'   => $this->m_beranda->transportasi()->result(),
            'dataalumni'     => $this->m_master->get_alumni()->result(),
            'dataguru'       => $this->m_master->get_dataguru()->result(),
            'video'          => $this->m_beranda->datavideopembelajaran($config['per_page'],$from),
            'buku'           => $this->m_beranda->databuku($config['per_pagebuku'],$from)
        );
        $this->load->view('beranda', $data);
    }

    //PORTAL KELULUSAN
    public function kelulusan()
    {
        $this->load->model('m_beranda');
        $data = array(
            'setting'        => $this->m_beranda->setup()->result(),
            'data_profil'    => $this->m_beranda->get_profil()->result(),
        );
        if($this->m_beranda->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("kelulusan/dashboard");

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
                $checking = $this->m_beranda->check_login('pendaftar', array('username' => $username), array('password' => $password));
                

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'user_id'       => $apps->id_pendaftar,
                            'user_username' => $apps->username,
                            'user_pass'     => $apps->password,
                            'user_nama'     => $apps->nama_lengkap,
                            'user_kelas'    => $apps->siswa_kelas,
                            'user_nomorabsen'    => $apps->siswa_nomorabsen,
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
                        if($this->session->userdata("role") == "pengguna"){
                            redirect('kelulusan/dashboard/');
                        }else{
                            redirect('user/dashboard/');
                        }
                        

                    }
                }else
                

                {

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <p class="kartumerah"><b><i class="fa fa-exclamation-circle"></i> </b> <strong>username atau password salah !</strong></div></p>';

                  
                       
                        
         
                        $this->load->view('kelulusan/login', $data);
                }

            }else{
        $this->load->view('kelulusan/login', $data);
    }

}
}



    //PORTAL PERPUSTAKAAN
    public function perpustakaan()
    {
        $this->load->model('m_beranda');
        $data = array(
            'setting'        => $this->m_beranda->setup()->result(),
            'data_profil'    => $this->m_beranda->get_profil()->result()
        );
        $this->load->view('perpustakaan/beranda', $data);
    }

    
    //PORTAL ALUMNI
    public function alumni()
    {
        $this->load->model('m_beranda');
        $data = array(
            'setting'        => $this->m_beranda->setup()->result(),
            'data_profil'    => $this->m_beranda->get_profil()->result(),
            'dataalumni'     => $this->m_beranda->get_alumni()->result()
        );
        $this->load->view('alumni/dashboard', $data);
    }

    //PORTAL KUNJUNGAN PERPUSTAKAAN
    public function kunjunganperpustakaan()
    {
        $this->load->model('m_beranda');
        $data = array(
            'setting'        => $this->m_beranda->setup()->result(),
            'data_profil'    => $this->m_beranda->get_profil()->result(),
            'data_siswa'     => $this->m_beranda->get_datasiswa()->result(),

        );
        $this->load->view('perpustakaan/kunjungan', $data);
        $this->load->view('_partials/footer');
    }

    // SIMPAN KUNJUNGAN PERPUSTAKAAN ---------------------------------------------------------------------
    public function simpanpengunjung()
    {
        $this->load->model('m_beranda'); 
        {
        $data['id_pengunjungperpustakaan']          = $this->input->post('id_pengunjungperpustakaan');

        $this->load->view('perpustakaan/kunjungan',$data);
        }

        $this->m_beranda->simpan_pinjamanbuku($data);
        $this->session->set_flashdata('pemberitahuan_berhasil','<i class="feather icon-check-circle mr-2"></i> Data Pengunjung Berhasil Tercatat Pada Sistem Pengunjung Perpustakaan');
        redirect('beranda/kunjunganperpustakaan');
    } 



    //PORTAL BUKU TAMU
    public function bukutamu()
    {
        $this->load->model('m_beranda');
        $data = array(
            'setting'        => $this->m_beranda->setup()->result(),
            'data_profil'    => $this->m_beranda->get_profil()->result(),
            'datatamu'       => $this->m_beranda->get_datatamu()->result()
        );
        $this->load->view('bukutamu/dashboard', $data);
    }



    public function simpantamu()
    {
        $this->load->model('m_beranda');
        {
            $data['nama']           = $this->input->post('nama');
            $data['alamat']         = $this->input->post('alamat');
            $data['pekerjaan']      = $this->input->post('pekerjaan');
            $data['tujuan']         = $this->input->post('tujuan');
            $data['tanggal']        = $this->input->post('tanggal');
            $data['jam']            = $this->input->post('jam');

        $this->load->view('bukutamu/dashboard',$data);
        }
        $this->m_beranda->simpan_tamu($data);
        redirect('beranda/bukutamu');
    } 

    public function simpanalumni()
    {
        $this->load->model('m_beranda');
        {
            $data['nama_alumni']            = $this->input->post('nama_alumni');
            $data['jk']                     = $this->input->post('jk');
            $data['nisn']                   = $this->input->post('nisn');
            $data['temapatlahir']           = $this->input->post('temapatlahir');
            $data['tgl_lahir']              = $this->input->post('tgl_lahir');
            $data['agama']                  = $this->input->post('agama');
            $data['thn_masuk']              = $this->input->post('thn_masuk');
            $data['thn_lulus']              = $this->input->post('thn_lulus');

            $data['namaperusahaan']         = $this->input->post('namaperusahaan');
            $data['bidangusaha']            = $this->input->post('bidangusaha');
            $data['pekerjaan']              = $this->input->post('pekerjaan');
            $data['penghasilan']            = $this->input->post('penghasilan');
            $data['ikatankerja']            = $this->input->post('ikatankerja');
            $data['kompetensi']             = $this->input->post('kompetensi');

            $data['perguruantinggi']        = $this->input->post('perguruantinggi');
            $data['programstudi']           = $this->input->post('programstudi');

            $data['tanggalmasuk']           = $this->input->post('tanggalmasuk');
            $data['keterangan']             = $this->input->post('keterangan');


        $this->load->view('alumni/dashboard',$data);
        }
        $this->m_beranda->simpan_alumni($data);
        redirect('beranda/alumni');
    } 







    //PORTAL SMARTBOOK
    public function smartbook()
    {
        $this->load->database();
        $jumlah_data = $this->m_beranda->jumlah_data();
        $this->load->library('pagination');
        //$config['base_url'] = 'beranda/index/';
        $config['base_url'] = base_url().('beranda/smartbook/index'); //site url
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 2;
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);		
        $data = array(
            'data_profil' => $this->m_beranda->get_profil()->result(),
            'video'        => $this->m_beranda->datavideopembelajaran($config['per_page'],$from)
        );  
        $this->load->view('smartbook', $data);
    }


    public function bukuumum()
    {
        $this->load->database();
        $jumlah_data = $this->m_beranda->jumlah_databuku();
        $this->load->library('pagination');
        //$config['base_url'] = 'beranda/index/';
        $config['base_url'] = base_url().('beranda/bukuumum'); //site url
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 8;
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);		
        $data = array(
            'data_profil' => $this->m_beranda->get_profil()->result(),
            'buku'        => $this->m_beranda->databuku($config['per_page'],$from)
        );
        $this->load->view('buku', $data);
    }



    public function videopembelajaran()
    { 
        $this->load->database();
        $jumlah_data = $this->m_beranda->jumlah_datavideopembelajaran();
        $this->load->library('pagination');
        //$config['base_url'] = 'beranda/index/';
        $config['base_url'] = base_url().('beranda/videopembelajaran/index'); //site url
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 4;
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);		
        $data = array(
            'data_profil'  => $this->m_beranda->get_profil()->result(),
            'video'        => $this->m_beranda->datavideopembelajaran($config['per_page'],$from)
        );
        $this->load->view('videopembelajaran', $data);
    }




}