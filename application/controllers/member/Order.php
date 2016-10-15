<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller
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
        $this->load->model('orderMemberModel');
        $this->load->model('member');

        $member = $this->member->findByUser($this->session->user_id)->result()[0];
        $model = $this->orderMemberModel->findAllMember($member->id)->result();

        $this->load->view('backend/member/order_manage',[
            'script'=>'backend/member/page_script/petugas_manage',
            'model'=>$model
        ]);
    }

    public function detail($id)
    {
        $this->load->model('orderMemberModel');
        $this->load->model('detailOrderMemberModel');
        $this->load->model('productImagesModel');
        $order = $this->orderMemberModel->find($id)->result();
        if(!$order){
            redirect('petugas/order/member');
        }
        $order = $order[0];
        $detail = $this->detailOrderMemberModel->findByOrder($order->id)->result();

        $this->load->view('backend/member/order_detail',[
            'order'=>$order,
            'detail'=>$detail
        ]);
    }

    public function complete($id)
    {
        $this->load->model('orderMemberModel');
        $update = $this->orderMemberModel->update($id,['status'=>'5']);
        if($update){
            redirect('member/order/manage');
        }
    }
}