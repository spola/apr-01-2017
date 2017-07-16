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
            ->select("id, email, nombre")
            ->from("monstruos")
            ->where(array(
                "email"=>$email,
                "habilitado"=>1
            ))
            ->get()
            ->row();
        
        return $data;
    }
    
    public function registrar($nombre, $snombre, $apellido, $sapellido, $sexo, $email, $pass, $habilitado) {
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
            "snombre" => $snombre,
            "apellido" => $apellido,
            "sapellido" => $sapellido,
            "sexo" =>$sexo,
            "email"=>$email,
            "password" => $password,
            "habilitado" => true
        );
        //Se inserta
        $this->db->insert("monstruos", $datos);
        
        return true;
    }
    public function listar()
    {
        $monstruos = $this->db
            ->select("id,nombre,snombre,apellido,sapellido,sexo,email,habilitado")
            ->from("monstruos")
            ->get();
        
        return $monstruos->result();
    }
    public function getByNombre($nombre)
    {
        $monstruo_buscado = $this->db
            ->select("id,nombre,snombre,apellido,sapellido,sexo,email,habilitado")
            ->from("monstruos")
            ->where("nombre",$nombre)
            ->get();
        
        return $monstruo_buscado->result();
    }
    public function modificarMonstruo($id,$nombre, $snombre, $apellido, $sapellido, $sexo, $email, $pass, $habilitado)
    {
        $password = $this->hashPass($pass);
        
        $monstruo_modificar = array(
            "nombre" => $nombre,
            "snombre" => $snombre,
            "apellido" =>$apellido,
            "sapellido" =>$sapellido,
            "sexo" =>$sexo,
            "email" =>$email,
            "password" =>$password,
            "habilitado" => $habilitado
        );
        
        $this->db->where("id",$id);
        
        $this->db->update("monstruos",$monstruo_modificar);
            
    }  
}