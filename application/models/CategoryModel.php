<?php

/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 9/12/2016
 * Time: 3:47 PM
 */
class CategoryModel extends CI_Model
{
    public $label;
    public $created_at;
    public $updated_at;

    public function insert()
    {
        $this->label = $this->input->post('label');
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('categories', $this);
    }

    public function edit($id,$model)
    {
        $this->label = $this->input->post('label');
        $this->updated_at = date("Y-m-d H:i:s");
        $this->created_at = $model->created_at;
        $this->db->where('id', $id);
        $this->db->update('categories', $this);
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('categories');
        $query = $this->db->get();
        return $query;
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }
}