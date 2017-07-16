<?php
class TareaModel extends CI_Model {

    
    public function buscar($idmonstruo) {
        $datosMonstruo = $this->db
            ->select("nombre, apellidos, nacimiento, empleo, email")
            ->from("monstruos")
            ->where("monstruoID", $idmonstruo)
            ->get();
        var_dump($datosMonstruo->result_array);
        die();
    }
    
    public function getTablaBD()
    {
        $datos = $this->db
            ->select("*")
            ->from("monstruos")
            ->get();
        echo var_dump($datos);
        die();
    }
    
}