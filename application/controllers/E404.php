<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E404 extends CI_Controller {
    
     public function index()
    {
        $d['title'] = 'maaf,halaman tidak ditemukan';
        $this->load->view("errors/404.php");       

    }
    
}