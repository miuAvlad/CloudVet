<?php

class Auth_model extends CI_Model{

    
    public function checkUserExistence($email, $password)
    {
        $this->db->where('user_email',$email);
        $this->db->where('user_password',$password);
        $query=$this->db->get('users');
        
        $result=$query->num_rows($query);
       
        if($result > 0){
            return true;
        }else{
            return false;
        }

    }


    public function getUser($email){
        $this->db->where('user_email',$email);
        $result=$this->db->get('users',1)->row();
        return $result;
    }
}
