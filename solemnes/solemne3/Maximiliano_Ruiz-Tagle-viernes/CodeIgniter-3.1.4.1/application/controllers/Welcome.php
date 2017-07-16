<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct()
    {
        parent::__construct();
        
        $data = array(
            "isLogged" => $this->session->userdata('monstruo')
        );
        
        //Cargamos la variable para todas las vistas de este controlador
        $this->load->vars($data);
    }
    
    public function index() {
        
        $this->load->model("MonstruoModel");
        $monstruos = $this->MonstruoModel->listar();
        $this->load->view("layouts/layout_arriba.php", array("active" => "listar"));
        $this->load->view("welcome/welcome_index.php", array("monstruos" => $monstruos));
        $this->load->view("layouts/layout_abajo.php");
        
    }
    
    
	public function login() {
      //Obtengo parámetro error desde que viene como get
      $showError = $this->input->get("error");
      //Valido que el texto es un boolean true o false
      $showError = ($showError === 'true');
      //Invoco la vista y asigno parámetros
		  $this->load->view('welcome_message', array(
          "error" => $showError
      ));
	}
    public function logged() {
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        $this->load->model("MonstruoModel");
        //$this->load->helper("url");
        if($this->MonstruoModel->isValid($email, $pass))
        {
            //Paraiso
            
           $monstruo = $this->MonstruoModel->getByEmail($email);
            
            $monstruoArray = array(
                "id" => $monstruo->id, 
                "email" => $monstruo->email, 
                "nombre" => $monstruo->nombre
            );
            
            $this->session->set_userdata($monstruoArray);
            
        } 
        else 
        {
            //A fuera
            redirect("?error=true", "refresh");
        }
    }
    
    public function logout() {
        $this->session->unset_userdata(array(
            "id", "email", "nombre"
        ));
        redirect("", "refresh");
    }


    public function register() {
        $msg = $this->session->flashdata('msg');
        $error = $this->session->flashdata('error');
        if(isset($error)) {
            $email = $this->session->flashdata('email');
            $nombre = $this->session->flashdata('nombre');
        }
        $this->load->view("layouts/layout_arriba.php", array(
            "active" => "register"
        ));
        $this->load->view("welcome/welcome_register", array(
            "mensaje" => $msg,
            "error" => $error,
        ));
        $this->load->view("layouts/layout_abajo.php");
    }
    
    public function registrado() {
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        $habilitado = $this->input->post("habilitado");
        
        $this->load->model("MonstruoModel");
        
        $ret = $this->MonstruoModel->registrar($nombre, $apellido, $email, $pass, $habilitado);
        
        if(!$ret) {
            $this->session->set_flashdata('error', 'Error al registrar un usuario');
            $this->session->set_flashdata('email', $email);
            $this->session->set_flashdata('nombre', $nombre);
        } else {
            $this->session->set_flashdata('msg', "Registro correcto");
        }
        redirect("welcome/register");
    }
}