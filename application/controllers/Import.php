<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {
    
         public function __construct()
    {
        parent::__construct();
         
        //load model admin
        $this->load->model('admin');
        
        //cek session dan level user
        if($this->admin->is_role() != "admin"){
            redirect("login");
        }
    }

    public function index()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/menu');
        $this->load->view('admin/v_import');
        $this->load->view('_partials/footer');
        
    }

    public function upload()
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
            redirect('import/');

        } else {

            $data_upload = $this->upload->data();

            $excelreader        = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();
            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 3){
                                array_push($data, array(
                                    //iNFORMASI DATA PRIBADI SISWA
                                    'nis'                   => $row['A'],
                                    'nisn'                  => $row['B'],
                                    'nik'                   => $row['C'],
                                    'nokk'                  => $row['D'],
                                    'nama_lengkap'          => $row['E'],
                                    'tempatlahir'           => $row['F'],
                                    'tanggallahir'          => $row['G'],
                                    'jeniskelamin'          => $row['H'],
                                    'agama'                 => $row['I'],
                                    'hobi'                  => $row['J'],
                                    'citacita'              => $row['K'],
                                    'anakke'                => $row['L'],
                                    'jumlahsaudara'         => $row['M'],
                                    'jarakkesekolah'        => $row['N'],
                                    'transportasi'          => $row['O'],
                                    'status_anakyatim'      => $row['P'],
                                    'bahasa'                => $row['Q'],
                                    'kewarganegaraan'       => $row['R'],

                                    //INFORMASI ALAMAT LENGKAP SISWA
                                    'pendukung_tinggibadan'     => $row['S'],
                                    'pendukung_beratbadan'      => $row['T'],
                                    'pendukung_golongandarah'   => $row['U'],
                                    'pendukung_penyakit'        => $row['V'],
                                    'pendukung_kelainanjasmani' => $row['W'],


                                    'siswa_alamat'          => $row['X'],
                                    'siswa_desakel'         => $row['Y'],
                                    'siswa_kecamatan'       => $row['Z'],
                                    'siswa_kabupaten'       => $row['AA'],
                                    'siswa_provinsi'        => $row['AB'],
                                    'siswa_kodepos'         => $row['AC'],
                                    'siswa_tinggal'         => $row['AD'],

                                    //INFORMASI KELAS SISWA
                                    'siswa_kelas'           => $row['AE'], 
                                    'siswa_nomorabsen'      => $row['AF'],


                                    //INFORMASI KELAS SISWA
                                    'asal_sekolah'          => $row['AG'],  
                                    'asal_noskhu'           => $row['AH'],
                                    'asal_noijazah'         => $row['AI'],
                                    'asal_nilaiun'          => $row['AJ'],
                                    'asal_tanggal'          => $row['AK'],
                                    'asal_lamapendidikan'   => $row['AL'],

                        
                                    //INFORMASI ORANG TUA SISWA
                                    'ayah_nik'              => $row['AM'],
                                    'ayah_nama'             => $row['AN'],
                                    'ayah_alamat'           => $row['AO'],
                                    'ayah_desakel'          => $row['AP'],
                                    'ayah_kecamatan'        => $row['AQ'],
                                    'ayah_kabupaten'        => $row['AR'],
                                    'ayah_provinsi'         => $row['AS'],
                                    'ayah_kodepos'          => $row['AT'],
                                    'ayah_pendidikan'       => $row['AU'],
                                    'ayah_pekerjaan'        => $row['AV'],
                                    'ayah_penghasilan'      => $row['AW'],
                                    'ibu_nik'               => $row['AX'],
                                    'ibu_nama'              => $row['AY'],
                                    'ibu_alamat'            => $row['AZ'],
                                    'ibu_desakel'           => $row['BA'],
                                    'ibu_kecamatan'         => $row['BB'],
                                    'ibu_kabupaten'         => $row['BC'],
                                    'ibu_provinsi'          => $row['BD'],
                                    'ibu_kodepos'           => $row['BE'],
                                    'ibu_pendidikan'        => $row['BF'],
                                    'ibu_pekerjaan'         => $row['BG'],
                                    'ibu_penghasilan'       => $row['BH'],
                                    'wali_nik'              => $row['BI'],
                                    'wali_nama'             => $row['BJ'],
                                    'wali_alamat'           => $row['BK'],
                                    'wali_desakel'          => $row['BL'],
                                    'wali_kecamatan'        => $row['BM'],
                                    'wali_kabupaten'        => $row['BN'],
                                    'wali_provinsi'         => $row['BO'],
                                    'wali_kodepos'          => $row['BP'],
                                    'wali_pendidikan'       => $row['BQ'],
                                    'wali_pekerjaan'        => $row['BR'],
                                    'wali_penghasilan'      => $row['BS'],                                
                      
                                    'siswa_nohp'            => $row['BT'],
                                    'username'              => $row['BU'],
                                    'password'              => $row['BV'],
                                    'role'                  => $row['BW']
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('pendaftar', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Siswa Berhasil Diimport');
            //redirect halaman
            redirect('master/datasiswa');

        }
    }





    public function uploadpemilihosis()
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
            redirect('import/');

        } else {

            $data_upload = $this->upload->data();

            $excelreader        = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();
            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    //iNFORMASI DATA GURU
                                    'nama_pemilih'   => $row['A'],
                                    'username'       => $row['B'],
                                    'password'       => $row['C'],
                                    'role'           => $row['D']
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('pemilihosis', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Guru Berhasil Diimport');
            //redirect halaman
            redirect('master/datapemilihosis');

        }
    }



    public function uploadguru()
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
            redirect('import/');

        } else {

            $data_upload = $this->upload->data();

            $excelreader        = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();
            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    //iNFORMASI DATA GURU
                                    'nama_guru'      => $row['A'],
                                    'nip'            => $row['B'],
                                    'username'       => $row['C'],
                                    'password'       => $row['D'],
                                    'role'           => $row['E']
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('guru', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Guru Berhasil Diimport');
            //redirect halaman
            redirect('master/dataguru');

        }
    }










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
            redirect('import/');

        } else {

            $data_upload = $this->upload->data();

            $excelreader        = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            $id_kodemapel['id_kodemapel']    = $this->input->post("id_kodemapel");
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

            $id = $_POST['id_kodemapel']; 
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            redirect('master/nilaismt1'. "$id");

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
            redirect('import/');
        } else {
        $data_upload = $this->upload->data();
        $excelreader       = new PHPExcel_Reader_Excel2007();
        $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

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

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            //redirect halaman
            redirect('master/datarapor2');

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
            redirect('import/');
        } else {
        $data_upload       = $this->upload->data();
        $excelreader       = new PHPExcel_Reader_Excel2007();
        $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

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

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            //redirect halaman
            redirect('master/datarapor3');

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
            redirect('import/');
        } else {
        $data_upload       = $this->upload->data();
        $excelreader       = new PHPExcel_Reader_Excel2007();
        $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

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

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            //redirect halaman
            redirect('master/datarapor4');

        }
    }


    public function uploadnilaismt5()
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
            redirect('import/');
        } else {
        $data_upload        = $this->upload->data();
        $excelreader       = new PHPExcel_Reader_Excel2007();
        $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

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
            $this->db->insert_batch('rapor5', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            //redirect halaman
            redirect('master/datarapor5');

        }
    }


    public function uploadnilaismt6()
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
            redirect('import/');
        } else {
        $data_upload       = $this->upload->data();
        $excelreader       = new PHPExcel_Reader_Excel2007();
        $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
        $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

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
            $this->db->insert_batch('rapor6', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            //redirect halaman
            redirect('master/datarapor6');

        }
    }

  public function uploadrolepengguna()
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
            redirect('import/');

        } else {

            $data_upload = $this->upload->data();

            $excelreader        = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();
            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'kelas'       => $row['A'],
                                    'nama_siswa'  => $row['B'],
                                    'nis'         => $row['C'],
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('elearningpengguna', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            //redirect halaman
            redirect('master/rolepengguna');

        }
    }






    public function uploadroleguru()
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
            redirect('import/');

        } else {

            $data_upload = $this->upload->data();

            $excelreader        = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();
            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'kelas'      => $row['A'],
                                    'mapel'      => $row['B'],
                                    'nama_guru'  => $row['C'],
                                    'nip'        => $row['D'],
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('elearningguru', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            //redirect halaman
            redirect('master/roleguru');

        }
    }






    
    public function uploadkoderekening()
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
            redirect('import/');

        } else {

            $data_upload = $this->upload->data();

            $excelreader        = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();
            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'koderekening'      => $row['B'],
                                    'nama_koderekening'      => $row['C'],
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('koderekening', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Nilai Berhasil Diimport');
            //redirect halaman
            redirect('bendaharabos/dashboard/koderek');

        }
    }

  

}