<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('M_master');
        $this->load->model('m_pengaturan');
        //cek session dan level user
        if($this->admin->is_role() != "admin"){
            redirect("login");
        }
    }

    public function index()
    {
        $this->load->model('Admin');
        $data = array(
            'setting'        => $this->Admin->setup()->result(),
            'datapengguna'   => $this->Admin->get_pengguna()->result(),
            'data_profil'    => $this->Admin->get_profil()->result(),
            'dataprofil'     => $this->Admin->get_profil()->result(),
            'transportasi'   => $this->Admin->transportasi()->result(),
            'jumlahjarak'    => $this->Admin->jumlahjarak()->result(),
            'jumlahkelamin'  => $this->Admin->jumlahkelamin()->result(),
            'jumlahsarpras'  => $this->Admin->jumlahsarpras()->result(),
            'datatema'       => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'      => $this->m_pengaturan->get_temaaktif()->result(),
            'datasarpras'    => $this->Admin->get_sarpras()->result(),
            'datatamu'       => $this->Admin->get_tamu()->result(),
            'data_login'     => $this->Admin->get_login()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu.php', $data);
        $this->load->view('admin/dashboard', $data);     
        $this->load->view('_partials/footer');
    }
    
        public function hapussemualog()
    {
        $this->load->model('Admin');
        $this->Admin->hapus_semualog();
        $this->session->set_flashdata('hapus_berhasil','<i class="fas fa-check" ></i> Data Berhasil Dihapus Dari Database');
        redirect('admin/dashboard');
    }



    public function updatesiswa()
    {
       //load model
       $this->load->model('m_master');
    
       //get data dari form
       $id_pendaftar['id_pendaftar']    = $this->input->post("id_pendaftar");
       $nis                             = $this->input->post('nis');
       $nisn                            = $this->input->post('nisn');
       $nik                             = $this->input->post('nik');
       $nokk                            = $this->input->post('nokk');
       $nama_lengkap                    = $this->input->post('nama_lengkap');
       $tempatlahir                     = $this->input->post('tempatlahir');
       $tanggallahir                    = $this->input->post('tanggallahir');
       $jeniskelamin                    = $this->input->post('jeniskelamin');
       $agama                           = $this->input->post('agama');
       $hobi                            = $this->input->post('hobi');
       $citacita                        = $this->input->post('citacita');
       $anakke                          = $this->input->post('anakke');
       $jumlahsaudara                   = $this->input->post('jumlahsaudara');
       $jarakkesekolah                  = $this->input->post('jarakkesekolah');
       $transportasi                    = $this->input->post('transportasi');
       $siswa_alamat                    = $this->input->post('siswa_alamat');
       $siswa_desakel                   = $this->input->post('siswa_desakel');
       $siswa_kecamatan                 = $this->input->post('siswa_kecamatan');
       $siswa_kabupaten                 = $this->input->post('siswa_kabupaten');
       $siswa_provinsi                  = $this->input->post('siswa_provinsi');
       $siswa_kodepos                   = $this->input->post('siswa_kodepos');
       $siswa_tinggal                   = $this->input->post('siswa_tinggal');
       $siswa_nohp                      = $this->input->post('siswa_nohp');
       $email                           = $this->input->post('email');
       $kewarganegaraan                 = $this->input->post('kewarganegaraan');
       $username                        = $this->input->post('username');
       $password                        = $this->input->post('password');
	   $siswa_tingkat                   = $this->input->post('siswa_tingkat');
       $siswa_kelas                     = $this->input->post('siswa_kelas');
       $siswa_nomorabsen                = $this->input->post('siswa_nomorabsen');
       $status_anakyatim                = $this->input->post('status_anakyatim');
       $pendukung_golongandarah         = $this->input->post('pendukung_golongandarah');
       $pendukung_penyakit              = $this->input->post('pendukung_penyakit');
       $pendukung_kelainanjasmani       = $this->input->post('pendukung_kelainanjasmani');
       $pendukung_tinggibadan           = $this->input->post('pendukung_tinggibadan');
       $pendukung_beratbadan            = $this->input->post('pendukung_beratbadan');
       $kegemaran_kesenian              = $this->input->post('kegemaran_kesenian');
       $kegemaran_olahraga              = $this->input->post('kegemaran_olahraga');
       $kegemaran_organisasi            = $this->input->post('kegemaran_organisasi');
       $kegemaran_lainlain              = $this->input->post('kegemaran_lainlain');
       $beasiswa_nama                   = $this->input->post('beasiswa_nama');
       $beasiswa_tahun                  = $this->input->post('beasiswa_tahun');
       $beasiswa_nominal                = $this->input->post('beasiswa_nominal');
       $lulus_tahun                     = $this->input->post('lulus_tahun');
       $lulus_tanggalijazah             = $this->input->post('lulus_tanggalijazah');
       $lulus_noijazah                  = $this->input->post('lulus_noijazah');
       $lulus_tanggalskhu               = $this->input->post('lulus_tanggalskhu');
       $lulus_noskhu                    = $this->input->post('lulus_noskhu');

       $lanjut_nama                    = $this->input->post('lanjut_nama');
       $lanjut_bekerja                 = $this->input->post('lanjut_bekerja');
       $lanjut_bekerjamulai            = $this->input->post('lanjut_bekerjamulai');
       $lanjut_bekerjaperusahaan       = $this->input->post('lanjut_bekerjaperusahaan');
       $lanjut_penghasilan             = $this->input->post('lanjut_penghasilan');


       $data = array(
        'nis'                           =>$nis,
        'nisn'                          =>$nisn,
        'nik'                           =>$nik,
        'nokk'                          =>$nokk,
        'nama_lengkap'                  =>$nama_lengkap,
        'tempatlahir'                   =>$tempatlahir,
        'tanggallahir'                  =>$tanggallahir,
        'jeniskelamin'                  =>$jeniskelamin,
        'agama'                         =>$agama,
        'hobi'                          =>$hobi,
        'citacita'                      =>$citacita,
        'anakke'                        =>$anakke,
        'jumlahsaudara'                 =>$jumlahsaudara,
        'jarakkesekolah'                =>$jarakkesekolah,
        'transportasi'                  =>$transportasi,
        'siswa_alamat'                  =>$siswa_alamat,
        'siswa_desakel'                 =>$siswa_desakel,
        'siswa_kecamatan'               =>$siswa_kecamatan,
        'siswa_kabupaten'               =>$siswa_kabupaten,
        'siswa_provinsi'                =>$siswa_provinsi,
        'siswa_kodepos'                 =>$siswa_kodepos,
        'siswa_tinggal'                 =>$siswa_tinggal,
        'siswa_nohp'                    =>$siswa_nohp,
        'email'                         =>$email,
        'kewarganegaraan'               =>$kewarganegaraan,
        'status_anakyatim'              =>$status_anakyatim,
        'pendukung_golongandarah'       =>$pendukung_golongandarah,
        'pendukung_penyakit'            =>$pendukung_penyakit,
        'pendukung_kelainanjasmani'     =>$pendukung_kelainanjasmani,
        'pendukung_tinggibadan'         =>$pendukung_tinggibadan,
        'pendukung_beratbadan'          =>$pendukung_beratbadan,
        'username'                      =>$username,
        'password'                      =>$password,
		'siswa_tingkat'                 =>$siswa_tingkat,
        'siswa_kelas'                   =>$siswa_kelas,
        'siswa_nomorabsen'              =>$siswa_nomorabsen,

        'kegemaran_kesenian'            =>$kegemaran_kesenian,
        'kegemaran_olahraga'            =>$kegemaran_olahraga,
        'kegemaran_organisasi'          =>$kegemaran_organisasi,
        'kegemaran_lainlain'            =>$kegemaran_lainlain,
        'beasiswa_nama'                 =>$beasiswa_nama,
        'beasiswa_tahun'                =>$beasiswa_tahun,
        'beasiswa_nominal'              =>$beasiswa_nominal,
        'lulus_tahun'                   =>$lulus_tahun,
        'lulus_tanggalijazah'           =>$lulus_tanggalijazah,
        'lulus_noijazah'                =>$lulus_noijazah,
        'lulus_tanggalskhu'             =>$lulus_tanggalskhu,
        'lulus_noskhu'                  =>$lulus_noskhu,

        'lanjut_nama'                   =>$lanjut_nama,
        'lanjut_bekerja'                =>$lanjut_bekerja,
        'lanjut_bekerjamulai'           =>$lanjut_bekerjamulai,
        'lanjut_bekerjaperusahaan'      =>$lanjut_bekerjaperusahaan,
        'lanjut_penghasilan'            =>$lanjut_penghasilan
       
       );
       $id = $_POST['id_pendaftar']; 
       $this->m_master->update_siswa($data, $id_pendaftar);
       redirect('master/editsiswa/'. "$id");
    }





    public function updateorangtua()
    {
       //load model
       $this->load->model('m_master');
    
       //get data dari form
       $id_pendaftar['id_pendaftar']    = $this->input->post("id_pendaftar");
       $ayah_nik                        = $this->input->post('ayah_nik');
       $ayah_nama                       = $this->input->post('ayah_nama');
       $ayah_alamat                     = $this->input->post('ayah_alamat');
       $ayah_desakel                    = $this->input->post('ayah_desakel');
       $ayah_kecamatan                  = $this->input->post('ayah_kecamatan');
       $ayah_kabupaten                  = $this->input->post('ayah_kabupaten');
       $ayah_provinsi                   = $this->input->post('ayah_provinsi');
       $ayah_kodepos                    = $this->input->post('ayah_kodepos');
       $ayah_tempatlahir                = $this->input->post('ayah_tempatlahir');
       $ayah_tanggallahir               = $this->input->post('ayah_tanggallahir');
       $ayah_agama                      = $this->input->post('ayah_agama');
       $ayah_kewarganegaraan            = $this->input->post('ayah_kewarganegaraan');
       $ayah_pendidikan                 = $this->input->post('ayah_pendidikan');
       $ayah_pekerjaan                  = $this->input->post('ayah_pekerjaan');
       $ayah_penghasilan                = $this->input->post('ayah_penghasilan');
       $ayah_nohp                       = $this->input->post('ayah_nohp');
       $ayah_status                     = $this->input->post('ayah_status');
       
       $ibu_nik                         = $this->input->post('ibu_nik');
       $ibu_nama                        = $this->input->post('ibu_nama');
       $ibu_alamat                      = $this->input->post('ibu_alamat');
       $ibu_desakel                     = $this->input->post('ibu_desakel');
       $ibu_kecamatan                   = $this->input->post('ibu_kecamatan');
       $ibu_kelurahan                   = $this->input->post('ibu_kelurahan');
       $ibu_kabupaten                   = $this->input->post('ibu_kabupaten');
       $ibu_provinsi                    = $this->input->post('ibu_provinsi');
       $ibu_kodepos                     = $this->input->post('ibu_kodepos');
       $ibu_nohp                        = $this->input->post('ibu_nohp');
       $ibu_tempatlahir                 = $this->input->post('ibu_tempatlahir');
       $ibu_tanggallahir                = $this->input->post('ibu_tanggallahir');
       $ibu_agama                       = $this->input->post('ibu_agama');
       $ibu_kewarganegaraan             = $this->input->post('ibu_kewarganegaraan');
       $ibu_pendidikan                  = $this->input->post('ibu_pendidikan');
       $ibu_pekerjaan                   = $this->input->post('ibu_pekerjaan');
       $ibu_penghasilan                 = $this->input->post('ibu_penghasilan');
       $ibu_status                      = $this->input->post('ibu_status');
       
       $wali_nik                        = $this->input->post('wali_nik');
       $wali_alamat                     = $this->input->post('wali_alamat');
       $wali_nohp                       = $this->input->post('wali_nohp');
       $wali_nama                       = $this->input->post('wali_nama');
       $wali_tempatlahir                = $this->input->post('wali_tempatlahir');
       $wali_tanggallahir               = $this->input->post('wali_tanggallahir');
       $wali_agama                      = $this->input->post('wali_agama');
       $wali_kewarganegaraan            = $this->input->post('wali_kewarganegaraan');
       $wali_pendidikan                 = $this->input->post('wali_pendidikan');
       $wali_pekerjaan                  = $this->input->post('wali_pekerjaan');
       $wali_penghasilan                = $this->input->post('wali_penghasilan');
       $wali_status                     = $this->input->post('wali_status');


       $data                            = array(
        'ayah_nik'                           =>$ayah_nik,
        'ayah_nama'                          =>$ayah_nama,
        'ayah_alamat'                        =>$ayah_alamat,
        'ayah_desakel'                       =>$ayah_desakel,
        'ayah_kecamatan'                     =>$ayah_kecamatan,
        'ayah_kabupaten'                     =>$ayah_kabupaten,
        'ayah_provinsi'                      =>$ayah_provinsi,
        'ayah_kodepos'                       =>$ayah_kodepos,
        'ayah_tempatlahir'                   =>$ayah_tempatlahir,
        'ayah_tanggallahir'                  =>$ayah_tanggallahir,
        'ayah_agama'                         =>$ayah_agama,
        'ayah_kewarganegaraan'               =>$ayah_kewarganegaraan,
        'ayah_pendidikan'                    =>$ayah_pendidikan,
        'ayah_pekerjaan'                     =>$ayah_pekerjaan,
        'ayah_penghasilan'                   =>$ayah_penghasilan,
        'ayah_nohp'                          =>$ayah_nohp,
        'ayah_status'                        =>$ayah_status,

        'ibu_nik'                            =>$ibu_nik,
        'ibu_nama'                           =>$ibu_nama,
        'ibu_alamat'                         =>$ibu_alamat,
        'ibu_desakel'                       =>$ibu_desakel,
        'ibu_kecamatan'                     =>$ibu_kecamatan,
        'ibu_kabupaten'                     =>$ibu_kabupaten,
        'ibu_provinsi'                      =>$ibu_provinsi,
        'ibu_kodepos'                       =>$ibu_kodepos,
        'ibu_tempatlahir'                    =>$ibu_tempatlahir,
        'ibu_tanggallahir'                   =>$ibu_tanggallahir,
        'ibu_agama'                          =>$ibu_agama,
        'ibu_kewarganegaraan'                =>$ibu_kewarganegaraan,
        'ibu_pendidikan'                     =>$ibu_pendidikan,
        'ibu_pekerjaan'                      =>$ibu_pekerjaan,
        'ibu_penghasilan'                    =>$ibu_penghasilan,
        'ibu_nohp'                           =>$ibu_nohp,
        'ibu_status'                         =>$ibu_status,
        'wali_nik'                           =>$wali_nik,
        'wali_alamat'                        =>$wali_alamat,
        'wali_nohp'                          =>$wali_nohp,
        'wali_nama'                          =>$wali_nama,
        'wali_tempatlahir'                   =>$wali_tempatlahir,
        'wali_tanggallahir'                  =>$wali_tanggallahir,
        'wali_agama'                         =>$wali_agama,
        'wali_kewarganegaraan'               =>$wali_kewarganegaraan,
        'wali_pendidikan'                    =>$wali_pendidikan,
        'wali_pekerjaan'                     =>$wali_pekerjaan,
        'wali_penghasilan'                   =>$wali_penghasilan,
        'wali_status'                        =>$wali_status


       );
      
       $id = $_POST['id_pendaftar']; 
       $this->m_master->update_siswa($data, $id_pendaftar);
       redirect('master/editsiswa/'. "$id");
    }



    public function updateasalsekolah()
    {
       //load model
       $this->load->model('m_master');
    
       //get data dari form
       $id_pendaftar['id_pendaftar']    = $this->input->post("id_pendaftar");
       $asal_sekolah                    = $this->input->post('asal_sekolah');
       $asal_noskhu                     = $this->input->post('asal_noskhu');
       $asal_noijazah                   = $this->input->post('asal_noijazah');
       $asal_nilaiun                    = $this->input->post('asal_nilaiun');
       $asal_tanggal                    = $this->input->post('asal_tanggal');
       $asal_lamapendidikan             = $this->input->post('asal_lamapendidikan');
       $pindahan_asalsekolah            = $this->input->post('pindahan_asalsekolah');
       $pindahan_alasan                 = $this->input->post('pindahan_alasan');
       $pindahan_tanggal                = $this->input->post('pindahan_tanggal');

       $data                            = array(
        'asal_sekolah'                  =>$asal_sekolah,
        'asal_noskhu'                   =>$asal_noskhu,
        'asal_noijazah'                 =>$asal_noijazah,
        'asal_nilaiun'                  =>$asal_nilaiun,
        'asal_tanggal'                  =>$asal_tanggal,
        'asal_lamapendidikan'           =>$asal_lamapendidikan,
        'pindahan_asalsekolah'          =>$pindahan_asalsekolah,
        'pindahan_alasan'               =>$pindahan_alasan,
        'pindahan_tanggal'              =>$pindahan_tanggal
       
       );
      
       $id = $_POST['id_pendaftar']; 
       $this->m_master->update_siswa($data, $id_pendaftar);
       redirect('master/editsiswa/'. "$id");
    }




    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    
  





}
