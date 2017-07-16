<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
    {
        $showError = $this->input->get("error");
        $showError = ($showError === 'true');
		$this->load->view('Login', array("error" => $showError));
	}
    
    public function logged() {
        $this->load->view('Menu');
        /*$User = $this->input->post("Usuario");
        $pass = $this->input->post("Contraseña");
        $this->load->model("ModeloUser");
        if($this -> ModeloUser->isValid($User,$pass)){
        redirect("Acciones/mostrar","refresh");
        } else{
            redirect("?error=true","refresh");
        }*/
    }
    
    public function register(){
        $this->load->view('Registrar');
    }
}
