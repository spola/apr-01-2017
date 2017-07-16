<?php
class CargarDatosDesdeBD extends CI_Model {
    
    public function cargarDatos(){
         $conexion = new mysqli("localhost", "root", "", "datosmonstruos");
            if ($conexion->connect_errno) {
                printf("Falló la conexión: %s\n", $conexion->connect_error);
            exit();       
        }
        $sentencia = "SELECT ID, Nombre, Apellidos, email FROM formulario";
        $resultado = $conexion->query($sentencia);
        $i = 0;
        $tabla = array();
        while($fila = $resultado->fetch_row()){ //Trae cada fila completa con los valores que le pedí
              
            $tabla["ID$i"] = $fila[0];
            $tabla["nombre$i"] = $fila[1];
            $tabla["apellidos$i"] = $fila[2]; 
            $tabla["email$i"] = $fila[3];
            $i++;
        }
        $tabla["size"] = $i;
    
        $conexion->close();
        return $tabla;
    }   
}

?>
