<?php
class ProductModel extends CI_Model
{
    public $categories_id;
    public $name;
    public $description;
    public $price;
    public $discount;
    public $isSale;
    public $isHot;
    public $isAvailable;
    public $created_at;
    public $updated_at;

    public function insert()
    {
        $this->categories_id = $this->input->post('categories_id');
        $this->name = $this->input->post('name');
        $this->description = $this->input->post('description');
        $this->price = $this->input->post('price');
        $this->discount = $this->input->post('discount');
        $this->isSale = $this->input->post('isSale');
        $this->isHot = $this->input->post('isHot');
        $this->isAvailable = $this->input->post('isAvailable');
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('product', $this);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    public function getAll()
    {
        $this->db->select('product.*,categories.label');
        $this->db->from('product');
        $this->db->join('categories', 'categories.id = product.categories_id');
        $query = $this->db->get();
        return $query;
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function edit($model)
    {
        $this->categories_id = $this->input->post('categories_id');
        $this->name = $this->input->post('name');
        $this->description = $this->input->post('description');
        $this->price = $this->input->post('price');
        $this->discount = $this->input->post('discount');
        $this->isSale = $this->input->post('isSale');
        $this->isHot = $this->input->post('isHot');
        $this->isAvailable = $this->input->post('isAvailable');
        $this->created_at = $model->created_at;
        $this->updated_at = date("Y-m-d H:i:s");
        $this->db->where('id', $model->id);
        $this->db->update('product', $this);
    }
}