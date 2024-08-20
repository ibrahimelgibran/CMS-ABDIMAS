<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Model
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
    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}










//---------------------------------------------------------------------------------------------- SUDAH FIX
public function get_biodata()
{
    $ses = $this->session->userdata('user_id');
    $this->db->from('guru');
    $this->db->where('guru.id_guru', $ses);
    return $this->db->get();
}
//---------------------------------------------------------------------------------------------- 




//---------------------------------------------------------------------------------------------- SUDAH FIX
public function get_datadatatahun()
{
    $this->db->select('*');
    $this->db->from('rapor_tahun');
    $this->db->order_by('tahun', 'ASC');
    return $this->db->get();
}
//----------------------------------------------------------------------------------------------



public function hapus_raporkelas($id_dataguru)
{
    return $this->db->delete("rapot_dataguru", $id_dataguru);
}

//---------------------------------------------------------------------------------------------- SUDAH FIX
public function get_kelasmengajarsmt1($tahun)
{
    $ses = $this->session->userdata('user_nip');
    $this->db->from('rapot_dataguru');
    $this->db->join('guru', 'guru.nip = rapot_dataguru.nip_guru');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapot_dataguru.mapel_guru');
    $this->db->join('kelas', 'kelas.kode_kelas = rapot_dataguru.kelas_guru');
    $this->db->join('semester', 'semester.kode_semester = rapot_dataguru.semester_guru');
    $this->db->join('rapor_tahun', 'rapor_tahun.tahun = rapot_dataguru.nama_tahun');
    $this->db->where('kode_semester',"raporsemester1");
    $this->db->where('rapot_dataguru.nip_guru', $ses);
    $this->db->where('tahun',"$tahun");
    $this->db->order_by('nama_kelas');
    return $this->db->get();
}

public function get_kelasmengajarsmt2()
{
    $ses = $this->session->userdata('user_nip');
    $this->db->from('rapot_dataguru');
    $this->db->join('guru', 'guru.nip = rapot_dataguru.nip_guru');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapot_dataguru.mapel_guru');
    $this->db->join('kelas', 'kelas.kode_kelas = rapot_dataguru.kelas_guru');
    $this->db->join('semester', 'semester.kode_semester = rapot_dataguru.semester_guru');
    $this->db->where('kode_semester',"raporsemester2");
    $this->db->where('rapot_dataguru.nip_guru', $ses);
    $this->db->order_by('nama_kelas');
    return $this->db->get();
}

public function get_kelasmengajarsmt3()
{
    $ses = $this->session->userdata('user_nip');
    $this->db->from('rapot_dataguru');
    $this->db->join('guru', 'guru.nip = rapot_dataguru.nip_guru');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapot_dataguru.mapel_guru');
    $this->db->join('kelas', 'kelas.kode_kelas = rapot_dataguru.kelas_guru');
    $this->db->join('semester', 'semester.kode_semester = rapot_dataguru.semester_guru');
    $this->db->where('kode_semester',"raporsemester3");
    $this->db->where('rapot_dataguru.nip_guru', $ses);
    $this->db->order_by('nama_kelas');
    return $this->db->get();
}

public function get_kelasmengajarsmt4()
{
    $ses = $this->session->userdata('user_nip');
    $this->db->from('rapot_dataguru');
    $this->db->join('guru', 'guru.nip = rapot_dataguru.nip_guru');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapot_dataguru.mapel_guru');
    $this->db->join('kelas', 'kelas.kode_kelas = rapot_dataguru.kelas_guru');
    $this->db->join('semester', 'semester.kode_semester = rapot_dataguru.semester_guru');
    $this->db->where('kode_semester',"raporsemester4");
    $this->db->where('rapot_dataguru.nip_guru', $ses);
    $this->db->order_by('nama_kelas');
    return $this->db->get();
}

public function get_kelasmengajarsmt5()
{
    $ses = $this->session->userdata('user_nip');
    $this->db->from('rapot_dataguru');
    $this->db->join('guru', 'guru.nip = rapot_dataguru.nip_guru');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapot_dataguru.mapel_guru');
    $this->db->join('kelas', 'kelas.kode_kelas = rapot_dataguru.kelas_guru');
    $this->db->join('semester', 'semester.kode_semester = rapot_dataguru.semester_guru');
    $this->db->where('kode_semester',"raporsemester5");
    $this->db->where('rapot_dataguru.nip_guru', $ses);
    $this->db->order_by('nama_kelas');
    return $this->db->get();
}

