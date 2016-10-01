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

    public function insert()
    {
        $this->order_id = $this->input->post('order_id');
        $this->pengerajin_id = $this->input->post('pengerajin_id');

        $this->db->insert('order_pengerajin', $this);
        $insert_id = $this->db->insert_id();
    }

    public function findAll()
    {
        $this->db->select('order_pengerajin.id AS order_pengerajin_id, order_member.*,pengerajin.fullname AS pengerajin_name,pengerajin.no_hp AS pengerajin_no_hp');
        $this->db->from('order_pengerajin');
        $this->db->join('order_member','order_member.id = order_pengerajin.order_id');
        $this->db->join('pengerajin','pengerajin.id = order_pengerajin.pengerajin_id');
        $query = $this->db->get();

        return $query;
    }
}