<?php

/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 8/26/2016
 * Time: 3:40 PM
 */
class PetugasToko extends CI_Model
{
    public $users_id;
    public $fullname;
    public $alamat;
    public $no_hp;
    public $photo;
    public $created_at;
    public $updated_at;

    public function insert($users_id,$photo=null)
    {
        $this->users_id = $users_id;
        $this->fullname = $this->input->post('fullname');
        $this->alamat = $this->input->post('alamat');
        $this->no_hp = $this->input->post('no_hp');
        $this->created_at = date("Y-m-d H:i:s");
        $this->photo = $photo;
        $this->db->insert('petugas_toko', $this);
    }
}