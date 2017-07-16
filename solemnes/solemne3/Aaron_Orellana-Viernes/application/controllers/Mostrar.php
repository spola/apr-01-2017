<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mostrar extends CI_Controller {

    public function mostrar() {
        $this->load->model("RegistrosModel");
        $registros = $this->RegistrosModel->mostrar();
        
        $this->load->view("layout/layout_arriba.php", array(
            "active" =>"mostrar",
            "isLogged" => true
        ));
        $this->load->view("muestra/listado",array(
            "registros" => $registros
        ));
        $this->load->view("layout/layout_abajo.php");
    }
}