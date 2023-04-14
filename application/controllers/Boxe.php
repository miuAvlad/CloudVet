<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Boxe extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("loggedIn") == true) {
            //
        } else {
            redirect(base_url() . 'login');
        }
        $this->load->model('Boxe_model');
    }
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        redirect(base_url() . 'boxe/lista_boxe');
    }
    ////////////////////////////////////////////////////////////////
    public function lista_boxe()
    {
        $data = array(
            'boxe' => $this->Boxe_model->getAllBoxes()
        );
        $this->load->view('templates/header');
        $this->load->view('boxe/lista_boxe', $data);
        $this->load->view('templates/footer');
    }
    ////////////////////////////////////////////////////////////////
    public function modifica_boxe($id_boxa)
    {
        $boxa = $this->Boxe_model->getBoxaInfo($id_boxa);
        if ($boxa != null) {


            $data = array(
                'boxe' => $boxa,
            );

            $this->load->view('templates/header');
            $this->load->view('boxe/modifica_boxe', $data);
            $this->load->view('templates/footer');
        } else {
            echo "boxa not found";
        }

       
    }
    public function update_boxe($boxa)
    {
        $boxa = unserialize(urldecode($boxa));  
        $boxa->boxa_nume= $this->input->post('boxa_nume');
        $boxa->boxa_locatie= $this->input->post('boxa_locatie');
        if($this->input->post('NrCip'))
        {
            
        }
        
        if (str_contains($boxa->boxa_istoric, $this->input->post('NrCip'))) { 
            $this->session->set_flashdata('error', 'Cainele este deja istoric!');
            redirect(base_url() . 'boxe/modifica_boxe/' . $boxa->id_boxa);
        }
        $boxa->boxa_istoric=$boxa->boxa_istoric."\n".date('Y-m-d a', time())."-A intrat cainele cu CIP:".$this->input->post('NrCip');
        $this->load->model('Caini_model', 'caini');
        if($this->caini->detectCaine($this->input->post('NrCip'))==0 && $this->input->post('NrCip'))
        {
            $this->session->set_flashdata('error', 'Cainele nu exista in baza de date!');
            redirect(base_url() . 'boxe/modifica_boxe/' . $boxa->id_boxa);
        }
        $result = $this->Boxe_model->updateBoxa($boxa);
        if ($result > 0) {
            //set flash message
            $this->session->set_flashdata('success', 'Modificarea a fost facuta!');

            redirect(base_url() . 'boxe/modifica_boxe/' . $boxa->id_boxa);
        } else {
            $this->session->set_flashdata('error', 'Nimic nu a fost schimbat!');
            redirect(base_url() . 'boxe/modifica_boxe/' . $boxa->id_boxa);
        }

    }
    
    public function delete_caine_from_istoric($line,$NumeBoxa)
    {
        $result = $this->Boxe_model->removeFromIstoric($line,$NumeBoxa,0);
        if($result==-11)
        {
            $this->session->set_flashdata('error', 'Cainele nu exista in baza de date!');
            redirect(base_url() . 'boxe/lista_boxe/');
        }
        if ($result > 0) {
            //set flash message
            $this->session->set_flashdata('success', 'Utilizatorul a fost actualizat cu success!');
            redirect(base_url() . 'boxe/lista_boxe/');
        } else {
            $this->session->set_flashdata('error', 'Nimic nu a fost schimbat!');
            redirect(base_url() . 'boxe/lista_boxe/');
        }
    }
}
