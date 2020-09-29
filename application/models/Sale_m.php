<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_m extends CI_Model{

    public function invoice_no(){
        $sql = "SELECT MAX(MID(invoice, 9, 4)) AS invoice_no 
                FROM t_sale WHERE MID(invoice, 3, 6)= DATE_FORMAT(CURDATE(), '%y%m%d') ";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->invoice_no) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = '0001';
        }
        $invoice = "MP".date('ymd').$no;
        return $invoice;
    }

    public function add_cart($post) {
        $query = $this->db->query("SELECT MAX(cart_id) AS cart_no FROM t_cart ");
        if($query->num_rows() > 0) {
            $row = $query->row();
            $cart_no = ((int)$row->cart_no) + 1;
        } else {
            $cart_no = "1";
        }

        $params = array(
            'cart_id' => $cart_no,
            'item_id' => $post['item_id'],
            'price' => $post['price'],
            'qty' => $post['qty'],
            'total' => ($post['price'] * $post['qty']),
            'id_user' => $this->session->userdata('id_user')
        );
        $this->db->insert('t_cart', $params);
    }

}