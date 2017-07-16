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
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        
        $this->load->model("UsuarioModel");
        //$this->load->helper("url");
        
        if($this->UsuarioModel->isValid($email, $pass)) {
            //Paraiso
            redirect("welcome/paraiso", "refresh");
        } else {
            //A fuera
            redirect("?error=true", "refresh");
        }
    }
    
    public function paraiso(){
        $this->load->view('recepcion',array());
    }
    
    public function nuevoRegistro(){
        $this->load->view('formulario',array());
    }
    
    public function registroListo(){
        $this->load->view('recepcion',array());
    }
    
    public function registroSulley(){
        $this->load->view('Mi-informacion',array());
    }
    
    
    
    
    
    
    
    
    public function logged3() {
        //Modelo, nombre de la variable
        $this->load->model("UsuarioModel", "usuario");
        
        $user = $this->input->post("email");
        $pass = $this->input->post("password");
        
        
        
        if($this->usuario->isValid($user, $pass)) {
            redirect("welcome/dashboard", "refresh");
        } else {
            redirect('/?error=true', 'refresh');
        }
    }
    
    
    
    
    
    
    
    
    
    public function logged2() {
        $user = $this->input->post("email");
        
        redirect('/account/login', 'refresh');

        
        $this->load->view('logged_message', array(
            "titulo" => "Mundo!",
            "user" => $user
        ));
    }
}
