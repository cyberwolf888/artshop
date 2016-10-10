<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller
{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
        if($this->session->type != 4){
            redirect('login');
        }
    }

    public function order_member_date()
    {
        $this->load->library('form_validation');
        $this->load->view('backend/admin/laporan_date_member',['script'=>'backend/admin/page_script/petugas_create']);
    }

    public function order_pengerajin_date()
    {
        $this->load->library('form_validation');
        $this->load->view('backend/admin/laporan_date_pengerajin',['script'=>'backend/admin/page_script/petugas_create']);
    }
}