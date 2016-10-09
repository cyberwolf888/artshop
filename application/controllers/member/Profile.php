<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
        if ($this->session->type != 1) {
            redirect('login');
        }
    }

    public function edit()
    {
        $this->load->library('form_validation');
        $this->load->model('member');
        $model = $this->member->findByUser($this->session->user_id)->result()[0];
        if($model){
            if($this->input->post('email')){
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('fullname', 'Full Name', 'required|min_length[5]|max_length[100]');
                $this->form_validation->set_rules('no_hp', 'No. Telp', 'required|min_length[5]|max_length[12]');
                $this->form_validation->set_rules('alamat', 'Address', 'required|min_length[5]|max_length[100]');
                $this->form_validation->set_rules('kode_pos', 'Postal Code', 'required|min_length[4]|max_length[5]');
                if($this->input->post('email') == $model->email){
                    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                }else{
                    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
                }

                if ($this->form_validation->run() == FALSE){
                    $this->load->view('backend/admin/member_edit',['model'=>$model,'script'=>'backend/admin/page_script/petugas_create']);
                }
                else{
                    $photo = null;
                    if(isset($_FILES['photo'])){

                        if($model->photo!=''){
                            if(is_file(FCPATH . 'images\profile\member' . $model->photo)){
                                unlink(FCPATH . 'images\profile\member' . $model->photo);
                            }
                        }
                        $config['upload_path']          = FCPATH.'images\profile\member';
                        $config['allowed_types']        = 'gif|jpg|png';
                        $config['max_size']             = 2048;
                        $config['encrypt_name']         = TRUE;
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('photo')){
                            $photo = $this->upload->data('file_name');
                        }
                    }

                    $data = array(
                        'email' => $this->input->post('email'),
                        'status' => $this->input->post('status'),
                        'password' => md5(md5($this->input->post('password'))),
                        'updated_at'=> date("Y-m-d H:i:s")
                    );

                    $this->users->edit($model->users_id,$data);
                    $this->member->edit($model->id,$model->users_id,$photo,$model);
                    $this->session->photo = $photo;
                    $this->session->set_flashdata('success', 'Member account has been succesfully edited!');
                    redirect('member/profile/edit');
                }
            }else{
                $this->load->view('backend/member/profile_edit',['model'=>$model,'script'=>'backend/member/page_script/petugas_create']);
            }

        }
    }
}