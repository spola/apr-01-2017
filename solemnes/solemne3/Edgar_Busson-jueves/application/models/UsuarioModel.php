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
}