public function get_kelasmengajarsmt6()
{
    $ses = $this->session->userdata('user_nip');
    $this->db->from('rapot_dataguru');
    $this->db->join('guru', 'guru.nip = rapot_dataguru.nip_guru');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapot_dataguru.mapel_guru');
    $this->db->join('kelas', 'kelas.kode_kelas = rapot_dataguru.kelas_guru');
    $this->db->join('semester', 'semester.kode_semester = rapot_dataguru.semester_guru');
    $this->db->where('kode_semester',"raporsemester6");
    $this->db->where('rapot_dataguru.nip_guru', $ses);
    $this->db->order_by('nama_kelas');
    return $this->db->get();
}
//----------------------------------------------------------------------------------------------------------










//---------------------------------------------------------------------------------------------------------- MENAMPILKAN NILAI RAPOR SEMESTER 1
public function get_datarapor1($kode_mapel,$kode_kelas)
{
    $this->db->select('*');
    $this->db->from('rapor1');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor1.id_kodemapel');
    $this->db->join('kelas', 'kelas.kode_kelas = rapor1.kelas');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor1.id_user');
    $this->db->where('kode_mapel',$kode_mapel);
    $this->db->where('kode_kelas',$kode_kelas);
    $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
    return $this->db->get();
}
//----------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------- MENAMPILKAN NILAI RAPOR SEMESTER 2
public function get_datarapor2($kode_mapel,$kode_kelas)
{
    $this->db->select('*');
    $this->db->from('rapor2');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor2.id_kodemapel');
    $this->db->join('kelas', 'kelas.kode_kelas = rapor2.kelas');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor2.id_user');
    $this->db->where('kode_mapel',$kode_mapel);
    $this->db->where('kode_kelas',$kode_kelas);
    $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
    return $this->db->get();
}
//----------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------- MENAMPILKAN NILAI RAPOR SEMESTER 3
public function get_datarapor3($kode_mapel,$kode_kelas)
{
    $this->db->select('*');
    $this->db->from('rapor3');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor3.id_kodemapel');
    $this->db->join('kelas', 'kelas.kode_kelas = rapor3.kelas');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor3.id_user');
    $this->db->where('kode_mapel',$kode_mapel);
    $this->db->where('kode_kelas',$kode_kelas);
    $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
    return $this->db->get();
}
//----------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------- MENAMPILKAN NILAI RAPOR SEMESTER 4
public function get_datarapor4($kode_mapel,$kode_kelas)
{
    $this->db->select('*');
    $this->db->from('rapor4');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor4.id_kodemapel');
    $this->db->join('kelas', 'kelas.kode_kelas = rapor4.kelas');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor4.id_user');
    $this->db->where('kode_mapel',$kode_mapel);
    $this->db->where('kode_kelas',$kode_kelas);
    $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
    return $this->db->get();
}
//----------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------- MENAMPILKAN NILAI RAPOR SEMESTER 5
public function get_datarapor5($kode_mapel,$kode_kelas)
{
    $this->db->select('*');
    $this->db->from('rapor5');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor5.id_kodemapel');
    $this->db->join('kelas', 'kelas.kode_kelas = rapor5.kelas');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor5.id_user');
    $this->db->where('kode_mapel',$kode_mapel);
    $this->db->where('kode_kelas',$kode_kelas);
    $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
    return $this->db->get();
}
//----------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------- MENAMPILKAN NILAI RAPOR SEMESTER 6
public function get_datarapor6($kode_mapel,$kode_kelas)
{
    $this->db->select('*');
    $this->db->from('rapor6');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor6.id_kodemapel');
    $this->db->join('kelas', 'kelas.kode_kelas = rapor6.kelas');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor6.id_user');
    $this->db->where('kode_mapel',$kode_mapel);
    $this->db->where('kode_kelas',$kode_kelas);
    $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
    return $this->db->get();
}
//----------------------------------------------------------------------------------------------------------





//Data Kelas Mengajar 
public function get_kelasmengajar()
{
    $ses = $this->session->userdata('user_nip');
    $this->db->from('rapot_dataguru');
    $this->db->join('guru', 'guru.nip = rapot_dataguru.nip_guru');
    $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapot_dataguru.mapel_guru');
    $this->db->join('kelas', 'kelas.kode_kelas = rapot_dataguru.kelas_guru');
    $this->db->join('semester', 'semester.kode_semester = rapot_dataguru.semester_guru');
    $this->db->where('rapot_dataguru.nip_guru', $ses);
    return $this->db->get();
}
//Simpan Kelas Mengajar 

