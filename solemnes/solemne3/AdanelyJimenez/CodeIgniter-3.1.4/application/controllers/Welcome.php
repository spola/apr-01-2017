<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
      //Obtengo parámetro error desde que viene como get
      $showError = $this->input->get("error");
      //Valido que el texto es un boolean true o false
      $showError = ($showError === 'true');
      
      //Invoco la vista y asigno parámetros
		  $this->load->view('login', array(
          "error" => $showError
      ));
	}
    
    public function logged() {
        //session_destroy();
        //session_start();
        $_SESSION['invitado'] = true;
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        
        $this->load->model("UsuarioModel");
        //$this->load->helper("url");
        
        if($this->UsuarioModel->isValid($email, $pass)) 
        {
            redirect("welcome/cargaRecepcion", "refresh");
        } 
        else {
            //A fuera
            redirect("?error=true", "refresh");
        }
    }
    
    public function delogged(){
        session_destroy();
        redirect("welcome/index", "refresh");
    }
    
    public function buscaMonstruo(){
        $nombre = $this->input->post("nombreMB");
        $this->load->model("monstruoModel");
        $tabla = $this->monstruoModel->cargaMonstruoBuscado($nombre);
        $this->load->view('recepcion',$tabla);
    }
    
    public function cargaRecepcion(){
        $this->load->model("monstruoModel");
        $tabla = $this->monstruoModel->cargaTabla();
        $this->load->view('recepcion',$tabla);
        //;array($tabla));
    }
    
    public function cargaRecepcionInvitado(){
        session_start();
        $_SESSION['invitado'] = false;
        redirect("welcome/cargaRecepcion", "refresh");
    }
    
    public function cargaInformacion(){
        $id_monstruo = $this->input->get("id");
        $this->load->model("monstruoModel");
        $tabla = $this->monstruoModel->MonstruoBuscadoID($id_monstruo);
        $this->load->view('MI-informacion',$tabla);
    }
    
    public function IngresoDeMonstruo(){
        $this->load->view('IngresoMonstruo',array());
    }
    
    public function edicionPerfil(){
        $id_monstruo = $this->input->get("id");
        $this->load->model("monstruoModel");
        $tabla = $this->monstruoModel->MonstruoBuscadoID($id_monstruo);
        $this->load->view('InfoPerfilEdicion',$tabla);
    }
    
    public function editarMonstruo(){ 
        $id = $this->input->get("id");
        $nombre = $this->input->post("nombre");
        $apellidos = $this->input->post("apellidos");
        $nacimiento = $this->input->post("nacimiento");
        $empleo = $this->input->post("empleo");
        $sexo = $this->input->post("sexo");
        $email = $this->input->post("email");
        
        $this->load->model("monstruoModel");
        $this->monstruoModel->edicionDeMonstruo($id, $nombre, $apellidos, $nacimiento, $empleo, $sexo, $email);
        //me deberia cambiar a MI-informacion pero con los datos actualizados
        redirect("welcome/cargaRecepcion", "refresh");
    }
    
    public function IngresoNuevoMonstruo(){
        $nombre = $this->input->post("nombres");
        $apellidos = $this->input->post("apellidos");
        $nacimiento = $this->input->post("nacimiento");
        $empleo = $this->input->post("empleo");
        $sexo = $this->input->post("sexo");
        $email = $this->input->post("email");
        
        $this->load->model("monstruoModel");
        $this->monstruoModel->registraMonstruo($nombre, $apellidos, $nacimiento, $empleo, $sexo, $email);
        redirect("welcome/cargaRecepcion", "refresh");
    }
    
}
