<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {


    
    
    public function get_siswa()
    {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->order_by('nama_lengkap', 'ASC');
        return $this->db->get();
    }
    


    





     
    function getdatasiswa()
    {
        //select semua data nama guru untuk dimunculkan di form pendaftaran kelas
        $query = $this->db->query("SELECT * FROM pendaftar ORDER BY nama_lengkap ASC");
        return $query->result();
    } 
    
    
    
    //fungsi pada Model M_siswa untuk menyimpan data-data 
    public function simpan_siswa($data)
    {
        //insert data
        return $this->db->insert("pendaftar", $data);
    }
    
    
    

    
    
    
    


    
    
    
    
        public function update_siswa($data, $id_pendaftar)
    {
       //update siswa
       return $this->db->update("pendaftar", $data, $id_pendaftar);
    }
    


        public function hapus_siswaall($id_pendaftar)
    {
        $this->db->empty_table('pendaftar');
    }
    
    
    
    
    

}