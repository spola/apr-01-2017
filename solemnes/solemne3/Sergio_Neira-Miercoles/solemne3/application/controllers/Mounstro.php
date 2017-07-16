<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require("Guardia.php");

    class Mounstro extends Guardia
    {   
        /**
        * Método que permite buscar a los mounstros que son empleados del administrador que ingreso al
        * sistema
        */
        public function buscarMounstros()
        {
            $this->load->model("MounstroModel");
            $idAdministrador = $this->session->userdata("id");
            $mounstros["mounstrosRegistrados"] = $this->MounstroModel->buscarMounstrosRegistrados($idAdministrador);
            $this->load->view("mounstros_registrados", $mounstros);
        }
        /**
        * Método que permite cargar la página para cargar la página de registro
        */
        public function mostrarPaginaRegistro()
        {
            $this->load->view("registro_mounstros");
        }
        /**
        * Método que permite obtener los datos de un mounstro para registrarlo
        */
        public function registrarMounstro()
        {
            $this->load->model("MounstroModel");
            $nombre = $this->input->post("nombre");
            $especialidad = $this->input->post("especialidad");
            $areaDeTrabajo = $this->input->post("areaDeTrabajo");
            $fechaDeContratacion = $this->input->post("fechaDeContratacion");
            $this->MounstroModel->registrarUnMounstro($nombre, $especialidad, $areaDeTrabajo, $fechaDeContratacion);
            $this->buscarMounstros();
        }
        /**
        * Método que permite llamar al modelo para realizar la actualización de los datos
        */
        public function actualizarMounstro()
        {
            $this->load->model("MounstroModel");
            $id = $this->input->post("id");
            $nombre = $this->input->post("nombre");
            $especialidad = $this->input->post("especialidad");
            $areaDeTrabajo = $this->input->post("areaDeTrabajo");
            $fechaDeContratacion = $this->input->post("fechaDeContratacion");
            $this->MounstroModel->actualizarDatosMounstro($id,$nombre,$especialidad, $areaDeTrabajo, $fechaDeContratacion);
            $this->buscarMounstros();
        }
        /**
        * Método que permite cargar la página para la edición de un mounstro
        */
        public function mostrarPagEdicionMounstro()
        {
            $this->cargarNombresEnLaPaginaDeEdicion();
        }
        /*
        * Método que permite cargar en la página de edición los nombres de los mounstros registrados
        */
        private function cargarNombresEnLaPaginaDeEdicion()
        {
            $this->load->model("MounstroModel");
            $mountros["nombreMounstros"] = $this->MounstroModel->obtenerNombresDeMounstrosRegistrados();
            $this->load->view('edicion_mounstro',$mountros);
        }
        /**
        * Método que permite rellenar los campos de la página edición con los datos del mounstro 
        * seleccionado
        */
        public function llenarCamposConDatosDelMounstroSeleccionado()
        {
            $buscar = $this->input->post("buscar");
            $this->load->model("MounstroModel");
            $datos = $this->MounstroModel->obtenerDatosDeUnMounstro($buscar);
            echo json_encode($datos);
        }
    }