<?php

/**
 * Created by PhpStorm.
 * User: iTubeStoreDiponegoro
 * Date: 9/29/16
 * Time: 1:46 PM
 */
class OrderMemberModel extends CI_Model
{
    public $member_id;
    public $address;
    public $fullname;
    public $no_hp;
    public $state;
    public $zip_code;
    public $note;
    public $payment;
    public $total;
    public $status;
    public $payment_status;
    public $token;
    public $created_at;

    //status : 0=>canceled, 1=>order baru, 2=>proses pengerajin, 3=>dikerjakan pengerajin, 4=>dikirim, 5=>conplete
    //payment : 1=>transfer bank, 2=>kartu kredit

    public function insert($member_id,$total)
    {
        $this->member_id = $member_id;
        $this->address = $this->input->post('address');
        $this->fullname = $this->input->post('fullname');
        $this->no_hp = $this->input->post('no_hp');
        $this->state = $this->input->post('state');
        $this->zip_code = $this->input->post('zip_code');
        $this->note = $this->input->post('note');
        $this->payment = 1;
        $this->total = $total;
        $this->status = 1;
        $this->payment_status = 0;
        $this->token = random_string('alnum', 8);
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('order_member', $this);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    public function update($id,$data=array())
    {
        $this->db->where('id', $id);

        return $this->db->update('order_member',$data);;
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('order_member');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getNewOrder()
    {
        $this->db->select('*');
        $this->db->from('order_member');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query;
    }

    public function findAll()
    {
        $this->db->select('*');
        $this->db->from('order_member');
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function findByMember($id)
    {
        $this->db->select('*');
        $this->db->from('order_member');
        $this->db->where('status',1);
        $this->db->where('payment_status',0);
        $this->db->where('member_id',$id);
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getPayment($id)
    {
        $bank = ['1'=>'Transfer Bank','2'=>'Credit Card'];
        return $bank[$id];
    }

    public function getStatus($id)
    {
        $status = ['0'=>'Canceled','1'=>'New Order','2'=>'Process', '3'=>'Working','4'=>'Shipped','5'=>'Complete'];
        return $status[$id];
    }

    public function getPaymentStatus($id)
    {
        $status = ['0'=>'Not Paid','1'=>'Paid'];
        return $status[$id];
    }
}