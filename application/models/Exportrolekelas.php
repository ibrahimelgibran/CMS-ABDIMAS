<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Exportrolekelas extends CI_Model {

  public function view($id_kelas){
    $this->db->join('pendaftar', 'pendaftar.siswa_kelas = raporkelas.nama_kelas');
  
    $this->db->order_by('nama_kelas', 'ASC');
    $this->db->where("id_kelas", $id_kelas);
    return $this->db->get('raporkelas')->result(); // Tampilkan semua data yang ada di tabel siswa
  }

  public function guru($id_kelas){
    $this->db->join('guru', 'guru.kelasmengajar = elearningkelas.kode_kelas', 'guru.namamapel = elearningmapel.kode_mapel');
    
    $this->db->order_by('nama_guru', 'ASC');
    $this->db->where("id_kelas", $id_kelas);
    return $this->db->get('elearningkelas')->result(); // Tampilkan semua data yang ada di tabel siswa
  }

}