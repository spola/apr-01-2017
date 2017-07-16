<?php
class cargarLista extends CI_Model{
    public function obtener($IdRegistro){
        $Acciones = $this->db
            ->select("IdRegistro,Nombre,FechaNacimiento,Ciudad,Email,PuestoTrabajo")
            ->from("registro")
            ->where("IdRegistro",$IdRegistro)
            ->get();
        return $Acciones->result();
    }
}