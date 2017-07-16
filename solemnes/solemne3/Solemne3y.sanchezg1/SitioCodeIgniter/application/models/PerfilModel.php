<?php
class PerfilModel extends CI_Model{
    
    public function cargarPerfil($id){
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
        
        $id = $conn->real_escape_string($id);
        $resultado = $conn->query("SELECT nombre, apellidos, sexo, fdn, pais, email, telefono, celular, puesto, comentarios, cp, direccion FROM informacion WHERE id = $id");
        while($fila = $resultado->fetch_row()){
            $resultadoTabla["nombre"] = $fila[0];
            $resultadoTabla["apellidos"] = $fila[1];
            $resultadoTabla["sexo"] = $fila[2];
            $resultadoTabla["fdn"] = $fila[3];
            $resultadoTabla["pais"] = $fila[4];
            $resultadoTabla["email"] = $fila[5];
            $resultadoTabla["telefono"] = $fila[6];
            $resultadoTabla["celular"] = $fila[7];
            $resultadoTabla["puesto"] = $fila[8];
            $resultadoTabla["comentarios"] = $fila[9];
            $resultadoTabla['cp'] = $fila[10];
            $resultadoTabla['direccion'] = $fila[11];
        }
        return $resultadoTabla;
    }
}