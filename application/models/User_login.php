<?php

Class User_login extends CI_Model {
    
    public function login($data) 
    {
        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }
    
    public function read_user_information($email) 
    {   
        $condition = "email =" . "'" . $email . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) 
        {
            return $query->result();
        } 
        else 
        {
            return false;
        }
    }
    
    public function newsletter($email) 
    {   
        $condition = "email =" . "'" . $email . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        $value = $query->result_array();
        //print_r($value);
        if ($query->num_rows() == 1) 
        {
            $id = $value[0]['id'];
            $condition = "user_id =" . "'" . $id . "'";
            $this->db->select('*');
            $this->db->from('newsletter');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) 
            {
                $data = array(
                    'user_id'=>$id,
                    'subscription_flag'=>1
                );
                $this->db->insert('newsletter', $data);
                return true;
            }
            else
            {
                return 0;
            }
        } 
        else 
        {
            return false;
        }
    }
    public function unsubscribe_newsletter($email) 
    {   
        $condition = "email =" . "'" . $email . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        $value = $query->result_array();
        //print_r($value);
        if ($query->num_rows() == 1) 
        {
            $id = $value[0]['id'];
            $condition = "user_id =" . "'" . $id . "'";
            $this->db->select('*');
            $this->db->from('newsletter');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 1) 
            {
                $data = array(
                    'subscription_flag'=>0
                );
                print_r($data);
                $this->db->where('user_id',$id);
                $this->db->update('newsletter', $data);
                return true;
            }
            else
            {
                return false;
            }
        } 
        else 
        {
            return false;
        }
    }
    
    public function contact($data) 
    {
        $data = array(
            "name"=>$data["name"],
            "emailid"=>$data["email"],
            "contactno"=>$data["mobile"],
            "subject"=>$data["subject"],
            "message"=>$data["message"]
        );
        
        $result = $this->db->insert("contact",$data);
        
        if ($this->db->affected_rows()  == 0) 
        {
            return FALSE;
        } 
        else 
        {
            return TRUE;
        }
    }
    
}