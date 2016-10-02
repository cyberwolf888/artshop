<?php

/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 9/6/2016
 * Time: 9:08 PM
 */
class PengerajinModel extends CI_Model
{
    public $users_id;
    public $fullname;
    public $alamat;
    public $no_hp;
    public $photo;
    public $status;
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
        $this->status = '1';
        $this->db->insert('pengerajin', $this);
    }

    public function edit($id,$users_id,$photo=null,$model)
    {
        $this->users_id = $users_id;
        $this->fullname = $this->input->post('fullname');
        $this->alamat = $this->input->post('alamat');
        $this->no_hp = $this->input->post('no_hp');
        $this->updated_at = date("Y-m-d H:i:s");
        $this->created_at = $model->created_at;
        $this->status = $this->input->post('status_member');
        $this->photo = $photo;
        $this->db->where('id', $id);
        $this->db->update('pengerajin', $this);
    }

    public function getAll()
    {
        $this->db->select('pengerajin.*,users.email,users.status AS users_status');
        $this->db->from('pengerajin');
        $this->db->join('users', 'users.id = pengerajin.users_id');
        $query = $this->db->get();
        return $query;
    }

    public function find($id)
    {
        $this->db->select('pengerajin.*,users.email,users.status AS users_status');
        $this->db->from('pengerajin');
        $this->db->join('users', 'users.id = pengerajin.users_id');
        $this->db->where('pengerajin.id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function findByUsers($id)
    {
        $this->db->select('pengerajin.*,users.email,users.status AS users_status');
        $this->db->from('pengerajin');
        $this->db->join('users', 'users.id = pengerajin.users_id');
        $this->db->where('users.id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getStatusLabel($status)
    {
        $label = ['1'=>'Available','2'=>'Full','0'=>'Banned'];
        return $label[$status];
    }
}