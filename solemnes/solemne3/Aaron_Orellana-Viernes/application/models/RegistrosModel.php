<?php
class RegistrosModel extends CI_Model {
    
    public function mostrar() {
        
        $registros = $this->db
            ->select("idUsuario,usuario,habilitado,nombre")
            ->from("usuarios")
            ->get()
            ->row();
        return $registros->result();
    }
}