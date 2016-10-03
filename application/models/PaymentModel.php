<?php


class PaymentModel extends CI_Model
{
    public $order_id;
    public $member_id;
    public $image;
    public $status;
    public $note;
    public $created_at;

    public function insert($image)
    {
        $this->order_id = $this->input->post('order_id');
        $this->member_id = $this->input->post('member_id');
        $this->image = $image;
        $this->status = 1;
        $this->note = $this->input->post('note');
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('payment', $this);
    }
}