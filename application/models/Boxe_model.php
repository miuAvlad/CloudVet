<?php

class Boxe_model extends CI_Model
{
    public function getAllBoxes()
    {

        $result = $this->db->get('boxe')->result();
        return $result;
    }
    function getBoxaInfo($id_boxa)
    {
        $this->db->where('id_boxa', $id_boxa);
        $result = $this->db->get('boxe')->row();
        return $result;
    }
    public function updateBoxa($id_boxa, $data)
    {
        $this->db->where('id_boxa', $id_boxa);
        $this->db->update('boxe', $data);
        return $this->db->affected_rows();
    }

    function getCainiByBoxa($id_boxa)
    {
        $this->db->where('NrBoxa', $id_boxa);
        $result = $this->db->get('dogs')->result();
        return $result;
    }


  
}