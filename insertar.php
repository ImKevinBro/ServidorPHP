<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$consulta = "INSERT INTO registros (nombre, apellido, correo, contrasena) VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";

$resultado = $conexion->query($consulta);

if($resultado)
{
    echo "Registro exitoso";
    header("Location: bienvenido.php");             
}
else
{
    echo "Error al registrar";
}
?>
