<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("loggedIn") == true) {
            redirect(base_url() . 'dashboard');
        } else {
            //do nothing, ca nu e authentificat
            $this->load->model("Auth_model", "Auth");
        }
    }


    public function index()
    {
        $this->load->view('login/main');
    }

    public function auth()
    {
       

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //hash sha256 password
        $password = hash('sha256', SALTKEY.$password);

        $total_attempts = 0;
        if($this->session->userdata("total_attempts")){
            $total_attempts = $this->session->userdata("total_attempts");
        }

        if($total_attempts >= 7){
            $this->session->set_flashdata('error', 'Ati epuizat numarul de incercari disponibile. Va rugam reincercati mai tarziu.');
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        if ($this->Auth->checkUserExistence($email, $password)) {
            $user_info = $this->Auth->getUser($email);
            $this->session->set_userdata('loggedIn', true);
            $this->session->set_userdata('email', $user_info->user_email);
            $this->session->set_userdata('nume', $user_info->user_nume);
            $this->session->set_userdata('status', $user_info->status);
            $this->session->set_userdata('total_attempts', 0);

            redirect(base_url() . 'dashboard');
        } else {
            $this->session->set_flashdata('error', 'Emailul sau parola sunt incorecte!');
            //redirect server refferer
            //increaste total attempts in session
            $this->session->set_userdata('total_attempts', $total_attempts + 1);
    
            redirect($_SERVER['HTTP_REFERER']);
        }



    }
}
