<?php

class Caini_model extends CI_Model
{
    public function getAllUsers()
    {

        $result = $this->db->get('dogs')->result();
        return $result;
    }
    public function deleteCaine($NrCrtCaine)
    {
        $this->db->where('NrCrt', $NrCrtCaine);
        $this->db->delete('dogs');
        return $this->db->affected_rows();
    }
    public function deleteVaccin($id_vaccin)
    {
        $this->db->where('id_vaccin', $id_vaccin);
        $this->db->delete('dogs_vaccinuri');
        return $this->db->affected_rows();
    }
    public function getCaineInfo($NrCrt)
    {

        $this->db->where('NrCrt', $NrCrt);
        $result = $this->db->get('dogs')->row();
        return $result;
    }
    public function updateCaineInfo($NrCrt, $data)
    {
        $this->db->where('NrCrt', $NrCrt);
        $this->db->update('dogs', $data);
        return $this->db->affected_rows();
    }
    public function addCaine($data)
    {
        $this->db->insert('dogs', $data);
        return $this->db->affected_rows();
    }
    
    public function addVacinCaine($data)
    {
        $this->db->insert('dogs_vaccinuri', $data);
        return $this->db->affected_rows();
    }

    public function detectCaine($numar_cip)
    {

        $this->db->like('NrCip', $numar_cip);
        $querry = $this->db->get('dogs');
  
        if ($querry->row() > 0) {
            return true;
        }
        return false;
    }

    public function getDataTable(){
        $this->db->select('*');
        $this->db->from('dogs');
        return $this->db->get('dogs');
    }

    public function getCaineVaccinuri($id_caine){
        $this->db->where("id_caine", $id_caine);
        return $this->db->get("dogs_vaccinuri")->result();
    }
}
