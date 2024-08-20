<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walikelas extends CI_Model
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


    public function get_profil()
    {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }

    public function get_datawalikelas()
    {
        $ses = $this->session->userdata('user_nama');
        $this->db->select('*');
        $this->db->from('walikelas');
        $this->db->join('guru', 'guru.nip = walikelas.nama_walikelas');
        $this->db->where('walikelas.nama_walikelas', $ses);
        return $this->db->get();
    }

    public function get_rombel()
    {
        $ses = $this->session->userdata('user_kelas');
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->where('pendaftar.siswa_kelas', $ses);
        return $this->db->get();
    }

    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}

    // EDIT SISWA-------------------------------------------
    public function edit_siswa($id_pendaftar)
    {
        {
        $query = $this->db->where("id_pendaftar", $id_pendaftar)->get("pendaftar");
        return $query->row();
        }
    }
    
}