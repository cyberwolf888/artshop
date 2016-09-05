<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
    }

    public function manage()
    {
        $this->load->model('petugasToko');

        $petugas = $this->petugasToko->getAll();

        $this->load->view('backend/admin/petugas_manage',[
            'script'=>'backend/admin/page_script/petugas_manage',
            'model'=>$petugas->result()
        ]);
    }

    public function create()
    {
        $this->load->library('form_validation');
        if($this->input->post('email')){
            $this->load->model('petugasToko');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('fullname', 'Full Name', 'required|min_length[5]|max_length[100]');
            $this->form_validation->set_rules('no_hp', 'No. Telp', 'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('alamat', 'Address', 'required|min_length[5]|max_length[100]');
            if ($this->form_validation->run() == FALSE){
                $this->load->view('backend/admin/petugas_create',['script'=>'backend/admin/page_script/petugas_create']);
            }
            else{
                $photo = null;
                if(isset($_FILES['photo'])){
                    $config['upload_path']          = FCPATH.'images\profile\petugas';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 2048;
                    $config['encrypt_name']         = TRUE;
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('photo')){
                        $photo = $this->upload->data('file_name');
                    }
                }
                $user_id = $this->users->insert_petugas();
                $this->petugasToko->insert($user_id,$photo);
                $this->session->set_flashdata('success', 'Petugas account has been succesfully created!');
                redirect('admin/petugas/manage');
            }
        }else{
            $this->load->view('backend/admin/petugas_create',['script'=>'backend/admin/page_script/petugas_create']);
        }
    }

    public function edit()
    {

    }

    public function post_create()
    {
        print_r($this->input->file('email'));
    }
}