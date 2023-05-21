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
        $result = $this->db->where('NrCrt', $NrCrtCaine);
        $this->load->model('Boxe_model', 'boxe');
        $this->boxe->removeFromIstoric($result->NrCip, $result->$NrBoxa);
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

        $this->db->where('NrCip', $numar_cip);
        $querry = $this->db->get('dogs');

        if ($querry->row() > 0) {
            return true;
        }
        return false;
    }

    public function getDataTable()
    {
        $this->db->select('*');
        $this->db->from('dogs');
        return $this->db->get('dogs');
    }

    public function getCaineVaccinuri($id_caine)
    {
        $this->db->where("id_caine", $id_caine);
        return $this->db->get("dogs_vaccinuri")->result();
    }
    public function getCaineRemindere($id_caine)
    {
        $this->db->where("id_dog", $id_caine);
        //$this->db->where("data_reminder <=", date("Y-m-d"));
        return $this->db->get("remindere")->result();
        // $sql="SELECT text_reminder,data_reminder FROM remindere WHERE data_reminder <= ?";
        // $query=$this->db->query($sql,date("Y-m-d"));
        // $row = $query->row_array();
        // return $row;


    }
    public function updateBoxaCaine($Nr_Cip, $Nr_Boxa)
    {
        $sql = " UPDATE dogs SET NrBoxa = ? WHERE NrCip = ?";
        $this->db->query($sql, array($Nr_Boxa, $Nr_Cip));
        return $this->db->affected_rows();
    }
    public function addReminderCaine($data)
    {
        $this->db->insert('remindere', $data);
        return $this->db->affected_rows();
    }
    public function seenReminder($id_reminder)
    {
        $sql = " UPDATE remindere SET seen_reminder = ? WHERE id_reminder = ?";
        $this->db->query($sql, array(1, $id_reminder));
        return $this->db->affected_rows();
    }
    public function removeReminder($id_reminder)
    {
        $this->db->where('id_reminder', $id_reminder);
        $this->db->delete('remindere');
        return $this->db->affected_rows();
    }
}
