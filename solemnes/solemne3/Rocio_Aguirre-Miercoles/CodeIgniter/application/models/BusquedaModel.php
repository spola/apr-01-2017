<?php
class BusquedaModel extends CI_Model {
    
    public function buscarPorNombre($nombreFiltrado){
    
        $conexion = new mysqli("localhost", "root", "", "datosmonstruos");
            if ($conexion->connect_errno) {
                printf("Falló la conexión: %s\n", $conexion->connect_error);
            exit();       
        }
        $sentencia = "SELECT ID, Nombre, Apellidos, email FROM formulario WHERE Nombre LIKE '$nombreFiltrado%'";
        $resultado = $conexion->query($sentencia);
        $i = 0;
        $tablaFiltrada = array();
        while($fila = $resultado->fetch_row()){ //Trae cada fila completa con los valores que le pedí
              
            $tablaFiltrada["ID$i"] = $fila[0];
            $tablaFiltrada["nombre$i"] = $fila[1];
            $tablaFiltrada["apellidos$i"] = $fila[2]; 
            $tablaFiltrada["email$i"] = $fila[3]; 
            $i++;
        }
        $tablaFiltrada["size"] = $i;
        
        $conexion->close();
        return $tablaFiltrada;
        }
    }
?>
