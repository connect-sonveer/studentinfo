<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function add_user($data){
        return $this->db->insert('users',$data);
    }

}