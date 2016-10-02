<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller
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

    public function manage()
    {
        $this->load->model('orderPengerajinModel');
        $pengerajin = $this->pengerajinModel->findByUsers($this->session->user_id)->result()[0];
        $model = $this->orderPengerajinModel->findAllById($pengerajin->id)->result();

        $this->load->view('backend/pengerajin/order_manage',[
            'script'=>'backend/pengerajin/page_script/pengerajin_manage',
            'model'=>$model
        ]);
    }

    public function detail($id)
    {
        $this->load->model('orderPengerajinModel');
        $this->load->model('detailOrderMemberModel');
        $this->load->model('productImagesModel');
        $order = $this->orderPengerajinModel->find($id)->result();
        if(!$order){
            redirect('petugas/order/pengerajin');
        }
        $order = $order[0];
        $detail = $this->detailOrderMemberModel->findByOrder($order->id)->result();
        $this->load->view('backend/pengerajin/order_detail',[
            'order'=>$order,
            'detail'=>$detail
        ]);
    }

    public function process($id)
    {
        $update = $this->orderMemberModel->update($id,['status'=>'3']);
        if($update){
            redirect('pengerajin/order/manage');
        }
    }

    public function shiped($id)
    {
        $update = $this->orderMemberModel->update($id,['status'=>'4']);
        if($update){
            redirect('pengerajin/order/manage');
        }
    }

    public function cancel($id)
    {
        $update = $this->orderMemberModel->update($id,['status'=>'0']);
        if($update){
            redirect('pengerajin/order/manage');
        }
    }



}