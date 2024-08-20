<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model Bendahara
        $this->load->model('bendahara');
        $this->load->model('m_pengaturan');
        //cek session dan level user
        if($this->bendahara->is_role() != "bendahara"){
            redirect("loginbendahara");
        }
    }

    public function index()
    {
        $this->load->model('Bendahara');
        $data = array(
          'datatema'    => $this->m_pengaturan->get_tema()->result(),
          'temaaktif'   => $this->m_pengaturan->get_temaaktif()->result(),
          'setting'     => $this->Bendahara->setup()->result(),
          'dataprofil'  => $this->Bendahara->get_profil()->result(),
          'data_profil' => $this->Bendahara->get_profil()->result(),
          'menujenispembayaran' => $this->Bendahara->get_datajenispembayaran()->result()
        );
        $data['log_login'] = $this->db->query("SELECT * FROM log_login ORDER BY id DESC LIMIT 13");
        
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_bendahara', $data);
        $this->load->view('bendahara/dashboard', $data);       
        $this->load->view('_partials/footer');
    }





// ------------------------------------------------------------------------------------------------------------------------------------------
    public function jenispembayaran()
    {
        $this->load->model('Bendahara');
        $data = array(
            'datatema'              => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'             => $this->m_pengaturan->get_temaaktif()->result(),
            'setting'               => $this->Bendahara->setup()->result(),
            'dataprofil'            => $this->Bendahara->get_profil()->result(),
            'kode_pembayaran'       => $this->Bendahara->generateKodeTransaksi(),
            'datajenispembayaran'   => $this->Bendahara->get_datajenispembayaran()->result(),
            'totalsiswa'            => $this->Bendahara->get_totalsiswamsuk()->result(),
            'menujenispembayaran'   => $this->Bendahara->get_datajenispembayaran()->result()
        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_bendahara', $data);
        $this->load->view('bendahara/masterdata/jenispembayaran', $data);
        $this->load->view('_partials/footer');
    }



    public function simpanjenispembayaran()
    {
        $this->load->model('Bendahara'); 
        {
        $data['nama_jenispembayaran']    = $this->input->post('nama_jenispembayaran');
        $data['biaya_jenispembayaran']   = $this->input->post('biaya_jenispembayaran');
        $data['tahun_jenispembayaran']   = $this->input->post('tahun_jenispembayaran');
        $data['kode_jenispembayaran']    = $this->input->post('kode_jenispembayaran');
        $data['id_role']                 = $this->input->post('id_role');
        $this->load->view('bendahara/masterdata/jenispembayaran',$data);
        }
        $this->bendahara->simpan_jenispembayaran($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
        redirect('bendahara/dashboard/jenispembayaran');
    } 



    public function updatejenispembayaran()
    {
        $this->load->model('Bendahara');
        $id_sppjenispembayaran['id_sppjenispembayaran']    = $this->input->post("id_sppjenispembayaran");
        $nama_jenispembayaran        = $this->input->post('nama_jenispembayaran');
        $biaya_jenispembayaran       = $this->input->post('biaya_jenispembayaran');
        $data = array(
        'nama_jenispembayaran'     =>$nama_jenispembayaran,
        'biaya_jenispembayaran'    =>$biaya_jenispembayaran
        );
        $this->Bendahara->update_jenispembayaran($data, $id_sppjenispembayaran);
        redirect('bendahara/dashboard/jenispembayaran');
    }



    public function hapusjenispembayaran($id_sppjenispembayaran)
    {
    $this->load->model('Bendahara');
        $id['id_sppjenispembayaran'] = $this->uri->segment(4);
    $this->Bendahara->hapus_jenispembayaran($id);
    echo 'Deleted successfully.';
    redirect('bendahara/dashboard/jenispembayaran');
    }
// ------------------------------------------------------------------------------------------------------------------------------------------





// ------------------------------------------------------------------------------------------------------------------------------------------
    public function datapembayaran($kode_pembayaran)
    {
        $this->load->model('Bendahara');
        $data = array(
            'datatema'              => $this->m_pengaturan->get_tema()->result(),
            'temaaktif'             => $this->m_pengaturan->get_temaaktif()->result(),
            'setting'               => $this->Bendahara->setup()->result(),
            'dataprofil'            => $this->Bendahara->get_profil()->result(),
            'datapembayaransiswa'   => $this->Bendahara->get_datapembayaransppsiswa($kode_pembayaran)->result(),
            'menujenispembayaran'   => $this->Bendahara->get_datajenispembayaran()->result(),
            'bayar1'                => $this->Bendahara->bayar1($kode_pembayaran),
            'bayar2'                => $this->Bendahara->bayar2($kode_pembayaran),
            'bayar3'                => $this->Bendahara->bayar3($kode_pembayaran),
            'bayar4'                => $this->Bendahara->bayar4($kode_pembayaran),
            'bayar5'                => $this->Bendahara->bayar5($kode_pembayaran),
            'bayar6'                => $this->Bendahara->bayar6($kode_pembayaran),
            'bayar7'                => $this->Bendahara->bayar7($kode_pembayaran),
            'bayar8'                => $this->Bendahara->bayar8($kode_pembayaran),
            'bayar9'                => $this->Bendahara->bayar9($kode_pembayaran),
            'bayar10'               => $this->Bendahara->bayar10($kode_pembayaran),
            'bayar11'               => $this->Bendahara->bayar11($kode_pembayaran),
            'bayar12'               => $this->Bendahara->bayar12($kode_pembayaran)

        );
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/menu/menu_bendahara', $data);
        $this->load->view('bendahara/pembayaran/datapembayaranspp', $data);
        $this->load->view('_partials/footer');
    }


    public function bayarspp($kode_pembayaran)
    {
        $this->load->model('Bendahara');
        $id_sppdatasiswa['id_sppdatasiswa']     = $this->input->post("id_sppdatasiswa");
        $kode_pembayaran                        = $this->input->post('kode_pembayaran');
        $bayar1                                 = $this->input->post('bayar1');
        $bayar2                                 = $this->input->post('bayar2');
        $bayar3                                 = $this->input->post('bayar3');
        $bayar4                                 = $this->input->post('bayar4');
        $bayar5                                 = $this->input->post('bayar5');
        $bayar6                                 = $this->input->post('bayar6');
        $bayar7                                 = $this->input->post('bayar7');
        $bayar8                                 = $this->input->post('bayar8');
        $bayar9                                 = $this->input->post('bayar9');
        $bayar10                                = $this->input->post('bayar10');
        $bayar11                                = $this->input->post('bayar11');
        $bayar12                                = $this->input->post('bayar12');
        $data = array(
        'kode_pembayaran'   =>$kode_pembayaran,
        'bayar1'            =>$bayar1,
        'bayar2'            =>$bayar2,
        'bayar3'            =>$bayar3,
        'bayar4'            =>$bayar4,
        'bayar5'            =>$bayar5,
        'bayar6'            =>$bayar6,
        'bayar7'            =>$bayar7,
        'bayar8'            =>$bayar8,
        'bayar9'            =>$bayar9,
        'bayar10'           =>$bayar10,
        'bayar11'           =>$bayar11,
        'bayar12'           =>$bayar12,
        );
        $id = $_POST['kode_pembayaran']; 
        $this->Bendahara->bayarspp($data, $id_sppdatasiswa);
        redirect('bendahara/dashboard/datapembayaran/'. "$id");
    }


    public function simpansiswa($kode_pembayaran)
    {
        $this->load->model('Bendahara'); 
        {
          $data['nama_siswa']       = $this->input->post('nama_siswa');
          $data['nisn']             = $this->input->post('nisn');
          $data['kelas']            = $this->input->post('kelas');
          $data['kode_pembayaran']  = $this->input->post('kode_pembayaran');
          $this->load->view('bendahara/masterdata/datasiswa',$data);
	      }
        //$id = $_POST['kode_pembayaran']; 
        $this->bendahara->simpan_siswa($data);
        $this->session->set_flashdata('tambah_berhasil','<i class="fas fa-check"></i> Data Berhasil Ditambahkan Ke Database');
        //redirect('bendahara/dashboard/datapembayaran/'. "$id");
        redirect('bendahara/dashboard/datasiswa');
    } 





















    public function simpanspp($tahun_ajaran)
    {
        $this->load->model('Bendahara'); 
        
        {
          $data['tanggal']      = $this->input->post('tanggal');
          $data['nokode']       = $this->input->post('nokode');
          $data['nobukti']      = $this->input->post('nobukti');
          $data['uraian']       = $this->input->post('uraian');
          $data['penerimaan']   = $this->input->post('penerimaan');
          $data['pengeluaran']  = $this->input->post('pengeluaran');
          $data['tahun']        = $this->input->post('tahun');
          $this->load->view('bendahara/databku',$data);
	      }
        $this->Bendahara->simpan_bku($data);
        redirect('bendahara/dashboard/databku/2022', $tahun);
    } 


    public function hapusbku($id_bku)
    {
      $this->load->model('Bendahara');
        $id['id_bku'] = $this->uri->segment(4);
      $this->Bendahara->hapus_bku($id);
      echo 'Deleted successfully.';
      redirect('bendaharabos/dashboard/databku/2022');
    }
// ------------------------------------------------------------------------------------------------------------------------------------------




















//Fungsi ini sudah di Validasi -- Untuk Download Template Rapor pada mata pelajaran per kelas--
public function templatesiswaspp($id_sppjenispembayaran, $role)
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
   $excel->setActiveSheetIndex(0)->setCellValue('A1', "NISN"); // Set kolom A3 dengan tulisan "NO"
   $excel->setActiveSheetIndex(0)->setCellValue('B1', "Nama Siswa");
   $excel->setActiveSheetIndex(0)->setCellValue('C1', "Kode Kelas");
   $excel->setActiveSheetIndex(0)->setCellValue('D1', "Kode Pembayaran");



   // Apply style header yang telah kita buat tadi ke masing-masing kolom header
   $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
   $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
   $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
   $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);


   // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
   $id_sppjenispembayaran = $this->uri->segment(4);
   $role = $this->uri->segment(5);
   $siswa = $this->bendahara->downloadtemplate($id_sppjenispembayaran, $role);
   $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
   foreach($siswa as $data){ // Lakukan looping pada variabel siswa
   $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->nisn);
   $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nama_lengkap);
   $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->kode_kelas);
   $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->kode_jenispembayaran);


   // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
   $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($gayatengah);
   $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
   $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
   $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($gayatengah);

   $numrow++; // Tambah 1 setiap kali looping
   }

   // Set width kolom
   $excel->getActiveSheet()->getColumnDimension('A')->setWidth(20); // Set width kolom A
   $excel->getActiveSheet()->getColumnDimension('B')->setWidth(40); 
   $excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
   $excel->getActiveSheet()->getColumnDimension('D')->setWidth(25);

   
   // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
   $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
   // Set orientasi kertas jadi LANDSCAPE
   $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
   // Set judul file excel nya
   $excel->getActiveSheet(0)->setTitle('Template Data Siswa SPP');
   $excel->setActiveSheetIndex(0);
   // Proses file excel
   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
   header('Content-Disposition: attachment; filename="Template_SPP_SISWA.xlsx"'); // Set nama file excel nya
   header('Cache-Control: max-age=0');
   $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
   $write->save('php://output');
}
// ----------------------------------------------------------------------------------------------------------------------------------


























public function uploadjenispembayaransiswa()
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
        redirect('bendahara/dashboard/jenispembayaran/');

    } else {

        $data_upload = $this->upload->data();

        $excelreader                    = new PHPExcel_Reader_Excel2007();
        $loadexcel                      = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet                          = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        $data = array();
        $numrow = 1;
        foreach($sheet as $row){
                        if($numrow > 1){
                            array_push($data, array(
                                'nisn'              => $row['A'],
                                'nama_siswa'        => $row['B'],
                                'kelas'             => $row['C'],
                                'kode_pembayaran'   => $row['D'],
                            ));
                }
            $numrow++;
        }
        $this->db->insert_batch('spp_datasiswa', $data);
        //delete file from server
        unlink(realpath('excel/'.$data_upload['file_name']));

        $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
        redirect('bendahara/dashboard/jenispembayaran');

    }
}

// ------------------------------------------------------------------------------------------------------------------------------------
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('beranda');
    }
    
  




}