<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Souvenir extends CI_Controller
{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
        if($this->session->type != 2){
            redirect('login');
        }
    }

    public function manage()
    {
        $this->load->model('productModel');
        //$model = $this->productModel->getAll();
        $this->load->view('backend/petugas/souvenir_manage',[
            'script'=>'backend/petugas/page_script/petugas_manage',
            //'model'=>$model->result()
        ]);
    }

    public function create()
    {
        $this->load->library('form_validation');
        if($this->input->post('name')){

        }
        $this->load->view('backend/petugas/souvenir_create',[
            'script'=>'backend/petugas/page_script/petugas_create'
        ]);
    }
}