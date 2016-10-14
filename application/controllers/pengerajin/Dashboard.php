<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
        $this->load->model('pengerajinModel');
        $this->load->model('orderMemberModel');
        $this->load->model('orderPengerajinModel');
        if($this->session->type != 3){
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->model('member');
        $this->load->model('paymentModel');
        $this->load->model('paymentPengerajinModel');

        $pengerajin = $this->pengerajinModel->findByUsers($this->session->user_id)->result()[0];

        $total_member = $this->member->total();
        $total_sales = $this->orderMemberModel->total_sales();
        $total_new_order = $this->orderMemberModel->total_new_sales();
        $total_profit = $this->orderMemberModel->total_profit()->result()[0]->profit;
        $payment_last5 = $this->paymentPengerajinModel->last5($pengerajin->id)->result();
        $order_last5 = $this->orderPengerajinModel->last5($pengerajin->id)->result();

        $this->load->view('backend/pengerajin/dashboard',[
            'script'=>'backend/pengerajin/page_script/dashboard',
            'total_member'=>$total_member,
            'total_sales'=>$total_sales,
            'total_new_order'=>$total_new_order,
            'total_profit'=>$total_profit,
            'payment_last5'=>$payment_last5,
            'order_last5'=>$order_last5
        ]);
    }
}