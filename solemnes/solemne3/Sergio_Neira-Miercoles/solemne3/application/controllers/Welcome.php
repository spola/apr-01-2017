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
		$this->load->view('welcome_message');
	}
    
    /**
    * Método que permite ingresar al usuario
    */
    public function ingresar()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('UsuarioModel');
        
        if($this->UsuarioModel->verificarAutenticidad($email, $password))
        {
            //código para la sesiones
            
            $usuario = $this->UsuarioModel->getByEmail($email);
            
            $usuarioArray = array(
                "id" => $usuario->adm_id,
                "usuario" => $usuario->adm_correo_electronico
            );
            
            $this->session->set_userdata($usuarioArray);
            
            redirect("Mounstro/buscarMounstros","refresh");
        }
        else
        {
            redirect("?error=true","refresh");
        }
    }
    /**
    * Método que permite finalizar la sesión del usuario
    */
    public function egreso()
    {
        $this->session->unset_userdata(array(
            "id","usuario"
        ));
        redirect("Welcome/index","refresh");
    }
}
