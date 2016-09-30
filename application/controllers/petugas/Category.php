<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
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

    public function manage()
    {
        $this->load->model('categoryModel');
        $model = $this->categoryModel->getAll();
        $this->load->view('backend/petugas/category_manage',[
            'script'=>'backend/petugas/page_script/petugas_manage',
            'model'=>$model->result()
        ]);
    }

    public function create()
    {
        $this->load->library('form_validation');
        if($this->input->post('label')){
            $this->load->model('categoryModel');
            $this->form_validation->set_rules('label', 'Category Name', 'required|min_length[3]|max_length[100]');
            if ($this->form_validation->run() == FALSE){
                $this->load->view('backend/petugas/category_create',[
                    'script'=>'backend/petugas/page_script/petugas_create'
                ]);
            }else{
                $this->categoryModel->insert();
                $this->session->set_flashdata('success', 'Category has been succesfully created!');
                redirect('petugas/category/manage');
            }
        }
        $this->load->view('backend/petugas/category_create',[
            'script'=>'backend/petugas/page_script/petugas_create'
        ]);
    }

    public function edit($id)
    {
        $this->load->library('form_validation');
        $this->load->model('categoryModel');
        $model = $this->categoryModel->find($id)->result()[0];
        if($this->input->post('label')){
            $this->form_validation->set_rules('label', 'Category Name', 'required|min_length[3]|max_length[100]');
            if ($this->form_validation->run() == FALSE){
                $this->load->view('backend/petugas/category_edit',[
                    'script'=>'backend/petugas/page_script/petugas_create',
                    'model'=>$model
                ]);
            }else{
                $this->categoryModel->edit($id,$model);
                $this->session->set_flashdata('success', 'Category has been succesfully edited!');
                redirect('petugas/category/manage');
            }
        }
        $this->load->view('backend/petugas/category_edit',[
            'script'=>'backend/petugas/page_script/petugas_create',
            'model'=>$model
        ]);
    }
}