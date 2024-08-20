<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Exportdatatemplate extends CI_Model {


  public function view(){
    $this->db->join('rapormapel', 'rapormapel.id_role = pendaftar.role', 'guru.namamapel = raporgmapel.kode_mapel');
    $this->db->order_by('kelas', 'ASC');
    $this->db->order_by( ABS('nomorabsen'));
    return $this->db->get('pendaftar')->result(); // Tampilkan semua data yang ada di tabel siswa
  }


  //Fungsi ini sudah di Validasi
  public function download($id_rapormapel){
    $this->db->join('pendaftar', 'pendaftar.role = rapormapel.id_role', 'pendaftar.siswa_kelas = kelas.kode_kelas');
    $this->db->order_by('siswa_kelas', 'ASC');
    $this->db->order_by( ABS('siswa_nomorabsen'));
    $this->db->where("id_rapormapel", $id_rapormapel);
    return $this->db->get('rapormapel')->result(); // Tampilkan semua data yang ada di tabel siswa
  }

    //Fungsi ini sudah di Validasi
    public function downloadekstra($id_raporekstra){
      $this->db->join('pendaftar', 'pendaftar.role = raporekstra.id_role', 'pendaftar.siswa_kelas = raporekstra.nama_kelas');
      $this->db->order_by('siswa_kelas', 'ASC');
      $this->db->order_by( ABS('siswa_nomorabsen'));
      $this->db->where("id_raporekstra", $id_raporekstra);
      return $this->db->get('raporekstra')->result(); // Tampilkan semua data yang ada di tabel siswa
    }

}