<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
        $this->load->model('orderMemberModel');
        if($this->session->type != 3){
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->view('backend/pengerajin/dashboard',['script'=>'backend/pengerajin/page_script/dashboard']);
    }
}