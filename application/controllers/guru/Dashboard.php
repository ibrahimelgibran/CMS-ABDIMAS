<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('guru');
        $this->load->model('m_pengaturan');
        //cek session dan level user
        if($this->guru->is_role() != "guru"){
            redirect("loginguru");
        }
    }











//---------------------------------------------------------------------------------------------- SUDAH FIX
    public function index()
    {
        
        $this->load->model('Guru');
        $data = array(
            'setting'     => $this->Guru->setup()->result(),
            'datatema'    => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
            'data_profil' => $this->Guru->get_profil()->result(),
            'dataprofil'  => $this->Guru->get_profil()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_guru');
        $this->load->view('guru/dashboard', $data);       
        $this->load->view('_partials/footer');
    }
//---------------------------------------------------------------------------------------------- 




//---------------------------------------------------------------------------------------------- SUDAH FIX MENU INFORMASI PROBADI
    public function biodata()
    {
          $this->load->model('Guru');

          $data = array(
              'setting'     => $this->Guru->setup()->result(),
              'datatema'     => $this->m_pengaturan->get_tema()->result(),
              'temaaktif'    => $this->m_pengaturan->get_temaaktif()->result(),
              'data_biodata' => $this->Guru->get_biodata()->result(),
              'dataprofil'   => $this->Guru->get_profil()->result(),
          );
          
          $this->load->view('_partials/header', $data);
          $this->load->view('_partials/menu/menu_guru');
          $this->load->view('guru/biodata', $data);
          $this->load->view('_partials/footer');
    }
//---------------------------------------------------------------------------------------------- 
    

   
    
//---------------------------------------------------------------------------------------------- SUDAH FIX UPDATE MENU INFORMASI PROBADI
    public function updatebiodata()
    {
        $this->load->model('guru');
        $id_guru['id_guru']    = $this->input->post("id_guru");
        $nama_guru             = $this->input->post('nama_guru');
        $jeniskelamin          = $this->input->post('jeniskelamin');
        $nip                   = $this->input->post('nip');
        $alamat                = $this->input->post('alamat');
        $email                 = $this->input->post('email');
        $notelp                = $this->input->post('notelp');
        $golongan              = $this->input->post('golongan');
        $jenisjabatan          = $this->input->post('jenisjabatan');
        $namamapel             = $this->input->post('namamapel');
        $status_guru           = $this->input->post('status_guru');
        $kelasmengajar         = $this->input->post('kelasmengajar');

        $config['upload_path']          = './upload/fotoguru';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_guru');
        
        $data = array(
            'nama_guru'         =>$nama_guru,
            'jeniskelamin'      =>$jeniskelamin,
            'nip'               =>$nip,
            'alamat'            =>$alamat,
            'email'             =>$email,
            'notelp'            =>$notelp,
            'golongan'          =>$golongan,
            'jenisjabatan'      =>$jenisjabatan,
            'namamapel'         =>$namamapel,
            'status_guru'       =>$status_guru,
            'kelasmengajar'     =>$kelasmengajar

    );
    $this->guru->update_biodata($data, $id_guru);
    redirect('guru/dashboard/biodata');
    }
//---------------------------------------------------------------------------------------------- 
    



//---------------------------------------------------------------------------------------------- SUDAH FIX MENU FOTO PRIBADI
public function biodatafoto($id_guru)
{
      $this->load->model('Guru');
      $id_guru = $this->uri->segment(4);
      $data = array(
        'setting'     => $this->Guru->setup()->result(),
          'datatema'     => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'    => $this->m_pengaturan->get_temaaktif()->result(),
          'data_biodata' => $this->Guru->get_biodata()->result(),
          'dataprofil'   => $this->Guru->get_profil()->result()
      );
      
      $this->load->view('_partials/header', $data);
      $this->load->view('_partials/menu/menu_guru');
      $this->load->view('guru/biodatafoto', $data);
      $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------- 




//---------------------------------------------------------------------------------------------- SUDAH FIX UPDATE FOTO PRIBADI
public function updatebiodatafoto()
{
    $ses                        = $this->session->userdata('user_id');
    $where['id_guru']           = $ses;
    $in['id_guru']              = $this->input->post("id_guru");
    $config['upload_path']      = './upload/fotoguru';
    $config['allowed_types']    = 'jpg|png|jpeg';
    $config['encrypt_name']     = TRUE;
    $config['remove_spaces']    = TRUE;
    $config['max_size']         = '0';
    $config['max_width']        = '0';
    $config['max_height']       = '0';

    $this->load->library('upload', $config);


    if(!empty($_FILES['foto_guru']['name'])) {
    if($this->upload->do_upload("foto_guru")) {
        $data	 	= $this->upload->data();
        $in['foto_guru'] = $data['file_name'];	
        $this->db->update("guru", $in, $where);
        @unlink("./upload/fotoguru".$this->input->post("logo_lama"));
        $this->session->set_flashdata("success","Update Identitas Sekolah Berhasil");
        redirect("guru/dashboard/biodatafoto/$ses");	
    } else {
        $this->session->set_flashdata("error",$this->upload->display_errors());
        redirect("guru/dashboard/biodatafoto/$ses");	
    }
    } else {
    $this->db->update("guru", $in, $where);
    $this->session->set_flashdata('pemberitahuan_berhasil','<i class="feather icon-check-circle mr-2"></i> Data Lembaga Berhasil Diperbaharui');
    redirect("guru/dashboard/biodatafoto/$ses");
    }

}
//---------------------------------------------------------------------------------------------- 











//--------------------------------------------------------------------------------------------------------- SUDAH FIX MENU RAPOR SEMESTER 1
public function datatahunsmt1()
{
    $this->load->model('Guru');
    $data = array(
        'setting'     => $this->Guru->setup()->result(),
        'datatema'          => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
        'datatahun'         => $this->Guru->get_datadatatahun()->result(),
        'dataprofil'        => $this->Guru->get_profil()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester1/datatahun', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX MENU RAPOR SEMESTER 2
public function datatahunsmt2()
{
    $this->load->model('Guru');
    $data = array(
        'setting'     => $this->Guru->setup()->result(),
        'datatema'          => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
        'datatahun'         => $this->Guru->get_datadatatahun()->result(),
        'dataprofil'        => $this->Guru->get_profil()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester2/datatahun', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX MENU RAPOR SEMESTER 3
public function datatahunsmt3()
{
    $this->load->model('Guru');
    $data = array(
        'setting'     => $this->Guru->setup()->result(),
        'datatema'          => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
        'datatahun'         => $this->Guru->get_datadatatahun()->result(),
        'dataprofil'        => $this->Guru->get_profil()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester3/datatahun', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX MENU RAPOR SEMESTER 4
public function datatahunsmt4()
{
    $this->load->model('Guru');
    $data = array(
        'setting'     => $this->Guru->setup()->result(),
        'datatema'          => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
        'datatahun'         => $this->Guru->get_datadatatahun()->result(),
        'dataprofil'        => $this->Guru->get_profil()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester4/datatahun', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX MENU RAPOR SEMESTER 5
public function datatahunsmt5()
{
    $this->load->model('Guru');
    $data = array(
        'setting'     => $this->Guru->setup()->result(),
        'datatema'          => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
        'datatahun'         => $this->Guru->get_datadatatahun()->result(),
        'dataprofil'        => $this->Guru->get_profil()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester5/datatahun', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX MENU RAPOR SEMESTER 6
public function datatahunsmt6()
{
    $this->load->model('Guru');
    $data = array(
        'setting'     => $this->Guru->setup()->result(),
        'datatema'          => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
        'datatahun'         => $this->Guru->get_datadatatahun()->result(),
        'dataprofil'        => $this->Guru->get_profil()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester6/datatahun', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------











//--------------------------------------------------------------------------------------------------------- SUDAH FIX KELAS SEMESTER 1
public function datakelasmengajarsmt1($tahun)
{
    $this->load->model('Guru');
    $tahun = $this->uri->segment(4);
    $data = array(
        'setting'     => $this->Guru->setup()->result(),
        'datatema'          => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
        'datakelasmengajar' => $this->Guru->get_kelasmengajarsmt1($tahun)->result(),
        'datakelas'         => $this->Guru->get_datakelas()->result(),
        'datamapel'         => $this->Guru->get_datamapel()->result(),
        'datasemester'      => $this->Guru->get_datasemester()->result(),
        'dataprofil'        => $this->Guru->get_profil()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester1/datakelasmengajarsmt1', $data);
    $this->load->view('_partials/footer');
}

public function hapusraporkelas($id_dataguru, $tahun)
{
  $this->load->model('Guru');
  $tahun = $this->uri->segment(5);
  $data = array(
      'datakelasmengajar' => $this->Guru->get_kelasmengajarsmt1($tahun)->result(),
  );
   $id['id_dataguru'] = $this->uri->segment(4);
   $this->Guru->hapus_raporkelas($id);
   redirect('guru/dashboard/datakelasmengajarsmt1/'. "$tahun");
}
//--------------------------------------------------------------------------------------------------------- 




//--------------------------------------------------------------------------------------------------------- SUDAH FIX KELAS SEMESTER 2
public function datakelasmengajarsmt2()
{
      $this->load->model('Guru');
      $data = array(
        'setting'     => $this->Guru->setup()->result(),
          'datatema'          => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelasmengajar' => $this->Guru->get_kelasmengajarsmt2()->result(),
          'datakelas'         => $this->Guru->get_datakelas()->result(),
          'datamapel'         => $this->Guru->get_datamapel()->result(),
          'datasemester'      => $this->Guru->get_datasemester()->result(),
          'dataprofil'        => $this->Guru->get_profil()->result()
      );
      $this->load->view('_partials/header', $data);
      $this->load->view('_partials/menu/menu_guru');
      $this->load->view('guru/semester2/datakelasmengajarsmt2', $data);
      $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX KELAS SEMESTER 3
public function datakelasmengajarsmt3()
{
      $this->load->model('Guru');
      $data = array(
        'setting'     => $this->Guru->setup()->result(),
          'datatema'          => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelasmengajar' => $this->Guru->get_kelasmengajarsmt3()->result(),
          'datakelas'         => $this->Guru->get_datakelas()->result(),
          'datamapel'         => $this->Guru->get_datamapel()->result(),
          'datasemester'      => $this->Guru->get_datasemester()->result(),
          'dataprofil'        => $this->Guru->get_profil()->result()
      );
      $this->load->view('_partials/header', $data);
      $this->load->view('_partials/menu/menu_guru');
      $this->load->view('guru/semester3/datakelasmengajarsmt3', $data);
      $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX KELAS SEMESTER 4
public function datakelasmengajarsmt4()
{
      $this->load->model('Guru');
      $data = array(
        'setting'     => $this->Guru->setup()->result(),
          'datatema'          => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelasmengajar' => $this->Guru->get_kelasmengajarsmt4()->result(),
          'datakelas'         => $this->Guru->get_datakelas()->result(),
          'datamapel'         => $this->Guru->get_datamapel()->result(),
          'datasemester'      => $this->Guru->get_datasemester()->result(),
          'dataprofil'        => $this->Guru->get_profil()->result()
      );
      $this->load->view('_partials/header', $data);
      $this->load->view('_partials/menu/menu_guru');
      $this->load->view('guru/semester4/datakelasmengajarsmt4', $data);
      $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX KELAS SEMESTER 5
public function datakelasmengajarsmt5()
{
      $this->load->model('Guru');
      $data = array(
        'setting'     => $this->Guru->setup()->result(),
          'datatema'          => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelasmengajar' => $this->Guru->get_kelasmengajarsmt5()->result(),
          'datakelas'         => $this->Guru->get_datakelas()->result(),
          'datamapel'         => $this->Guru->get_datamapel()->result(),
          'datasemester'      => $this->Guru->get_datasemester()->result(),
          'dataprofil'        => $this->Guru->get_profil()->result()
      );
      $this->load->view('_partials/header', $data);
      $this->load->view('_partials/menu/menu_guru');
      $this->load->view('guru/semester5/datakelasmengajarsmt5', $data);
      $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------- SUDAH FIX KELAS SEMESTER 6
public function datakelasmengajarsmt6()
{
      $this->load->model('Guru');
      $data = array(
        'setting'     => $this->Guru->setup()->result(),
          'datatema'          => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelasmengajar' => $this->Guru->get_kelasmengajarsmt6()->result(),
          'datakelas'         => $this->Guru->get_datakelas()->result(),
          'datamapel'         => $this->Guru->get_datamapel()->result(),
          'datasemester'      => $this->Guru->get_datasemester()->result(),
          'dataprofil'        => $this->Guru->get_profil()->result()
      );
      $this->load->view('_partials/header', $data);
      $this->load->view('_partials/menu/menu_guru');
      $this->load->view('guru/semester6/datakelasmengajarsmt6', $data);
      $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------










//--------------------------------------------------------------------------------------------------------- SUDAH FIX NILAI SEMESTER 1
public function nilaismt1($kode_mapel, $kode_kelas)
{
    $this->load->model('Guru');
    $kode_mapel = $this->uri->segment(4);
    $kode_kelas = $this->uri->segment(5);
    $data        = array(
        'setting'     => $this->Guru->setup()->result(),
      'dataprofil'  => $this->guru->get_profil()->result(),
      'datatema'    => $this->m_pengaturan->get_tema()->result(),
      'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
      'nilai_smt1'  => $this->Guru->get_datarapor1($kode_mapel, $kode_kelas)->result()
    );
    
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester1/nilaismt1', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------- SUDAH FIX NILAI SEMESTER 2
public function nilaismt2($kode_mapel, $kode_kelas)
{
    $this->load->model('Guru');
    $kode_mapel = $this->uri->segment(4);
    $kode_kelas = $this->uri->segment(5);
    $data        = array(
        'setting'     => $this->Guru->setup()->result(),
      'dataprofil'  => $this->guru->get_profil()->result(),
      'datatema'    => $this->m_pengaturan->get_tema()->result(),
      'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
      'nilai_smt2'  => $this->Guru->get_datarapor2($kode_mapel, $kode_kelas)->result()
    );
    
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester2/nilaismt2', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------- SUDAH FIX NILAI SEMESTER 3
public function nilaismt3($kode_mapel, $kode_kelas)
{
    $this->load->model('Guru');
    $kode_mapel = $this->uri->segment(4);
    $kode_kelas = $this->uri->segment(5);
    $data        = array(
        'setting'     => $this->Guru->setup()->result(),
      'dataprofil'  => $this->guru->get_profil()->result(),
      'datatema'    => $this->m_pengaturan->get_tema()->result(),
      'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
      'nilai_smt3'  => $this->Guru->get_datarapor3($kode_mapel, $kode_kelas)->result()
    );
    
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester3/nilaismt3', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------- SUDAH FIX NILAI SEMESTER 4
public function nilaismt4($kode_mapel, $kode_kelas)
{
    $this->load->model('Guru');
    $kode_mapel = $this->uri->segment(4);
    $kode_kelas = $this->uri->segment(5);
    $data        = array(
        'setting'     => $this->Guru->setup()->result(),
      'dataprofil'  => $this->guru->get_profil()->result(),
      'datatema'    => $this->m_pengaturan->get_tema()->result(),
      'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
      'nilai_smt4'  => $this->Guru->get_datarapor4($kode_mapel, $kode_kelas)->result()
    );
    
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester4/nilaismt4', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------


//--------------------------------------------------------------------------------------------------------- SUDAH FIX NILAI SEMESTER 5
public function nilaismt5($kode_mapel, $kode_kelas)
{
    $this->load->model('Guru');
    $kode_mapel = $this->uri->segment(4);
    $kode_kelas = $this->uri->segment(5);
    $data        = array(
        'setting'     => $this->Guru->setup()->result(),
      'dataprofil'  => $this->guru->get_profil()->result(),
      'datatema'    => $this->m_pengaturan->get_tema()->result(),
      'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
      'nilai_smt5'  => $this->Guru->get_datarapor5($kode_mapel, $kode_kelas)->result()
    );
    
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester5/nilaismt5', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------


//--------------------------------------------------------------------------------------------------------- SUDAH FIX NILAI SEMESTER 6
public function nilaismt6($kode_mapel, $kode_kelas)
{
    $this->load->model('Guru');
    $kode_mapel = $this->uri->segment(4);
    $kode_kelas = $this->uri->segment(5);
    $data        = array(
        'setting'     => $this->Guru->setup()->result(),
      'dataprofil'  => $this->guru->get_profil()->result(),
      'datatema'    => $this->m_pengaturan->get_tema()->result(),
      'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
      'nilai_smt6'  => $this->Guru->get_datarapor6($kode_mapel, $kode_kelas)->result()
    );
    
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/semester6/nilaismt6', $data);
    $this->load->view('_partials/footer');
}
//---------------------------------------------------------------------------------------------------------










//--------------------------------------------------------------------------------------------------------- SUDAH FIX CETAK RAPOR SEMESTER 1
public function cetak_rapor1()
{
    $this->load->model('Guru');
    $this->load->model('m_beranda');
    $this->load->library('tcpdf_gen');
    $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
    $pdf->SetTitle('Rapor');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->addPage();
    $id_pendaftar = $this->uri->segment(4);
    $id_user      = $this->uri->segment(4);
    $data = array(
      'data_profil'      => $this->m_beranda->get_profil()->result(),
      'row'              => $this->Guru->get_cetakrapor1($id_pendaftar)->result(),
      'datarapormapela'  => $this->Guru->get_dataraporsmt1a($id_user)->result(),
      'datarapormapelb'  => $this->Guru->get_dataraporsmt1b($id_user)->result(),
      'datarapormapelc'  => $this->Guru->get_dataraporsmt1c($id_user)->result(),
      'dataraporekstra'  => $this->Guru->get_dataraporekstra1($id_user)->result(),
      'datasiswa'        => $this->Guru->get_dataraporsiswasmt1($id_user)->result(), 
    );
    $html = $this->load->view('cetak/rapor', $data, true);
    $pdf->writeHtml($html, true, false, true, false, '');    
    $pdf->lastPage();
    $pdf->output();
}
//---------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------- SUDAH FIX CETAK RAPOR SEMESTER 2
public function cetak_rapor2()
{
    $this->load->model('Guru');
    $this->load->model('m_beranda');
    $this->load->library('tcpdf_gen');
    $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
    $pdf->SetTitle('Rapor');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->addPage();
    $id_pendaftar = $this->uri->segment(4);
    $id_user      = $this->uri->segment(4);
    $data = array(
      'data_profil'      => $this->m_beranda->get_profil()->result(),
      'row'              => $this->Guru->get_cetakrapor2($id_pendaftar)->result(),
      'datarapormapela'  => $this->Guru->get_dataraporsmt2a($id_user)->result(),
      'datarapormapelb'  => $this->Guru->get_dataraporsmt2b($id_user)->result(),
      'datarapormapelc'  => $this->Guru->get_dataraporsmt2c($id_user)->result(),
      'dataraporekstra'  => $this->Guru->get_dataraporekstra1($id_user)->result(),
      'datasiswa'        => $this->Guru->get_dataraporsiswasmt2($id_user)->result(), 
    );
    $html = $this->load->view('cetak/rapor', $data, true);
    $pdf->writeHtml($html, true, false, true, false, '');    
    $pdf->lastPage();
    $pdf->output();
}
//---------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------- SUDAH FIX CETAK RAPOR SEMESTER 3
public function cetak_rapor3()
{
    $this->load->model('Guru');
    $this->load->model('m_beranda');
    $this->load->library('tcpdf_gen');
    $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
    $pdf->SetTitle('Rapor');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->addPage();
    $id_pendaftar = $this->uri->segment(4);
    $id_user      = $this->uri->segment(4);
    $data = array(
      'data_profil'      => $this->m_beranda->get_profil()->result(),
      'row'              => $this->Guru->get_cetakrapor3($id_pendaftar)->result(),
      'datarapormapela'  => $this->Guru->get_dataraporsmt3a($id_user)->result(),
      'datarapormapelb'  => $this->Guru->get_dataraporsmt3b($id_user)->result(),
      'datarapormapelc'  => $this->Guru->get_dataraporsmt3c($id_user)->result(),
      'dataraporekstra'  => $this->Guru->get_dataraporekstra1($id_user)->result(),
      'datasiswa'        => $this->Guru->get_dataraporsiswasmt3($id_user)->result(), 
    );
    $html = $this->load->view('cetak/rapor', $data, true);
    $pdf->writeHtml($html, true, false, true, false, '');    
    $pdf->lastPage();
    $pdf->output();
}
//---------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------- SUDAH FIX CETAK RAPOR SEMESTER 4
public function cetak_rapor4()
{
    $this->load->model('Guru');
    $this->load->model('m_beranda');
    $this->load->library('tcpdf_gen');
    $pdf = new TCPDF('P', 'pt', ['format' => 'F4', 'Rotate' => 260]);
    $pdf->SetTitle('Rapor');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->addPage();
    $id_pendaftar = $this->uri->segment(4);
    $id_user      = $this->uri->segment(4);
    $data = array(
      'data_profil'      => $this->m_beranda->get_profil()->result(),
      'row'              => $this->Guru->get_cetakrapor4($id_pendaftar)->result(),
      'datarapormapela'  => $this->Guru->get_dataraporsmt4a($id_user)->result(),
      'datarapormapelb'  => $this->Guru->get_dataraporsmt4b($id_user)->result(),
      'datarapormapelc'  => $this->Guru->get_dataraporsmt4c($id_user)->result(),
      'dataraporekstra'  => $this->Guru->get_dataraporekstra1($id_user)->result(),
      'datasiswa'        => $this->Guru->get_dataraporsiswasmt4($id_user)->result(), 
    );
    $html = $this->load->view('cetak/rapor', $data, true);
    $pdf->writeHtml($html, true, false, true, false, '');    
    $pdf->lastPage();
    $pdf->output();
}
//---------------------------------------------------------------------------------------------------------


























    public function dataekinerja()
    {
          $this->load->model('Guru');

          $data = array(
            'setting'     => $this->Guru->setup()->result(),
              'datatema'     => $this->m_pengaturan->get_tema()->result(),
              'temaaktif'    => $this->m_pengaturan->get_temaaktif()->result(),
              'data_ekinerja' => $this->Guru->get_ekinerja()->result(),
              'dataprofil'  => $this->Guru->get_profil()->result()
          );
          
          $this->load->view('_partials/header', $data);
          $this->load->view('_partials/menu/menu_guru');
          $this->load->view('guru/dataekinerja', $data);
          $this->load->view('_partials/footer');
    }
    
    public function simpandataekinerja()
    {

        $this->load->model('Guru');
  
        {
        $data['id_user']   = $this->session->userdata('user_id'); 
        $data['dari']      = $this->input->post('dari');
        $data['sampai']    = $this->input->post('sampai');

        $this->load->view('guru/dataekinerja',$data);
        $this->Guru->simpan_dataekinerja($data);
        redirect('guru/dashboard/dataekinerja');
        } 
    }




//Hapus Kinerja Guru
    public function hapusekinerja($id_ekinerja)
    {
      $this->load->model('Guru');
       $id['id_ekinerja'] = $this->uri->segment(4);
       $this->Guru->hapusekinerja($id);

       redirect('guru/dashboard/dataekinerja');
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////



//Data Kelas Mengajar
public function datakelasmengajar()
{
      $this->load->model('Guru');

      $data = array(
        'setting'     => $this->Guru->setup()->result(),
          'datatema'          => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'         => $this->m_pengaturan->get_temaaktif()->result(),
          'datakelasmengajar' => $this->Guru->get_kelasmengajar()->result(),
          'datakelas'         => $this->Guru->get_datakelas()->result(),
          'datamapel'         => $this->Guru->get_datamapel()->result(),
          'datasemester'      => $this->Guru->get_datasemester()->result(),
          'dataprofil'        => $this->Guru->get_profil()->result()
      );
      
      $this->load->view('_partials/header', $data);
      $this->load->view('_partials/menu/menu_guru');
      $this->load->view('guru/datakelasmengajar', $data);
      $this->load->view('_partials/footer');
}































//-------------------------------------------------------------------------------------------------- TAMBAH KELAS SEMESTER 1
public function simpankelasmengajarsmt1()
{

    $this->load->model('Guru');
    {
    $data['nip_guru']       = $this->session->userdata('user_nip'); 
    $data['kelas_guru']     = $this->input->post('kelas_guru');
    $data['mapel_guru']     = $this->input->post('mapel_guru');
    $data['semester_guru']  = $this->input->post('semester_guru');
    $data['nama_tahun']     = $this->input->post('nama_tahun');
    $this->load->view('guru/datakelasmengajar',$data);
    $tahun = $_POST['nama_tahun']; 
    $this->Guru->simpan_kelasmengajar($data);
    redirect('guru/dashboard/datakelasmengajarsmt1/'. "$tahun");
    } 
}
//--------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------- TAMBAH KELAS SEMESTER 2
public function simpankelasmengajarsmt2()
{
    $this->load->model('Guru');
    {
    $data['nip_guru']       = $this->session->userdata('user_nip'); 
    $data['kelas_guru']     = $this->input->post('kelas_guru');
    $data['mapel_guru']     = $this->input->post('mapel_guru');
    $data['semester_guru']  = $this->input->post('semester_guru');
    $this->load->view('guru/datakelasmengajar',$data);
    $this->Guru->simpan_kelasmengajar($data);
    redirect('guru/dashboard/datakelasmengajarsmt2');
    } 
}
//--------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------- TAMBAH KELAS SEMESTER 3
public function simpankelasmengajarsmt3()
{

    $this->load->model('Guru');
    {
    $data['nip_guru']       = $this->session->userdata('user_nip'); 
    $data['kelas_guru']     = $this->input->post('kelas_guru');
    $data['mapel_guru']     = $this->input->post('mapel_guru');
    $data['semester_guru']  = $this->input->post('semester_guru');
    $this->load->view('guru/datakelasmengajar',$data);
    $this->Guru->simpan_kelasmengajar($data);
    redirect('guru/dashboard/datakelasmengajarsmt3');
    } 
}
//--------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------- TAMBAH KELAS SEMESTER 4
public function simpankelasmengajarsmt4()
{

    $this->load->model('Guru');
    {
    $data['nip_guru']       = $this->session->userdata('user_nip'); 
    $data['kelas_guru']     = $this->input->post('kelas_guru');
    $data['mapel_guru']     = $this->input->post('mapel_guru');
    $data['semester_guru']  = $this->input->post('semester_guru');
    $this->load->view('guru/datakelasmengajar',$data);
    $this->Guru->simpan_kelasmengajar($data);
    redirect('guru/dashboard/datakelasmengajarsmt4');
    } 
}
//--------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------- TAMBAH KELAS SEMESTER 5
public function simpankelasmengajarsmt5()
{

    $this->load->model('Guru');
    {
    $data['nip_guru']       = $this->session->userdata('user_nip'); 
    $data['kelas_guru']     = $this->input->post('kelas_guru');
    $data['mapel_guru']     = $this->input->post('mapel_guru');
    $data['semester_guru']  = $this->input->post('semester_guru');
    $this->load->view('guru/datakelasmengajar',$data);
    $this->Guru->simpan_kelasmengajar($data);
    redirect('guru/dashboard/datakelasmengajarsmt5');
    } 
}
//--------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------- TAMBAH KELAS SEMESTER 6
public function simpankelasmengajarsmt6()
{

    $this->load->model('Guru');
    {
    $data['nip_guru']       = $this->session->userdata('user_nip'); 
    $data['kelas_guru']     = $this->input->post('kelas_guru');
    $data['mapel_guru']     = $this->input->post('mapel_guru');
    $data['semester_guru']  = $this->input->post('semester_guru');
    $this->load->view('guru/datakelasmengajar',$data);
    $this->Guru->simpan_kelasmengajar($data);
    redirect('guru/dashboard/datakelasmengajarsmt6');
    } 
}
//--------------------------------------------------------------------------------------------------



































public function uploadnilaismt1()
{
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    $config['upload_path'] = realpath('excel');
    $config['allowed_types'] = 'xlsx|xls|csv';
    $config['max_size'] = '10000';
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload()) {

        //upload gagal
        $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
        //redirect halaman
        redirect('guru/dashboard/datakelasmengajarsmt1/');

    } else {

        $data_upload = $this->upload->data();

        $excelreader                    = new PHPExcel_Reader_Excel2007();
        $loadexcel                      = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet                          = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        $id_kodemapel['id_kodemapel']   = $this->input->post("id_kodemapel");
        $data = array();
        $numrow = 1;
        foreach($sheet as $row){
                        if($numrow > 1){
                            array_push($data, array(
                                'id_user'           => $row['A'],
                                'nomor_absen'       => $row['B'],
                                'nama_siswa'        => $row['C'],
                                'kelas'             => $row['D'],
                                'mapel'             => $row['E'],
                                'kelompok'          => $row['F'],
                                'KKM'               => $row['G'],
                                'nilaipengetahuan'  => $row['H'],
                                'nilaiketerampilan' => $row['I'],
                                'deskripsi'         => $row['J'],
                                'tahun_ajaran'      => $row['K'],
                                'semester'          => $row['L'],
                                'id_kodemapel'      => $row['M'],
                            ));
                }
            $numrow++;
        }
        $this->db->insert_batch('rapor1', $data);
        //delete file from server
        unlink(realpath('excel/'.$data_upload['file_name']));
        $kodemapel = $row['M']; 
        $kelas = $row['D']; 
        $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
        redirect('guru/dashboard/nilaismt1/'. "$kodemapel" ."/". "$kelas");

    }
}





public function uploadnilaismt2()
{
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    $config['upload_path'] = realpath('excel');
    $config['allowed_types'] = 'xlsx|xls|csv';
    $config['max_size'] = '10000';
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload()) {

        //upload gagal
        $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
        //redirect halaman
        redirect('guru/dashboard/datakelasmengajarsmt2/');

    } else {

        $data_upload = $this->upload->data();
        $excelreader                    = new PHPExcel_Reader_Excel2007();
        $loadexcel                      = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet                          = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        $id_kodemapel['id_kodemapel']   = $this->input->post("id_kodemapel");
        $data = array();
        $numrow = 1;
        foreach($sheet as $row){
                        if($numrow > 1){
                            array_push($data, array(
                                'id_user'           => $row['A'],
                                'nomor_absen'       => $row['B'],
                                'nama_siswa'        => $row['C'],
                                'kelas'             => $row['D'],
                                'mapel'             => $row['E'],
                                'kelompok'          => $row['F'],
                                'KKM'               => $row['G'],
                                'nilaipengetahuan'  => $row['H'],
                                'nilaiketerampilan' => $row['I'],
                                'deskripsi'         => $row['J'],
                                'tahun_ajaran'      => $row['K'],
                                'semester'          => $row['L'],
                                'id_kodemapel'      => $row['M'],
                            ));
                }
            $numrow++;
        }
        $this->db->insert_batch('rapor2', $data);
        //delete file from server
        unlink(realpath('excel/'.$data_upload['file_name']));
        $kodemapel = $row['M']; 
        $kelas = $row['D']; 
        $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
        redirect('guru/dashboard/nilaismt2/'. "$kodemapel" ."/". "$kelas");

    }
}






public function uploadnilaismt3()
{
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    $config['upload_path'] = realpath('excel');
    $config['allowed_types'] = 'xlsx|xls|csv';
    $config['max_size'] = '10000';
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload()) {

        //upload gagal
        $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
        //redirect halaman
        redirect('guru/dashboard/datakelasmengajarsmt3/');

    } else {

        $data_upload = $this->upload->data();
        $excelreader                    = new PHPExcel_Reader_Excel2007();
        $loadexcel                      = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet                          = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        $id_kodemapel['id_kodemapel']   = $this->input->post("id_kodemapel");
        $data = array();
        $numrow = 1;
        foreach($sheet as $row){
                        if($numrow > 1){
                            array_push($data, array(
                                'id_user'           => $row['A'],
                                'nomor_absen'       => $row['B'],
                                'nama_siswa'        => $row['C'],
                                'kelas'             => $row['D'],
                                'mapel'             => $row['E'],
                                'kelompok'          => $row['F'],
                                'KKM'               => $row['G'],
                                'nilaipengetahuan'  => $row['H'],
                                'nilaiketerampilan' => $row['I'],
                                'deskripsi'         => $row['J'],
                                'tahun_ajaran'      => $row['K'],
                                'semester'          => $row['L'],
                                'id_kodemapel'      => $row['M'],
                            ));
                }
            $numrow++;
        }
        $this->db->insert_batch('rapor3', $data);
        //delete file from server
        unlink(realpath('excel/'.$data_upload['file_name']));
        $kodemapel = $row['M']; 
        $kelas = $row['D']; 
        $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
        redirect('guru/dashboard/nilaismt3/'. "$kodemapel" ."/". "$kelas");

    }
}




public function uploadnilaismt4()
{
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    $config['upload_path'] = realpath('excel');
    $config['allowed_types'] = 'xlsx|xls|csv';
    $config['max_size'] = '10000';
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload()) {

        //upload gagal
        $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
        //redirect halaman
        redirect('guru/dashboard/datakelasmengajarsmt4/');

    } else {

        $data_upload = $this->upload->data();
        $excelreader                    = new PHPExcel_Reader_Excel2007();
        $loadexcel                      = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet                          = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        $id_kodemapel['id_kodemapel']   = $this->input->post("id_kodemapel");
        $data = array();
        $numrow = 1;
        foreach($sheet as $row){
                        if($numrow > 1){
                            array_push($data, array(
                                'id_user'           => $row['A'],
                                'nomor_absen'       => $row['B'],
                                'nama_siswa'        => $row['C'],
                                'kelas'             => $row['D'],
                                'mapel'             => $row['E'],
                                'kelompok'          => $row['F'],
                                'KKM'               => $row['G'],
                                'nilaipengetahuan'  => $row['H'],
                                'nilaiketerampilan' => $row['I'],
                                'deskripsi'         => $row['J'],
                                'tahun_ajaran'      => $row['K'],
                                'semester'          => $row['L'],
                                'id_kodemapel'      => $row['M'],
                            ));
                }
            $numrow++;
        }
        $this->db->insert_batch('rapor4', $data);
        //delete file from server
        unlink(realpath('excel/'.$data_upload['file_name']));
        $kodemapel = $row['M']; 
        $kelas = $row['D']; 
        $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
        redirect('guru/dashboard/nilaismt4/'. "$kodemapel" ."/". "$kelas");

    }
}























//Fungsi ini sudah di Validasi -- Untuk Download Template Rapor pada mata pelajaran per kelas--
 public function downloadtemplatemapel($id_rapormapel, $kode_kelas)
 {
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('Hainur Cahya Utama')
                    ->setLastModifiedBy('Hainur Cahya Utama')
                    ->setTitle("Data Siswa")
                    ->setSubject("Siswa")
                    ->setDescription("Laporan Data Siswa")
                    ->setKeywords("Data Siswa");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
        'font' => array('bold' => true), // Set font nya jadi bold
        'alignment'  => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders'  => array(
        'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
    );

    $gayatengah = array(
        'font' => array('bold' => false), // Set font nya jadi bold
        'alignment'  => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
    'borders'  => array(
        'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
    );

    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row      = array(
        'alignment' => array(
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
        ),
        'borders' => array(
        'top'    => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right'  => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left'   => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
        )
    );

    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "Id Siswa"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B1', "Nomor Absen");
    $excel->setActiveSheetIndex(0)->setCellValue('C1', "Nama Siswa");
    $excel->setActiveSheetIndex(0)->setCellValue('D1', "Kode Kelas");
    $excel->setActiveSheetIndex(0)->setCellValue('E1', "Nama Mapel");
    $excel->setActiveSheetIndex(0)->setCellValue('F1', "Kelompok");
    $excel->setActiveSheetIndex(0)->setCellValue('G1', "KKM");
    $excel->setActiveSheetIndex(0)->setCellValue('H1', "Nilai Pengetahuan");
    $excel->setActiveSheetIndex(0)->setCellValue('I1', "Nilai Keterampilan");
    $excel->setActiveSheetIndex(0)->setCellValue('J1', "Deskripsi");
    $excel->setActiveSheetIndex(0)->setCellValue('K1', "Tahun Ajaran");
    $excel->setActiveSheetIndex(0)->setCellValue('L1', "Semester");
    $excel->setActiveSheetIndex(0)->setCellValue('M1', "Kode Mapel");


    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_col);

    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $id_rapormapel = $this->uri->segment(4);
    $kode_kelas    = $this->uri->segment(5);
    $siswa = $this->guru->download($id_rapormapel, $kode_kelas);
    $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
    $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->id_pendaftar);
    $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->siswa_nomorabsen);
    $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_lengkap);
    $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->siswa_kelas);
    $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->nama_mapel);
    $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->kelompok_mapel);
    $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->kkm);
    $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->kode_mapel);


    // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
    $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
    $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($gayatengah);
    $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($gayatengah);
    $numrow++; // Tambah 1 setiap kali looping
    }

    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(10); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(45);
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(40);
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(40);
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle('Template Rapor SMT 1');
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Template-Nilai-Rapor-SMT1.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
}


































    
    





 // EDIT SISWA ---------------------------------------------------------------------
 public function editskp()
 {
    $this->load->model('Guru');
    $data         = array(
        'setting'     => $this->Guru->setup()->result(),
        'datatema'      => $this->m_pengaturan->get_tema()->result(),
        'temaaktif'     => $this->m_pengaturan->get_temaaktif()->result(),
        'data_ekinerja' => $this->Guru->get_ekinerja()->result(),
        'dataprofil'    => $this->Guru->get_profil()->result(),
        'data_skp'      => $this->Guru->get_skp()->result()
    );
    $this->load->view('_partials/header', $data);
    $this->load->view('_partials/menu/menu_guru');
    $this->load->view('guru/editdataskp', $data);
    $this->load->view('_partials/footer');
 }

 public function simpanskp()
 {

     $this->load->model('Guru');

     {
     $data['id_user']         = $this->session->userdata('user_id'); 
     $data['ekinerja']        = $this->input->post('ekinerja');
     $data['nama_kegiatan']   = $this->input->post('nama_kegiatan');
     $data['targetkuantitas'] = $this->input->post('targetkuantitas');


     $this->load->view('guru/editdataskp',$data);
     $this->Guru->simpan_dataskp($data);
     redirect('guru/dashboard/editskp');
     } 
 }

 public function hapusskp($id_skp)
 {
   $this->load->model('Guru');
    $id['id_skp'] = $this->uri->segment(4);
    $this->Guru->hapusskp($id);

    redirect('guru/dashboard/editskp/');
 }











    
    
    public function updatejadwalmengajar()
    {
        $this->load->model('guru');
        
        $id_pengajar['id_pengajar']    = $this->input->post("id_pengajar");
        $mapel_jadwal             = $this->input->post('mapel_jadwal');
        $kelas_jadwal             = $this->input->post('kelas_jadwal');
        $awaljam_jadwal           = $this->input->post('awaljam_jadwal');
        $akhirjam_jadwal          = $this->input->post('akhirjam_jadwal');
        $hari_jadwal              = $this->input->post('hari_jadwal');
        
        $data = array(
            'mapel_jadwal'      =>$mapel_jadwal,
            'kelas_jadwal'      =>$kelas_jadwal,
            'awaljam_jadwal'      =>$awaljam_jadwal,
            'akhirjam_jadwal'      =>$akhirjam_jadwal,
            'hari_jadwal'      =>$hari_jadwal
    );
    $this->guru->update_jadwalmengajar($data, $id_pengajar);
    redirect('guru/dashboard/jadwalmengajar');
    }
    
    
    public function updatejurnalguru()
    {
        $this->load->model('guru');
        
        $id_jurnal['id_jurnal']    = $this->input->post("id_jurnal");
        $deskripsijurnal             = $this->input->post('deskripsijurnal');
        
        $data = array(
            'deskripsijurnal'      =>$deskripsijurnal
           
    );
    $this->guru->update_jurnalguru($data, $id_jurnal);
    redirect('guru/dashboard/jurnalguru');
    }
    
    public function jadwalmengajar()
    {
          $this->load->model('Guru');

          $data = array(
              'datahari'            => $this->Guru->get_datahari()->result(),
              'dataprofil'  => $this->Guru->get_profil()->result(),
          );
          
          $this->load->view('_partials/header', $data);
          $this->load->view('_partials/menu/menu_guru');
          $this->load->view('guru/jadwalmengajar', $data);
          $this->load->view('_partials/footer');
    }
    
    
    
    public function datajadwalmengajar()
    {
          $this->load->model('Guru');

          $data = array(
            'setting'     => $this->Guru->setup()->result(),
              'dataprofil'           => $this->Guru->get_profil()->result(),
              'data_jadwalmengajar' => $this->Guru->get_jadwalmengajar()->result(),
              'datamapel'           => $this->Guru->get_datamapel()->result(),
              'datakelas'           => $this->Guru->get_datakelas()->result(),
              'datahari'            => $this->Guru->get_datahari()->result()
          );
          
          $this->load->view('_partials/header', $data);
          $this->load->view('_partials/menu/menu_guru');
          $this->load->view('guru/jadwalmengajar', $data);
          $this->load->view('_partials/footer');
    }
    
    public function jurnalguru()
    {
          $this->load->model('Guru');

          $data = array(
            'setting'     => $this->Guru->setup()->result(),
              'data_jurnalguru'    => $this->Guru->get_jurnalguru()->result(),
              'dataprofil'  => $this->Guru->get_profil()->result(),
              'data_jadwalmengajar' => $this->Guru->get_jadwalmengajar()->result()
          );
          
          $this->load->view('_partials/header', $data);
          $this->load->view('_partials/menu/menu_guru');
          $this->load->view('guru/jurnalguru', $data);
          $this->load->view('_partials/footer');
    }

//Data Kehadiran Guru
    public function kehadiranguru()
    {
          $this->load->model('Guru');

          $data = array(
            'setting'     => $this->Guru->setup()->result(),
              'datatema'     => $this->m_pengaturan->get_tema()->result(),
              'temaaktif'    => $this->m_pengaturan->get_temaaktif()->result(),
              'datakehadiranguru' => $this->Guru->get_datakehadiranguru()->result(),
              'dataprofil'  => $this->Guru->get_profil()->result(),
              'jadwalkehadiranguru' => $this->Guru->get_jadwalkehadiranguru()->result()
          );
          
          $this->load->view('_partials/header', $data);
          $this->load->view('_partials/menu/menu_guru');
          $this->load->view('guru/kehadiran/datakehadiranguru', $data);
          $this->load->view('_partials/footer');
    }
///////////////////////////////



    public function updatekehadiranguru()
    {
    $this->load->model('guru');
    
    $id_kehadiran['id_kehadiran']    = $this->input->post("id_kehadiran");
    $out_presensi                = $this->input->post('out_presensi');
    $data = array(
        'out_presensi'          =>$out_presensi
    
    );
    
    $this->guru->update_kehadiranguru($data, $id_kehadiran);
    
    redirect('guru/dashboard/kehadiranguru');
    }
    




    public function simpankehadiranguru()
    {

        $this->load->model('Guru');
  
        {
        $data['id_user']            = $this->session->userdata('user_id'); 
        $data['nama_guru']          = $this->input->post('nama_guru');
        $data['stempel_presensi']   = $this->input->post('stempel_presensi');
        $data['id_hari']            = $this->input->post('id_hari');
        $data['tanggalpresensi']    = $this->input->post('tanggalpresensi');
        $data['jenis_presensi']     = $this->input->post('jenis_presensi');
        $data['status_presensi']    = $this->input->post('status_presensi');

        $this->load->view('guru/dashboard',$data);
        $this->Guru->simpan_kehadiranguru($data);
        redirect('guru/dashboard/kehadiranguru');
        } 
    }
    
    
    public function simpanjadwalmengajar()
    {

        $this->load->model('Guru');
  
        {
        $data['id_user']            = $this->session->userdata('user_id'); 
        $data['hari_jadwal']          = $this->input->post('hari_jadwal');
        $data['awaljam_jadwal']   = $this->input->post('awaljam_jadwal');
        $data['akhirjam_jadwal']            = $this->input->post('akhirjam_jadwal');
        $data['mapel_jadwal']    = $this->input->post('mapel_jadwal');
        $data['kelas_jadwal']    = $this->input->post('kelas_jadwal');

        $this->load->view('guru/dashboard',$data);
        $this->Guru->simpan_jadwamengajar($data);
        redirect('guru/dashboard/jadwalmengajar');
        } 
    }



    public function simpanjurnalguru()
    {

        $this->load->model('Guru');
  
        {
        $data['id_user']            = $this->session->userdata('user_id'); 
        $data['id_jurnalguru']      = $this->input->post('id_jurnalguru');
        $data['deskripsijurnal']    = $this->input->post('deskripsijurnal');
        $data['tanggal_jurnal']     = $this->input->post('tanggal_jurnal');
        $data['tahun']              = $this->input->post('tahun');
        $data['bulan']              = $this->input->post('bulan');

        $this->load->view('guru/dashboard',$data);
        $this->Guru->simpan_jurnalguru($data);
        redirect('guru/dashboard/jurnalguru');
        } 
    }







    public function bukudigital()
    {
        $this->load->model('Guru');
        $data = array(
            'setting'            => $this->Guru->setup()->result(),
            'datatema'           => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'          => $this->m_pengaturan->get_temaaktif()->result(),
            'data_profil'        => $this->Guru->get_profil()->result(),
            'dataprofil'         => $this->Guru->get_profil()->result(),
            'databukudigital'    => $this->Guru->get_databukudigital()->result(),
            'datakelas'          => $this->Guru->get_datakelas()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_guru', $data);
        $this->load->view('guru/pembelajaran/databukudigital', $data);       
        $this->load->view('_partials/footer');
    }













    public function elearning()
    {
        $this->load->model('Guru');
        $data = array(
            'setting'            => $this->Guru->setup()->result(),
            'datatema'           => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'          => $this->m_pengaturan->get_temaaktif()->result(),
            'data_profil'        => $this->Guru->get_profil()->result(),
            'dataprofil'         => $this->Guru->get_profil()->result(),
            'dataelearning'      => $this->Guru->get_dataelearning()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_guru', $data);
        $this->load->view('guru/elearning/dataelearning', $data);       
        $this->load->view('_partials/footer');
    }



    public function simpandatatugas()
    {


        $this->load->model('Guru');
  
        {
        $data['id_user']            = $this->session->userdata('user_id'); 
        $data['nama_guru']          = $this->session->userdata('user_nama'); 
        $data['tugas_create']       = $this->input->post('tugas_create');
        $data['tugas_nama']         = $this->input->post('tugas_nama');
        $data['tugas_keterangan']   = $this->input->post('tugas_keterangan');
        $data['kelas']              = $this->input->post('kelas');
        $data['tugas_waktu']        = $this->input->post('tugas_waktu');

        $this->load->view('guru/dashboard',$data);
        $this->Guru->simpan_datatugas($data);
        redirect('guru/dashboard/guruelearning');
        } 
    }



    public function hapusdatatugas($id_elearningtugas)
    {
      $this->load->model('Guru');
       $id['id_elearningtugas'] = $this->uri->segment(4);
       $this->Guru->hapus_datatugas($id);
        echo 'Deleted successfully.';

       redirect('guru/dashboard/guruelearning');
    }
    
    
    public function hapusjadwalmengajar($id_pengajar)
    {
      $this->load->model('Guru');
       $id['id_pengajar'] = $this->uri->segment(4);
       $this->Guru->hapus_datajadwalmengajar($id);

       redirect('guru/dashboard/jadwalmengajar');
    }
    
    public function hapusjurnalguru($id_jurnal)
    {
      $this->load->model('Guru');
       $id['id_jurnal'] = $this->uri->segment(4);
       $this->Guru->hapus_jurnalguru($id);

       redirect('guru/dashboard/jurnalguru');
    }










    public function print_jurnalguru()
        {
            $this->load->model('Guru');
            $this->load->model('m_beranda');
            $this->load->library('tcpdf_gen');
            $pdf = new TCPDF('P', 'pt', ['format' => 'A4', 'Rotate' => 260]);
            $pdf->SetTitle('Mutasi Siswa');
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            $pdf->addPage();
            $id_user  = $this->uri->segment(4);
            $data = array(
              'data_profil'     => $this->m_beranda->get_profil()->result(),
              'data_jurnalguru' => $this->Guru->get_jurnalguru()->result(),
              'dataguru'        => $this->Guru->get_biodata($id_user)->result(), 
            );
            $html = $this->load->view('cetak/print_jurnalguru', $data, true);
            $pdf->writeHtml($html, true, false, true, false, '');    
            $pdf->lastPage();
            $pdf->output();
        }







    






    public function datasiswa()
    {
        $this->load->model('m_master');
        $data        = array(
            'setting'     => $this->Guru->setup()->result(),
            'datakelas' => $this->m_master->get_datasiswa()->result()
        );
        
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu');
        $this->load->view('admin/datasiswa', $data);
        $this->load->view('_partials/footer');
    }












    public function logout()
    {
        
        $this->session->sess_destroy();
        redirect('loginguru');
    }
    



}

