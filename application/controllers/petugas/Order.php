<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller
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
        $model = $this->orderMemberModel->findAll()->result();
        $this->load->view('backend/petugas/order_member',[
            'model'=>$model
        ]);
    }

    public function detail_member($id)
    {
        $this->load->model('detailOrderMemberModel');
        $this->load->model('productImagesModel');
        $order = $this->orderMemberModel->find($id)->result();
        if(!$order){
            redirect('petugas/order/member');
        }
        $order = $order[0];
        $detail = $this->detailOrderMemberModel->findByOrder($order->id)->result();

        $this->load->view('backend/petugas/order_detail_member',[
            'order'=>$order,
            'detail'=>$detail
        ]);
    }
}