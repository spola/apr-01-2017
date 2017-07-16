<?php
class UsuarioModel extends CI_Model {
    
    public function isValid($email, $pass) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "usuarios";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $email = $conn->real_escape_string($email);
        $pass = $conn->real_escape_string($pass);
        $resultado = $conn->query("SELECT user FROM registro WHERE user = '$email' and pass = '$pass'");
        if($resultado->num_rows > 0){
            return true;
            $conn->close();
        }
        else{
            return false;
            $conn->close();
        }
    }
}
