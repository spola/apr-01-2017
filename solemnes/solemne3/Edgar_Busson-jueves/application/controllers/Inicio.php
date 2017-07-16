<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
     
    public function ingresoNuevo(){
        $this->load->view('ingreso_message');
        $userLog=true;
    }
   public function InicioTabla() {
       
        $this->load->model("InicioModel");
        $result= $this->datosTabla($tabla);
        
       return($result);
    }
    
    public function volverInicio(){
        
        if(($this->ingresoNuevo($userLog))==true) {
            
            $this->load->view('logged_message');

        }
        else{
            redirect();
        }
    }
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