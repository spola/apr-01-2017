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
    
    public function registrar($email, $password, $nombre,$apellido,$habilitado) {
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
            "apellido" => $apellido,
            "password" => $password,
            "habilitado" => true
        );
        //Se inserta
        $this->db->insert("usuarios", $datos);
        
        return true;
    }
    
        public function listar()
    {
        $usuarios = $this->db
            ->select("id,usuario,nombre,apellido,habilitado")
            ->from("usuarios")
            ->get();
        
        return $usuarios->result();
    }
    
    public function getByNombre($nombre)
    {
        $usuario_buscado = $this->db
            ->select("id,usuario,nombre,apellido,habilitado")
            ->from("usuarios")
            ->where("nombre",$nombre)
            ->get();
        
        return $usuario_buscado->result();
    }
    
    public function modificarMonstruo($id,$email,$nombre, $apellido, $password, $habilitado)
    {
        $password = $this->hashPass($pass);
        
        $usuario_modificar = array(
            "usuario" =>$email,
            "nombre" => $nombre,
            "apellido" =>$apellido,
            "password" =>$password,
            "habilitado" => $habilitado
        );
        
        $this->db->where("id",$id);
        
        $this->db->update("usuarios",$usuario_modificar);
    }
}