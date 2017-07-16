<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tareas extends CI_Controller {

    function buscar()
    {
        $this->load->model('TareaModel');
        $idPersona=1;
        $tareas= $this->TareaModel->buscar($idPersona);
        
        $this->load->wiev("layouts/layout_arriba.php"
        $this->load->wiev("tareas/listar",array{
            "tareas"->$tareas
        });
        $this->load->wiev("layouts/layout_abajo.php"
    }
    
}
