<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Exportdatalulus extends CI_Model {
  public function view(){
    $this->db->order_by('siswa_kelas', 'nama_lengkap', 'ASC');
    return $this->db->get('pendaftar')->result(); 
    
    // Tampilkan semua data yang ada di tabel siswa
  }
}