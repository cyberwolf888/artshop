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
            'script'=>'backend/petugas/page_script/petugas_manage',
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

    public function process_order_member($id)
    {
        $this->load->model('pengerajinModel');
        $this->load->model('orderPengerajinModel');
        $pengerajin = $this->pengerajinModel->getAll()->result();
        if(isset($_POST['order_id'])){
            $this->orderPengerajinModel->insert();
            $update = $this->orderMemberModel->update($id,['status'=>'2']);
            if($update){
                redirect('petugas/order/member');
            }
        }
        $this->load->view('backend/petugas/order_process_member',[
            'order_id'=>$id,
            'pengerajin'=>$pengerajin
        ]);
    }

    public function cancel_order_member($id)
    {
        $update = $this->orderMemberModel->update($id,['status'=>'0']);
        if($update){
            redirect('petugas/order/member');
        }
    }

    public function pengerajin()
    {
        $this->load->model('orderPengerajinModel');
        $model = $this->orderPengerajinModel->findAll()->result();
        $this->load->view('backend/petugas/order_pengerajin',[
            'script'=>'backend/petugas/page_script/petugas_manage',
            'model'=>$model
        ]);
    }
}