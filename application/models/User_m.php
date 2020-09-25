<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['username'] = $post['username'];
        $params['nama_user'] = $post['fullnama'];
        $params['password'] = $post['password'];
        $params['id_level'] = $post['level'];
        $this->db->insert('user', $params);
    }

    public function del($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function edit($post)
    {
        $params['username'] = $post['username'];
        $params['nama_user'] = $post['fullnama'];
        if(!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['id_level'] = $post['level'];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $params);
    }
    

}
