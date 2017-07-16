<?php
class EditarModel extends CI_Model{
    
    public function editar($id, $nombre, $apellidos, $direccion, $sexo, $fdn, $pais, $cp, $email, $telefono, $celular, $ocupacion, $comentarios){
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
        $nombre = $conn->real_escape_string($nombre); 
        $apellidos = $conn->real_escape_string($apellidos);
        $direccion = $conn->real_escape_string($direccion);
        $sexo = $conn->real_escape_string($sexo);
        $fdn = $conn->real_escape_string($fdn);
        $pais = $conn->real_escape_string($pais);
        $cp = $conn->real_escape_string($cp);
        $email = $conn->real_escape_string($email);
        $telefono = $conn->real_escape_string($telefono);
        $celular = $conn->real_escape_string($celular);
        $ocupacion = $conn->real_escape_string($ocupacion);
        $comentarios = $conn->real_escape_string($comentarios);
        
        $sentencia = "UPDATE informacion SET nombre='$nombre', apellidos='$apellidos', direccion='$direccion', sexo='$sexo', fdn='$fdn', pais='$pais', cp='$cp', email='$email', telefono='$telefono', celular='$celular', puesto='$ocupacion', comentarios='$comentarios' WHERE id='$id'";
        $conn->query($sentencia);
    }
}