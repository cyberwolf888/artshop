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
        $this->load->model('paymentPengerajinModel');

        $model = $this->paymentPengerajinModel->findAll()->result();

        $this->load->view('backend/petugas/payment_pengerajin',[
            'script'=>'backend/petugas/page_script/petugas_manage',
            'model'=>$model
        ]);
    }

    public function create_pengerajin($id)
    {

        //TODO fix bug
        $this->load->model('paymentPengerajinModel');
        $this->load->model('petugasToko');
        $this->load->library('form_validation');

        $pengerajin = $this->petugasToko->findByUser(2)->result();

        die(var_dump($pengerajin));
        if(isset($_FILES['photo'])){
            //die(var_dump($_FILES['photo']));
            $photo = null;
            $config['upload_path']          = 'images/payment';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('photo')){
                $photo = $this->upload->data('file_name');
            }else{
                $this->session->set_flashdata('error', 'Failed to upload image!');
                redirect(base_url('petugas/order/pengerajin'));
            }
            $this->paymentPengerajinModel->insert($photo,1);
            $this->session->set_flashdata('success', 'Payment success.');
            redirect(base_url('petugas/payment/pengerajin'));
        }
        $this->load->view('backend/petugas/payment_pengerajin_create',['script'=>'backend/admin/page_script/petugas_create']);
    }

}