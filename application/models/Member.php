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

    public function insert($users_id,$photo=null)
    {
        $this->users_id = $users_id;
        $this->fullname = $this->input->post('fullname');
        $this->alamat = $this->input->post('alamat');
        $this->no_hp = $this->input->post('no_hp');
        $this->kode_pos = $this->input->post('kode_pos');
        $this->created_at = date("Y-m-d H:i:s");
        $this->photo = $photo;
        $this->db->insert('member', $this);
    }

    public function edit($id,$users_id,$photo=null,$model)
    {
        $this->users_id = $users_id;
        $this->fullname = $this->input->post('fullname');
        $this->alamat = $this->input->post('alamat');
        $this->no_hp = $this->input->post('no_hp');
        $this->kode_pos = $this->input->post('kode_pos');
        $this->updated_at = date("Y-m-d H:i:s");
        $this->created_at = $model->created_at;
        $this->photo = $photo;
        $this->db->where('id', $id);
        $this->db->update('member', $this);
    }

    public function getAll()
    {
        $this->db->select('member.*,users.email,users.status');
        $this->db->from('member');
        $this->db->join('users', 'users.id = member.users_id');
        $query = $this->db->get();
        return $query;
    }

    public function find($id)
    {
        $this->db->select('member.*,users.email, users.status');
        $this->db->from('member');
        $this->db->join('users', 'users.id = member.users_id');
        $this->db->where('member.id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function findByUser($id)
    {
        $this->db->select('member.*,users.email, users.status');
        $this->db->from('member');
        $this->db->join('users', 'users.id = member.users_id');
        $this->db->where('member.users_id', $id);
        $query = $this->db->get();
        return $query;
    }
}