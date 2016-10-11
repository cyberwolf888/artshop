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
        $this->load->view('backend/admin/laporan_date_member',['script'=>'backend/admin/page_script/laporan']);
    }

    public function laporan_member()
    {
        if(isset($_POST['start_date'])){
            $this->load->model('orderMemberModel');

            $start_date = date("Y-m-d", strtotime($this->input->post('start_date')));
            $end_date = date("Y-m-d",strtotime($this->input->post('end_date')));
            $payment_status = $this->input->post('payment_status');

            $model = $this->orderMemberModel->getReport($start_date,$end_date,$payment_status)->result();

            $this->load->view('backend/admin/laporan_member',[
                'script'=>'backend/admin/page_script/petugas_manage',
                'model'=>$model
            ]);
        }
    }

    public function order_pengerajin_date()
    {
        $this->load->library('form_validation');
        $this->load->view('backend/admin/laporan_date_pengerajin',['script'=>'backend/admin/page_script/laporan']);
    }
}