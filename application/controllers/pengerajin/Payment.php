<?php

/**
 * Created by PhpStorm.
 * User: iTubeStoreDiponegoro
 * Date: 10/1/16
 * Time: 3:08 PM
 */
class Payment extends CI_Controller
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
        $this->load->model('paymentPengerajinModel');
        $this->load->model('pengerajinModel');

        $pengerajin = $this->pengerajinModel->findByUser($this->session->user_id)->result()[0];

        $model = $this->paymentPengerajinModel->findAllById($pengerajin->id)->result();

        $this->load->view('backend/pengerajin/payment_manage',[
            'script'=>'backend/petugas/page_script/petugas_manage',
            'model'=>$model
        ]);
    }

    public function detail($id)
    {
        $this->load->model('paymentPengerajinModel');
        $model = $this->paymentPengerajinModel->find($id)->result();
        if(!$model){
            redirect('pengerajin/payment/manage');
        }
        $model = $model[0];
        //die(var_dump($model));

        $this->load->view('backend/pengerajin/payment_detail',[
            'model'=>$model
        ]);
    }
}