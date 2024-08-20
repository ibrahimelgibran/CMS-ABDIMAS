<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {


    // DATA MENU LAYANAN SISWA-------------------------------------------
    public function get_menusiswa()
    {
        $this->db->select('*');
        $this->db->from('menu_siswa');
        return $this->db->get();
    }

    //Update Menu Layanan Siswa
    public function update_menusiswa($data, $id_menu)
    {
       return $this->db->update("menu_siswa", $data, $id_menu);
    }   

    // DATA SISWA-------------------------------------------
    public function get_datasiswa()
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->join('kelas', 'kelas.kode_kelas = pendaftar.siswa_kelas');
        $this->db->order_by('nama_kelas','ASC');
        $this->db->order_by('siswa_nomorabsen');
        return $this->db->get();
    }

    // EDIT SISWA-------------------------------------------
    public function edit_siswa($id_pendaftar)
    {
        {
        $query = $this->db->where("id_pendaftar", $id_pendaftar)->join('kelas', 'kelas.kode_kelas = pendaftar.siswa_kelas')->get("pendaftar");
        return $query->row();
        }
    }
    

    // HAPUS SISWA-------------------------------------------
    public function hapus_siswa($id_pendaftar)
    {
        return $this->db->delete("pendaftar", $id_pendaftar);
    }

    public function update_siswa($data, $id_pendaftar)
    {
       //update siswa
       return $this->db->update("pendaftar", $data, $id_pendaftar);
    }



    // PEMBAYARAN SPP SISWA-------------------------------------------
    public function get_datapembayaranspp()
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->join('pembayaranspp', 'pembayaranspp.id_siswa = pendaftar.id_pendaftar');
        $this->db->order_by('nama_lengkap', 'ASC');
        return $this->db->get();
    }


    // TAHUN E-RAPOR--------------------------------------------------------------------------------------DIVERIFIKASI

    public function get_tahunrapor()
    {
        $this->db->select('*');
        $this->db->from('rapor_tahun');
        $this->db->order_by('tahun', 'ASC');
        return $this->db->get();
    }

    public function simpan_tahunrapor($data)
    {
        return $this->db->insert("rapor_tahun", $data);
    }

    public function update_raportahun($data, $id_raportahun)
    {
       return $this->db->update("rapor_tahun", $data, $id_raportahun);
    }

    public function hapus_tahunrapor($id_raportahun)
    {
        return $this->db->delete("rapor_tahun", $id_raportahun);
    }

    // ---------------------------------------------------------------------------------------------------











// FUNGSI SARPRAS-------------------------------------------------------------------------------------------------------------------------
    public function get_datasarpras()
    {
        $this->db->select('*');
        $this->db->from('sarpras');
        $this->db->join('kategorisarpras', 'kategorisarpras.id_kategorisarpras = sarpras.kode_kategorisarpras');
        $this->db->order_by('nama_sarpras', 'ASC');
        return $this->db->get();
    }

    public function simpan_sarpras($data)
    {
        return $this->db->insert("sarpras", $data);
    }

    public function update_sarpras($data, $id_sarpras)
    {
        return $this->db->update("sarpras", $data, $id_sarpras);
    }
    
    public function hapus_sarpras($id_sarpras)
    {
        return $this->db->delete("sarpras", $id_sarpras);
    }

    public function hapus_semuasarpras()
    {
        return $this->db->empty_table('sarpras');
    }
//-----------------------------------------------------------------------------------------------------------------------------------------
















    // DATA KATEGORI SARPRAS-------------------------------------------
    public function get_datakategorisarpras()
    {
        $this->db->select('*');
        $this->db->from('kategorisarpras');
        $this->db->order_by('nama_kategorisarpras', 'ASC');
        return $this->db->get();
    }


