<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

    public function index()
    {
        $this->load->view('backend/petugas/dashboard',['script'=>'backend/petugas/page_script/dashboard']);
    }
}