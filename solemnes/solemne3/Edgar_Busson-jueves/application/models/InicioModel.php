<?php
class InicioModel extends CI_Model {

     public function cargaMonstruoBuscado($usuario) {
    $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
        $sqlsentence = "SELECT id, usuario, edad, cumpleanos, puesto, email FROM usuarios WHERE usuario='$usuario'";
        $rs = $coneccion->query($sqlsentence);
        
        $tabla = array();
        $indice = 0;
        while ($row = $rs->fetch_row())
        {
            $tabla["id$indice"] = $row[0];
            $tabla["usuario$indice"] = $row[1];
            $tabla["edad$indice"] = $row[2];
            $tabla["cumpleanos$indice"] = $row[3];
            $tabla["puesto$indice"] = $row[4];
            $tabla["email$indice"] = $row[5];
            $indice = $indice +1;
        }
        $tabla["size"]=$indice;
    
            $coneccion->close();
            return $tabla; 
    }
    public function cargaTabla() {
        
       $coneccion = new mysqli("localhost", "root", "", "apr");
            if ($coneccion->connect_errno) {
                printf("Falló la conexión: %s\n", $coneccion->connect_error);
            exit();       
        }
        $sqlsentence = "SELECT id, usuario, edad, cumpleanos, puesto, email FROM usuarios";
        $rs = $coneccion->query($sqlsentence);
        
        $tabla = array();
        $indice = 0;
        while ($row = $rs->fetch_row())
        {
            $tabla["id$indice"] = $row[0];
            $tabla["usuario$indice"] = $row[1];
            $tabla["edad$indice"] = $row[2];
            $tabla["cumpleanos$indice"] = $row[3];
            $tabla["puesto$indice"] = $row[4];
            $tabla["email$indice"] = $row[5];
            $indice = $indice +1;
        }
        $tabla["size"]=$indice;
    
            $coneccion->close();
            return $tabla;
        }
}