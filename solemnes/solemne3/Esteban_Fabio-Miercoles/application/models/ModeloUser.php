<?php
class ModeloUser extends CI_Model{
    public function isValid($User,$pass){
        $Contraseña = $this->hashpass($pass);
        $data = $this->db
            ->select("Usuario")
            ->from("usuariossistema")
            ->where(array(
            "Contraseña"=>$Contraseña,
            "Usuario"=>$User,
            "Habilitado" => 1
            ))
            ->count_all_results();
        return $data > 0;
    }
    private function hashpass($pass){
        return sha1($pass);
    }
}