<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Exportdatatemplaterapor extends CI_Model {


  public function view(){

    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor1.mapel');
    $this->db->order_by('nama_mapel,kelas,ABS(nomor_absen)', 'ASC');
    return $this->db->get('rapor1')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
  
}