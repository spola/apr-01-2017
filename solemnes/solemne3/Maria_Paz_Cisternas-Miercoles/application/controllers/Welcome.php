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
            //Paraiso
            redirect("tareas/buscar", "refresh");
        } else {
            //A fuera
            redirect("?error=true", "refresh");
        }
    }
}
