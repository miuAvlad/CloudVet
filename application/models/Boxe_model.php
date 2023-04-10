<?php

class Boxe_model extends CI_Model
{
    public function getAllBoxes()
    {

        $result = $this->db->get('boxe')->result();
        return $result;
    }
}