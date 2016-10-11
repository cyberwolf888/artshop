<?php

/**
 * Created by PhpStorm.
 * User: iTubeStoreDiponegoro
 * Date: 10/1/16
 * Time: 2:30 PM
 */
class OrderPengerajinModel extends CI_Model
{
    public $order_id;
    public $pengerajin_id;
    public $payment_status;
    public $created_at;

    public function insert()
    {
        $this->order_id = $this->input->post('order_id');
        $this->pengerajin_id = $this->input->post('pengerajin_id');
        $this->payment_status = 0;
        $this->created_at = date("Y-m-d H:i:s");

        $this->db->insert('order_pengerajin', $this);
        $insert_id = $this->db->insert_id();
    }

    public function findAll()
    {
        $this->db->select('order_pengerajin.id AS order_pengerajin_id, order_pengerajin.payment_status AS order_pengerajin_payment_status, order_member.*,pengerajin.fullname AS pengerajin_name,pengerajin.no_hp AS pengerajin_no_hp');
        $this->db->from('order_pengerajin');
        $this->db->join('order_member', 'order_member.id = order_pengerajin.order_id');
        $this->db->join('pengerajin', 'pengerajin.id = order_pengerajin.pengerajin_id');
        $this->db->order_by('order_pengerajin.id', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    public function findAllById($id)
    {
        $this->db->select('order_pengerajin.id AS order_pengerajin_id, order_pengerajin.pengerajin_id, order_pengerajin.payment_status AS order_pengerajin_payment_status, order_member.*,pengerajin.fullname AS pengerajin_name,pengerajin.no_hp AS pengerajin_no_hp');
        $this->db->from('order_pengerajin');
        $this->db->join('order_member', 'order_member.id = order_pengerajin.order_id');
        $this->db->join('pengerajin', 'pengerajin.id = order_pengerajin.pengerajin_id');
        $this->db->where('order_pengerajin.pengerajin_id', $id);
        $this->db->order_by('order_pengerajin.id', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    public function findNotif($id)
    {
        $this->db->select('order_pengerajin.id AS order_pengerajin_id, order_pengerajin.pengerajin_id, order_member.*,pengerajin.fullname AS pengerajin_name,pengerajin.no_hp AS pengerajin_no_hp');
        $this->db->from('order_pengerajin');
        $this->db->join('order_member', 'order_member.id = order_pengerajin.order_id');
        $this->db->join('pengerajin', 'pengerajin.id = order_pengerajin.pengerajin_id');
        $this->db->where('order_pengerajin.pengerajin_id', $id);
        $this->db->where('order_member.status', 2);
        $this->db->order_by('order_pengerajin.id', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    public function find($id)
    {
        $this->db->select('order_pengerajin.id AS order_pengerajin_id, order_pengerajin.payment_status AS order_pengerajin_payment_status, order_pengerajin.order_id, order_pengerajin.pengerajin_id, order_member.*,pengerajin.fullname AS pengerajin_name,pengerajin.no_hp AS pengerajin_no_hp');
        $this->db->from('order_pengerajin');
        $this->db->join('order_member','order_member.id = order_pengerajin.order_id');
        $this->db->join('pengerajin','pengerajin.id = order_pengerajin.pengerajin_id');
        $this->db->where('order_pengerajin.id',$id);
        $query = $this->db->get();

        return $query;
    }

    public function update($id,$data=array())
    {
        $this->db->where('id', $id);

        return $this->db->update('order_pengerajin',$data);;
    }

    public function getReport($start_date, $end_date, $payment_status)
    {
        $this->db->select('order_pengerajin.id AS order_pengerajin_id, order_pengerajin.payment_status AS order_pengerajin_payment_status, order_member.*,pengerajin.fullname AS pengerajin_name,pengerajin.no_hp AS pengerajin_no_hp');
        $this->db->from('order_pengerajin');
        $this->db->join('order_member', 'order_member.id = order_pengerajin.order_id');
        $this->db->join('pengerajin', 'pengerajin.id = order_pengerajin.pengerajin_id');
        $this->db->where('order_pengerajin.created_at >="'.$start_date.'" AND order_pengerajin.created_at <= "'.$end_date.'"');
        if($payment_status != '2'){
            $this->db->where('order_pengerajin.payment_status',$payment_status);
        }
        $query = $this->db->get();
        return $query;
    }

}