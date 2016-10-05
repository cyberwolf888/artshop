<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller
{

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
        $this->load->model('orderMemberModel');
        if($this->session->type != 2){
            redirect('login');
        }
    }

    public function member()
    {
        $this->load->model('paymentModel');

        $model = $this->paymentModel->findAll(1)->result();

        $this->load->view('backend/petugas/payment_member',[
            'script'=>'backend/petugas/page_script/petugas_manage',
            'model'=>$model
        ]);
    }

    public function detail_member($id)
    {
        $this->load->model('paymentModel');
        $model = $this->paymentModel->find($id)->result();
        if(!$model){
            redirect('petugas/payment/member');
        }
        $model = $model[0];

        $this->load->view('backend/petugas/payment_detail_member',[
            'model'=>$model
        ]);

    }

    public function confirm($id)
    {
        $this->load->model('paymentModel');
        $this->load->model('orderMemberModel');

        $model = $this->paymentModel->find($id)->result()[0];
        $this->orderMemberModel->update($model->order_id,['payment_status'=>1]);
        $this->paymentModel->update($id,['status'=>2]);
        redirect('petugas/payment/member');
    }

    public function cancel($id)
    {
        $this->load->model('paymentModel');
        $this->paymentModel->update($id,['status'=>0]);
        redirect('petugas/payment/member');
    }

    public function pengerajin()
    {
        $this->load->model('paymentModel');

        $model = $this->paymentModel->findAll(2)->result();

        $this->load->view('backend/petugas/payment_pengerajin',[
            'script'=>'backend/petugas/page_script/petugas_manage',
            'model'=>$model
        ]);
    }

}