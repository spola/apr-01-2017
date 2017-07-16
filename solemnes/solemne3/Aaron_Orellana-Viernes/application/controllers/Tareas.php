<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require("Auth_Controller.php");
class Tareas extends Auth_Controller {
    
    public function buscar() {
        $this->load->model("TareaModel");
        $idPersona = $this->session->userdata("idUsuario");
        $tareas = $this->TareaModel->buscar($idPersona);
        
        $this->load->view("layout/layout_arriba.php", array(
            "active" =>"tareas",
            "isLogged" => true
        ));
        $this->load->view("tareas/listar",array(
            "tareas" => $tareas
        ));
        $this->load->view("layout/layout_abajo.php");
    }
    
    public function show($idTarea){
        
        $this->load->model("TareaModel");
        $tarea = $this->TareaModel->getById($idTarea);
        
        $this->load->view("tareas/show", array(
            "tarea" => $tarea
        ));        
    }
}