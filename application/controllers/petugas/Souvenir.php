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
        $model = $this->productModel->getAll()->result();
        $this->load->view('backend/petugas/souvenir_manage',[
            'script'=>'backend/petugas/page_script/petugas_manage',
            'model'=>$model
        ]);
    }

    public function create()
    {
        $this->load->library('form_validation');
        $this->load->model('categoryModel');
        $category = $this->categoryModel->getAll()->result();
        if($this->input->post('name')){
            $this->load->model('productModel');
            $this->load->model('productDetailModel');
            $product_id = $this->productModel->insert();
            $this->productDetailModel->insert($product_id);
            $this->session->set_flashdata('success', 'Souvenir has been succesfully created!');
            redirect('petugas/souvenir/manage');
        }
        $this->load->view('backend/petugas/souvenir_create',[
            'script'=>'backend/petugas/page_script/souvenir_form',
            'category'=>$category
        ]);
    }

    public function edit($id)
    {
        $this->load->library('form_validation');
        $this->load->model('categoryModel');
        $this->load->model('productModel');
        $this->load->model('productDetailModel');

        $model = $this->productModel->find($id)->result()[0];
        $detailProduct = $this->productDetailModel->findByProduct($model->id)->result();
        $category = $this->categoryModel->getAll()->result();

        if($this->input->post('name')){
            $this->productModel->edit($model);
            $this->productDetailModel->edit($model->id);
            $this->session->set_flashdata('success', 'Souvenir has been succesfully updated!');
            redirect('petugas/souvenir/manage');
        }

        $this->load->view('backend/petugas/souvenir_edit',[
            'script'=>'backend/petugas/page_script/souvenir_form',
            'category'=>$category,
            'model'=>$model,
            'detailProduct'=>$detailProduct
        ]);
    }

    public function gallery($id)
    {
        $this->load->view('backend/petugas/souvenir_gallery',[
            'script'=>'backend/petugas/page_script/souvenir_form',
            'id'=>$id
        ]);
    }
    public function creategallery($id)
    {
        $this->load->library('form_validation');
        $this->load->view('backend/petugas/souvenir_creategallery',[
            'script'=>'backend/petugas/page_script/souvenir_form'
        ]);
    }
}