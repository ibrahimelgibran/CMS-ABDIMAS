<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Model
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

    public function get_calonosis()
    {
        $this->db->select('*');
        $this->db->from('calonosis');
        $this->db->order_by('id_calonosis', 'ASC');
        return $this->db->get();
    }

    
    function simpan_vote($vote,$id_pemilih)
	{
		$data_user = array(
			'vote'=>$vote,
            'id_pemilih'=>$id_pemilih
		);
		$this->db->insert('vote_pemilihan',$data_user);
	}





    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}

}