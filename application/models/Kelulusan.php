<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelulusan extends CI_Model
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
    

    public function get_pendaftar()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->where('pendaftar.id_pendaftar', $ses);
        return $this->db->get();
    }




    public function get_kelulusan()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('kelulusan');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = kelulusan.siswa_id');
        $this->db->where('kelulusan.siswa_id', $ses);
        return $this->db->get();
    }







    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}


}