// UNDANGAN WALI MURID -------------------------------------------
public function get_undanganwalimurid()
{
    $this->db->select('*');
    $this->db->from('undanganwalimurid');
    $this->db->join('tingkat', 'tingkat.nama_tingkat = undanganwalimurid.tingkat');
    $this->db->order_by('tanggal', 'DESC');
    return $this->db->get();
}

// SIMPAN UNDANGAN WALI MURID -------------------------------------------
public function simpan_undanganwalimurid($data)
{
    return $this->db->insert("undanganwalimurid", $data);
}

// HAPUS UNDANGAN WALI MURID -------------------------------------------
public function hapus_undanganwalimurid($id_undanganwalimurid)
{
   return $this->db->delete("undanganwalimurid", $id_undanganwalimurid);
} 





// CETAK UNDANGAN WALI MURID -------------------------------------------
public function get_cetakundanganwalimurid($tingkat)
{
    $this->db->select('*');
    $this->db->from('undanganwalimurid');
    $this->db->join('tingkat', 'tingkat.nama_tingkat = undanganwalimurid.tingkat');
    $this->db->where('tingkat',$tingkat);
    return $this->db->get();
}






// SURAT KETERANGAN AKTIF SISWA-------------------------------------------
public function get_suratketeranganaktifsiswa()
{
    $this->db->select('*');
    $this->db->from('suratketeranganaktif');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = suratketeranganaktif.id_siswa');
    $this->db->order_by('tanggal', 'DESC');
    return $this->db->get();
}
// SIMPAN SURAT KETERANGAN AKTIF-------------------------------------------
public function simpan_suratketeranganaktif($data)
{
    return $this->db->insert("suratketeranganaktif", $data);
}

// HAPUS SURAT KETERANGAN AKTIF-------------------------------------------
public function hapus_suratketeranganaktifsiswa($id_suratketeranganaktifsiswa)
{
    return $this->db->delete("suratketeranganaktif", $id_suratketeranganaktifsiswa);

}

