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
		  $this->load->view('welcome_message', array(
          "error" => $showError
      ));
	}
    
    public function logged() {
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        
        $this->load->model("UsuarioModel");
        //$this->load->helper("url");
        
        if($this->UsuarioModel->isValid($email, $pass)) {
            redirect("welcome/showInicio", "refresh");
            //$this->load->view('logged_message');
        } else {
            //A fuera
            redirect("?error=true", "refresh");
        }
    }
    public function showInicio(){
        
        $this->load->model("InicioModel");
        $tabla = $this->InicioModel->cargaTabla();
        $this->load->view('logged_message',$tabla);

    }
    
    public function buscarMonstruo(){
        $usuario = $this->input->post("nombreBuscar");
        $this->load->model("InicioModel");
        $tabla = $this->InicioModel->cargaMonstruoBuscado($usuario);
        $this->load->view('logged_message',$tabla);
    }
    
    public function showIngreso(){
        $this->load->view('ingreso_message',array());
    }
    public function ingresoNuevo(){
        $usuario = $this->input->post("usuario");
        $edad = $this->input->post("edad");
        $cumpleanos = $this->input->post("cumpleanos");
        $puesto = $this->input->post("puesto");
        $email = $this->input->post("email");
        $password = $this->input->post("password");        
        
        $this->load->model("ModificacionModel");
        $this->ModificacionModel->ingresoDB($usuario, $edad, $cumpleanos, $puesto, $email, $password);
        redirect("welcome/showInicio", "refresh");
    }
    public function showPerfil(){
        $id = $this->input->get("id");
        $this->load->model("ModificacionModel");
        $tabla = $this->ModificacionModel->MonstruoBuscadoID($id);
        $this->load->view('editar_message',$tabla);
    }

    
    /**/ public function editarMonstruo(){ 
        $id = $this->input->post("id");
        $usuario = $this->input->post("usuario");
        $edad = $this->input->post("edad");
        $cumpleanos = $this->input->post("cumpleanos");
        $puesto = $this->input->post("puesto");
        $email = $this->input->post("email");
        $habilitado= $this->input->post("habilitado");
        
        $this->load->model("ModificacionModel");
        $this->ModificacionModel->edicionDeMonstruo($id, $usuario, $edad, $cumpleanos, $puesto, $email, $habilitado);
        redirect("welcome/showInicio", "refresh");
    }
        
}
