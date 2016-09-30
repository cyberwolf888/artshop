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
        $model = $this->orderMemberModel->findAll();
        $this->load->view('backend/petugas/order_member',[

        ]);
    }
}