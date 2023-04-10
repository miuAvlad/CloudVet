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
        $this->load->view('boxe/lista_boxe',$data);
        $this->load->view('templates/footer');
    }
////////////////////////////////////////////////////////////////
public function modifica_boxe($id_boxa)
    {
        $this->load->view('templates/header');
        $this->load->view('boxe/modifica_boxe',$data);
        $this->load->view('templates/footer');
    }
}
