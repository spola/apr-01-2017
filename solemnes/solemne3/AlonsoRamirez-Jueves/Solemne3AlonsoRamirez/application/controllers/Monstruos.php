<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monstruos extends CI_Controller
{

    public function buscarNombre()
    {
        $this->load->view("layouts/layout_arriba.php", array("active" =>"buscar"));
        $this->load->view("tareas/buscar_nombre.php");
        $this->load->view("layouts/layout_abajo.php");
    }
    public function monstruo_buscado()
    {
        $nombre = $this->input->post("nombre");
        $this->load->model("MonstruoModel");
        
        $mon_buscado = $this->MonstruoModel->getByNombre($nombre);
        
        $this->load->view("layouts/layout_arriba.php", array("active" => "buscar"));
        $this->load->view("tareas/monstruo_buscado.php", array("monstruo" => $mon_buscado));
        $this->load->view("layouts/layout_abajo.php");
    }
    public function listar_modificar()
    {
        $this->load->model("MonstruoModel");
        $monstruos = $this->MonstruoModel->listar();
        $this->load->view("layouts/layout_arriba.php", array("active" => "modificar"));
        $this->load->view("tareas/modificar_monstruo.php", array("monstruos" => $monstruos));
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
        $id_monstruo = $this->input->post("id_monstruo");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        $habilitado = $this->input->post("habilitado");
        $cargo = $this->input->post("cargo");
        
        $this->load->model("MonstruoModel");
        
        $ret = $this->MonstruoModel->modificarMonstruo($id_monstruo, $nombre, $apellido, $email, $pass,$habilitado, $cargo);
        
        if(!$ret) {
            $this->session->set_flashdata('error', 'Error al registrar un usuario');
            $this->session->set_flashdata('email', $email);
            $this->session->set_flashdata('nombre', $nombre);
        } else {
            $this->session->set_flashdata('msg', "Modificacion correcta");
            
        }
        redirect("welcome/index");
        
    }
}