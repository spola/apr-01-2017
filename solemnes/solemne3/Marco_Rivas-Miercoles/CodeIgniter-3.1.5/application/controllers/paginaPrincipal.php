<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paginaPrincipal extends CI_Controller {

	public function mostrar(){
        $this->load->view("registros");
    }
}
