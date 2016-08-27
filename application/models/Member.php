<?php

/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 8/26/2016
 * Time: 3:40 PM
 */
class Member extends CI_Model
{
    public $users_id;
    public $fullname;
    public $alamat;
    public $no_hp;
    public $photo;
    public $kode_pos;
    public $created_at;
    public $updated_at;

    public function insert($users_id)
    {
        $this->users_id = $users_id;
        $this->fullname = $this->input->post('fullname');
        $this->alamat = $this->input->post('alamat');
        $this->no_hp = $this->input->post('no_hp');
        $this->kode_pos = $this->input->post('kode_pos');
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('member', $this);
    }
}