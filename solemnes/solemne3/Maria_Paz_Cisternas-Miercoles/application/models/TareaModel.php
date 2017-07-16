<?php
class TareaModel extends CI_Model {

    
    public function buscar($idPersona) {
        
        $tareas = $this->db
            ->select("id, nombre, estado, prioridad")
            ->from("tareas")
            ->where("id_persona", $idPersona)
            ->get();
        
        
        var_dump($tareas->result_array);
        die();
    }
    
}