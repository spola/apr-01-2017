<?php
class BusquedaModel extends CI_Model{
    
    public function buscarNombre($nombre){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "monstruos";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $nombre = $conn->real_escape_string($nombre);
        $i = 0;
        $resultadoTabla = array();
        $resultado = $conn->query("SELECT nombre, apellidos, puesto, id FROM informacion WHERE nombre LIKE '$nombre'");
        while($fila = $resultado->fetch_row()){
            $resultadoTabla["nombre$i"] = $fila[0];
            $resultadoTabla["apellido$i"] = $fila[1];
            $resultadoTabla["ocupacion$i"] = $fila[2];
            $resultadoTabla["id$i"] = $fila[3];
            $i++;
        }
        $resultadoTabla['tamano'] = $i;
        return $resultadoTabla;
    }
}