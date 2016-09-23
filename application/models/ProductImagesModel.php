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
}