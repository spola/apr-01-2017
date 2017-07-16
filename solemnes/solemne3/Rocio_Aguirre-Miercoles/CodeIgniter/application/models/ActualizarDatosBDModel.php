<?php
class ActualizarDatosBDModel extends CI_Model {
    
    public function actualizarDatosEnBD($id, $nombre, $apellidos, $pais, $sexo, $fechaNac, $email, $telefono, $direccion){
          $conexion = new mysqli("localhost", "root", "", "datosmonstruos");
            if ($conexion->connect_errno) {
                printf("Falló la conexión: %s\n", $conexion->connect_error);
            exit();
        }
        $id = $conexion->real_escape_string($id);
        $nombre = $conexion->real_escape_string($nombre);
        $apellidos = $conexion->real_escape_string($apellidos);
        $pais = $conexion->real_escape_string($pais);
        $sexo = $conexion->real_escape_string($sexo);
        $fechaNac = $conexion->real_escape_string($fechaNac);
        $email = $conexion->real_escape_string($email);
        $telefono = $conexion->real_escape_string($telefono);
        $direccion = $conexion->real_escape_string($direccion);
        
        $sentencia = "UPDATE formulario SET Nombre = '$nombre', Apellidos = '$apellidos', Pais = '$pais', Sexo ='$sexo', FechaNac ='$fechaNac', email =  '$email', Telefono ='$telefono', Direccion ='$direccion' WHERE ID = '$id'";
        $conexion->query($sentencia);        
        $conexion->close(); 
    }    
}


?>