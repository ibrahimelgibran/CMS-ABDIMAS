<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Model
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

//---------------------------------------------------------------------- diverifikasi
public function get_datakelas()
{
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->order_by('nama_kelas', 'ASC');
    return $this->db->get();
}
//----------------------------------------------------------------------

    
//---------------------------------------------------------------------- diverifikasi
    public function get_datasiswa()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->join('kelas', 'kelas.kode_kelas = pendaftar.siswa_kelas');
        $this->db->where('pendaftar.id_pendaftar', $ses);
        return $this->db->get();
    }
//----------------------------------------------------------------------


//---------------------------------------------------------------------- diverifikasi
public function get_pembayaran()
{
    $ses = $this->session->userdata('user_id');
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->join('kelas', 'kelas.kode_kelas = pendaftar.siswa_kelas');
    $this->db->join('spp_datasiswa', 'spp_datasiswa.nisn = pendaftar.nisn');
    $this->db->join('spp_jenispembayaran', 'spp_jenispembayaran.kode_jenispembayaran = spp_datasiswa.kode_pembayaran');
    $this->db->where('pendaftar.id_pendaftar', $ses);
    return $this->db->get();
}
//----------------------------------------------------------------------




    public function get_jadwalkehadiransiswa()
    {
        $this->db->select('*');
        $this->db->from('jadwalabsen');
        return $this->db->get();
    }


    public function get_kasus()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('kasus');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = kasus.siswa_id');
        $this->db->where('kasus.siswa_id', $ses);
        return $this->db->get();
    }

    public function get_kelulusan()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('kelulusan');
        $this->db->join('pendaftar', 'pendaftar.nisn = kelulusan.siswa_id');
        $this->db->where('kelulusan.siswa_id', $ses);
        return $this->db->get();
    }



    public function update_siswa($data, $id_pendaftar)
    {
       $this->db->where('id_pendaftar', $id_pendaftar);
       return $this->db->update("pendaftar", $data);
    }




    

    public function edit_siswa($id_pendaftar)
    {
        $query = $this->db->where("id_pendaftar", $id_pendaftar)->get("pendaftar");
        return $query->row();
    }





    public function get_datakehadiransiswa()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('kehadiransiswa');
        $this->db->where('kehadiransiswa.id_user', $ses);
        return $this->db->get();
    }


    public function update_kehadiransiswa($data, $id_kehadiran)
    {
        return $this->db->update("kehadiransiswa", $data, $id_kehadiran);
    }

    public function simpan_kehadiransiswa($data)
    {
        return $this->db->insert("kehadiransiswa", $data);
    }






    public function get_datarapormapel()
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_datarapor1()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('rapor1');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor1.mapel');
        $this->db->where('rapor1.id_user', $ses);
        $this->db->order_by('kelas,nama_mapel,nomor_absen', 'ASC');
   

        return $this->db->get();
    }







    public function get_dataelearning()
    {
        //$ses = ('elearningpengguna');
 
        $ses = $this->session->userdata('user_kelas');
        $this->db->select('*');
        $this->db->from('elearningtugas');
        $this->db->join('elearningkelas', 'elearningkelas.kode_kelas = elearningtugas.kelas');
        $this->db->where('elearningtugas.kelas', $ses);
        $this->db->order_by('id_elearningtugas', 'DESC');

    
        return $this->db->get();
    }








    
    public function get_rolekelas()
    {
    

        //$idguru = 'elearningguru.kelas';
        $this->db->select('*');
        $this->db->from('elearningkelas');
    
     
        $this->db->order_by('nama_kelas', 'ASC');

        return $this->db->get();
    }


    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}
    public function get_profil()
    {
        //select semua data surat masuk
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }   

}