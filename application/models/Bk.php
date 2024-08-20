<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bk extends CI_Model
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
    
    
    public function get_profil()
    {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->order_by('id_profil', 'DESC');
        return $this->db->get();
    }

// FUNGSI SISWA-------------------------------------------
public function get_datasiswa()
{
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->order_by('siswa_kelas', 'nama_lengkap', 'ASC');
    return $this->db->get();
}

// FUNGSI MUTASI SISWA KELUAR-------------------------------------------
public function get_datamutasisiswa()
{
    $this->db->select('*');
    $this->db->from('mutasisiswa');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = mutasisiswa.id_siswa');
    $this->db->order_by('nama_lengkap', 'ASC');
    $this->db->where('status',"Keluar");
    return $this->db->get();
}


// FUNGSI MUTASI SISWA MASUK-------------------------------------------
public function get_datamutasimasuk()
{
    $this->db->select('*');
    $this->db->from('mutasisiswa');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = mutasisiswa.id_siswa');
    $this->db->order_by('nama_lengkap', 'ASC');
    $this->db->where('status',"Masuk");
    return $this->db->get();
}






public function simpan_mutasisiswa($data)
{
    return $this->db->insert("mutasisiswa", $data);
}

    // HAPUS MUTASI SISWA-------------------------------------------
    public function hapus_mutasisiswakeluar($id_mutasisiswa)
    {
        return $this->db->delete("mutasisiswa", $id_mutasisiswa);
    }

public function get_cetakmutasi($id_siswa)
{
    $this->db->select('*');
    $this->db->from('mutasisiswa');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = mutasisiswa.id_siswa');
    $this->db->where('id_siswa',$id_siswa);
    return $this->db->get();
}
// ----------------------------------------------------------










// UNDANGAN ORTU-------------------------------------------

public function get_dataundanganortu()
{
    $this->db->select('*');
    $this->db->from('undanganortu');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = undanganortu.id_siswa');
    $this->db->order_by('tanggal', 'ASC');
    return $this->db->get();
}

public function get_printundanganortu($id_siswa)
{
    $this->db->select('*');
    $this->db->from('undanganortu');
    $this->db->join('pendaftar', 'pendaftar.id_pendaftar = undanganortu.id_siswa');
	$this->db->where('id_siswa',$id_siswa);
    $this->db->order_by('tanggal', 'ASC');
    return $this->db->get();
}


public function simpan_undanganortu($data)
{
    return $this->db->insert("undanganortu", $data);
}

public function hapus_undanganortu($id_undanganortu)
{
    return $this->db->delete("undanganortu", $id_undanganortu);

}





    public function get_pelanggaran()
    {
        $this->db->select('*');
        $this->db->from('kasus');
        $this->db->order_by('id_kasus', 'DESC');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = kasus.siswa_id');
        return $this->db->get();
    }

 
    public function simpan_pelanggaran($data)
    {
        return $this->db->insert("kasus", $data);
    }
    


    public function hapus_pelanggaran($id_kasus)
    {
        return $this->db->delete("kasus", $id_kasus);

    }

    public function get_cetakpelanggaran()
    {
        $this->db->select('*');
        $this->db->from('kasus');
        $this->db->join('pendaftar', 'pendaftar.id_pendaftar = kasus.siswa_id');
        $this->db->order_by('nama_lengkap', 'ASC');
        return $this->db->get();
    }

    function getdatasiswa()
    {
        $query = $this->db->query("SELECT * FROM pendaftar ORDER BY siswa_kelas,nama_lengkap ASC");
        return $query->result();
    } 

    public function get_datakategoripelanggaran()
    {
        $this->db->select('*');
        $this->db->from('kategorikasus');
        $this->db->order_by('nama_kategorikasus', 'ASC');
        return $this->db->get();
    }
    
    public function simpan_kategoripelanggaran($data)
    {
        return $this->db->insert("kategorikasus", $data);
    }

    public function hapus_kategoripelanggaran($id_kategorikasus)
    {
        return $this->db->delete("kategorikasus", $id_kategorikasus);
    }


    public function setup()
	{
		$this->db->select('*');
        $this->db->from('setting');
		return $this->db->get();
	}

}
