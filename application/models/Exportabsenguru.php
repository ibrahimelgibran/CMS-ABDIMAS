<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Exportabsenguru extends CI_Model {
  public function view(){
    $this->db->order_by('tanggalpresensi', 'ASC');
    return $this->db->get('kehadiranguru')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
}