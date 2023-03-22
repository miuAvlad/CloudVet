<?php

class Utilizatori_model extends CI_Model
{


    public function getAllUsers()
    {

        $result = $this->db->get('users')->result();
        return $result;
    }

    public function deleteUser($id_user)
    {

        $this->db->where('id_user', $id_user);
        $this->db->delete('users');
        return $this->db->affected_rows();
    }

    public function getUserInfo($id)
    {

        $this->db->where('id_user', $id);
        $result = $this->db->get('users')->row();
        return $result;
    }


    public function updateUserInfo($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('users', $data);
        return $this->db->affected_rows();
    }
    // functie insert to datatbase
    public function insertUser($data)
    {
        $this->db->insert('users', $data);
        return $this->db->affected_rows();
    }
    public function detectUser($data)
    {
        $querry=$this->db->get_where('users', $data);
        if ($querry->row()>0) {
            return true;
        }
        return false;
    }

    public function getDataTable()
    {
        $result=$this->db->get('users')->result();
        $data=array();
        $i=0;
        foreach($result as $val)
        {
            $data[]=array(
                $i,
                $val->user_email,
                $val->user_nume,
                $val->user_password
            );
            $i++;
        }
        
        $output=array(
            "data"=>$data);
        return $output;
    }
}
