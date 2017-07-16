<?php

session_start();
unset($_SESSION['username']);
session_destroy();

echo "Se ha cerrado la sesion correctamente"; 
echo "<br><br><a href=login.html>Login</a>"; 

?>