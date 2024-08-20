<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model {

    //fungsi cek session logged in
    function is_logged_in()
    {
        return $this->session->userdata('user_id');
    }

    // DATA MENU LAYANAN SISWA-------------------------------------------
    public function get_menusiswa()
    {
        $this->db->select('*');
        $this->db->from('menu_siswa');
        $this->db->where('status',"AKTIF");
        return $this->db->get();
    }
    
    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    // DATA SISWA-------------------------------------------
    public function get_datasiswa()
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->order_by('siswa_kelas', 'nama_lengkap', 'ASC');
        return $this->db->get();
    }

    public function get_dataketentuanppdb()
    {
        $this->db->select('*');
        $this->db->from('ketentuanppdb');
        $this->db->order_by('id_ketentuan', 'ASC');
        return $this->db->get();
    }

    public function get_datajalurppdb()
    {
        $this->db->select('*');
        $this->db->from('jalurppdb');
        $this->db->order_by('nama_jalur,id_jalur', 'ASC');
        $this->db->where('status_jalur',"on");
        return $this->db->get();
    }

        public function get_alumni()
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->order_by('thn_masuk', 'ASC');
        return $this->db->get();
    }


    public function cariOrang()
	{
		$cari = $this->input->GET('cari', FALSE);
		$data = $this->db->query("SELECT * from pendaftar where nik like '$cari' ");
		return $data->result();
	}


    // DATA TAMU RESEPSIONIS-------------------------------------------
    public function get_datatamu()
    {
        $this->db->select('*');
        $this->db->from('tamu');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->order_by('jam', 'DESC');
        return $this->db->get();
    }

    // SIMPAN TAMU RESEPSIONIS-------------------------------------------
    public function simpan_tamu($data)
    {
        return $this->db->insert("tamu", $data);
    }

    // SIMPAN ALUMNI ------------------------------------------
    public function simpan_alumni($data)
    {
        return $this->db->insert("alumni", $data);
    }

    //Fungsi ambil data buku

	function jumlah_data(){
		return $this->db->get('buku')->num_rows();
	}

    function jumlah_databuku(){
		return $this->db->get('buku')->num_rows();
	}

    function databuku($number,$offset){
        $this->db->order_by('id_buku', 'DESC');
		return $query = $this->db->get('buku',$number,$offset)->result();	
	}



    public function jumlahkelamin()
	{
		$this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->group_by('jeniskelamin');
		return $this->db->get();
	}

    public function kegemaran()
	{
		$this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->group_by('hobi');
		return $this->db->get();
	}

    public function jumlahsarpras()
	{
		$this->db->select('*');
        $this->db->from('sarpras');
        $this->db->join('kategorisarpras', 'kategorisarpras.id_kategorisarpras = sarpras.kode_kategorisarpras');
        $this->db->group_by('kode_kategorisarpras');
        $this->db->order_by('id_kategorisarpras', 'ASC');
		return $this->db->get();
	}

    public function transportasi()
	{
		$this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->group_by('transportasi');
		return $this->db->get();
	}








    function datavideopembelajaran($number,$offset){
        $this->db->order_by('id_video', 'DESC');
        $this->db->where('kategori', 'Video Pembelajaran');
		return $query = $this->db->get('video',$number,$offset)->result();	
	}

    function jumlah_datavideopembelajaran(){
        $this->db->where('kategori', 'Video Pembelajaran');
		return $this->db->get('video')->num_rows();
	}
    
    function getdatajalurpendaftaran()
    {
        //select semua data nama guru untuk dimunculkan di form pendaftaran kelas
        $query = $this->db->query("SELECT * FROM jalurpendaftaran ORDER BY nama_jalurpendaftaran ASC");
        return $query->result();
    }

    public function get_profilppdb()
    {
        //select semua data tamu
        $this->db->select('*');
        $this->db->from('ppdb_profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }

    public function get_banner()
    {
        //select semua data tamu
        $this->db->select('*');
        $this->db->from('setting_banner');
        $this->db->order_by('id_banner', 'DESC');
        return $this->db->get();
    }

    public function get_profil()
    {
        //select semua data tamu
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }

    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}

    public function get_guru()
    {
        //select semua data tamu
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->order_by('id_guru', 'DESC');
        return $this->db->get();
    }
    

    
    public function simpan_kelas($data)
    {
        //insert data kelas
        return $this->db->insert("kelas", $data);
    }



    
       public function edit_guru($id_guru)
    {
        //edit data guru
        $query = $this->db->where("id_guru", $id_guru)->get("guru");
        return $query->row();
    }
    

    
        public function update_kelas($data, $id_kelas)
    {
       //update kelas
       return $this->db->update("kelas", $data, $id_kelas);
    }

    
    

    
        public function hapus_guru($id_guru)
    {
       //hapus guru
       return $this->db->delete("guru", $id_guru);

    }


    public function simpan_pendaftar($data)
    {
        //insert data pendaftar
        return $this->db->insert("pendaftar", $data);
    }

    public function simpan_pinjamanbuku($data)
    {
        //insert data kelas
        return $this->db->insert("pengunjungperpustakaan", $data);
    }

}