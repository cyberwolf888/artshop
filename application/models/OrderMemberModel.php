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
    public $token;
    public $created_at;

    //status : 1=>order baru, 2=>proses pengerajin, 3=>dikirim, 4=>complate
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
        $this->token = random_string('alnum', 8);
        $this->created_at = date("Y-m-d H:i:s");
        $this->db->insert('order_member', $this);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('order_member');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }
}