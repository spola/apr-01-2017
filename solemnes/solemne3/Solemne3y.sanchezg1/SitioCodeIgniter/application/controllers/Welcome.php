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
      session_start();
      $_SESSION['admin'] = false;
      //Obtengo parámetro error desde que viene como get
      $showError = $this->input->get("error");
      //Valido que el texto es un boolean true o false
      $showError = ($showError === 'true');
      
      //Invoco la vista y asigno parámetros
		$this->load->view('login', array("error" => $showError));
	}
    
    public function logged() {
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        
        $this->load->model("UsuarioModel");
        //$this->load->helper("url");
        
        if($this->UsuarioModel->isValid($email, $pass)){
            //Paraiso
            session_start();
            $_SESSION['admin'] = true;
            redirect("welcome/paginaprincipal", "refresh");
        } else {
            //A fuera
            redirect("?error=true", "refresh");
        }
    }
    
    public function paginaprincipal(){
        $this->load->model("TablaModel");
        $tabla = $this->TablaModel->extraerInformacionTabla();
        $this->load->view('paginaprincipal', $tabla);
    }
    
    public function paginaprincipalInvitado(){
        session_start();
        $_SESSION['admin'] = false;
        redirect("welcome/paginaprincipal", "refresh");
    }
    
    public function registro(){
        $this->load->view('formulario');
    }
    
    public function registrar(){
        $nombre = $this->input->post("nombre");
        $apellidos = $this->input->post("apellidos");
        $direccion = $this->input->post("direccion");
        $sexo = $this->input->post("sexo");
        $fdn = $this->input->post("FDN");
        $pais = $this->input->post("Nacionalidad");
        $cp = $this->input->post("ZIP");
        $email = $this->input->post("email");
        $telefono = $this->input->post("tel");
        $celular = $this->input->post("Cel");
        $ocupacion = $this->input->post("puesto");
        $comentarios = $this->input->post("extras");
        $this->load->model("MonstruoModel");
        $this->MonstruoModel->ingresarMonstruo($nombre, $apellidos, $direccion, $sexo, $fdn, $pais, $cp, $email, $telefono, $celular, $ocupacion, $comentarios);
        redirect("welcome/paginaprincipal", "refresh");
    }
    
    public function perfil(){
        $id = $this->input->get("id");
        $this->load->model("PerfilModel");
        $perfil = $this->PerfilModel->cargarPerfil($id);
        $this->load->view('perfil', $perfil);
    }
    
    public function resultadoBusqueda(){
        $nombre = $this->input->post("buscar");
        $this->load->model("BusquedaModel");
        $tabla = $this->BusquedaModel->buscarNombre($nombre);
        $this->load->view('paginaprincipal', $tabla);
    }
    
    public function editar(){
        $id = $this->input->get("id");
        $this->load->model("PerfilModel");
        $perfil = $this->PerfilModel->cargarPerfil($id);
        $this->load->view('editar', $perfil);
    }
    
    public function editarBD(){
        $id = $this->input->get("id");
        $nombre = $this->input->post("nombre");
        $apellidos = $this->input->post("apellidos");
        $direccion = $this->input->post("direccion");
        $sexo = $this->input->post("sexo");
        $fdn = $this->input->post("FDN");
        $pais = $this->input->post("Nacionalidad");
        $cp = $this->input->post("ZIP");
        $email = $this->input->post("email");
        $telefono = $this->input->post("tel");
        $celular = $this->input->post("Cel");
        $ocupacion = $this->input->post("puesto");
        $comentarios = $this->input->post("extras");
        $this->load->model("EditarModel");
        $this->EditarModel->editar($id, $nombre, $apellidos, $direccion, $sexo, $fdn, $pais, $cp, $email, $telefono, $celular, $ocupacion, $comentarios);
        redirect("welcome/paginaprincipal", "refresh");
    }
}
