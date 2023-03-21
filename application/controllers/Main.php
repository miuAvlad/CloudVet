<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
		if ($this->session->userdata("loggedIn") == true) {
            redirect(base_url() . 'dashboard');
        } else {
            //do nothing, ca nu e authentificat
			redirect(base_url() . 'login');
        }
	}
	
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url() . 'login');
	}
}
