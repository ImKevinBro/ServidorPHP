<?php
//conexion a la base de datos    
$host ="localhost";
$usuario = "root";
$password = "";
$basededatos = "registros";

$conexion = new mysqli($host, $usuario, $password, $basededatos);

if ($conexion->connect_error) 
{
    die("La conexion fallo: " . $conexion->connect_error);
}
else
{
    echo "Conexion exitosa";
}

//insertar registros

if (isset($_POST['Registrarse']))
{
if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['contrasena']))
{
   echo "Todos los campos son obligatorios";
}
else
{
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $contrasena = $_POST['contrasena'];
   $sql = $conexion->query("INSERT INTO usuarios ('id_usuario',''nombre', 'apellido', 'contrasena') VALUES ('null',''$nombre', '$apellido', '$contrasena')");

   if ($sql==1)
   {
       echo "Registro exitoso";
   }
   else
   {
       echo "Error al registrar";
   }
}         
}

?>