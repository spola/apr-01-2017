<?php
class monstruoModel extends CI_Model {
    
    public function cargaMonstruoBuscado($nombre) {
    $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
        $sqlsentence = "SELECT monstruoID, nombre, apellidos, email FROM monstruos WHERE nombre='$nombre'";
        $rs = $coneccion->query($sqlsentence);
        
        $tabla = array();
        $indice = 0;
        while ($row = $rs->fetch_row())
        {
            $tabla["ID$indice"] = $row[0];
            $tabla["Nombre$indice"] = $row[1];
            $tabla["Apellidos$indice"] = $row[2];
            $tabla["Email$indice"] = $row[3];
            $indice = $indice +1;
        }
        $tabla["size"]=$indice;
    
            $coneccion->close();
            return $tabla; //->result_array;
    }
    
    public function MonstruoBuscadoID($id_monstruo){
        $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
        $sqlsentence = "SELECT monstruoID, nombre, apellidos, nacimiento, empleo, sexo, email FROM monstruos WHERE monstruoID='$id_monstruo'";
        $rs = $coneccion->query($sqlsentence);
        
        $tabla = array();
        while ($row = $rs->fetch_row())
        {
            $tabla["monstruo_ID"] = $row[0];
            $tabla["Nombre"] = $row[1];
            $tabla["Apellidos"] = $row[2];
            $tabla["Nacimiento"] = $row[3];
            $tabla["Empleo"] = $row[4];
            $tabla["Sexo"] = $row[5];
            $tabla["Email"] = $row[6];
        }
    
            $coneccion->close();
            return $tabla; 
            //return $rs;
    }
    
    public function cargaTabla() {
        $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
        $sqlsentence = "SELECT monstruoID, nombre, apellidos, email FROM monstruos";
        $rs = $coneccion->query($sqlsentence);
        
        $tabla = array();
        $indice = 0;
        while ($row = $rs->fetch_row())
        {
            $tabla["ID$indice"] = $row[0];
            $tabla["Nombre$indice"] = $row[1];
            $tabla["Apellidos$indice"] = $row[2];
            $tabla["Email$indice"] = $row[3];
            $indice = $indice +1;
        }
        $tabla["size"]=$indice;
    
            $coneccion->close();
            return $tabla; //->result_array;
        }
    
    public function registraMonstruo($nombre, $apellidos, $nacimiento, $empleo, $sexo, $email){
        $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
       // echo $nombre;
            $nombre = $coneccion->real_escape_string($nombre);
            $apellidos = $coneccion->real_escape_string($apellidos);
            $nacimiento = $coneccion->real_escape_string($nacimiento);
            $empleo = $coneccion->real_escape_string($empleo);
            $sexo = $coneccion->real_escape_string($sexo);
            $email = $coneccion->real_escape_string($email);
        
            
            $sqlsentence = "INSERT INTO monstruos (nombre, apellidos, nacimiento, empleo, sexo, email) VALUES ('$nombre', '$apellidos', '$nacimiento', '$empleo', '$sexo', '$email')";
            $rs = $coneccion->query($sqlsentence);
            $coneccion->close();
          
            //no me regitra el email cuando lo pongo en el insert
    }
    
    public function edicionDeMonstruo($id, $nombre, $apellidos, $nacimiento, $empleo, $sexo, $email){
        $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
       // echo $nombre;
            $id = $coneccion->real_escape_string($id);
            $nombre = $coneccion->real_escape_string($nombre);
            $apellidos = $coneccion->real_escape_string($apellidos);
            $nacimiento = $coneccion->real_escape_string($nacimiento);
            $empleo = $coneccion->real_escape_string($empleo);
            $sexo = $coneccion->real_escape_string($sexo);
            $email = $coneccion->real_escape_string($email);
            
            $sqlsentence = "UPDATE monstruos SET nombre='$nombre', apellidos='$apellidos', nacimiento='$nacimiento', empleo='$empleo', sexo='$sexo', email='$email' WHERE monstruoID='$id'";
        
            $rs = $coneccion->query($sqlsentence);
            $coneccion->close();
    }
    
}