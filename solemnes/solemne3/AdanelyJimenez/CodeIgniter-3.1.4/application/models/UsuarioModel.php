<?php
class UsuarioModel extends CI_Model {
    
    public function isValid($email, $pass) {
    $coneccion = new mysqli("localhost", "root", "", "apr");
    
    if ($coneccion->connect_errno)
    {
        printf("Falló la conexión: %s\n", $coneccion->connect_error);
        exit();       
    }
    
        //inyeccion_SQL
        $pass = $coneccion->real_escape_string($pass);
        $pass = stripslashes($pass);
        $pass = htmlspecialchars($pass);
        $password = $this->hashPass($pass);
         
        $emailAddress = $coneccion->real_escape_string($email);
        $emailAddress = stripslashes($emailAddress);
        $emailAddress = htmlspecialchars($emailAddress);
        
        //el usuario en la tabla usuarios es la direccion email
        $Sentence = "SELECT usuario, password FROM usuarios WHERE usuario='$emailAddress' AND password='$password'";
        $rs = $coneccion->query($Sentence);
        //echo $rs->num_rows;
        
       if($rs->num_rows > 0) {
           $coneccion->close();
            return true;
        } 
        else {
            $coneccion->close();
          return false;
        }  
        }
    
    private function hashPass($pass) {
        return sha1($pass);
    }
}