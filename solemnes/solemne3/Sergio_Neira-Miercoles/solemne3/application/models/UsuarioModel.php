<?php 

    class UsuarioModel extends CI_Model
    {
        /**
        * Método que permite verificar si el usuario ya esta registrado en la base de datos
        */
        public function verificarAutenticidad($email, $password)
        {
            $passwordConHash = $this->hashPass($password);
            
            $data = $this->db
                    ->select("adm_id")
                    ->from("administrador")
                    ->where(array(
                                "adm_clave" => $passwordConHash,
                                "adm_correo_electronico" => $email,
                                "adm_habilitado" => 1
                    ))
                    ->count_all_results();
            
            return $data > 0;
        }
        
        /**
        * Método que permite aplicar un hash a la clave para evitar guardar la clave tal como 
        * la escribió el usuario
        */
        private function hashPass($pass)
        {
            return sha1($pass);
        }
        /**
        * Método que permite obtener los datos del usuario a través del email
        */
        public function getByEmail($email)
        {
            $data = $this->db
                    ->select("adm_id, adm_correo_electronico")
                    ->from("administrador")
                    ->where(array(
                        "adm_correo_electronico" => $email,
                        "adm_habilitado" => 1
                    ))
                    ->get()
                    ->row();
            return $data;
        }
        
    }