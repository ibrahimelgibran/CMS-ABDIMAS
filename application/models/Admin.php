<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
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
    
        public function hapus_semualog()
    {
        return $this->db->empty_table('log_login');
    }
    
    public function get_profil()
    {
        //select semua data profil
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }

        
    public function get_login()
    {
        //select semua data profil
        $this->db->select('*');
        $this->db->from('log_login');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(4);
        return $this->db->get();
    }

    public function get_pengguna()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->order_by('id_user', 'ASC');
        return $this->db->get();
    }
    
    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}

    public function jumlahkelamin()
	{
		$this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->group_by('jeniskelamin');
		return $this->db->get();
	}

    
    public function jumlahasalsekolah()
	{
		$this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->group_by('asal_sekolah');
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

    public function get_sarpras()
	{
		$this->db->select('*');
        $this->db->from('sarpras');
		return $this->db->get();
	}

    public function get_tamu()
	{
		$this->db->select('*');
        $this->db->from('tamu');
		return $this->db->get();
	}


    public function transportasi()
	{
		$this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->group_by('transportasi');
		return $this->db->get();
	}

    public function jumlahjarak()
	{
		$this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->group_by('jarakkesekolah');
		return $this->db->get();
	}


}