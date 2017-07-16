<?php
class DatosBDModel extends CI_Model {
    
    public function guardarDatosEnBD($nombre, $apellidos, $pais, $sexo, $fechaNac, $email, $telefono, $direccion){
          $conexion = new mysqli("localhost", "root", "", "datosmonstruos");
            if ($conexion->connect_errno) {
                printf("Falló la conexión: %s\n", $conexion->connect_error);
            exit();
        }
        
        $nombre = $conexion->real_escape_string($nombre);
        $apellidos = $conexion->real_escape_string($apellidos);
        $pais = $conexion->real_escape_string($pais);
        $sexo = $conexion->real_escape_string($sexo);
        $fechaNac = $conexion->real_escape_string($fechaNac);
        $email = $conexion->real_escape_string($email);
        $telefono = $conexion->real_escape_string($telefono);
        $direccion = $conexion->real_escape_string($direccion);
        
        $sentencia = "INSERT INTO formulario (Nombre, Apellidos, Pais, Sexo, FechaNac, email, Telefono, Direccion) VALUES ('$nombre', '$apellidos', '$pais', '$sexo', '$fechaNac', '$email', '$telefono', '$direccion')";
        $conexion->query($sentencia);        
        $conexion->close(); 
    }        
}

?>
