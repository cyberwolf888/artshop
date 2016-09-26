<?php

class ProductImagesModel extends CI_Model
{
    public $product_id;
    public $image;

    public function insert($product_id,$image)
    {
        $this->product_id = $product_id;
        $this->image = $image;
        $this->db->insert('product_images', $this);
    }

    public function getAll($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_images');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        return $query;
    }

    public function getOne($id)
    {
        $this->db->select('*');
        $this->db->from('product_images');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getOneByProduct($id)
    {
        $this->db->select('*');
        $this->db->from('product_images');
        $this->db->where('product_id', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        $this->db->delete('product_images', array('id' => $id));
    }
}