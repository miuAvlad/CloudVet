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
    public function updateBoxa($data)
    {
        $this->db->where('id_boxa', $data->id_boxa);
        $this->db->update('boxe', $data);
        return $this->db->affected_rows();
    }
    ////////////////////////////////
    public function addToIstoric($NrCip,$nume_boxa)
    {
        $this->db->where('boxa_nume', $nume_boxa);
        $boxa= $this->db->get('boxe')->row();
        $sql = "UPDATE boxe SET boxa_istoric = ? WHERE boxa_nume = ?";
        $this->db->query($sql, array($boxa->boxa_istoric."\n".date('Y-m-d a', time())."-A intrat cainele cu CIP:".$NrCip, $nume_boxa));
        $this->load->model('Caini_model', 'caini');
        return 1;
    }
   ////////////////////////////////////////////////////////////////
    public function removeFromIstoric($NrCip,$NrBoxa,$index)
    {
        //nrcip este line actually
        $this->db->where('boxa_nume', $NrBoxa);
        $boxa= $this->db->get('boxe')->row();
        $array= explode("\n", $boxa->boxa_istoric);
        $new_istoric=NULL;
        unset($array[$NrCip]);
        foreach($array as $item):
            $new_istoric= $new_istoric.$item."\n";
        endforeach;
        substr_replace($new_istoric ,"",-1);
        $boxa->boxa_istoric=rtrim($new_istoric);
        $sql = "UPDATE boxe SET boxa_istoric = ? WHERE id_boxa = ?";
        $this->db->query($sql, array($boxa->boxa_istoric, $boxa->id_boxa));
        // if($index == 0)// daca dau remove din boxe
        // {
        //     $this->load->model('Caini_model', 'caini');
        //     $this->caini->updateBoxaCaine($NrCip,'');
        //     // sterge boxa din baza de date a cainelui
        // }

        return $this->db->affected_rows();
    }
}