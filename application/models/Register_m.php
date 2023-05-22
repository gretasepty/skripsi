<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_m extends CI_Model {

    public function add($post){
        
        $level = 2;
        $params['namaLengkap'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['email'] = $post['email'];
        $params['jenisKelamin'] = $post['gender'];
        $params['level'] = $level;
        $this->db->insert('register', $params);
    }
}