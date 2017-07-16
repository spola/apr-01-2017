<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acciones extends CI_Controller {

    public function mostrar(){
        $this->load->model("ModeloAccion");
        $this->load->view('acciones/cargarLista',array("acciones" => $acciones));
    }

}