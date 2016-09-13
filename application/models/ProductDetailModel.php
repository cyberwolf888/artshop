<?php
class ProductDetailModel extends CI_Model
{
    public $product_id;
    public $label;
    public $value;
    public $created_at;
    public $updated_at;

    public function insert($product_id)
    {
        $count = count($this->input->post('label'));
        for($i=0; $i<$count; $i++){
            $this->product_id = $product_id;
            $this->label = $this->input->post('label')[$i];
            $this->value = $this->input->post('value')[$i];
            $this->created_at = date("Y-m-d H:i:s");
            $this->db->insert('product_detail', $this);
        }
    }
}