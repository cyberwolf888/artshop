<?php


class PaymentModel extends CI_Model
{
    public $order_id;
    public $member_id;
    public $image;
    public $status;
    public $type;
    public $note;
    public $created_at;

    public function insert($image,$type)
    {
        $this->order_id = $this->input->post('order_id');
        $this->member_id = $this->input->post('member_id');
        $this->image = $image;
        $this->status = 1;
        $this->type = $type;
        $this->note = $this->input->post('note');
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('payment', $this);
    }

    public function findAll()
    {
        $this->db->select('payment.*, order_member.fullname, order_member.total,order_member.payment');
        $this->db->from('payment');
        $this->db->join('order_member','order_member.id = payment.order_id');
        $this->db->where('payment.type',1);
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

}