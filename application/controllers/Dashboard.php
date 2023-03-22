<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("loggedIn") == true) {
            //
        } else {
            redirect(base_url() . 'login');
        }
    }


    public function index()
    {
        $this->load->model('Dashboard_model');

        $nrUsers = $this->Dashboard_model->getCountUsers();

        $nrCainiPerLuna = $this->Dashboard_model->getNrCainiPerLuna();
        // echo json_encode($nrCainiPerLuna);
        // die();
        $data = array(
            'numar_users' => $nrUsers,
            'numar_caini' =>  $this->Dashboard_model->getCountCaini(),
            'nrCainiPerLuna' => $nrCainiPerLuna
        );

        $this->load->view('templates/header');
        $this->load->view('dashboard/main', $data);
        $this->load->view('templates/footer');
    }

   
}
