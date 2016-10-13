<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

    public function index()
    {
        $this->load->model('member');

        $total_member = $this->member->total();
        $total_sales = $this->orderMemberModel->total_sales();
        $total_new_order = $this->orderMemberModel->total_new_sales();
        $total_profit = $this->orderMemberModel->total_profit()->result()[0]->profit;
        $member_last5 = $this->member->last5()->result();
        $order_last5 = $this->orderMemberModel->last5()->result();
        $this->load->view('backend/petugas/dashboard',[
            'script'=>'backend/petugas/page_script/dashboard',
            'total_member'=>$total_member,
            'total_sales'=>$total_sales,
            'total_new_order'=>$total_new_order,
            'total_profit'=>$total_profit,
            'member_last5'=>$member_last5,
            'order_last5'=>$order_last5
        ]);
    }
}