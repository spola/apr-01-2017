<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        $data = array(
            "isLogged" => $this->session->userdata('usuario')
        );
        
        //Cargamos la variable para todas las vistas de este controlador
        $this->load->vars($data);
    }
    
    public function index() {
        
        $this->load->view("layout/layout_arriba.php", array(
            "isLogged" => false,
            "active" => "welcome"
        ));
        $this->load->view("welcome/welcome_index", array(
            "isLogged" => false
        ));
        $this->load->view("layout/layout_abajo.php");
        
    }
    
	public function login(){
      //Obtengo parámetro error desde que viene como get
      $showError = $this->input->get("error");
      //Valido que el texto es un boolean true o false
      $showError = ($showError === 'true');
      //Invoco la vista y asigno parámetros
      $this->load->view("welcome/welcome_message", array(
          "error" => $showError
      ));
	}
    
    public function logged() {
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        $this->load->model("UsuarioModel");
        //$this->load->helper("url");
        if($this->UsuarioModel->isValid($email, $pass)) {
            //Login
            $usuario = $this->UsuarioModel->getByEmail($email);
                
            $usuarioArray = array(
                "idUsuario" => $usuario->idUsuario,
                "usuario" => $usuario->usuario,
                "nombre" => $usuario->nombre
            );
            
            $this->session->set_userdata($usuarioArray);
            
            redirect("tareas/buscar", "refresh");
        } else {
            //A fuera
            redirect("?error=true", "refresh");
        }
    }
    
    public function logout() {
        $this->session->unset_userdata(array(
            "idUsuario","nombre","usuario"
        ));
        redirect("","refresh");
    }
    
    public function register() {
        $msg = $this->session->flashdata('msg');
        $error = $this->session->flashdata('error');
        if(isset($error)) {
            $email = $this->session->flashdata('email');
            $nombre = $this->session->flashdata('nombre');
            
            //"email" => $email,
            //"nombre" => $nombre
        }
        
        $this->load->view("layout/layout_arriba.php", array(
            "active" => "register"
        ));
        $this->load->view("welcome/welcome_register", array(
            "mensaje" => $msg,
            "error" => $error,
        ));
        $this->load->view("layout/layout_abajo.php");
        
    }
    
    public function registrado() {
        
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        $nombre = $this->input->post("nombre");
        
        $this->load->model("UsuarioModel");
        
        $ret = $this->UsuarioModel->registrar($email, $pass, $nombre);
        
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
