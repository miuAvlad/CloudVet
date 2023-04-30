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

    function getNrCainiPerLuna(){
        $sql = "SELECT DATE_FORMAT(DataAdaugarii, '%Y') as 'year',
        DATE_FORMAT(DataAdaugarii, '%m') as 'month',
        COUNT(*) as 'total'
        FROM dogs
        GROUP BY DATE_FORMAT(DataAdaugarii, '%Y%m')";
        $result=$this->db->query($sql)->result();
        return $result;
    }
    public function getRemindere()
    {   $this->db->where("data_reminder <=", date("Y-m-d"));
        $this->db->where("seen_reminder", 0);
        $result=$this->db->get('remindere')->result();
        return $result;
    }

}
