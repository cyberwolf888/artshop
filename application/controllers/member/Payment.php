<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller
{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
        if($this->session->type != 1){
            redirect('login');
        }
    }

    public function manage()
    {
        $this->load->model('paymentModel');
        $this->load->model('member');

        $member = $this->member->findByUser($this->session->user_id)->result()[0];
        $model = $this->paymentModel->findAllMember($member->id)->result();


        $this->load->view('backend/member/payment_manage',[
            'script'=>'backend/member/page_script/petugas_manage',
            'model'=>$model
        ]);
    }

    public function detail($id)
    {
        $this->load->model('paymentModel');
        $model = $this->paymentModel->find($id)->result();
        if(!$model){
            redirect('member/payment/manage');
        }
        $model = $model[0];

        $this->load->view('backend/member/payment_detail',[
            'model'=>$model
        ]);
    }
}