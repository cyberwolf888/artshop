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
}