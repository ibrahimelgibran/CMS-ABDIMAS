<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaturan extends CI_Model {

    // DATA SETTING VERSION
    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}

    // DATA PROFIL
    public function get_profil()
    {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }   

    // DATA PROFIL
    public function get_tema()
    {
        $this->db->select('*');
        $this->db->from('tema');
        $this->db->order_by('id_tema', 'DESC');
        return $this->db->get();
    } 


    //Update Tema
    public function update_tema($data, $id_tema)
    {
       return $this->db->update("tema", $data, $id_tema);
    }
    
    // DATA PROFIL
    public function get_temaaktif()
    {
        $this->db->select('*');
        $this->db->from('tema');
        $this->db->order_by('id_tema', 'DESC');
        $this->db->where('status',"Aktif");
        return $this->db->get();
    } 






    // DATA MENU LAYANAN SISWA
    public function get_menusiswa()
    {
        $this->db->select('*');
        $this->db->from('menu_siswa');
        return $this->db->get();
    }

    //Update Menu Layanan Siswa
    public function update_menusiswa($data, $id_menu)
    {
       return $this->db->update("menu_siswa", $data, $id_menu);
    }   

    public function edit_pengaturan($id_banner)
    {
        //edit data profil
        $query = $this->db->where("id_banner", $id_banner)->get("setting_banner");
        return $query->row();
    }  


    

}
