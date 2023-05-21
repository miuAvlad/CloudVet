<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utilizatori extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("loggedIn") == true) {
            //
        } else {
            redirect(base_url() . 'login');
        }
        $this->load->model('Utilizatori_model');
    }


    public function index()
    {
        redirect(base_url() . 'utilizatori/lista_utilizatori');
    }

    public function lista_utilizatori()
    {



        $data = array(
            'utilizatori' => $this->Utilizatori_model->getAllUsers()
        );


        $this->load->view('templates/header');
        $this->load->view('utilizatori/lista_utilizatori', $data);
        $this->load->view('templates/footer');
    }

    function sterge_utilizator($id_user)
    {

        $result = $this->Utilizatori_model->deleteUser($id_user); 
        if ($result > 0) {
            redirect(base_url() . 'utilizatori/lista_utilizatori');
        } else {
            echo "Utilizatorul nu a putut fi sters.";
        }
    }


    function editeaza_utilizator($id_user)
    {

        $user_info = $this->Utilizatori_model->getUserInfo($id_user);

        $data = array(
            'user' => $user_info
        );
        
        $this->load->view('templates/header');
        $this->load->view('utilizatori/editeaza_utilizator', $data);
        $this->load->view('templates/footer');
    }


    function update_utilizator($id_user)
    {
        $noul_email = $this->input->post('user_email');
        $noul_nume = $this->input->post('user_nume');

        $dataForUpdate = array(
            'user_email' => $noul_email,
            'user_nume' => $noul_nume
        );

        $noua_parola = $this->input->post('user_parola');
        $noua_parola =  hash('sha256', SALTKEY.$noua_parola);
        if($this->input->post('user_parola') != "" && $this->input->post('user_parola') != null){
            $dataForUpdate["user_password"] = $noua_parola;
        }
       

        $result = $this->Utilizatori_model->updateUserInfo($id_user, $dataForUpdate);

        if ($result > 0) {
            //set flash message
            $this->session->set_flashdata('success', 'Utilizatorul a fost actualizat cu success!');

            redirect(base_url() . 'utilizatori/editeaza_utilizator/' . $id_user);
        } else {
            $this->session->set_flashdata('error', 'Nimic nu a fost schimbat!');
            redirect(base_url() . 'utilizatori/editeaza_utilizator/' . $id_user);
        }
    }

    function adauga_utilizator()
    {

        $this->load->view('templates/header');
        $this->load->view('utilizatori/adauga_utilizator');
        $this->load->view('templates/footer');
       
    }

    function adauga_utilizator2()
    {
         // sotcare date input in variabile
         $input_parola = $this->input->post('user_parola');
         $input_parola =  hash('sha256', SALTKEY.$input_parola);
         $input_email = $this->input->post('user_email');
         $input_nume = $this->input->post('user_nume');
 
         // formare array date insert to database
         $dataToAdd = array(
             'user_password' => $input_parola,
             'user_email' => $input_email,
             'user_nume' => $input_nume
         );
         //insert data to database, return 1 if succesful
         $result=$this->Utilizatori_model->detectUser($input_email);
         if ($result) {
             
             $this->session->set_flashdata('error', 'Adresa de email corespunde deja unui utilizator!');
             redirect(base_url() . 'utilizatori/adauga_utilizator/' . $result->id_user);
         } else {
             
             $this->session->set_flashdata('success', 'Utilizatorul a fost adaugat cu success!');
             $result1 = $this->Utilizatori_model->insertUser($dataToAdd);
             redirect(base_url() . 'utilizatori/adauga_utilizator/' . $result->id_user);
         }
    }
  
}
