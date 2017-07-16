<?php
class ModificacionModel extends CI_Model {
        
    public function MonstruoBuscadoID($id){
        $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
        $sqlsentence = "SELECT id, usuario, edad, cumpleanos, puesto, email FROM usuarios WHERE id='$id'";
        $rs = $coneccion->query($sqlsentence);
        
        $tabla = array();
        while ($row = $rs->fetch_row())
        {
            $tabla["id"] = $row[0];
            $tabla["usuario"] = $row[1];
            $tabla["edad"] = $row[2];
            $tabla["cumpleanos"] = $row[3];
            $tabla["puesto"] = $row[4];
            $tabla["email"] = $row[5];
        }
    
            $coneccion->close();
            return $tabla; 
    }
        public function ingresoBD($usuario, $edad, $cumpleanos, $puesto, $email, $password){
        $coneccion = new mysqli("localhost", "root", "", "apr");
         if ($coneccion->connect_errno) {
                    printf("Falló la conexión: %s\n", $coneccion->connect_error);
                exit();       
        }
            $password = $this->hashPass($password);
    
            $habilitado = 1;            
            $sqlsentence = "INSERT INTO usuarios (usuario, edad, cumpleanos, puesto, email, password, habilitado) VALUES ('$usuario', '$edad', '$cumpleanos', '$puesto', '$email','$password','$habilitado')";
            $rs = $coneccion->query($sqlsentence);
            $coneccion->close();

    }
        private function hashPass($pass) {
        return sha1($pass);
    }
    
    public function edicionDeMonstruo($id, $usuario, $edad, $cumpleanos, $puesto, $email, $habilitado){
        $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
            
            $sqlsentence = "UPDATE usuarios SET usuario='$usuario', edad='$edad', cumpleanos='$cumpleanos', puesto='$puesto', email='$email' habilitado='$habilitado'' WHERE id='$id'";
            $rs = $coneccion->query($sqlsentence);
            $coneccion->close();
    }
    
}