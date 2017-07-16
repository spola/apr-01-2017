<?php
class TareaModel extends CI_Model {
    
    public function buscar($idPersona) {
        
        $tareas = $this->db
            ->select("idTarea,nombreTarea,estadoTarea,prioridad")
            ->from("tareas")
            ->where("idPersona",$idPersona)
            ->get();
        return $tareas->result();
    }
        
    public function getById($idTarea){
        $tarea = $this->db
            ->select("idTarea,nombreTarea,descripcion,inicio,termino,prioridad,estadoTarea,idPersona")
            ->from("tareas")
            ->where("idPersona",$idPersona)
            ->get()
            ->row();
        
        return $tarea;
    }
}