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

        if ($this->Auth->checkUserExistence($email, $password)) {
            $user_info = $this->Auth->getUser($email);
            $this->session->set_userdata('loggedIn', true);
            $this->session->set_userdata('email', $user_info->user_email);
            $this->session->set_userdata('nume', $user_info->user_nume);

            redirect(base_url() . 'dashboard');
        } else {
            $this->session->set_flashdata('error', 'User incorrect');
            //redirect server refferer
            redirect($_SERVER['HTTP_REFERER']);
        }



    }
}
