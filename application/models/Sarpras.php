<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarpras extends CI_Model
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

    public function get_datakategorisarpras()
    {
        $this->db->select('*');
        $this->db->from('kategorisarpras');
        $this->db->order_by('nama_kategorisarpras', 'ASC');
        return $this->db->get();
    }

    public function simpan_kategorisarpras($data)
    {
        return $this->db->insert("kategorisarpras", $data);
    }

    public function hapus_kategorisarpras($id_kategorisarpras)
    {
        return $this->db->delete("kategorisarpras", $id_kategorisarpras);
    }





    public function get_datasarpras()
    {
        $this->db->select('*');
        $this->db->from('sarpras');
        $this->db->join('kategorisarpras', 'kategorisarpras.id_kategorisarpras = sarpras.kode_kategorisarpras');
        $this->db->order_by('nama_sarpras', 'ASC');
        return $this->db->get();
    }

    public function simpan_sarpras($data)
    {
        return $this->db->insert("sarpras", $data);
    }

    public function hapus_sarpras($id_sarpras)
    {
        return $this->db->delete("sarpras", $id_sarpras);
    }


    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}

    public function hapus_semuasarpras()
    {
        return $this->db->empty_table('sarpras');
    }

}