<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {


    public function ressiswa()
    {
        $siswa = $this->M_siswa->get_siswa();

        $response = array();

        foreach($siswa->result() as $hasil) {

            $response[] = array(
                'nama_lengkap' => $hasil->nama_lengkap,
                'nik'          => $hasil->nik         
            );

        }
        
        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Peserta Didik',
                'data'    => $response  
            )
        );

    }

}