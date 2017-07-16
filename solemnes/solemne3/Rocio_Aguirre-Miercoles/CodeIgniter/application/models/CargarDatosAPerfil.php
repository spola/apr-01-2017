<?php
class CargarDatosAPerfil extends CI_Model {
    
    public function cargarDatosPerfil($showId){
         $conexion = new mysqli("localhost", "root", "", "datosmonstruos");
            if ($conexion->connect_errno) {
                printf("Falló la conexión: %s\n", $conexion->connect_error);
            exit();       
        }
        
        $showId = $conexion->real_escape_string($showId); 
    
        $sentencia = "SELECT * FROM formulario WHERE ID='$showId'";
        $resultado = $conexion->query($sentencia);
        $tabla = array();
        while($fila = $resultado->fetch_row()){ //Trae cada fila completa con los valores que le pedí
              
            $tabla["ID"] = $fila[0];
            $tabla["nombre"] = $fila[1];
            $tabla["apellidos"] = $fila[2]; 
            $tabla["pais"] = $fila[3]; 
            $tabla["sexo"] = $fila[4]; 
            $tabla["fechaNac"] = $fila[5]; 
            $tabla["email"] = $fila[6];
            $tabla["telefono"] = $fila[7];
            $tabla["direccion"] = $fila[8];
        }
        
        $conexion->close();
        return $tabla;
    }    
}

?>
