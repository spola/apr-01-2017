<?php

if(isset($_POST['email']) && !empty($_POST['email']) &&
(isset($_POST['password']) && !empty($_POST['password'])))
       {
           $conectar = mysqli_connect("localhost", "root", "", "monstersinc") or die ("Problemas de conexión" ); //Conectar con el servidor//
           mysqli_select_db($conectar, "monstersinc") or die("Problemas al conectar la BD"); //Conectar con la BD//
    
           $insertar = "INSERT INTO UsuariosPasswords (Usuario,Password) VALUES ('$_POST[email]','$_POST[password]')";
           $resultado = mysqli_query($conectar, $insertar);           
           echo "Datos insertados correctamente";
       }
           else {
               echo "Datos no insertados a la BD";       
         }
?>
