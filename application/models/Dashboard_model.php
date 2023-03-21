<?php

class Dashboard_model extends CI_Model{

 
    public function getCountUsers(){

        $result=$this->db->get('users')->num_rows();
        return $result;
    }

    public function getCountCaini(){

        $result=$this->db->get('dogs')->num_rows();
        return $result;
    }

}
