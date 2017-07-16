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
      session_start();
      $_SESSION['user'] = false;
      //Invoco la vista y asigno parámetros
		$this->load->view('Login', array(
        "error" => $showError
    ));
	}
    
    public function logged() {
        
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        
        $this->load->model("UsuarioModel");
        //$this->load->helper("url");
        
        if($this->UsuarioModel->isValid($email, $pass)) {
            //Recepcion
            session_start();
            $_SESSION['user'] = true;
            redirect("welcome/principal", "refresh");
        } else {
            //A fuera
            redirect("?error=true", "refresh");
        }
    }
    
    public function principal() {
        
        $this->load->model("CargarDatosDesdeBD"); //Carga el modelo
        $tabla = $this->CargarDatosDesdeBD->cargarDatos(); //Invoca a la función de la clase
        $this->load->view("Recepcion", $tabla);
    }
    
    public function recepcionInvitado(){
        session_start();
        $_SESSION['user'] = false;
        redirect("welcome/principal", "refresh");
    }
    
    public function formulario(){
        
        $this->load->view("Formulario");
    }
    
    public function perfil(){
        
        $showId = $this->input->get("id");
        $this->load->model("CargarDatosAPerfil"); //Carga el modelo
        $atraparDatosPerfil = $this->CargarDatosAPerfil->cargarDatosPerfil($showId); //Invoca a la función de la clase
        $this->load->view("VistaPerfiles", $atraparDatosPerfil);
    }
    
    public function busqueda(){
        
        $nombreFiltrado = $this->input->post("palabra");
        $this->load->model("BusquedaModel"); //Carga el modelo
        $nombreBuscado = $this->BusquedaModel->buscarPorNombre($nombreFiltrado); //Invoca a la función de la clase
        $this->load->view("Recepcion", $nombreBuscado);
        
    }
    
    
    /*Función que permite obtener los datos desde el formulario y asignarlos a variable
    *para mandarlas al modelo y guardarlas en la BD
    */
    
    public function datosBD(){
        
        $nombre = $this->input->post("nombre");
        $apellidos = $this->input->post("apellidos");
        $pais = $this->input->post("pais");
        $sexo = $this->input->post("sexo");
        $fechaNac = $this->input->post("fechaNac");
        $email = $this->input->post("email");
        $telefono = $this->input->post("tel");
        $direccion = $this->input->post("dire");
        $this->load->model("DatosBDModel");
        $this->DatosBDModel->guardarDatosEnBD($nombre, $apellidos, $pais, $sexo, $fechaNac, $email, $telefono, $direccion);
        redirect("welcome/principal", "refresh");
    }
    
    
     public function cargarDatosAFormulario() {
         
        $showId = $this->input->get("id");
        $this->load->model("CargarDatosAPerfil"); //Carga el modelo
        $tabla = $this->CargarDatosAPerfil->cargarDatosPerfil($showId); //Invoca a la función de la clase
        $this->load->view("FormularioEditar", $tabla);
    }
    
     public function actualizarDatosBD(){
        $id = $this->input->get("id");
        $nombre = $this->input->post("nombre");
        $apellidos = $this->input->post("apellidos");
        $pais = $this->input->post("pais");
        $sexo = $this->input->post("sexo");
        $fechaNac = $this->input->post("fechaNac");
        $email = $this->input->post("email");
        $telefono = $this->input->post("tel");
        $direccion = $this->input->post("dire");
        $this->load->model("ActualizarDatosBDModel");
        $this->ActualizarDatosBDModel->actualizarDatosEnBD($id, $nombre, $apellidos, $pais, $sexo, $fechaNac, $email, $telefono, $direccion);
        redirect("welcome/principal", "refresh");
    }
    
    
}
