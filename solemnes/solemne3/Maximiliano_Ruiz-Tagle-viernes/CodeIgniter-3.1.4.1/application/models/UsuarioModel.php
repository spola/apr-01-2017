<?php
class UsuarioModel extends CI_Model {
    
    public function isValid($email, $pass) {
        
        $password = $this->hashPass($pass);
        
        $data = $this->db
            ->select("usuario")
            ->from("usuarios")
            ->where(array(
                "password"=>$password,
                "usuario"=>$email,
                "habilitado"=>1
            ))
            ->count_all_results();
        
        return $data > 0;
    }
    
    private function hashPass($pass) {
        return sha1($pass);
    }
    
    public function getByEmail($email) {
        
        $data = $this->db
            ->select("id, usuario, nombre")
            ->from("usuarios")
            ->where(array(
                "usuario"=>$email,
                "habilitado"=>1
            ))
            ->get()
            ->row();
        
        return $data;
    }
    
    public function registrar($email, $pass, $nombre) {
        // ¿Si existe el email?
        
        $cantidad = $this->db
            ->select("usuario")
            ->from("usuarios")
            ->where(array(
                "usuario"=>$email,
                "habilitado"=>1
            ))
            ->count_all_results();
        
        if($cantidad > 0) {
            return false;
        }
        
        //Aplicamos el hasg
        $password = $this->hashPass($pass);
        //Armamos el data arreglo
        $datos = array(
            "usuario"=>$email,
            "nombre" => $nombre,
            "password" => $password,
            "habilitado" => true
        );
        //Se inserta
        $this->db->insert("usuarios", $datos);
        
        return true;
    }
}