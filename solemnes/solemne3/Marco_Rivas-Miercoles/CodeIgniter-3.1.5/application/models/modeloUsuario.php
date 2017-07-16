<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class modeloUsuario extends CI_Model{
    
    public function isValid($username,$pass){
        
        $password = $this->hashPass($pass);
        
        $datos = $this->db
            ->select("nombre_usuario")
            ->from ("usuario")
            ->where (array(
            "password"=>$password,
            "nombre_usuario"=>$username
            ))
            ->count_all_results();
        return $datos >0;
    }
    private function hashPass($pass){
        return sha1($pass);
    }
    
    public function registrar($nombre, $apodo,$raza,$email,$fechadenacimiento) {
        $cantidad = $this->db
            ->select("apodo")
            ->from("registromounstro")
            ->where(array("apodo"=>$apodo))
            ->count_all_results();
        
        if($cantidad > 0) {
            return false;
        }
        
        $datos = array(
            "nombre"=>$nombre,
            "apodo" => $apodo,
            "raza" => $raza,
            "email"=>$email,
            "fechanacimiento"=>$fechadenacimiento
        );
        
        $this->db->insert("registromounstro", $datos);
        return true;
    }
    public function getByName($nombre){
        
        $data = $this->db
            ->select("Nombre_Usuario")
            ->from("usuario")
            ->where(array(
                "Nombre_Usuario"=>$nombre,
            ))
            ->get()
            ->row();
        
        return $data;
    }
}