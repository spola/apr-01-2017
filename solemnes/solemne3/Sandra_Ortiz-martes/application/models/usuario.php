<?php
class usuario extends CI_Model {
    
    public function isValid($email, $pass) {
// Conectando, seleccionando la base de datos
$conexion = new mysqli("localhost", "root", "", "monster" );
        if($conexion->connect_error){
            die("Algo malo");    
        }
$query="SELECT usuario, contra FROM login WHERE usuario='$email' and contra='$pass'";
        $peticion = $conexion->query($query);
        if($peticion->num_rows >0){
            return true;   
        }
        else 
        { 
            return false;
        }
    }
    
    public function agarrarDatos(){
        $conexion = new mysqli("localhost", "root", "", "monster" );
        if($conexion->connect_error){
            die("Algo malo");    
        }
        $query="SELECT id, nombre, apellido, area, pasatiempos, correo FROM registrados";
        //En resultado tendre un objeto del query que pedi 
        //$todos['nombre'][0] = "hola";
        $cont =0;
            if($resultado = mysqli_query($conexion, $query))
            {
                while ($bd = mysqli_fetch_row($resultado)){
                    $todos['id'][$cont] = $bd[0];
                    $todos['nombre'][$cont] = $bd[1];
                    $todos['apellido'][$cont] = $bd[2];
                    $todos['area'][$cont] = $bd[3];
                    $todos['pasatiempos'][$cont] = $bd[4];
                    $todos['correo'][$cont] = $bd[5];
                    $cont++;
            }
            //mysqli_free_result($bd);
            return $todos;
        }
        //return $todos;
       // conection->close();
    }
    
    public function agarrarDatosId(){
        $ide = $_GET['mono'];
        $conexion = new mysqli("localhost", "root", "", "monster" );
        if($conexion->connect_error){
            die("Algo malo");    
        }
        $query ="SELECT `nombre`,`apellido`,`area`,`pasatiempos`,`correo` FROM `registrados` WHERE id = '$ide'";
        if($resultado = mysqli_query($conexion, $query))
        {
            $bd = mysqli_fetch_row($resultado);
            $todos['nombre'] = $bd[0];
            $todos['apellido'] = $bd[1];
            $todos['area'] = $bd[2];
            $todos['pasatiempos'] = $bd[3];
            $todos['correo'] = $bd[4];
        }
        return $todos;
        //conection->close();
    }
    
    public function agregarNuevo($datos){
        
          $conexion = new mysqli("localhost", "root", "", "monster" );
         if($conexion->connect_error){
            die("Algo malo");    
        }
         
         $nombre = $datos ['nombre'];
         $apellido = $datos ['apellido'];
         $area =  $datos ['area'] ;
         $pasatiempos =  $datos ['pasatiempos'] ;
         $correo =  $datos ['correo'] ;
         
        $query = "INSERT INTO registrados (nombre,apellido,area,pasatiempos,correo) VALUES ('$nombre','$apellido','$area','$pasatiempos','$correo')";
        $conexion->query($query); 
        
         //conection->close();
    }
   
    public function agregarModificado($datos){
         $conexion = new mysqli("localhost", "root", "", "monster" );
         if($conexion->connect_error){
            die("Algo malo");    
        }
         $id = $datos ['id'];
         $nombre = $datos ['nombre'];
         $apellido = $datos ['apellido'];
         $area =  $datos ['area'] ;
         $pasatiempos =  $datos ['pasatiempos'] ;
         $correo =  $datos ['correo'] ;
        //echo "Esto es el id", $id;
        $conexion->query("UPDATE registrados SET nombre='$nombre', apellido='$apellido', area='$area', pasatiempos='$pasatiempos', correo='$correo' WHERE id = '$id' ");   
    }
    
    public function agarrarBuscar($cualbuscar){
         $conexion = new mysqli("localhost", "root", "", "monster" );
        if($conexion->connect_error){
            die("Algo malo");    
        }
        $query ="SELECT  `id`,`nombre`,`apellido`,`area`,`pasatiempos`,`correo` FROM `registrados` WHERE nombre = '$cualbuscar'";
         $cont =0;
        
        $todos['id'][$cont] = "";
        $todos['nombre'][$cont] ="";
        $todos['apellido'][$cont] = "";
        $todos['area'][$cont] = "";
        $todos['pasatiempos'][$cont] = "";
        $todos['correo'][$cont] = "";
        
        if($resultado = mysqli_query($conexion, $query))
        {
            while ($bd = mysqli_fetch_row($resultado)){
                    $todos['id'][$cont] = $bd[0];
                    $todos['nombre'][$cont] = $bd[1];
                    $todos['apellido'][$cont] = $bd[2];
                    $todos['area'][$cont] = $bd[3];
                    $todos['pasatiempos'][$cont] = $bd[4];
                    $todos['correo'][$cont] = $bd[5];
                    $cont++;
            }
            //mysqli_free_result($bd);
            return $todos;
        }      
        return $todos;
        
    }
    
    
}




