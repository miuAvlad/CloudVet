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
    public function detectBoxa($nume_boxa)
    {
        $this->db->like('boxa_nume', $nume_boxa);
        $querry = $this->db->get('boxe');
     
        if ($querry->row()>0) {
            return true;
        }
        return false;
    }
    public function insertBoxa($data)
    {
        $this->db->insert('boxe', $data);
        return $this->db->affected_rows();
    }
    public function deleteBoxa($id_boxa)
    {
        $result=$this->db->where('id_boxa', $id_boxa);
        $this->db->delete('boxe');
        return $this->db->affected_rows();
        
    }
    public function detectBoxaId($id_boxa)
    {
        $this->db->where('id_boxa', $id_boxa);
        $querry = $this->db->get('boxe');
        if ($querry->row()>0) {
            return 1;
        }
        return 0;
    }

  
}