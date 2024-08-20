<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bendahara extends CI_Model
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



function generateKodeTransaksi()
{
        // FORMAT SMA/TAHUN SEKARANG/0001
        // EX : SMA/2020/0001

        $this->db->select('RIGHT(kode_jenispembayaran,4) as kode_jenispembayaran', false);
        $this->db->order_by("kode_jenispembayaran", "DESC");
        $this->db->limit(1);
        $query = $this->db->get('spp_jenispembayaran');

        // SQL QUERY
        // SELECT RIGHT(kode, 4) AS kode FROM tb_siswa
        // ORDER BY kode
        // LIMIT 1

        // CEK JIKA DATA ADA
        if($query->num_rows() <> 0)
        {
            $data       = $query->row(); // ambil satu baris data
            $kodePembayaran  = intval($data->kode_jenispembayaran) + 1; // tambah 1
        }else{
            $kodePembayaran  = 1; // isi dengan 1
        }

        $lastKode  = str_pad($kodePembayaran, 4, "0", STR_PAD_LEFT);
        $tahun     = date("Y");
        $kodeAwal  = "TRX";

        $newKode  = $kodeAwal.$tahun.$lastKode;

        return $newKode;  // return kode baru

}
    










//-----------------------------------------------------------------------------------------------TELAH DIVERIVIKASI
public function setup()
{
    $this->db->select('*');
    $this->db->from('setting');
    return $this->db->get();
}
//-----------------------------------------------------------------------------------------------



//-----------------------------------------------------------------------------------------------TELAH DIVERIVIKASI
    public function get_profil()
    {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }
//-----------------------------------------------------------------------------------------------



//-----------------------------------------------------------------------------------------------TELAH DIVERIVIKASI
public function get_datatahunajaran()
{
    $this->db->select('*');
    $this->db->from('spp_tahunajaran');
    $this->db->join('spp_jenispembayaran', 'spp_jenispembayaran.kode_jenispembayaran = spp_tahunajaran.jenispembayaran');
    $this->db->order_by('tahun_jenispembayaran', 'ASC');
    return $this->db->get();
}

public function simpan_tahunajaran($data)
{
    return $this->db->insert("spp_tahunajaran", $data);
}

public function hapus_tahunajaran($id_tahunajaran)
{
    return $this->db->delete("spp_tahunajaran", $id_tahunajaran);
}
//-----------------------------------------------------------------------------------------------



//-----------------------------------------------------------------------------------------------TELAH DIVERIVIKASI
public function get_datakelas()
{
    $this->db->select('*');
    $this->db->from('kelas');
    return $this->db->get();
}
//-----------------------------------------------------------------------------------------------



//-----------------------------------------------------------------------------------------------TELAH DIVERIVIKASI
public function get_datajenispembayaran()
{
    $this->db->select('*');
    $this->db->from('spp_jenispembayaran');
    $this->db->order_by('kode_jenispembayaran', 'ASC');
    return $this->db->get();
}


public function get_totalsiswamsuk()
{
    $this->db->select('*');
    $this->db->from('spp_datasiswa');
    return $this->db->get();
}



public function get_datapembayaransppsiswa($kode_pembayaran)
{
    $this->db->select('*');
    $this->db->from('spp_datasiswa');
    $this->db->join('kelas', 'kelas.kode_kelas = spp_datasiswa.kelas');
    $this->db->join('spp_jenispembayaran', 'spp_jenispembayaran.kode_jenispembayaran = spp_datasiswa.kode_pembayaran');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    return $this->db->get();

}

public function bayarspp($data, $id_sppdatasiswa)
{
    return $this->db->update("spp_datasiswa", $data, $id_sppdatasiswa);
}

public function simpan_jenispembayaran($data)
{
    return $this->db->insert("spp_jenispembayaran", $data);
}


public function update_jenispembayaran($data, $id_sppjenispembayaran)
{
    return $this->db->update("spp_jenispembayaran", $data, $id_sppjenispembayaran);
}


public function hapus_jenispembayaran($id_sppjenispembayaran)
{
    return $this->db->delete("spp_jenispembayaran", $id_sppjenispembayaran);
}


public function downloadtemplate($id_sppjenispembayaran, $role){
    $this->db->join('pendaftar', 'pendaftar.role = spp_jenispembayaran.id_role');
    $this->db->join('kelas', 'kelas.kode_kelas = pendaftar.siswa_kelas');
    $this->db->order_by('siswa_kelas', 'ASC');
    $this->db->order_by( ABS('siswa_nomorabsen'));
    $this->db->where("id_sppjenispembayaran", $id_sppjenispembayaran);
    $this->db->where("role", $role);
    return $this->db->get('spp_jenispembayaran')->result(); // Tampilkan semua data yang ada di tabel siswa
}
//-----------------------------------------------------------------------------------------------


public function bayar1($kode_pembayaran){
        
    $this->db->select_sum('bayar1');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar1;
}

public function bayar2($kode_pembayaran){
        
    $this->db->select_sum('bayar2');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar2;
}

public function bayar3($kode_pembayaran){
        
    $this->db->select_sum('bayar3');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar3;
}

public function bayar4($kode_pembayaran){
        
    $this->db->select_sum('bayar4');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar4;
}

public function bayar5($kode_pembayaran){
        
    $this->db->select_sum('bayar5');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar5;
}

public function bayar6($kode_pembayaran){
        
    $this->db->select_sum('bayar6');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar6;
}

public function bayar7($kode_pembayaran){
        
    $this->db->select_sum('bayar7');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar7;
}

public function bayar8($kode_pembayaran){
        
    $this->db->select_sum('bayar8');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar8;
}

public function bayar9($kode_pembayaran){
        
    $this->db->select_sum('bayar9');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar9;
}

public function bayar10($kode_pembayaran){
        
    $this->db->select_sum('bayar10');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar10;
}

public function bayar11($kode_pembayaran){
        
    $this->db->select_sum('bayar11');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar11;
}

public function bayar12($kode_pembayaran){
        
    $this->db->select_sum('bayar12');
    $this->db->where("kode_pembayaran", $kode_pembayaran);
    $result = $this->db->get('spp_datasiswa')->row();
    return $result->bayar12;
}



}