public function simpan_kelasmengajar($data)
{
    return $this->db->insert("rapot_dataguru", $data);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////




public function view(){
    $this->db->join('rapormapel', 'rapormapel.id_role = pendaftar.role', 'guru.namamapel = raporgmapel.kode_mapel');
    $this->db->order_by('kelas', 'ASC');
    $this->db->order_by( ABS('nomorabsen'));
    return $this->db->get('pendaftar')->result(); // Tampilkan semua data yang ada di tabel siswa
  }


  //Fungsi ini sudah di Validasi
  public function download($id_rapormapel, $kode_kelas){
    $this->db->join('pendaftar', 'pendaftar.role = rapormapel.id_role');
    $this->db->join('kelas', 'kelas.kode_kelas = pendaftar.siswa_kelas');
    $this->db->order_by('siswa_kelas', 'ASC');
    $this->db->order_by( ABS('siswa_nomorabsen'));
    $this->db->where("id_rapormapel", $id_rapormapel);
    $this->db->where("kode_kelas", $kode_kelas);
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















    public function get_cetakrapor1($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor1');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor1.id_kodemapel');
        $this->db->where('id_user',$id_user);
        return $this->db->get();
    }

    public function get_cetakrapor2($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor2');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor2.id_kodemapel');
        $this->db->where('id_user',$id_user);
        return $this->db->get();
    }

    public function get_cetakrapor3($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor3');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor3.id_kodemapel');
        $this->db->where('id_user',$id_user);
        return $this->db->get();
    }

    public function get_cetakrapor4($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor4');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor4.id_kodemapel');
        $this->db->where('id_user',$id_user);
        return $this->db->get();
    }

    public function get_cetakrapor5($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor5');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor5.id_kodemapel');
        $this->db->where('id_user',$id_user);
        return $this->db->get();
    }

    public function get_cetakrapor6($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor6');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor6.id_kodemapel');
        $this->db->where('id_user',$id_user);
        return $this->db->get();
    }



    public function get_dataraporsmt1a($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor1', 'rapor1.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK A");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt1b($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor1', 'rapor1.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK B");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt1C($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor1', 'rapor1.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK C");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporekstra1($id_user)
    {
        $this->db->select('*');
        $this->db->from('raporekstra');
        $this->db->join('nilaiekstra1', 'nilaiekstra1.kode_nilaiekstra = raporekstra.kode_ekstra');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_ekstra',"EKSTRAKURIKULER");
        $this->db->order_by('nama_ekstra', 'ASC');
        return $this->db->get();
    }

    







    public function get_dataraporsmt2a($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor2', 'rapor2.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK A");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt2b($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor2', 'rapor2.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK B");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt2C($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor2', 'rapor2.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK C");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }



    public function get_dataraporsmt3a($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor3', 'rapor3.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK A");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt3b($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor3', 'rapor3.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK B");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt3C($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor3', 'rapor3.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK C");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }








    public function get_dataraporsmt4a($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor4', 'rapor4.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK A");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt4b($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor4', 'rapor4.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK B");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt4C($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor4', 'rapor4.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK C");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }






    
    public function get_dataraporsmt5a($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor5', 'rapor5.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK A");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt5b($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor5', 'rapor5.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK B");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt5C($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor5', 'rapor5.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK C");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }



    
    public function get_dataraporsmt6a($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor6', 'rapor6.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK A");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt6b($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor6', 'rapor6.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK B");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt6C($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor6', 'rapor6.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->where('kelompok_mapel',"KELOMPOK C");
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt3($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor3', 'rapor3.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt4($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor4', 'rapor4.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt5($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor5', 'rapor5.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsmt6($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->join('rapor6', 'rapor6.id_kodemapel = rapormapel.kode_mapel');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }




















    public function get_dataraporsiswasmt1($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor1');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor1.id_user');
        $this->db->join('kelas', 'kelas.kode_kelas = rapor1.kelas');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }

    
    public function get_dataraporsiswasmt2($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor2');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor2.id_user');
        $this->db->join('kelas', 'kelas.kode_kelas = rapor2.kelas');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsiswasmt3($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor3');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor3.id_user');
        $this->db->join('kelas', 'kelas.kode_kelas = rapor3.kelas');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsiswasmt4($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor4');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor4.id_user');
        $this->db->join('kelas', 'kelas.kode_kelas = rapor4.kelas');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsiswasmt5($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor5');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor5.id_user');
        $this->db->join('kelas', 'kelas.kode_kelas = rapor5.kelas');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }


    public function get_dataraporsiswasmt6($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor6');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor6.id_user');
        $this->db->join('kelas', 'kelas.kode_kelas = rapor6.kelas');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////











    public function get_skp()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->from('skp');
        $this->db->where('skp.id_user', $ses);
        return $this->db->get();
    }

    public function simpan_dataskp($data)
    {
        return $this->db->insert("skp", $data);
    }

    public function hapusskp($id_skp)
    {
        return $this->db->delete("skp", $id_skp);
    }















    public function get_jadwalmengajar()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->from('jadwalguru');
        $this->db->where('jadwalguru.id_user', $ses);
        return $this->db->get();
    }
    
    public function get_jurnalguru()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->from('jurnalguru');
        $this->db->join('jadwalguru', 'jadwalguru.id_pengajar = jurnalguru.id_jurnalguru');
        $this->db->where('jurnalguru.id_user', $ses);
        $this->db->order_by('tanggal_jurnal', 'DESC');
        return $this->db->get();
    }
    


    public function get_jadwalkehadiranguru()
    {
        $this->db->select('*');
        $this->db->from('jadwalabsen');
        return $this->db->get();
    }
    
    public function get_datamapel()
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        return $this->db->get();
    }
    
    public function get_datakelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get();
    }

    public function get_datasemester()
    {
        $this->db->select('*');
        $this->db->from('semester');
        return $this->db->get();
    }

    public function get_datahari()
    {
        $this->db->select('*');
        $this->db->from('hari');
        return $this->db->get();
    }


    public function get_datakehadiranguru()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('kehadiranguru');
        $this->db->where('kehadiranguru.id_user', $ses);
        return $this->db->get();
    }

    public function simpan_kehadiranguru($data)
    {
        return $this->db->insert("kehadiranguru", $data);
    }

    public function simpan_jadwamengajar($data)
    {
        return $this->db->insert("jadwalguru", $data);
    }
    
    public function simpan_jurnalguru($data)
    {
        return $this->db->insert("jurnalguru", $data);
    }























    public function get_dataelearning()
    {
        //$ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('elearning');
        //$this->db->join('elearningkelas', 'elearningkelas.kode_kelas = elearningtugas.kelas');
        //$this->db->where('elearning.id_user', $ses);
        //$this->db->order_by('id_elearningtugas', 'DESC');
        return $this->db->get();
    }

    public function simpan_datatugas($data)
    {
        return $this->db->insert("elearningtugas", $data);
    }


    public function hapus_datatugas($id_elearningtugas)
    {
        return $this->db->delete("elearningtugas", $id_elearningtugas);
    }
    
    public function hapus_jurnalguru($id_jurnal)
    {
        return $this->db->delete("jurnalguru", $id_jurnal);
    }
    
    public function hapus_datajadwalmengajar($id_pengajar)
    {
        return $this->db->delete("jadwalguru", $id_pengajar);
    }




    public function get_rolekelas()
    {
    

        //$idguru = 'elearningguru.kelas';

        //$ses = $this->session->userdata('user_mapelmengajar');
        //$ses2 = $this->session->userdata('user_kelasmengajar');
        $this->db->select('*');
        $this->db->from('elearningkelas');
        //$this->db->join('elearningkelas', 'elearningkelas.kode_kelas = guru.kelasmengajar');
        //$this->db->join('elearningmapel', 'elearningmapel.kode_mapel = guru.namamapel');
        //$this->db->where('guru.namamapel', $ses);
        //$this->db->where('guru.kelasmengajar', $ses2);
        $this->db->order_by('nama_kelas', 'ASC');
     


        return $this->db->get();
    }












    public function update_kehadiranguru($data, $id_kehadiran)
    {
        return $this->db->update("kehadiranguru", $data, $id_kehadiran);
    }
    
    public function update_biodata($data, $id_guru)
    {
        return $this->db->update("guru", $data, $id_guru);
    }
    
    public function update_jadwalmengajar($data, $id_pengajar)
    {
        return $this->db->update("jadwalguru", $data, $id_pengajar);
    }
    
    public function update_jurnalguru($data, $id_jurnal)
    {
        return $this->db->update("jurnalguru", $data, $id_jurnal);
    }
    

    public function get_profil()
    {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }
    public function get_ekinerja()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->from('ekinerja');
        $this->db->where('ekinerja.id_user', $ses);
        return $this->db->get();
    }

    public function simpan_dataekinerja($data)
    {
        return $this->db->insert("ekinerja", $data);
    }

    public function hapusekinerja($id_ekinerja)
    {
        return $this->db->delete("ekinerja", $id_ekinerja);
    }
    












    public function get_databukudigital()
    {
        $ses = $this->session->userdata('user_id');
        $this->db->from('buku');
        $this->db->where('buku.id_user', $ses);
        return $this->db->get();
    }
















}