//  CETAK SURAT KETERANGAN AKTIF-------------------------------------------
public function get_cetaksuratketeranganaktifsiswa($id_siswa)
{
    $this->db->select('*');
    $this->db->from('suratketeranganaktif');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = suratketeranganaktif.id_siswa');
    $this->db->where('id_siswa',$id_siswa);
    return $this->db->get();
}




    // UNDANGAN ORTU-------------------------------------------
    public function get_undanganortu()
    {
        $this->db->select('*');
        $this->db->from('undanganortu');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = undanganortu.id_siswa');
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get();
    }

    // SIMPAN UNDANGAN ORTU-------------------------------------------
    public function simpan_undanganortu($data)
    {
        return $this->db->insert("undanganortu", $data);
    }
    
    // HAPUS UNDANGAN ORTU-------------------------------------------
    public function hapus_undanganortu($id_undanganortu)
    {
        return $this->db->delete("undanganortu", $id_undanganortu);
    
    }




    //  MUTASI SISWA-------------------------------------------
    public function get_datamutasisiswa()
    {
        $this->db->select('*');
        $this->db->from('mutasisiswa');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = mutasisiswa.id_siswa');
        $this->db->order_by('nama_lengkap', 'ASC');
        return $this->db->get();
    }

    //  SIMPAN MUTASI SISWA-------------------------------------------
    public function simpan_mutasisiswa($data)
    {
        return $this->db->insert("mutasisiswa", $data);
    }



    //  CETAK MUTASI SISWA-------------------------------------------
    public function get_cetakmutasi($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('mutasisiswa');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = mutasisiswa.id_siswa');
        $this->db->where('id_siswa',$id_siswa);
        return $this->db->get();
    }

    // HAPUS MUTASI SISWA-------------------------------------------
    public function hapus_mutasisiswakeluar($id_mutasisiswa)
    {
        return $this->db->delete("mutasisiswa", $id_mutasisiswa);
    }















    public function get_cetakdatapendaftar($id_pendaftar)
    {
        $ses = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->order_by('id_pendaftar', 'ASC');
        $this->db->where('pendaftar.id_pendaftar', $id_pendaftar, $ses);
        return $this->db->get();
    }

    public function get_cetakpinpendaftaran($id_pendaftar)
    {
        $query = $this->db->where("id_pendaftar", $id_pendaftar)->get("pendaftar");
        return $query->row();
    }

    public function get_cetaksurataktifbekerja($id_guru)
    {
        $query = $this->db->where("id_guru", $id_guru)->get("guru");
        return $query->row();
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

    public function get_cetakpelanggaran()
    {
        $this->db->select('*');
        $this->db->from('kasus');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = kasus.siswa_id');
        $this->db->order_by('nama_lengkap', 'ASC');
        return $this->db->get();
    }


    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}




    public function hapus_semuasiswa()
    {
        return $this->db->empty_table('pendaftar');
    }

    public function hapus_semuakelulusan()
    {
        return $this->db->empty_table('kelulusan');
    }

    public function hapus_semuapemilih()
    {
        return $this->db->empty_table('pemilihosis');
    }

    
    public function hapus_semuavote()
    {
        return $this->db->empty_table('vote_pemilihan');
    }

    public function hapus_semuaguru()
    {
        return $this->db->empty_table('guru');
    }
    
    public function hapus_semuawalikelas()
    {
        return $this->db->empty_table('walikelas');
    }













   









    public function get_dataguru()
    {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->order_by('nama_guru', 'ASC');
        return $this->db->get();
    }

    public function simpan_guru($data)
    {
        //insert data guru
        return $this->db->insert("guru", $data);
    }

    public function update_guru($data, $id_guru)
    {
        return $this->db->update("guru", $data, $id_guru);
    }


    public function hapus_guru($id_guru)
    {
        return $this->db->delete("guru", $id_guru);
    }
















    public function get_datawalikelas()
    {
        $this->db->select('*');
        $this->db->from('walikelas');
        $this->db->join('guru', 'guru.nip = walikelas.nama_walikelas');
        $this->db->order_by('id_walikelas', 'ASC');
        return $this->db->get();
    }


    public function update_walikelas($data, $id_walikelas)
    {
        return $this->db->update("walikelas", $data, $id_walikelas);
    }

    public function hapus_walikelas($id_walikelas)
    {
        return $this->db->delete("walikelas", $id_walikelas);
    }


    



    public function get_datarapor2($kode_mapel)
    {
        $this->db->select('*');
        $this->db->from('rapor2');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor2.id_kodemapel');
        $this->db->where('kode_mapel',$kode_mapel);
        $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
        return $this->db->get();
    }

    public function get_datarapor3($kode_mapel)
    {
        $this->db->select('*');
        $this->db->from('rapor3');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor3.id_kodemapel');
        $this->db->where('kode_mapel',$kode_mapel);
        $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
        return $this->db->get();
    }

    public function get_datarapor4($kode_mapel)
    {
        $this->db->select('*');
        $this->db->from('rapor4');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor4.id_kodemapel');
        $this->db->where('kode_mapel',$kode_mapel);
        $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
        return $this->db->get();
    }

    public function get_datarapor5($kode_mapel)
    {
        $this->db->select('*');
        $this->db->from('rapor5');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor5.id_kodemapel');
        $this->db->where('kode_mapel',$kode_mapel);
        $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
        return $this->db->get();
    }

    public function get_datarapor6($kode_mapel)
    {
        $this->db->select('*');
        $this->db->from('rapor6');
        $this->db->join('rapormapel', 'rapormapel.kode_mapel = rapor6.id_kodemapel');
        $this->db->where('kode_mapel',$kode_mapel);
        $this->db->order_by('kelas,ABS(nomor_absen)', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporkelas1($nama_kelas)
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->join('kelas', 'kelas.nama_kelas = pendaftar.siswa_kelas');
        $this->db->join('rapor1', 'rapor1.id_user = pendaftar.id_pendaftar');
        $this->db->where('nama_kelas',$nama_kelas);
        $this->db->order_by('siswa_kelas', 'nama_lengkap', 'ASC');
        return $this->db->get();
    }


    public function get_dataraporkelas11($kode_kelas)
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->join('kelas', 'kelas.kode_kelas = pendaftar.siswa_kelas');
        $this->db->where('kode_kelas',$kode_kelas);
        $this->db->order_by('siswa_kelas', 'nama_lengkap', 'ASC');
        return $this->db->get();
    }









    public function update_rapor1($data, $id_rapor)
    {
        return $this->db->update("rapor1", $data, $id_rapor);
    }

    public function update_rapor2($data, $id_rapor)
    {
        return $this->db->update("rapor2", $data, $id_rapor);
    }
    
    public function update_rapor3($data, $id_rapor)
    {
        return $this->db->update("rapor3", $data, $id_rapor);
    }









    public function hapus_datarapor1($id_rapor)
    {
       return $this->db->delete("rapor1", $id_rapor);

    } 





    public function get_datarapormapel()
    {
        $this->db->select('*');
        $this->db->from('rapormapel');
        $this->db->order_by('kelompok_mapel,no_urut', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporekstra()
    {
        $this->db->select('*');
        $this->db->from('raporekstra');
        $this->db->order_by('nama_ekstra', 'ASC');
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
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsiswasmt3($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor3');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor3.id_user');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsiswasmt4($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor4');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor4.id_user');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }

    public function get_dataraporsiswasmt5($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor5');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor5.id_user');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }


    public function get_dataraporsiswasmt6($id_user)
    {
        $this->db->select('*');
        $this->db->from('rapor6');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = rapor6.id_user');
        $this->db->where('id_user',$id_user);
        $this->db->order_by('nama_siswa,kelas', 'ASC');
        return $this->db->get();
    }




    public function simpan_datarapormapel($data)
    {
        return $this->db->insert("rapormapel", $data);
    }

    
    public function simpan_dataraporekstra($data)
    {
        return $this->db->insert("raporekstra", $data);
    }

    public function edit_datarapormapel($id_rapormapel)
    {
        $query = $this->db->where("id_rapormapel", $id_rapormapel)->get("rapormapel");
        return $query->row();
    }

    public function update_datarapormapel($data, $id_rapormapel)
    {
        return $this->db->update("rapormapel", $data, $id_rapormapel);
    }

    public function hapus_datarapormapel($id_rapormapel)
    {
       return $this->db->delete("rapormapel", $id_rapormapel);

    } 

    public function hapus_dataraporekstra($id_raporekstra)
    {
       return $this->db->delete("raporekstra", $id_raporekstra);

    } 

    public function get_dataketentuanppdb()
    {
        $this->db->select('*');
        $this->db->from('ketentuanppdb');
        $this->db->order_by('id_ketentuan', 'ASC');
        return $this->db->get();
    }

    public function simpan_dataketentuanppdb($data)
    {
        return $this->db->insert("ketentuanppdb", $data);
    }

    public function get_datajalurppdb()
    {
        $this->db->select('*');
        $this->db->from('jalurppdb');
        $this->db->order_by('id_jalur', 'ASC');
        return $this->db->get();
    }

    public function simpan_datajalurppdb($data)
    {
        return $this->db->insert("jalurppdb", $data);
    }



    public function get_datatingkat()
    {
        $this->db->select('*');
        $this->db->from('tingkat');
        $this->db->order_by('nama_tingkat,id_tingkat', 'ASC');
        return $this->db->get();
    }


    public function get_datakelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('nama_kelas,id_kelas', 'ASC');
        return $this->db->get();
    }

    public function get_raporkelas1()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('nama_kelas,id_kelas', 'ASC');
        return $this->db->get();
    }

    public function get_raporkelas2()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('nama_kelas,id_kelas', 'ASC');
        return $this->db->get();
    }

    public function get_raporkelas3()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('nama_kelas,id_kelas', 'ASC');
        return $this->db->get();
    }

    public function get_raporkelas4()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('nama_kelas,id_kelas', 'ASC');
        return $this->db->get();
    }

    public function get_raporkelas5()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('nama_kelas,id_kelas', 'ASC');
        return $this->db->get();
    }

    public function get_raporkelas6()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('nama_kelas,id_kelas', 'ASC');
        return $this->db->get();
    }

    public function simpan_datatingkat($data)
    {
        return $this->db->insert("tingkat", $data);
    }

    public function simpan_datakelas($data)
    {
        return $this->db->insert("kelas", $data);
    }
    
    
    public function update_kelas($data, $id_kelas)
    {
        return $this->db->update("kelas", $data, $id_kelas);
    }

    public function update_jalurppdb($data, $id_jalur)
    {
        return $this->db->update("jalurppdb", $data, $id_jalur);
    }

    public function hapus_datatingkat($id_tingkat)
    {
       return $this->db->delete("tingkat", $id_tingkat);
    } 

    public function hapus_dataketentuanppdb($id_ketentuan)
    {
       return $this->db->delete("ketentuanppdb", $id_ketentuan);
    }

    public function hapus_datajalurppdb($id_jalur)
    {
       return $this->db->delete("jalurppdb", $id_jalur);
    } 

    public function hapus_datakelas($id_kelas)
    {
       return $this->db->delete("kelas", $id_kelas);
    } 


    public function get_settingdatakehadiran()
    {
        $this->db->select('*');
        $this->db->from('jadwalabsen');
        $this->db->order_by('id_jadwal', 'ASC');
        return $this->db->get();
    }

    public function simpan_jadwalkehadiran($data)
    {
        return $this->db->insert("jadwalabsen", $data);
    }

    public function hapus_settingkehadiran($id_jadwal)
    {
       return $this->db->delete("jadwalabsen", $id_jadwal);
    } 


    public function get_jadwalkehadiran()
    {
        $this->db->select('*');
        $this->db->from('jadwalabsen');
        return $this->db->get();
    }


    public function get_datakehadiranguru()
    {
        $this->db->select('*');
        $this->db->from('kehadiranguru');
        $this->db->order_by('id_kehadiran', 'DESC');
        return $this->db->get();
    }

    public function simpan_kehadiranguru($data)
    {
        return $this->db->insert("kehadiranguru", $data);
    }

    public function hapus_kehadiranguru($id_kehadiran)
    {
       return $this->db->delete("kehadiranguru", $id_kehadiran);

    } 













    public function get_datakehadiransiswa()
    {
        $this->db->select('*');
        $this->db->from('kehadiransiswa');
        $this->db->order_by('tanggalpresensi,kelas,id_kehadiran,ABS(nomorabsen)', 'DESC');
        return $this->db->get();
    }

    public function simpan_kehadiransiswa($data)
    {
        return $this->db->insert("kehadiransiswa", $data);
    }

    public function hapus_kehadiransiswa($id_kehadiran)
    {
       return $this->db->delete("kehadiransiswa", $id_kehadiran);

    } 









    public function get_pengguna()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->order_by('id_user', 'ASC');
        return $this->db->get();
    }

    public function update_pengguna($data, $id_user)
    {
        return $this->db->update("tbl_users", $data, $id_user);
    }

    public function hapus_pengguna($id_user)
    {
       return $this->db->delete("tbl_users", $id_user);

    }   

    public function get_bukutamu()
    {
        $this->db->select('*');
        $this->db->from('tamu');
        $this->db->order_by('tanggal', 'ASC');
        return $this->db->get();
    }

    public function hapus_bukutamu($id_tamu)
    {
        return $this->db->delete("tamu", $id_tamu);
    }




    public function get_calonosis()
    {
        $this->db->select('*');
        $this->db->from('calonosis');
        $this->db->order_by('id_calonosis', 'ASC');
        return $this->db->get();
    }

    public function get_vote()
    {
        $this->db->select('*');
        $this->db->from('vote_pemilihan');
        $this->db->join('calonosis', 'calonosis.id_calonosis = vote_pemilihan.vote');
        $this->db->group_by('vote');
        $this->db->order_by('id_calonosis', 'ASC');
        return $this->db->get();
    }


    public function get_pemilihosis()
    {
        $this->db->select('*');
        $this->db->from('pemilihosis');
        $this->db->order_by('nama_pemilih', 'ASC');
        return $this->db->get();
    }


    public function get_alumni()
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->order_by('id_alumni', 'ASC');
        return $this->db->get();
    }

    public function get_settingkelulusan()
    {
        $this->db->select('*');
        $this->db->from('settingkelulusan');
        $this->db->order_by('id_settingkelulusan', 'ASC');
        return $this->db->get();
    }

    public function get_kelulusan()
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->join('kelulusan', 'kelulusan.nisn_siswa = pendaftar.nisn');
        $this->db->order_by('id_pendaftar', 'ASC');
        return $this->db->get();
    }



