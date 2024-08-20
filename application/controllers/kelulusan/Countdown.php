<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Countdown extends CI_Controller
    {

    public function index()
    {
    $this->load->view('admin/kelulusan/settingkelulusan');
    }

    public function time(){
        $tanggal_start =$this->input->post('start');
        $waktu_start = $this->input->post('waktu_start');
        $s = strtotime("$waktu_start $tanggal_start");
        $start =array('waktu'=>date('Y:m:d H:i:s', $s));
        $result = $this->M_mater->time($start);
        if($result == true){
        redirect(site_url('master/settingkelulusan'));
        }
        else{
        redirect(site_url());
        }
    }

    public function lihat_countdown(){
        $result['timer'] = $this->M_mater->select_time();
        $this->load->view('v_timer', $result);
    }
    


}