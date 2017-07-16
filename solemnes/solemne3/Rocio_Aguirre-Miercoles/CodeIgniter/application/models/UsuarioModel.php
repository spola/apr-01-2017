<?php
class UsuarioModel extends CI_Model {
    
    public function isValid($email, $pass) {
        $conexion = new mysqli("localhost", "root", "", "monstersinc");
        if ($conexion->connect_errno) {
            printf("Falló la conexión: %s\n", $conexion->connect_error);
            exit();
        }
        
        $email = $conexion->real_escape_string($email); //No ejecuta sentencias de mysql
        $email = trim($email);
        $email = stripslashes($email);
        $email = htmlspecialchars($email);
        $pass = $conexion->real_escape_string($pass);
        $pass = trim($pass);
        $pass = stripslashes($pass);
        $pass = htmlspecialchars($pass);
        
        
        $sentencia = "SELECT Usuario, Password FROM usuariospasswords WHERE Usuario = '$email' AND Password = '$pass'";
        $resultado = $conexion->query($sentencia);
        if($resultado->num_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
          $conexion->close();
    } 
}
?>
