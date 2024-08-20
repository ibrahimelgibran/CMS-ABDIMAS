<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model Sarpras
        $this->load->model('perpustakaan');
        //cek session dan level user
        if($this->perpustakaan->is_role() != "perpustakaan"){
            redirect("beranda/perpustakaan");
        }
    }

    public function index()
    {
        $this->load->model('Perpustakaan');
        $data = array(
          'setting'     => $this->perpustakaan->setup()->result(),
          'dataprofil'  => $this->perpustakaan->get_profil()->result(),
          'data_profil' => $this->perpustakaan->get_profil()->result()
        );
        $data['log_login'] = $this->db->query("SELECT * FROM log_login ORDER BY id DESC LIMIT 13");
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menuperpustakaan', $data);
        $this->load->view('perpustakaan/dashboard', $data);       
        $this->load->view('_partials/footer');
    }

    // DATA BUKU ---------------------------------------------------------------------
    public function databuku()
    {
        $this->load->model('Perpustakaan');
        $data        = array(
        'setting'           => $this->perpustakaan->setup()->result(),
        'dataprofil'  => $this->perpustakaan->get_profil()->result(),
        'data_profil'       => $this->perpustakaan->get_profil()->result(),
        'totalbuku'         => $this->perpustakaan->get_totalbuku(),
        'totaleksemplar'    => $this->perpustakaan->get_totaleksemplar(),
        'data_buku'         => $this->perpustakaan->get_databuku()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menuperpustakaan', $data);
        $this->load->view('perpustakaan/databuku', $data);
        $this->load->view('_partials/footer');
    }
    
    // DATA SISWA PEMINJAMAN BUKU ---------------------------------------------------------------------
    public function pinjambuku()
    {
        $this->load->model('Perpustakaan');
        $data        = array(
        'setting'           => $this->perpustakaan->setup()->result(),
        'dataprofil'        => $this->perpustakaan->get_profil()->result(),
        'data_profil'       => $this->perpustakaan->get_profil()->result(),
        'data_pinjambuku'   => $this->perpustakaan->get_pinjambuku()->result(),
        'datasiswa'         => $this->perpustakaan->get_datasiswa()->result(),
        'data_buku'         => $this->perpustakaan->get_databuku()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menuperpustakaan', $data);
        $this->load->view('perpustakaan/pinjambuku', $data);
        $this->load->view('_partials/footer');
    }

    // SIMPAN BUKU ---------------------------------------------------------------------
    public function simpanbuku()
    {
        $this->load->model('perpustakaan'); 
        {
        $data['judulbuku']          = $this->input->post('judulbuku');
        $data['jumlahbuku']         = $this->input->post('jumlahbuku');
        $data['pengarang']          = $this->input->post('pengarang');
        $data['penerbit']           = $this->input->post('penerbit');
        $data['tahunterbit']        = $this->input->post('tahunterbit');
        $data['isbn']               = $this->input->post('isbn');
        $data['jumlaheksemplar']    = $this->input->post('jumlaheksemplar');
        $data['diinput']            = $this->input->post('diinput');
        $this->load->view('perpustakaan/databuku',$data);
        }

        $this->perpustakaan->simpan_buku($data);
        redirect('perpustakaan/dashboard/databuku');
    } 

    // UPDATE Buku ---------------------------------------------------------------------
    public function updatebuku()
    {
        $this->load->model('perpustakaan');
        $id_buku['id_buku']    = $this->input->post("id_buku");
        $judulbuku              = $this->input->post('judulbuku');
        $pengarang             = $this->input->post('pengarang');
        $penerbit              = $this->input->post('penerbit');
        $tahunterbit           = $this->input->post('tahunterbit');
        $isbn                  = $this->input->post('isbn');
        $jumlahbuku            = $this->input->post('jumlahbuku');
        $jumlaheksemplar       = $this->input->post('jumlaheksemplar');
        $data                  = array(
        'judulbuku'          =>$judulbuku,
        'pengarang'         =>$pengarang,
        'penerbit'          =>$penerbit,
        'tahunterbit'       =>$tahunterbit,
        'isbn'              =>$isbn,
        'jumlahbuku'        =>$jumlahbuku,
        'jumlaheksemplar'   =>$jumlaheksemplar,
        );
        $this->perpustakaan->update_buku($data, $id_buku);
        redirect('perpustakaan/dashboard/databuku');
    }


    // HAPUS BUKU -----------------------------------------------------------------------
    public function hapusbuku($id_buku)
    {
      $this->load->model('perpustakaan');
      $id['id_buku'] = $this->uri->segment(4);
      $this->perpustakaan->hapus_buku($id);
      redirect('perpustakaan/dashboard/databuku');
    }

    



    // DATA anggota ---------------------------------------------------------------------
    public function dataanggota()
    {
        $this->load->model('perpustakaan');
        $data        = array(
        'setting'           => $this->perpustakaan->setup()->result(),
        'dataprofil'        => $this->perpustakaan->get_profil()->result(),
        'data_profil'       => $this->perpustakaan->get_profil()->result(),
        'datasiswa'         => $this->perpustakaan->get_datasiswa()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menuperpustakaan', $data);
        $this->load->view('perpustakaan/dataanggota', $data);
        $this->load->view('_partials/footer');
    }





    // SIMPAN PINJAMAN BUKU ---------------------------------------------------------------------
    public function simpanpinjaman()
    {
        $this->load->model('perpustakaan'); 
        {
        $data['id_peminjam']          = $this->input->post('id_peminjam');
        $data['id_bukupinjaman']      = $this->input->post('id_bukupinjaman');

        $this->load->view('perpustakaan/pinjambuku',$data);
        }

        $this->perpustakaan->simpan_pinjamanbuku($data);
        redirect('perpustakaan/dashboard/pinjambuku');
    } 

    // HAPUS TRANSAKSI PEMINJAMAN -----------------------------------------------------------------------
    public function hapustransaksipeminjaman($id_pinjaman)
    {
      $this->load->model('perpustakaan');
      $id['id_pinjaman'] = $this->uri->segment(4);
      $this->perpustakaan->hapus_transaksipeminjaman($id);
      redirect('perpustakaan/dashboard/pinjambuku');
    }





    public function logout()
    {
        $this->session->sess_destroy();
        redirect('beranda/perpustakaan');
    }
    
  



}