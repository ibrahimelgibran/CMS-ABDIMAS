<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Model
{
    //fungsi cek session logged in
    function is_logged_in()
    {
        return $this->session->userdata('user_id');
    }

    //fungsi cek level
    function is_role()
    {
        return $this->session->userdata('role');
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
    
    public function get_totalbuku(){
        
        $this->db->select_sum('jumlahbuku');
        $result = $this->db->get('bukuperpustakaan')->row();
        return $result->jumlahbuku;
    }

    public function get_totaleksemplar(){
        
        $this->db->select_sum('jumlaheksemplar');
        $result = $this->db->get('bukuperpustakaan')->row();
        return $result->jumlaheksemplar;
    }
    
    public function get_profil()
    {
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

    // DATA SISWA-------------------------------------------
    public function get_datasiswa()
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->order_by('siswa_kelas', 'nama_lengkap', 'ASC');
        return $this->db->get();
    }

    // FUNGSI SISWA-------------------------------------------
    public function get_databuku()
    {
        $this->db->select('*');
        $this->db->from('bukuperpustakaan');
        $this->db->order_by('judulbuku', 'ASC');
        return $this->db->get();
    }

    // SIMPAN BUKU-------------------------------------------
    public function simpan_buku($data)
    {
        return $this->db->insert("bukuperpustakaan", $data);
    }

    //UPDATE BUKU -------------------------------------------
    public function update_buku($data, $id_buku)
    {
        return $this->db->update("bukuperpustakaan", $data, $id_buku);
    }

    // HAPUS BUKU-------------------------------------------
    public function hapus_buku($id_buku)
    {
        return $this->db->delete("bukuperpustakaan", $id_buku);
    }

    // FUNGSI SISWA-------------------------------------------
    public function get_pinjambuku()
    {
        $this->db->select('*');
        $this->db->from('pinjamanbuku');
        $this->db->join('bukuperpustakaan', 'bukuperpustakaan.id_buku = pinjamanbuku.id_bukupinjaman');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = pinjamanbuku.id_peminjam');
        $this->db->order_by('tanggal', 'ASC');
        return $this->db->get();
    }

    // SIMPAN PINJAMAN BUKU-------------------------------------------
    public function simpan_pinjamanbuku($data)
    {
        return $this->db->insert("pinjamanbuku", $data);
    }

    // HAPUS BUKU-------------------------------------------
    public function hapus_transaksipeminjaman($id_pinjaman)
    {
        return $this->db->delete("pinjamanbuku", $id_pinjaman);
    }

}