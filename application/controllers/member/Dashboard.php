<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

    public function index()
    {
        $this->load->model('orderMemberModel');
        $this->load->model('paymentModel');
        $this->load->model('member');

        $member = $this->member->findByUser($this->session->user_id)->result()[0];
        $order_last5 = $this->orderMemberModel->last5By($member->id)->result();
        $payment_last5 = $this->paymentModel->last5By($member->id)->result();

        $this->load->view('backend/member/dashboard',[
            'script'=>'backend/member/page_script/dashboard',
            'order_last5'=>$order_last5,
            'payment_last5'=>$payment_last5
        ]);
    }
}