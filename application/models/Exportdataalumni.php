<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Exportdataalumni extends CI_Model {
  public function view(){
    $this->db->order_by('thn_masuk', 'nama_alumni', 'ASC');
    return $this->db->get('alumni')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
}