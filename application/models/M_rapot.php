<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rapot extends CI_Model {



//Data Kelas
public function get_datakelas()
{
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->order_by('nama_kelas', 'ASC');
    return $this->db->get();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Data Mapel
public function get_datamapel()
{
    $this->db->select('*');
    $this->db->from('rapormapel');
    $this->db->order_by('nama_mapel', 'ASC');
    return $this->db->get();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Data Guru
public function get_dataguru()
{
    $this->db->select('*');
    $this->db->from('guru');
    $this->db->order_by('nama_guru', 'ASC');
    return $this->db->get();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Data Semester
public function get_datasettingguru()
{
    $this->db->select('*');
    $this->db->from('rapot_dataguru');
    $this->db->join('guru', 'guru.nip = rapot_dataguru.nip_guru');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapot_dataguru.mapel_guru');
    $this->db->join('kelas', 'kelas.kode_kelas = rapot_dataguru.kelas_guru');
    $this->db->order_by('nama_guru', 'ASC');
    return $this->db->get();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
    

//Simpan Setting Guru
public function simpan_settingguru($data)
{
    return $this->db->insert("rapot_dataguru", $data);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Hapus Setting Guru
public function hapus_settingguru($id_dataguru)
{
   return $this->db->delete("rapot_dataguru", $id_dataguru);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////






}



