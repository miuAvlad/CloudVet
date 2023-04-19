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
        $boxe = $this->Boxe_model->getAllBoxes();
        foreach ($boxe as $boxa) {
            $cainiBoxa = $this->Boxe_model->getCainiByBoxa($boxa->id_boxa);
            $boxa->caini = $cainiBoxa;
            $boxa->nr_caini = count($cainiBoxa);
        }

        $data = array(
            'boxe' => $boxe
        );
        $this->load->view('templates/header');
        $this->load->view('boxe/lista_boxe', $data);
        $this->load->view('templates/footer');
    }
    ////////////////////////////////////////////////////////////////
    public function modifica_boxe($id_boxa)
    {
        $boxa = $this->Boxe_model->getBoxaInfo($id_boxa);
        $cainiBoxa = $this->Boxe_model->getCainiByBoxa($id_boxa);
        if ($boxa != null) {


            $data = array(
                'boxa' => $boxa,
                'cainiBoxa' => $cainiBoxa
            );

            $this->load->view('templates/header');
            $this->load->view('boxe/modifica_boxe', $data);
            $this->load->view('templates/footer');
        } else {
            echo "boxa not found";
        }
    }
    public function update_boxe($id_boxa)
    {
        
        $postData = $this->input->post();
            
        $result = $this->Boxe_model->updateBoxa($id_boxa, $postData);
        if ($result > 0) {
            //set flash message
            $this->session->set_flashdata('success', 'Modificarea a fost facuta!');

            redirect(base_url() . 'boxe/modifica_boxe/' . $id_boxa);
        } else {
            $this->session->set_flashdata('error', 'Nimic nu a fost schimbat!');
            redirect(base_url() . 'boxe/modifica_boxe/' . $id_boxa);
        }
    }

    public function delete_caine_from_boxa($boxa, $caine)
    {
        //load caine model
        $this->load->model('Caini_model');

        $result = $this->Caini_model->updateCaineInfo($caine, array(
            'NrBoxa' => NULL
        ));

        if ($result > 0) {
            $this->session->set_flashdata('success', 'Cainele a fost scos din boxa.');
            redirect(base_url() . 'boxe/lista_boxe/');
        } else {
            $this->session->set_flashdata('error', 'Nimic nu a fost schimbat!');
            redirect(base_url() . 'boxe/lista_boxe/');
        }
    }
}
