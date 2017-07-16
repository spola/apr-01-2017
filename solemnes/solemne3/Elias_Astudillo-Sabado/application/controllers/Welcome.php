<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $showError = $this->input->get("error");
        $showError = ($showError === 'true');
		$this->load->view('welcome_message', array("error" => $showError));
	}
    public function logged()
	{
        $user = $this->input->post("usuario");
        $pass = $this->input->post("contraseña");
		$this->load->view('MenuLogeado');
        
	}
    public function registro()
	{
		$this->load->view('RegistroCuenta');
        
	}
    public function ingreso()
	{
		$this->load->view('Registros');
        
	}
    
}
