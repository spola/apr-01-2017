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

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];

$sql = "update persona set nombre = '$nombre', apellido = '$apellido', fecha_nac = '$fecha', email ='$email' where id = '$id'";
if (mysqli_query($conexion, $sql)) {
    echo "Modificado correctamente";
    echo "<a href= pagina_modificar.php> Volver al menu para modificar </a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
    

?>