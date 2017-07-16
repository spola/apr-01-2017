<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require("Auth_Controller.php");
class Tareas extends CI_Controller {
 
    public function buscarNombre() {        
        $this->load->view("layouts/layout_arriba.php", array("active" =>"buscar"));
        $this->load->view("tareas/buscar_nombre.php");
        $this->load->view("layouts/layout_abajo.php");
    }
    
    public function usuario_buscado(){
        $nombre = $this->input->post("nombre");
        $this->load->model("UsuarioModel");
        
        $usuario_buscado = $this->UsuarioModel->getByNombre($nombre);
        
        $this->load->view("layouts/layout_arriba.php", array("active" => "buscar"));
        $this->load->view("tareas/usuario_buscado.php", array("usuario" => $usuario_buscado));
        $this->load->view("layouts/layout_abajo.php");
    }
    public function listar_modificar()
    {
        $this->load->model("UsuarioModel");
        $usuarios = $this->UsuarioModel->listar();
        $this->load->view("layouts/layout_arriba.php", array("active" => "modificar"));
        $this->load->view("tareas/modificar_usuario.php", array("usuarios" => $usuarios));
        $this->load->view("layouts/layout_abajo.php");
    }
    public function pagina_modificacion()
    {
        $this->load->view("layouts/layout_arriba.php", array("active" =>"modificar"));
        $this->load->view("tareas/modificacion.php");
        $this->load->view("layouts/layout_abajo.php");
    }
    
    
    public function modificar()
    {
        $id = $this->input->post("id");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $usuario = $this->input->post("email");
        $password = $this->input->post("password");
        $habilitado = $this->input->post("habilitado");
        
        $this->load->model("UsuarioModel");
        
        $ret = $this->UsuarioModel->modificarMonstruo($id, $nombre, $apellido, $usuario, $password,$habilitado);
        
        if(!$ret) {
            $this->session->set_flashdata('error', 'Error al registrar un usuario');
            $this->session->set_flashdata('email', $usuario);
            $this->session->set_flashdata('nombre', $nombre);
        } else {
            $this->session->set_flashdata('msg', "Modificacion correcta");
            
        }
        redirect("welcome/index");
        
    }
}
