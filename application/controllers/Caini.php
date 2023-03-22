<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caini extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("loggedIn") == true) {
            //
        } else {
            redirect(base_url() . 'login');
        }
        $this->load->model('Caini_model');
    }


    public function index()
    {
        redirect(base_url() . 'caini/lista_caini');
    }

    public function lista_caini()
    {

        $data = array(
            'caini' => $this->Caini_model->getAllUsers()
        );

        $this->load->view('templates/header');
        $this->load->view('caini/lista_caini',$data);
        $this->load->view('templates/footer');
    }
    public function adauga_caine()
    {
      
        $this->load->view('templates/header');
        $this->load->view('caini/adauga_caine');
        $this->load->view('templates/footer');
    }   
    public function add_caine()
    {
        $data_nastere = $this->input->post('DataNastere');
        $data_intrare = $this->input->post('DataIntrareAdapost');
        $iesire_adapost = $this->input->post('IesireAdapost');
        $numar_cip = $this->input->post('NrCip');
        $numar_boxa = $this->input->post('NrBoxa');
        $nume_apartinator = $this->input->post('NumeApartinator');
        $vaccin_antirabic = $this->input->post('VaccinareAntiRabica');
        $vaccin_polivalent = $this->input->post('VaccinPolivalent');
        $deparazitare_interna = $this->input->post('DeparazitareInterna');
        $deparazitare_externa = $this->input->post('DeparazitareExterna');
        $deces = $this->input->post('Deces');
        $telefon_apartinator = $this->input->post('TelefonApartinator');


        $dataToAdd = array(
            'DataNastere' => $data_nastere,
            'DataIntrareAdapost' =>   $data_intrare,
            'IesireAdapost' => $iesire_adapost,
            'NrCip' =>  $numar_cip,
            'NrBoxa' => $numar_boxa ,
            'NumeApartinator' =>  $nume_apartinator,
            'VaccinareAntiRabica' => $vaccin_antirabic,
            'VaccinarePolivalenta' =>  $vaccin_polivalent,
            'DeparazitareInterna' =>  $deparazitare_interna,
            'DeparazitareExterna' => $deparazitare_externa,
            'Deces' => $deces ,
            'TelefonApartinator' => $telefon_apartinator,
            'DataAdaugarii' => date("Y-m-d")
        );

        //remove empty params from array so we dont have 0000-000-000 in db
        foreach($dataToAdd as $key => $val){
            if(trim($val) == ''){
                unset($dataToAdd[$key]);
            }
        }

        $result=$this->Caini_model->detectCaine($numar_cip);
        if ($result) {
             
            $this->session->set_flashdata('error', 'Caine deja existent!');
            redirect(base_url() . 'caini/adauga_caine/' );
        } else {
            
            $this->session->set_flashdata('success', 'Cainele a fost adaugat cu success!');
            $result1 = $this->Caini_model->addCaine($dataToAdd);
            redirect(base_url() . 'caini/lista_caini/');
        }


    }
    public function editeaza_caine($NrCrt)
    {
        $caine = $this->Caini_model->getCaineInfo($NrCrt); 
        $data = array(
            'dogs' => $caine
        );

        $this->load->view('templates/header');
        $this->load->view('caini/editeaza_caine', $data);
        $this->load->view('templates/footer');

    }
    public function sterge_caine($NrCrt)
    {
        $result=$this->Caini_model->deleteCaine($NrCrt);
        if ($result > 0) {
            redirect(base_url() . 'caini/lista_caini');
        } else {
            echo "Cainele nu a putut fi sters.";
        }
    }
    public function update_caine($NrCrt)
    {
        $data_nastere = $this->input->post('DataNastere');
        $data_intrare = $this->input->post('DataIntrareAdapost');
        $iesire_adapost = $this->input->post('IesireAdapost');
        $numar_cip = $this->input->post('NrCip');
        $numar_boxa = $this->input->post('NrBoxa');
        $nume_apartinator = $this->input->post('NumeApartinator');
        $vaccin_antirabic = $this->input->post('VaccinareAntiRabica');
        $vaccin_polivalent = $this->input->post('VaccinPolivalent');
        $deparazitare_interna = $this->input->post('DeparazitareInterna');
        $deparazitare_externa = $this->input->post('DeparazitareExterna');
        $deces = $this->input->post('Deces');
        $telefon_apartinator = $this->input->post('TelefonApartinator');


        $dataForUpdate = array(
            'DataNastere' => $data_nastere,
            'DataIntrareAdapost' =>   $data_intrare,
            'IesireAdapost' => $iesire_adapost,
            'NrCip' =>  $numar_cip,
            'NrBoxa' => $numar_boxa ,
            'NumeApartinator' =>  $nume_apartinator,
            'VaccinareAntiRabica' => $vaccin_antirabic,
            'VaccinarePolivalenta' =>  $vaccin_polivalent,
            'DeparazitareInterna' =>  $deparazitare_interna,
            'DeparazitareExterna' => $deparazitare_externa,
            'Deces' => $deces ,
            'TelefonApartinator' => $telefon_apartinator
        );

         //remove empty params from array so we dont have 0000-000-000 in db
         foreach($dataForUpdate as $key => $val){
            if(trim($val) == ''){
                unset($dataForUpdate[$key]);
            }
        }

        $result = $this->Caini_model->updateCaineInfo($NrCrt, $dataForUpdate);

        if ($result > 0) {
            //set flash message
            $this->session->set_flashdata('success', 'Utilizatorul a fost actualizat cu success!');

            redirect(base_url() . 'caini/editeaza_caine/' . $NrCrt);
        } else {
            $this->session->set_flashdata('error', 'Nimic nu a fost schimbat!');
            redirect(base_url() . 'caini/editeaza_caine/' . $iNrCrt);
        }

    }
 
    
    
}
