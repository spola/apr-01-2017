<?php
class MonstruoModel extends CI_Model {
    
    public function isValid($email, $pass) {
        
        $password = $this->hashPass($pass);
        
        $data = $this->db
            ->select("email")
            ->from("monstruos")
            ->where(array(
                "password"=>$password,
                "email"=>$email,
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
            ->select("id_monstruo, email, nombre")
            ->from("monstruos")
            ->where(array(
                "email"=>$email,
                "habilitado"=>1
            ))
            ->get()
            ->row();
        
        return $data;
    }
    
    public function registrar($nombre, $apellido, $email, $pass, $habilitado, $cargo) {
        // ¿Si existe el email?
        
        $cantidad = $this->db
            ->select("email")
            ->from("monstruos")
            ->where(array(
                "email"=>$email,
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
            "nombre" => $nombre,
            "apellido" => $apellido,
            "email"=>$email,
            "password" => $password,
            "habilitado" => true,
            "cargo" => $cargo
        );
        //Se inserta
        $this->db->insert("monstruos", $datos);
        
        return true;
    }
    public function listar()
    {
        $monstruos = $this->db
            ->select("id_monstruo,nombre,email,apellido,habilitado,cargo")
            ->from("monstruos")
            ->get();
        
        return $monstruos->result();
    }
    public function getByNombre($nombre)
    {
        $monstruo_buscado = $this->db
            ->select("id_monstruo,nombre,email,apellido,habilitado,cargo")
            ->from("monstruos")
            ->where("nombre",$nombre)
            ->get();
        
        return $monstruo_buscado->result();
    }
    public function modificarMonstruo($id_monstruo,$nombre, $apellido, $email, $pass, $habilitado, $cargo)
    {
        $password = $this->hashPass($pass);
        
        $monstruo_modificar = array(
            "nombre" => $nombre,
            "apellido" =>$apellido,
            "email" =>$email,
            "password" =>$password,
            "habilitado" => $habilitado,
            "cargo" => $cargo
        );
        
        $this->db->where("id_monstruo",$id_monstruo);
        
        $this->db->update("monstruos",$monstruo_modificar);
            
    }
    
}