// Fungsi pelanggaran siswa

    public function get_pelanggaran()
    {
        $this->db->select('*');
        $this->db->from('kasus');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = kasus.siswa_id');
        $this->db->order_by('id_kasus', 'DESC');
        return $this->db->get();
    }
 
    public function simpan_pelanggaran($data)
    {
        return $this->db->insert("kasus", $data);
    }
    
    public function simpan_calonosis($data)
    {
        return $this->db->insert("calonosis", $data);
    }

    public function hapus_pelanggaran($id_kasus)
    {
        return $this->db->delete("kasus", $id_kasus);
    }


    
    public function hapus_calonosis($id_calonosis)
    {
        return $this->db->delete("calonosis", $id_calonosis);
    }
    public function hapus_alumni($id_alumni)
    {
        return $this->db->delete("alumni", $id_alumni);
    }










    //data prestasi
    public function get_dataprestasi()
    {
        $this->db->select('*');
        $this->db->from('prestasi');
        $this->db->order_by('tahun', 'DESC');
        return $this->db->get();
    }

    public function get_cetakprestasi()
    {
        $this->db->select('*');
        $this->db->from('prestasi');
        $this->db->order_by('tahun', 'DESC');
        return $this->db->get();
    }

    //simpan prestasi
    public function simpan_prestasi($data)
    {
        return $this->db->insert("prestasi", $data);
    }

    //hapus prestasi
    public function hapus_prestasi($id_prestasi)
    {
        return $this->db->delete("prestasi", $id_prestasi);
    }







    //kategori Pelanggaran
    public function get_datakategoripelanggaran()
    {
        $this->db->select('*');
        $this->db->from('kategorikasus');
        $this->db->order_by('nama_kategorikasus', 'ASC');
        return $this->db->get();
    }

    //simpan kategori Pelanggaran
    public function simpan_kategoripelanggaran($data)
    {
        return $this->db->insert("kategorikasus", $data);
    }

    //update kategori Pelanggaran
    public function update_kategorikasus($data, $id_kategorikasus)
    {
       return $this->db->update("kategorikasus", $data, $id_kategorikasus);
    }

    //update status kelulusan
    public function update_statuskelulusan($data, $id_settingkelulusan)
    {
        return $this->db->update("settingkelulusan", $data, $id_settingkelulusan);
    }

    //hapus kategori Pelanggaran
    public function hapus_kategoripelanggaran($id_kategorikasus)
    {
        return $this->db->delete("kategorikasus", $id_kategorikasus);
    }













    function getdatasiswa()
    {
        //select semua data nama guru untuk dimunculkan di form pendaftaran kelas
        $query = $this->db->query("SELECT * FROM pendaftar ORDER BY nama_lengkap ASC");
        return $query->result();
    } 







    
    public function get_profil()
    {
        //select semua data surat masuk
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }   
    













    



    public function simpan_walikelas($data)
    {
        //insert data Wali Kelas
        return $this->db->insert("walikelas", $data);
    }

    
    public function simpan_pengguna($data)
    {
        //insert data users
        return $this->db->insert("tbl_users", $data);
    }
    
 
    
    public function simpanprofiladmin($data)
    {
        return $this->db->insert("profil", $data);
    }  
    

    public function edit_pengaturanppdb($id_profil)
    {
        //edit data profil
        $query = $this->db->where("id_profil", $id_profil)->get("ppdb_profil");
        return $query->row();
    } 

    
       public function edit_pengaturan($id_profil)
    {
        //edit data profil
        $query = $this->db->where("id_profil", $id_profil)->get("profil");
        return $query->row();
    }  

       public function edit_profiladmin($id_user)
    {
        //edit data profil
        $query = $this->db->where("id_user", $id_user)->get("tbl_users");
        return $query->row();
    }  
    
    

    
    public function update_profil($data, $id_profil)
    {
       //update profil lembaga
       return $this->db->update("profil", $data, $id_profil);
    }   
    
    public function update_profiladmin($data, $id_user)
    {
       //update profil lembaga
       return $this->db->update("tbl_users", $data, $id_user);
    }   






    
    //Lihat Data Video
    public function get_datavideo()
    {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->order_by('kelas_video', 'nama_video', 'ASC');
        return $this->db->get();
    }

    //Tambah Data Video
    public function simpan_video($data)
    {
        return $this->db->insert("video", $data);
    }

    //Hapus Data Video
    public function hapus_video($id_video)
    {
        return $this->db->delete("video", $id_video);
    }

    //Update Data Video
    public function update_video($data, $id_video)
    {
       return $this->db->update("video", $data, $id_video);
    }





    //Lihat Data Buku
    public function get_databuku()
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->order_by('kelas_buku', 'nama_buku', 'ASC');
        return $this->db->get();
    }

    //Simpan Data Buku
    public function simpan_buku($data)
    {
        return $this->db->insert("buku", $data);
    }

    //Hapus Data Buku
    public function hapus_buku($id_buku)
    {
        return $this->db->delete("buku", $id_buku);
    }

    //Hapus Data Buku Perpustakaan
    public function hapus_bukuperpustakaan($id_buku)
    {
        return $this->db->delete("bukuperpustakaan", $id_buku);
    }

        
    //Update Data Buku
    public function update_buku($data, $id_buku)
    {
        return $this->db->update("buku", $data, $id_buku);
    }





    //Lihat Data Buku Perpustakaan
    public function get_bukuperpustakaan()
    {
        $this->db->select('*');
        $this->db->from('bukuperpustakaan');
        $this->db->order_by('judulbuku', 'ASC');
        return $this->db->get();
    }

    //Update Data Buku Perpustakaan
    public function update_bukuperpustakaan($data, $id_buku)
    {
        return $this->db->update("bukuperpustakaan", $data, $id_buku);
    }





    public function hapus_semuanilaismt1($id_kodemapel)
    {
        return $this->db->delete("rapor1", $id_kodemapel);
    }
    public function hapus_semuanilaismt2($id_kodemapel)
    {
        return $this->db->delete("rapor2", $id_kodemapel);
    }
    public function hapus_semuanilaismt3($id_kodemapel)
    {
        return $this->db->delete("rapor3", $id_kodemapel);
    }
    public function hapus_semuanilaismt4($id_kodemapel)
    {
        return $this->db->delete("rapor4", $id_kodemapel);
    }
    public function hapus_semuanilaismt5($id_kodemapel)
    {
        return $this->db->delete("rapor5", $id_kodemapel);
    }
    public function hapus_semuanilaismt6($id_kodemapel)
    {
        return $this->db->delete("rapor6", $id_kodemapel);
    }


    
    public function hapus_semuakelas()
    {
        return $this->db->empty_table('kelas');
    }
}
