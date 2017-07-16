<?php 
class UsuarioModel extends CI_Model{
    
    public function isValid($user , $pass){
        
        $contraseña = this->hashPass($pass);
        
        $data = this->db
            ->select("Usuario")
            ->from("Usuarios")
            ->where(array(
                "contraseña"=>$contraseña,
                "usuario"=>$user,
            ))
            ->count_all_results();
        return $data > 0;
    }
    private function hashPass($pass){
        return sha1($pass);
    }
}