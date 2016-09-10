<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
    }

    public function index()
    {
        $this->load->view('frontend/home',['script'=>'frontend/page_script/home_script']);
    }

    public function login()
    {
        if($this->users->isLogedIn()){
            if($this->session->type==1){
                redirect('/member');
            }elseif($this->session->type==2){
                redirect('/petugas');
            }elseif($this->session->type==3){
                redirect('/pengerajin');
            }elseif($this->session->type==4){
                redirect('/admin');
            }
        }

        $this->load->library('form_validation');
        if($this->input->post('email')){
            $login = $this->users->login($this->input->post('email'),$this->input->post('password'));
            if($login){
                $this->session->set_flashdata('success', 'Login success!');
                redirect('/login');
            }else{
                $this->session->set_flashdata('error', 'Email or password did not match!');
                redirect('/login');
            }
        }else{
            $this->load->view('frontend/login');
        }

    }

    public function register()
    {
        if($this->users->isLogedIn()){
            if($this->session->type==1){
                redirect('/member');
            }elseif($this->session->type==2){
                redirect('/petugas');
            }elseif($this->session->type==3){
                redirect('/pengerajin');
            }elseif($this->session->type==4){
                redirect('/admin');
            }
        }

        $this->load->library('form_validation');

        if($this->input->post('email')){
            $this->load->model('member');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('fullname', 'Full Name', 'required|min_length[5]|max_length[100]');
            $this->form_validation->set_rules('no_hp', 'No. Telp', 'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('alamat', 'Address', 'required|min_length[5]|max_length[100]');
            $this->form_validation->set_rules('kode_pos', 'Postal Code', 'required|min_length[4]|max_length[5]');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('frontend/register');
            }
            else{
                $user_id = $this->users->insert_member();
                $this->member->insert($user_id);
                $this->session->set_flashdata('success', 'Your account has been succesfully created!');
                redirect('/login');
            }
        }else{
            $this->load->view('frontend/register');
        }
    }

    public  function product($id)
    {
        $this->load->view('frontend/product');
    }

    public function category($id)
    {
        $this->load->view('frontend/category');
    }

    public function cart()
    {
        $this->load->view('frontend/cart');
    }

    public function checkout()
    {
        $this->load->view('frontend/checkout');
    }

    public function search()
    {
        $this->load->view('frontend/search');
    }

    public function faq()
    {
        $this->load->view('frontend/faq');
    }

    public function contact()
    {
        $this->load->view('frontend/contact');
    }

    public function about()
    {
        $this->load->view('frontend/about');
    }

    public function logout()
    {
        $this->users->logout();
        redirect('/');
    }

}
