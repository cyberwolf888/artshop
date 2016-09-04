<?php

/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 8/26/2016
 * Time: 1:23 PM
 */
class Users extends CI_Model{
    public $email;
    public $password;
    public $status;
    public $type;
    public $token;
    public $created_at;
    public $updated_at;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function insert_member()
    {
        $this->email = $this->input->post('email');
        $this->password =  md5(md5($this->input->post('password')));
        $this->status = "1";
        $this->type = "1";
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('users', $this);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    public function insert_petugas()
    {
        $this->email = $this->input->post('email');
        $this->password =  md5(md5($this->input->post('password')));
        $this->status = "1";
        $this->type = "2";
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('users', $this);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    public function login($email, $password){
        $query = $this->db->get_where('users', ['email'=>$email, 'password'=>md5(md5($password))]);
        if($query->num_rows()==1){
            $user = $query->result()[0];
            if($user->type==1){
                $profile = $this->db->get_where('member', ['users_id'=>$user->id])->result()[0];
            }elseif($user->type==2){
                $profile = $this->db->get_where('pengerajin', ['users_id'=>$user->id])->result()[0];
            }elseif($user->type==3){
                $profile = $this->db->get_where('petugas_toko', ['users_id'=>$user->id])->result()[0];
            }elseif($user->type==4){
                $profile = $this->db->get_where('admin', ['users_id'=>$user->id])->result()[0];
            }

            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('email', $user->email);
            $this->session->set_userdata('type', $user->type);
            $this->session->set_userdata('fullname', $profile->fullname);
            $this->session->set_userdata('photo', $profile->photo);
            $this->session->set_userdata('isLogedIn', TRUE);

            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function isLogedIn(){
        return $this->session->isLogedIn;
    }

    public function logout(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('type');
        $this->session->unset_userdata('fullname');
        $this->session->unset_userdata('photo');
        $this->session->set_userdata('isLogedIn', FALSE);
    }
}