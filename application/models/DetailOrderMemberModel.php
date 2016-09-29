<?php

/**
 * Created by PhpStorm.
 * User: iTubeStoreDiponegoro
 * Date: 9/29/16
 * Time: 2:54 PM
 */
class DetailOrderMemberModel extends CI_Model
{

    public function insert($data = array())
    {
        $this->db->insert('detail_order_member', $data);
    }

    public function findByOrder($order_id)
    {
        $this->db->select('*');
        $this->db->from('detail_order_member');
        $this->db->where('order_id', $order_id);
        $query = $this->db->get();
        return $query;
    }
}