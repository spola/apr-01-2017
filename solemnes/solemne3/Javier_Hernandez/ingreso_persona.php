<?php
session_start();
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "apr";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];

$sql = "insert into persona(nombre,apellido,fecha_nac,email) values('$nombre','$apellido','$fecha','$email''')";
if (mysqli_query($conexion, $sql)) {
    echo "Guardado correctamente";
    echo "<a href= Pagina_otra.php> Volver al menu de ingreso </a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
    

?>