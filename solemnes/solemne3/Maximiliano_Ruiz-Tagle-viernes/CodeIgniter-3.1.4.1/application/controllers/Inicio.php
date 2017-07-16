<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require("Auth_Controller.php");
class Inicio extends Auth_Controller {
 
    public function buscar() {        
        $this->load->model("MostruosModel");
        $nombre = $this->session->userdata("id");
        $Inicio = $this->MonstruosModel->buscar($nombre);
        
        $this->load->view("layouts/layout_arriba.php", array(
            "active" =>"inicio",
            "isLogged" => true
        ));
        $this->load->view("tareas/listar", array(
            "tareas" => $tareas
        ));
        $this->load->view("layouts/layout_abajo.php");
    }
    
    public function show($id) {
        $this->load->model("TareaModel");
        
        $tarea = $this->TareaModel->getById($id);
        
        
        $this->load->view("tareas/tarea_show", array(
            "tarea"=>$tarea
        ));
    }
}