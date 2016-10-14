<?php

/**
 * Created by PhpStorm.
 * User: iTubeStoreDiponegoro
 * Date: 10/6/16
 * Time: 10:13 AM
 */
class PaymentPengerajinModel extends CI_Model
{
    public $order_id;
    public $pengerajin_id;
    public $image;
    public $status;
    public $note;
    public $created_at;

    public function insert($image)
    {
        $this->order_id = $this->input->post('order_id');
        $this->pengerajin_id = $this->input->post('pengerajin_id');
        $this->image = $image;
        $this->status = 1;
        $this->note = $this->input->post('note');
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('payment_pengerajin', $this);
    }

    public function findAll()
    {
        $this->db->select('payment_pengerajin.*, order_member.fullname, order_member.total,order_member.payment');
        $this->db->from('payment_pengerajin');
        $this->db->join('order_member','order_member.id = payment_pengerajin.order_id');
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function findAllById($id)
    {
        $this->db->select('payment_pengerajin.*, order_member.fullname, order_member.total,order_member.payment');
        $this->db->from('payment_pengerajin');
        $this->db->join('order_member','order_member.id = payment_pengerajin.order_id');
        $this->db->where('payment_pengerajin.pengerajin_id',$id);
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function find($id)
    {
        $this->db->select('payment_pengerajin.*, 
                            order_pengerajin.payment_status as order_pengerajin_payment_status,
                            pengerajin.fullname, 
                            order_member.total,order_member.payment');
        $this->db->from('payment_pengerajin');
        $this->db->join('order_pengerajin','order_pengerajin.id = payment_pengerajin.order_id');
        $this->db->join('pengerajin','pengerajin.id = order_pengerajin.pengerajin_id');
        $this->db->join('order_member','order_member.id = order_pengerajin.order_id');
        $this->db->where('payment_pengerajin.id',$id);
        $query = $this->db->get();
        return $query;
    }

    public function getStatus($id)
    {
        $status = ['0'=>'Dinied','1'=>'New Payment','2'=>'Confirmed'];
        return $status[$id];
    }

    public function update($id,$data=array())
    {
        $this->db->where('id', $id);

        return $this->db->update('payment_pengerajin',$data);;
    }

    public function last5($id)
    {
        $this->db->select('payment_pengerajin.*, order_member.fullname, order_member.total,order_member.payment');
        $this->db->from('payment_pengerajin');
        $this->db->join('order_member','order_member.id = payment_pengerajin.order_id');
        $this->db->where('payment_pengerajin.pengerajin_id',$id);
        $this->db->limit(5);
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

}