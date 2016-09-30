<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Souvenir extends CI_Controller
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

    public function view($id)
    {
        $this->load->library('form_validation');
        $this->load->model('categoryModel');
        $this->load->model('productModel');
        $this->load->model('productDetailModel');
        $this->load->model('productImagesModel');

        $model = $this->productModel->find($id)->result()[0];
        $detailProduct = $this->productDetailModel->findByProduct($model->id)->result();
        $category = $this->categoryModel->getAll()->result();
        $images = $this->productImagesModel->getAll($id)->result();

        $this->load->view('backend/petugas/souvenir_view',[
            'script'=>'backend/petugas/page_script/souvenir_form',
            'category'=>$category,
            'model'=>$model,
            'detailProduct'=>$detailProduct,
            'images'=>$images
        ]);
    }

    public function gallery($id)
    {
        $this->load->model('productImagesModel');
        $model = $this->productImagesModel->getAll($id)->result();

        $this->load->view('backend/petugas/souvenir_gallery',[
            'script'=>'backend/petugas/page_script/souvenir_form',
            'id'=>$id,
            'model'=>$model
        ]);
    }

    public function creategallery($id)
    {
        error_reporting(E_ALL);
        $this->load->library('form_validation');
        if(isset($_FILES['photo'])){
            $path = 'images/product/'.$id;
            $this->load->model('productImagesModel');
            if(!is_dir($path)){
                mkdir($path);
            }
            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('photo')){
                $photo = $this->upload->data('file_name');
                $config['image_library'] = 'gd2';
                $config['source_image'] = $path.'/'.$photo;
                $config['new_image'] = $path.'/mini_'.$photo;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 500;
                $config['height']       = 500;

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                $this->productImagesModel->insert($id,$photo);
                $this->session->set_flashdata('success', 'Image has been succesfully created!');

            }else{
                $this->session->set_flashdata('error', 'Failed to upload image!');
            }
            redirect('petugas/souvenir/gallery/'.$id);
        }
        $this->load->view('backend/petugas/souvenir_creategallery',['script'=>'backend/admin/page_script/petugas_create']);
    }

    public function deletegallery($id)
    {
        $this->load->model('productImagesModel');

        $model = $this->productImagesModel->getOne($id)->result()[0];

        $image = 'images/product/'.$model->product_id.'/'.$model->image;
        $thumbnail = 'images/product/'.$model->product_id.'/mini_'.$model->image;
        if(file_exists($image)){
            unlink($image);
            unlink($thumbnail);
        }
        $this->productImagesModel->delete($id);
        $this->session->set_flashdata('success','Image has been deleted!');
        redirect('petugas/souvenir/gallery/'.$model->product_id);
    }

}