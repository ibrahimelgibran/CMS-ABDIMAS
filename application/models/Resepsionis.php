<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Model
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



    // DATA TAMU RESEPSIONIS-------------------------------------------
    public function get_datatamu()
    {
        $this->db->select('*');
        $this->db->from('tamu');
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get();
    }

    // SIMPAN TAMU RESEPSIONIS-------------------------------------------
    public function simpan_tamu($data)
    {
        return $this->db->insert("tamu", $data);
    }


    // SIMPAN TAMU RESEPSIONIS-------------------------------------------
    public function hapus_tamu($id_tamu)
    {
        return $this->db->delete("tamu", $id_tamu);
    }

    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}

}
