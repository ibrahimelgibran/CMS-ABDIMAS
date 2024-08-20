<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Importkelulusan extends CI_Controller {
    
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
                            if($numrow > 2){
                                array_push($data, array(
                                    //iNFORMASI DATA PRIBADI SISWA
                                    'siswa_id'              => $row['B'],
                                    'nisn_siswa'                  => $row['C'],
                                    'nilai'                 => $row['F'],
                                    'statuslulus'           => $row['G']
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('kelulusan', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('import_berhasil','<i class="fas fa-check"></i> Data Siswa Berhasil Diimport');
            //redirect halaman
            redirect('master/datakelulusan');

        }
    }





    
  

}