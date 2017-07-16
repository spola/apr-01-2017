<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tareas extends CI_Controller {
 
    public function buscar() {
        $this->load->model("TareaModel");
        $idPersona = 1;
        $tareas = $this->TareaModel->buscar($idPersona);
        
        
    }
}