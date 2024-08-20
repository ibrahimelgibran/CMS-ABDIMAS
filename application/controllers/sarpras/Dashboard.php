<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model Sarpras
        $this->load->model('sarpras');
        //cek session dan level user
        if($this->sarpras->is_role() != "sarpras"){
            redirect("loginsarpras");
        }
    }

    public function index()
    {
        $this->load->model('Sarpras');
        $data = array(
          'setting'     => $this->Sarpras->setup()->result(),
          'dataprofil'  => $this->Sarpras->get_profil()->result(),
          'data_profil' => $this->Sarpras->get_profil()->result()
        );
        $data['log_login'] = $this->db->query("SELECT * FROM log_login ORDER BY id DESC LIMIT 13");
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_sarpras', $data);
        $this->load->view('sarpras/dashboard', $data);       
        $this->load->view('_partials/footer');
    }
    
    public function kategorisarpras()
    {
        $this->load->model('Sarpras');
        $data = array(
            'setting'             => $this->Sarpras->setup()->result(),
            'dataprofil' => $this->Sarpras->get_profil()->result(),
            'datakategorisarpras' => $this->Sarpras->get_datakategorisarpras()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_sarpras', $data);
        $this->load->view('sarpras/datakategorisarpras', $data);
        $this->load->view('_partials/footer');
    }

    public function simpankategorisarpras()
    {
       $this->load->model('sarpras');
       {
        $data['nama_kategorisarpras']   = $this->input->post('nama_kategorisarpras');
    
       $this->load->view('sarpras/dashboard',$data);
       }
       $this->sarpras->simpan_kategorisarpras($data);
       redirect('sarpras/dashboard/kategorisarpras');
    } 

    public function hapuskategorisarpras($id_kategorisarpras)
    {
      $this->load->model('sarpras');
    
       $id['id_kategorisarpras'] = $this->uri->segment(4);
       $this->sarpras->hapus_kategorisarpras($id);
       redirect('sarpras/dashboard/kategorisarpras');
    }

    public function datasarpras()
    {
        $this->load->model('Sarpras');
        $data = array(
            'setting'             => $this->Sarpras->setup()->result(),
            'dataprofil'          => $this->Sarpras->get_profil()->result(),
            'datasarpras'         => $this->Sarpras->get_datasarpras()->result(),
            'datakategorisarpras' => $this->Sarpras->get_datakategorisarpras()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_sarpras', $data);
        $this->load->view('sarpras/datasarpras', $data);
        $this->load->view('_partials/footer');
    }


    public function simpansarpras()
    {
       $this->load->model('sarpras');
       {
        $data['nama_sarpras']           = $this->input->post('nama_sarpras');
        $data['kodebarang']             = $this->input->post('kodebarang');
        $data['kode_kategorisarpras']   = $this->input->post('kode_kategorisarpras');
        $data['sumberdana']             = $this->input->post('sumberdana');
        $data['jumlah']                 = $this->input->post('jumlah');
        $data['satuan']                 = $this->input->post('satuan');
        $data['tempat']                 = $this->input->post('tempat');
        $data['tahun']                 = $this->input->post('tahun');
    
       $this->load->view('sarpras/dashboard',$data);
       }
       $this->sarpras->simpan_sarpras($data);
       redirect('sarpras/dashboard/datasarpras');
    } 

    public function hapussarpras($id_sarpras)
    {
      $this->load->model('sarpras');
    
       $id['id_sarpras'] = $this->uri->segment(4);
       $this->sarpras->hapus_sarpras($id);
       redirect('sarpras/dashboard/datasarpras');
    }
    

    public function hapussemuasarpras()
    {
        $this->load->model('sarpras');
        $this->sarpras->hapus_semuasarpras();
        echo 'Deleted successfully.';
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
        redirect('sarpras/dashboard/datasarpras');
    }



    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginsarpras');
    }
    
  



}