<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $showError = $this->input->get("error");
        $showError=($showError === 'true');
		$this->load->view('login',array("error" => $showError
                                       ));
	}
    public function logged(){
        $username = $this->input->post("username");
        $pass = $this->input->post("password");
        $this->load->model("modeloUsuario");
        if($this->modeloUsuario->isValid($username,$pass)){
            
           $usuario =$this->modeloUsuario->getByName($username);
            
            $usuarioArray = array(
                "usuario" => $usuario->Nombre_Usuario
            );
            
            $this->session->set_userdata($usuarioArray); 
            redirect("paginaPrincipal/mostrar","refresh");
        }
        else{
            redirect("?error=true","refresh");
        }
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
        
        $this->load->view("registrodemonstruo", array(
            "mensaje" => $msg,
            "error" => $error,
        ));
        
    }
    public function logout() {
        $this->session->unset_userdata(array(
            "id", "nombre", "usuario"
        ));
        redirect("", "refresh");
    }

    public function registrado() {
        
        $nombre = $this->input->post("nombre");
        $apodo = $this->input->post("apodo");
        $raza = $this->input->post("raza");
        $email = $this->input->post("email");
        $fechadenacimiento = $this->input->post("fechedenacimiento");
        
        $this->load->model("modeloUsuario");
        
        !$ret = $this->modeloUsuario->registrar($nombre, $apodo,$raza,$email,$fechadenacimiento);
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
