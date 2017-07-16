<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tareas extends CI_Controller {
 
    public function buscar() {
        $idPersona = 1;
        $this->load->model("TareaModel");
        $tareas = $this->TareaModel->buscar($idPersona);
    
    }
    
    public function getTabla() {
        $this->load->model("TareaModel");
        $tabla = $this->TareaModel->getTablaBD();
    
    }
}